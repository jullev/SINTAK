<?php
defined("BASEPATH") or die("No Direct Access Allowed");

class Tugas_akhir extends CI_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('TugasAkhir_Model');
        $this->load->model('Topik_model');
        $this->load->model('Status_model');
        $this->icon = "fa-book";
    }

    function index()
    {
        $param['pageInfo'] = "List Tugas Akhir";
        if ($_SESSION['global_role'] == 'Mahasiswa') {
            $filter = ['Mahasiswa_NIM' => $_SESSION['id_login']];
        } else if (isDospem()) {
            $filter = "Dosen_NIP = '$_SESSION[id_login]'";
            if($_SESSION['global_role']=='Koordinator TA'){
                $filter.=" or Prodi_idProdi = '$_SESSION[id_prodi]'";
            }
        } else {
            $filter = ['Dosen_NIP' => $_SESSION['id_login']];
        }
        $param['cekAcc'] = $this->common->getData('id','tugas_akhir','',['tgl_ACC !=' => NULL],'')->num_rows();
        $param['data_tugas_akhir'] = $this->TugasAkhir_Model->getAll($filter)->result();
        $param['Topik'] = $this->Topik_model->getAll()->result();
        $param['dosen'] = $this->Dosen_model->getAll()->result();
        $param['status'] = $this->Status_model->getAllDataForTugasAkhir()->result();
        $this->template->load("common/template", "pages/Tugas_akhir/list_tugas_akhir", $param);
    }

    public function list_pengajuan_judul()
    {
        $param['pageInfo'] = "List Pengajuan Judul";
        // print_r($_SESSION);
        // $filter = [['Dosen_NIP' => $_SESSION['id_login']]];
        $filter = "Dosen_NIP = '".$_SESSION['id_login']."'";
        if ($_SESSION['global_role'] == 'Koordinator TA' || $_SESSION['global_role'] == 'KPS') {
            $filter.=" or Prodi_idProdi = '".$_SESSION['id_prodi']."' ";
        }
        $param['data_tugas_akhir'] = $this->TugasAkhir_Model->getPengajuanJudul($filter)->result();
        $param['Topik'] = $this->Topik_model->getAll()->result();
        $param['dosen'] = $this->Dosen_model->getAll()->result();
        $param['status'] = $this->Status_model->getAllDataForPengajuanJudul()->result();
        $this->template->load("common/template", "pages/Tugas_akhir/list_pengajuan_judul", $param);
    }
    public function list_bimbingan()
    {
        $param['pageInfo'] = "List Bimbingan";

        // $filter = [['Dosen_NIP' => $_SESSION['id_login']]];
        if ($_SESSION['global_role'] == 'Koordinator TA' || $_SESSION['global_role'] == 'KPS') {
            $filter = ['Prodi_idProdi' => $_SESSION['id_prodi']];
        } else {
            $filter = ['Dosen_NIP' => $_SESSION['id_login']];
        }
        $param['data_tugas_akhir'] = $this->TugasAkhir_Model->getBimbingan($filter)->result();
        $param['Topik'] = $this->Topik_model->getAll()->result();
        $param['dosen'] = $this->Dosen_model->getAll()->result();
        $param['status'] = $this->Status_model->getAllDataForPengajuanJudul()->result();
        $this->template->load("common/template", "pages/Tugas_akhir/list_pengajuan_judul", $param);
    }
    function add()
    {
        $param['pageInfo'] = "Pendaftaran Tugas Akhir";
        $param['role'] = $this->TugasAkhir_Model->getAll()->result();
        $param['Topik'] = $this->Topik_model->getAll()->result();
        $param['dosen'] = $this->Dosen_model->getAll()->result();
        $param['mahasiswa'] = $this->Mahasiswa_model->getAll()->result();
        $this->template->load("common/template", "pages/Tugas_akhir/daftar_tugas_akhir", $param);
    }

    function add_action()
    {
        $config = array(
            array(
                'field' => 'Judul_TA',
                'label' => 'Judul Tugas Akhir',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'Deskripsi',
                'label' => 'Deskripsi',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'NIP',
                'label' => 'Dosen Pembimbing',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'id_topik',
                'label' => 'Topik',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),

        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == TRUE) { //Jika validasi Form Berhasil
            $tgl = date("Y-m-d H:i:s");
            $data = array(
                'Judul_TA' => $this->input->post('Judul_TA'),
                'Deskripsi' => $this->input->post('Deskripsi'),
                'abstract' => $this->input->post('Abstract'),
                'keywords' => $this->input->post('keywords'),
                'Dosen_NIP' => $this->input->post('NIP'),
                'Mahasiswa_NIM' => $this->session->userdata("id_login"),
                'id_status' => 1,
                'id_topik' => $this->input->post('id_topik'),
                'tgl_pengajuan' => $tgl
            );
            // var_dump($data);
            if ($this->TugasAkhir_Model->save($data)) {
                //Flash Message Sukses
                $this->session->set_flashdata("input_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Pendaftaran Judul Tugas Akhir Berhasil</div>");
            } else {
                //Flash Message Gagal
                $this->session->set_flashdata("input_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Pendaftaran Judul Tugas Akhir Gagal</div>");
            }
        } else {
            $error_field = new stdClass();
            $error_field->Judul_TA = form_error('Judul_TA');
            $error_field->Deskripsi = form_error('Deskripsi');
            $error_field->NIP = form_error('NIP');
            $error_field->id_topik = form_error('id_topik');
            $this->session->set_flashdata("error_field", $error_field);
        }
        redirect('Tugas_akhir');
    }
    public function testTele()
    {
        $msg = urlencode("*PENGAJUAN JUDUL TUGAS AKHIR.* Nim = E41170244. Nama = David Setya Ainur Hakiki Ramadhan. Judul Tugas Akhir = Analisa analisa");
        $chatId = "1138930287";
        sendTele($chatId,$msg);
    }
    function add_action_admin()
    {
        $config = array(
            array(
                'field' => 'Judul_TA',
                'label' => 'Judul Tugas Akhir',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'Deskripsi',
                'label' => 'Deskripsi',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'NIP',
                'label' => 'Dosen Pembimbing',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'id_topik',
                'label' => 'Topik',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),

        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == TRUE) { //Jika validasi Form Berhasil
            $tgl = date("Y-m-d H:i:s");
            $data = array(
                'Judul_TA' => $this->input->post('Judul_TA'),
                'Deskripsi' => $this->input->post('Deskripsi'),
                'abstract' => $this->input->post('Abstract'),
                'keywords' => $this->input->post('keywords'),
                'Dosen_NIP' => $this->input->post('NIP'),
                'Mahasiswa_NIM' => $this->input->post("id_mahasiswa"),
                'id_status' => 1,
                'id_topik' => $this->input->post('id_topik'),
                'tgl_pengajuan' => $tgl
            );
            // var_dump($data);
            if ($this->TugasAkhir_Model->save($data)) {
                //Flash Message Sukses
                $this->session->set_flashdata("input_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Pendaftaran Judul Tugas Akhir Berhasil</div>");
            } else {
                //Flash Message Gagal
                $this->session->set_flashdata("input_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Pendaftaran Judul Tugas Akhir Gagal</div>");
            }
        } else {
            $error_field = new stdClass();
            $error_field->Judul_TA = form_error('Judul_TA');
            $error_field->Deskripsi = form_error('Deskripsi');
            $error_field->NIP = form_error('NIP');
            $error_field->id_topik = form_error('id_topik');
            $this->session->set_flashdata("error_field", $error_field);
        }

        redirect('Tugas_akhir');
    }


    public function deskripsi()
    {
        $data = $this->TugasAkhir_Model->getDeskripsi($_GET['id_ta'])[0];
        header("content-type:json/application");
        echo json_encode($data);
    }
    public function abstract()
    {
        $data = $this->TugasAkhir_Model->getAbstract($_GET['id_ta'])[0];
        header("content-type:json/application");
        echo json_encode($data);
    }
    public function update_status()
    {
        if ($this->TugasAkhir_Model->update($_GET['id_ta'], ["id_status" => $_GET['id_status']])) {
            echo "success";
        } else {
            echo "error";
        }
    }

    public function getPembimbing()
    {
        $data = $this->TugasAkhir_Model->getPembimbing($_GET['id_ta'])[0];
        header("content-type:json/application");
        echo json_encode($data);
    }

    public function validasi()
    {
        $update = array(
            "Dosen_NIP" => $_POST['Dosen_NIP'],
            'id_status' => $_POST['id_status'],
        );
        if($_POST['id_status']==2){
            $update['tgl_ACC'] = date('Y-m-d');
        }

        if($this->TugasAkhir_Model->update($_POST['id'], $update)){
            $chatId = $this->common->getChatId('mahasiwa',['id' => $_POST['id']],true);
            if($chatId!=0){
                $getStatus = $this->common->getData("status",'status_ta','',['id_status' => $_POST['id_status']],'')->result_array()[0];
                $getDosen = $this->common->getData("NAMA",'dosen','',['NIP' => $_POST['Dosen_NIP']],'')->result_array()[0];
                $send = urlencode("<b>Validasi Tugas Akhir.</b>\nStatus Tugas Akhir Kamu : <b>".$getStatus['status']."</b>\nDosen Pembimbing : <b>".$getDosen['NAMA']."</b>");
                $msg = "Validasi Berhasil";
                sendTele($chatId,$send);
            }
        }
        else{
            $msg = "Validasi Gagal";
        }
        $this->session->set_flashdata('msg', $msg);
        redirect(base_url() . 'Tugas_akhir/list_pengajuan_judul');
    }
}
