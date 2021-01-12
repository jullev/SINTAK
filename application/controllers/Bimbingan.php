<?php
defined("BASEPATH") or die("No Direct Access Allowed");

class Bimbingan extends CI_controller
{
    function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata("id_login")) {
            redirect('login');
        }
        $this->load->model('Bimbingan_model');
        $this->load->model('Dosen_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('TugasAkhir_Model');
        $this->load->model('Topik_model');
        $this->load->model('Status_model');
        $this->icon = "fa-book";
        $this->load->helper(array('form', 'url'));
    }
    function index(){

        $param['pageInfo'] = "List Tugas Akhir";
        if ($_SESSION['global_role'] == 'Mahasiswa') {
            $idTA = $this->common->getData("id",'tugas_akhir','',['tgl_ACC !=' => NULL],'')->result_array();
            $param['pageInfo'] = "Bimbingan - " . $_SESSION['username'] . ' (' . $_SESSION['id_login'] . ')';
            $param['TA_id'] = count($idTA)==0 ? 0 : $idTA[0]['id'];
            $param['data_bimbingan'] = $this->common->getData('b.*','td_bimbingan b',['tugas_akhir ta','b.Tugas_akhir_id = ta.id'],['ta.Mahasiswa_NIM' => $_SESSION['id_login']],['id_bimbingan','desc'])->result();
            $this->template->load("common/template", "pages/Bimbingan/mahasiswa_bimbingan", $param);
        } 
        else if(isDospem()){
            $param['bimbingan'] = $this->common->getData('m.NAMA,m.NIM,b.id_bimbingan,Tanggal_bimbingan,b.revisi,b.Deskripsi,Data_dukung,Tanggal_bimbingan','td_bimbingan b',['tugas_akhir ta','b.Tugas_akhir_id = ta.id','mahasiswa m','ta.Mahasiswa_NIM = m.NIM'],['Dosen_NIP' => $_SESSION['id_login'],'revisi' => NULL],'')->result();
            $this->template->load("common/template", "pages/bimbingan/bimbingan", $param);  
        }
        else{
            show_404();
        }
    }

    function TugasAkhir($id)
    {
        // //GET Nama Mahasiswa
        if ($_SESSION['global_role'] == 'Mahasiswa') {
            $filter = ["tugas_akhir.Mahasiswa_NIM" => $_SESSION['id_login']];
        } else {
            $filter = "";
        }
        $data_mhs = $this->Bimbingan_model->getNamaMahasiswaByTA_Id($id, $filter)->row_array();
        if (isset($data_mhs)) {
            $param['pageInfo'] = "Bimbingan - " . $data_mhs['NAMA'] . ' (' . $data_mhs['NIM'] . ')';
            // $param['pageInfo'] = "Bimbingan - ";
            $param['TA_id'] = $id;
            $param['data_bimbingan'] = $this->Bimbingan_model->getByTugasAkhirId($id)->result();
            $this->template->load("common/template", "pages/Bimbingan/mahasiswa_bimbingan", $param);
        } else {
            show_404();
        }
    }

    function add_action()
    {
        $post = $this->input->post();
        //Get ID Tugas Akhir
        $TA_id = $this->input->post('TA_id');
        $cekIdTA = $this->TugasAkhir_Model->getAll(['id' => $TA_id, 'Mahasiswa_NIM' => $_SESSION['id_login']])->num_rows();
        if ($cekIdTA == 1) {
            //Upload Configuration

            // $config['upload_path'] = 'uploaded_file/'; //path folder
            // $config['allowed_types'] = 'jpg|png|jpeg|pdf|xls|xlsx|doc|docx|txt'; //type yang dapat diakses bisa anda sesuaikan
            // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya 
            // $this->load->library('upload', $config);

            // -----------! karena library upload CI nya tidak bisa , jadi ssaya ubah ke manual !--------------
            $dir_file = realpath(APPPATH . '../assets/berkas/bimbingan/');
            $ori_name = pathinfo($_FILES['data_dukung']['name'], PATHINFO_FILENAME);
            $name_file = $_FILES['data_dukung']['name'];
            $extension_file = substr($name_file, strpos($name_file, '.'), strlen($name_file) - 1);
            $nm_file_bimbingan =  $TA_id . '_' . $ori_name . '_' . $post['Tanggal_bimbingan'] .'_'. time() . $extension_file;
            $tmp_file = $_FILES['data_dukung']['tmp_name'];

            $up_rab = move_uploaded_file($tmp_file, $dir_file . '/' . $nm_file_bimbingan);

            //Config
            $config = array(
                array(
                    'field' => 'Tanggal_bimbingan',
                    'label' => 'Tanggal Bimbingan',
                    'rules' => 'required',
                    "errors" => [
                        'required' => '%s Harus Dipilih',
                    ],
                ),
                array(
                    'field' => 'deskripsi',
                    'label' => 'Deskripsi',
                    'rules' => 'required',
                    "errors" => [
                        'required' => '%s Harus Dipilih',
                    ],
                )

            );
            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() == TRUE) { //Jika validasi Form Berhasil
/*                 $data = array(
                    'Tugas_akhir_id' => $TA_id,
                    'Deskripsi' => $this->input->post('deskripsi'),
                    'Tanggal_bimbingan' => $this->input->post('Tanggal_bimbingan'),
                );

 */                // Jika Ada File Yang diupload
                // if($this->upload->do_upload('data_dukung')){
                // $image_data = $this->upload->data();
                $data = array(
                    'Tugas_akhir_id' => $TA_id,
                    'Deskripsi' => $this->input->post('deskripsi'),
                    'Data_Dukung' => $nm_file_bimbingan,
                    'Tanggal_bimbingan' => $this->input->post('Tanggal_bimbingan'),
                );
                // }

                if ($this->Bimbingan_model->save($data)) {
                    //Flash Message Sukses
                    $this->session->set_flashdata("input_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Pencatatan Bimbingan Berhasil</b></div>");
                    $getData = $this->common->getData('d.telegram_id,m.NAMA,Judul_TA,ta.id_status','tugas_akhir ta',['dosen d','ta.Dosen_NIP = d.NIP','mahasiswa m','ta.Mahasiswa_NIM = m.NIM'],['ta.id' => $TA_id],'')->result_array()[0];
                    $countBimbingan = $this->common->getData('id_bimbingan','td_bimbingan','',['Tugas_akhir_id' => $TA_id],'')->num_rows();
                    if($countBimbingan==1){
                        $this->common->update('tugas_akhir',['id_status' => 4],['id' => $TA_id]);
                    } else if($getData['id_status']==6){
                        $this->common->update('tugas_akhir',['id_status' => 7],['id' => $TA_id]);
                    }
                    $chatId = $getData['telegram_id'];
                    if($chatId!=0){
                        $textCount = $countBimbingan==1 ? 'pertama' : 'ke-'.$countBimbingan;
                        $send = urlencode($getData['NAMA']." telah mengupload bimbingan $textCount.\n<b>Judul Tugas Akhir :</b> ".$getData['Judul_TA']);
                        sendTeleDosen($chatId,$send);
                    }
                    
                } else {
                    //Flash Message Gagal
                    $this->session->set_flashdata("input_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Pencatatan Bimbingan Gagal</b></div>");
                }
            }

            redirect(base_url() . 'Bimbingan/TugasAkhir/' . $TA_id);
        } else {
            show_404();
        }
    }

    public function edit()
    {
        $data = $this->Bimbingan_model->getById($_GET['id_bimbingan'])->result_array()[0];
        header("content-type:json/application");
        echo json_encode($data);
    }
    function revisi_action()
    {
        $id_bimbingan = $this->input->post('Bimbingan_ID');
        $cekIdBimbingan = $this->Bimbingan_model->getById($id_bimbingan, $_SESSION['id_login'])->num_rows();
        if ($cekIdBimbingan == 1) {
            //GET ID Bimbingan
            //Variabel Untuk Menampung beberapa isi record berdasarkan ID Bimbingan
            $Bimbingan = $this->Bimbingan_model->getById($id_bimbingan)->row_array();
            //Get ID Tugas Akhir : Digunakan Untuk Redirect
            $TA_id = $Bimbingan['Tugas_akhir_id'];

            //Config
            $config = array(
                array(
                    'field' => 'revisi_dosen',
                    'label' => 'Revisi',
                    'rules' => 'required',
                    "errors" => [
                        'required' => '%s Harus Diisi',
                    ],
                )
            );
            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() == TRUE) { //Jika validasi Form Berhasil
                $data = array(
                    'revisi' => $this->input->post('revisi_dosen'),
                );

                if ($this->Bimbingan_model->update($id_bimbingan, $data)) {
                    //Flash Message Sukses
                    $this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Bimbingan Berhasil Diupdate</b></div>");
                    $getData = $this->common->getData('m.telegram_id,d.NAMA','tugas_akhir ta',['dosen d','ta.Dosen_NIP = d.NIP','mahasiswa m','ta.Mahasiswa_NIM = m.NIM'],['ta.id' => $TA_id],'')->result_array()[0];
                    $chatId = $getData['telegram_id'];
                    if($chatId!=0){
                        $send = urlencode("Ada revisi Bimbingan dari Dosen ".$getData['NAMA'].".\nIsi Revisinya : \n".$_POST['revisi_dosen']);
                        sendTele($chatId,$send);
                    }
                } else {
                    //Flash Message Gagal
                    $this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Bimbingan Gagal Diupdate</b></div>");
                }
            }

            redirect(base_url() . 'Bimbingan/TugasAkhir/' . $TA_id);
        } else {
            show_404();
        }
    }
    function update_action()
    {
        $post = $this->input->post();
        $id_bimbingan = $this->input->post('Bimbingan_ID');
        $cekIdBimbingan = $this->Bimbingan_model->getById($id_bimbingan, $_SESSION['id_login'])->num_rows();
        if ($cekIdBimbingan == 1) {
            // $config['upload_path'] = 'uploaded_file/'; //path folder
            // $config['allowed_types'] = 'jpg|png|jpeg|pdf|xls|xlsx|doc|docx|txt'; //type yang dapat diakses bisa anda sesuaikan
            // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya 
            // $this->load->library('upload', $config);

            //GET ID Bimbingan
            //Variabel Untuk Menampung beberapa isi record berdasarkan ID Bimbingan
            $Bimbingan = $this->Bimbingan_model->getById($id_bimbingan)->row_array();
            //Get ID Tugas Akhir : Digunakan Untuk Redirect
            $TA_id = $Bimbingan['Tugas_akhir_id'];

            //Config
            $config = array(
                array(
                    'field' => 'e_Tanggal_bimbingan',
                    'label' => 'Tanggal Bimbingan',
                    'rules' => 'required',
                    "errors" => [
                        'required' => '%s Harus Dipilih',
                    ],
                ),
                array(
                    'field' => 'e_deskripsi',
                    'label' => 'Deskripsi',
                    'rules' => 'required',
                    "errors" => [
                        'required' => '%s Harus Dipilih',
                    ],
                )

            );
            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() == TRUE) { //Jika validasi Form Berhasil
                $data = array(
                    'Tanggal_bimbingan' => $this->input->post('e_Tanggal_bimbingan'),
                    'Deskripsi' => $this->input->post('e_deskripsi')
                );
                
                // Jika Ada File Yang diupload //Ganti File
                if (file_exists($_FILES['e_data_dukung']['tmp_name']) || is_uploaded_file($_FILES['e_data_dukung']['tmp_name'])) {
                    $dir_file = realpath(APPPATH . '../assets/berkas/bimbingan/');
                    $ori_name = pathinfo($_FILES['e_data_dukung']['name'], PATHINFO_FILENAME);
                    $name_file = $_FILES['e_data_dukung']['name'];
                    $extension_file = substr($name_file, strpos($name_file, '.'), strlen($name_file) - 1);
                    $nm_file_bimbingan =  $TA_id . '_' . $ori_name . '_' . $post['e_Tanggal_bimbingan'] .'_'. time() . $extension_file;
                    $tmp_file = $_FILES['e_data_dukung']['tmp_name'];
                  
                    $up_rab = move_uploaded_file($tmp_file, $dir_file . '/' . $nm_file_bimbingan);

                    //Delete File Lama
                    $data_dukung = $Bimbingan['Data_Dukung'];
                    unlink("assets/berkas/bimbingan/" . $data_dukung);

                    //Input Ke Database
                    $data = array(
                        'Tanggal_bimbingan' => $this->input->post('e_Tanggal_bimbingan'),
                        'Deskripsi' => $this->input->post('e_deskripsi'),
                        'Data_Dukung' => $nm_file_bimbingan

                    );
                }
                if ($this->Bimbingan_model->update($id_bimbingan, $data)) {
                    //Flash Message Sukses
                    $this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Bimbingan Berhasil Diupdate</div>");
                } else {
                    //Flash Message Gagal
                    $this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Bimbingan Gagal Diupdate</div>");
                }
            }

            redirect(base_url() . 'Bimbingan/TugasAkhir/' . $TA_id);
        } else {
            show_404();
        }
    }

    function delete($id = null)
    {
        $cekIdBimbingan = $this->Bimbingan_model->getById($id, $_SESSION['id_login'])->num_rows();
        if ($cekIdBimbingan == 1) {

            //Mendapatkan TA Id Untuk Digunakan Sebagai Redirect & Data Document Untuk Dihapus
            $data_bimbingan = $this->Bimbingan_model->getById($id)->row_array();
            $TA_id = $data_bimbingan['Tugas_akhir_id'];
            $document = $data_bimbingan['Data_Dukung'];

            //Delete Document
            unlink("assets/berkas/bimbingan/" . $document);

            if ($this->Bimbingan_model->delete($id)) {
                //Flash Message Sukses
                $this->session->set_flashdata("delete_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Bimbingan Berhasil Dihapus</b></div>");
            } else {
                //Flash Message Gagal
                $this->session->set_flashdata("delete_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Bimbingan Gagal Dihapus</b> </div>");
            }
            redirect(base_url() . '/bimbingan/TugasAkhir/' . $TA_id);
        } else {
            show_404();
        }
    }
    public function acc($id='')
    {
        if(isDospem()){
            $cekIdBimbingan = $this->Bimbingan_model->getById($id)->num_rows();
            if($cekIdBimbingan==1){
                if($this->common->update('td_bimbingan',['revisi' => '-'],['id_bimbingan' => $id])){
                    $this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Berhasil ACC Revisi</b></div>");

                    $getIdTA = $this->common->getData('Tugas_akhir_id','td_bimbingan','',['id_bimbingan' => $id],'')->result_array()[0];
                    $chatId = $this->common->getChatId('mahasiswa',['id' => $getIdTA['Tugas_akhir_id']],true);
                    if($chatId!=0){
                        $send = urlencode("<b>Bimbingan telah di ACC</b>\n");
                        sendTele($chatId,$send);
                    }
                }
                else{
                    $this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Gagal ACC Revisi</b></div>");
                }
               echo "<script>window.history.back()</script>";
            }
            else{
                show_404();
            }
        }
        else{
            show_404();
        }
    }
}
