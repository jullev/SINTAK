<?php
defined("BASEPATH") or die("No Direct Access Allowed");

Class Mahasiswa extends CI_controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->model('Prodi_model','prodi_model');
        $this->load->model('Role_model');
        $this->icon = "fa-user";
    }

    function index(){
        $param['pageInfo'] = "Data Dosen";
        $param['data_mahasiswa'] = $this->Mahasiswa_model->getAll()->result();
        $param['prodi'] = $this->prodi_model->getAll()->result();
		$this->template->load("common/template", "pages/mahasiswa/list_mahasiswa", $param);
    }

    public function filter()
    {
        // echo $_GET['id_prodi']." ". $_GET['tahun'];
        if($_GET['id_prodi']=="" && $_GET['tahun']==""){
            $mhs = $this->Mahasiswa_model->getAll()->result();
            // echo "asd";
        }
        else{
            // echo "qwe";
            $mhs = $this->Mahasiswa_model->filter()->result();
        }
        $no = 1;
        $html = "";
        foreach($mhs as $i){
            $dropdown['link'] = array(
                "Edit" => base_url().'Mahasiswa/edit/'.$i->NIM,
                "Delete" => base_url().'Mahasiswa/delete/'.$i->NIM
            );
            $html .= "<tr>
            <td>". $no++ ."</td>
            <td>". $i->NIM ."</td>
            <td>". $i->NAMA ."</td>
            <td>". $i->email ."</td>
            <td>". $i->Alamat ."</td>
            <td>". $i->Tahun_masuk ."</td>
            <td>". $i->Nama_prodi ."</td>
            <td>". $i->tanggallahir ."</td>
            <td class=\"text-center\">
                <div class=\"dropdown dropdown-link\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                    Option
                </button>
                <div class=\"dropdown-menu\">
                    <a href='".base_url()."Mahasiswa/edit/$i->NIM' class='dropdown-item'>Edit</a>
                    <a href='".base_url()."Mahasiswa/resetpassword/$i->NIM' class='dropdown-item'>Reset Password</a>
                    <a href='".base_url()."Mahasiswa/delete/$i->NIM' class='dropdown-item'>Hapus</a>
                </div>
            </div>
            </td>";
        }
        echo $html;
    }

    function add(){
        $param['pageInfo'] = "Input Mahasiswa";
        $param['prodi'] = $this->prodi_model->getAll()->result();
		$this->template->load("common/template", "pages/mahasiswa/tambah_mahasiswa", $param);
    }

    function add_action(){
        //Form Validasi
        $config = array(
            array(
                'field' => 'NIM',
                'label' => 'NIM',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'NAMA',
                'label' => 'NAMA',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[mahasiswa.email]',
                "errors" => [
                    'required' => '%s Harus Diisi.',
                    'valid_email' => '%s Email tidak valid.',
                    'is_unique' => '%s Email telah terdaftar.',
                ],
            ),
            array(
                'field' => 'Alamat',
                'label' => 'Alamat',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'tahunmasuk',
                'label' => 'Tahun masuk',
                'rules' => 'required|integer',
                "errors" => [
                    'required' => '%s Harus Diisi',
                    'integer' => '%s Harus Berformat Tahun, Contoh (2012)'
                ],
            ),
            array(
                'field' => 'tanggallahir',
                'label' => 'Tanggal Lahir',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'idProdi',
                'label' => 'Prodi',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
        );
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == TRUE){ //Jika validasi Form Berhasil
            $data = array(
                'NIM' => $this->input->post('NIM'),
                'NAMA' => $this->input->post('NAMA'),
                'email' => $this->input->post('email'),
                'Alamat' => $this->input->post('Alamat'),
                'Tahun_masuk' => $this->input->post('tahunmasuk'),
                'Prodi_idProdi' => $this->input->post('idProdi'),
                'tanggallahir' => $this->input->post('tanggallahir'),
                'password' => password_hash($this->input->post('tanggallahir'),PASSWORD_DEFAULT)
                // 'password' => $this->input->post('tanggallahir')
            );
            if($this->Mahasiswa_model->save($data)){
                //Flash Message Sukses
                $this->session->set_flashdata("input_validation","<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Mahasiswa Berhasil Disimpan</div>");
            }else{
                //Flash Message Gagal
                $this->session->set_flashdata("input_validation","<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Mahasiswa Gagal Disimpan </div>");
            }
        }else{ //Jika Validasi Form Gagal
            $error_field = new stdClass();
            $error_field->NIM = form_error('NIM');
            $error_field->NAMA = form_error('NAMA');
            $error_field->email = form_error('email');
            $error_field->Alamat = form_error('Alamat');
            $error_field->tahunmasuk = form_error('tahunmasuk');
            $error_field->idProdi = form_error('idProdi');
            $error_field->tanggallahir = form_error('tanggallahir');
            $this->session->set_flashdata("error_field",$error_field);
        }
        
        redirect(base_url().'Mahasiswa/add');
    }

    function edit($id = null){
        if (!isset($id)) show_404();

        $param['pageInfo'] = "Edit Mahasiswa";
        $param['data_mahasiswa'] = $this->Mahasiswa_model->getById($id)->result();
        $param['prodi'] = $this->prodi_model->getAll()->result();
		$this->template->load("common/template", "pages/mahasiswa/edit_mahasiswa", $param);
    }

    function update_action(){
        //Form Validasi
        $config = array(
            array(
                'field' => 'NIM',
                'label' => 'NIM',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'NAMA',
                'label' => 'NAMA',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email',
                "errors" => [
                    'required' => '%s Harus Diisi.',
                    'valid_email' => '%s Email tidak valid.',
                ],
            ),
            array(
                'field' => 'Alamat',
                'label' => 'Alamat',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'tahunmasuk',
                'label' => 'Tahun masuk',
                'rules' => 'required|integer',
                "errors" => [
                    'required' => '%s Harus Diisi',
                    'integer' => '%s Harus Berformat Tahun, Contoh (2012)'
                ],
            ),
            array(
                'field' => 'tanggallahir',
                'label' => 'Tanggal Lahir',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'idProdi',
                'label' => 'Prodi',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
        );
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == TRUE){ //Jika validasi Form Berhasil
            $id = $this->input->post('id_');
            $data = array(
                'NIM' => $this->input->post('NIM'),
                'NAMA' => $this->input->post('NAMA'),
                'email' => $this->input->post('email'),
                'Alamat' => $this->input->post('Alamat'),
                'Tahun_masuk' => $this->input->post('tahunmasuk'),
                'Prodi_idProdi' => $this->input->post('idProdi'),
                'tanggallahir' => $this->input->post('tanggallahir'),
                'password' => password_hash($this->input->post('tanggallahir'),PASSWORD_DEFAULT)
            );
            if($this->Mahasiswa_model->update($id, $data)){
                //Flash Message Sukses
                $this->session->set_flashdata("input_validation","<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Mahasiswa Berhasil Diubah</div>");
            }else{
                //Flash Message Gagal
                $this->session->set_flashdata("input_validation","<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Mahasiswa Gagal Diubah </div>");
            }
        }else{ //Jika Validasi Form Gagal
            $error_field = new stdClass();
            $error_field->NIM = form_error('NIM');
            $error_field->NAMA = form_error('NAMA');
            $error_field->email = form_error('email');
            $error_field->Alamat = form_error('Alamat');
            $error_field->tahunmasuk = form_error('tahunmasuk');
            $error_field->idProdi = form_error('idProdi');
            $error_field->tanggallahir = form_error('tanggallahir');
            $this->session->set_flashdata("error_field",$error_field);
        }
        redirect(base_url().'Mahasiswa/edit/'.$this->input->post('NIM'));
    }

    function delete($id = null){
        if (!isset($id)) show_404();
        
        if($this->Mahasiswa_model->delete($id)){
            //Flash Message Sukses
            $this->session->set_flashdata("delete_validation","<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Mahasiswa Berhasil Dihapus</div>");
        }else{
            //Flash Message Gagal
            $this->session->set_flashdata("delete_validation","<div class='alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Mahasiswa Gagal Dihapus </div>");
        }
        redirect(base_url().'Mahasiswa');
    }
    public function import()
    {   
        $param['prodi'] = $this->prodi_model->getAll()->result();
        $param['pageInfo'] = "Import Mahasiswa";
		$this->template->load("common/template", "pages/mahasiswa/import-mahasiswa", $param);
    }
    public function act_import()
    {
        $path = 'assets/uploads/';
        require_once APPPATH . "/third_party/PHPExcel.php";
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'csv';
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
        if(empty($error)){
            if(!empty($data['upload_data']['file_name'])) {
              $import_xls_file = $data['upload_data']['file_name'];
            } 
            else {
              $import_xls_file = 0;
            }
          $inputFileName = $path . $import_xls_file;
          try {
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
            $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
            $flag = true;
            $i=0;
            foreach ($allDataInSheet as $value) {
              if($flag){
                $flag =false;
                continue;
              }
              $inserdata[$i]['NIM'] = $value['A'];
              $inserdata[$i]['NAMA'] = $value['B'];
              $inserdata[$i]['email'] = $value['C'];
              $inserdata[$i]['Alamat'] = $value['D'];
              $inserdata[$i]['Tahun_masuk'] = $value['E'];
              $inserdata[$i]['Prodi_idProdi'] = $value['F'];
              $date = str_replace('/','-',$value['G']);
              $newDate = date("Y-m-d", strtotime($date));
              $inserdata[$i]['tanggallahir'] = $newDate;
              $i++;
            }               
           $result =  $this->mahasiswa_model->saveImport($inserdata);
            if($result){
                redirect(base_url()."login/generate_pass/mahasiswa");
              }else{
                echo "ERROR !";
              }            
            echo "<pre>";
            print_r($inserdata);

            } 
            catch (Exception $e) {
                die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                    . '": ' .$e->getMessage());
            }
        }
        else{
            echo $error['error'];
        }
    }

    public function resetPassword($nim)
    {
        $mahasiswa = $this->Mahasiswa_model->getById($nim)->result();
        $tglLahir = $mahasiswa[0]->tanggallahir;
        $this->Mahasiswa_model->update($nim, ['password' => password_hash($tglLahir,PASSWORD_DEFAULT)]);

        $this->session->set_flashdata("input_validation","<div class='alert alert-success'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Berhasil reset password.</div>");

        redirect(base_url().'Mahasiswa');
    }

}