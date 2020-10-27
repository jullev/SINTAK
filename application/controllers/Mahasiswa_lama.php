<?php
defined("BASEPATH") or die("No Direct Access Allowed");
include APPPATH.'third_party/ssp.class.php';

Class Mahasiswa extends CI_controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->model('prodi_model');
        $this->icon = "fa-user";
    }

    function index(){
        // echo "asdasd";
        $param['pageInfo'] = "Data Mahasiswa";
        $param['prodi'] = $this->prodi_model->getAll()->result();
        $param['data_mahasiswa'] = isset($_GET['id_prodi']) && isset($_GET['tahun']) && ($_GET['id_prodi']!="" || $_GET['tahun']!="") ? $this->mahasiswa_model->filter()->result() : $this->mahasiswa_model->getAll()->result();
		$this->template->load("common/template", "pages/mahasiswa/list_mahasiswa", $param);
    }

    function getAllData(){
        // DB table to use
        $table = <<<EOT
                (
                    SELECT mahasiswa.*, Prodi.Nama_prodi FROM mahasiswa JOIN prodi ON mahasiswa.prodi_idProdi = prodi.idProdi
                ) temp
                EOT;

        // Table's primary key
        $primaryKey = 'NIM';

        $columns = array(
            array('db' => 'NIM', 'dt' => 0),
            array('db' => 'NAMA', 'dt' => 1),
            array('db' => 'Alamat', 'dt' => 2),
            array('db' => 'Tahun_masuk', 'dt' => 3),
            array('db' => 'Nama_prodi', 'dt' => 4),
            array('db' => 'tanggallahir', 'dt' => 5),
        );

        $database_ = array(
        	'user' => getenv('DB_USERNAME'),
        	'pass' => getenv('DB_PASSWORD'),
        	'db'   => getenv('DB_DATABASE'),
        	'host' => getenv('DB_HOST')
        );

        // koneksiDatatable ambil dari custom helper
        echo json_encode(
            SSP::simple($_GET, $database_, $table, $primaryKey, $columns)
        );
        // $data = array($database_, $table, $primaryKey, $columns);
        // echo json_encode($data);
    }

    function getFilteredData(){
        $id_prodi = $this->input->post('id_prodi');
        $tahun = $this->input->post('tahun');
        // DB table to use SSP Serverside Datatable
        //Parameter Default - Jika Parameter Yang Dipilih Menampilkan Semua Prodi dan Tahun
        $table = <<<EOT
                (
                    SELECT mahasiswa.*, Prodi.Nama_prodi FROM mahasiswa JOIN prodi ON mahasiswa.prodi_idProdi = prodi.idProdi
                ) temp
                EOT;

        if($id_prodi<>0 && $tahun<>0){ //Jika Parameter Yang dipilih menampilkan satu prodi dan satu tahun
            $table = <<<EOT
                (
                    SELECT mahasiswa.*, Prodi.Nama_prodi FROM mahasiswa JOIN prodi ON mahasiswa.prodi_idProdi = prodi.idProdi WHERE mahasiswa.Prodi_idProdi='$id_prodi' AND mahasiswa.Tahun_masuk='$tahun'
                ) temp
                EOT;
        }else if($id_prodi == 0 && $tahun > 0){ //Jika Parameter Yang dipilih menampilkan Seluruh prodi dan satu tahun
            $table = <<<EOT
                (
                    SELECT mahasiswa.*, Prodi.Nama_prodi FROM mahasiswa JOIN prodi ON mahasiswa.prodi_idProdi = prodi.idProdi WHERE mahasiswa.Tahun_masuk='$tahun'
                ) temp
                EOT;
        }else if($id_prodi > 0 && $tahun == 0){ //Jika Parameter Yang dipilih menampilkan Satu prodi dan Seluruh tahun
            $table = <<<EOT
                (
                    SELECT mahasiswa.*, Prodi.Nama_prodi FROM mahasiswa JOIN prodi ON mahasiswa.prodi_idProdi = prodi.idProdi WHERE mahasiswa.Prodi_idProdi='$id_prodi'
                ) temp
                EOT;
        }
        

        // Table's primary key
        $primaryKey = 'NIM';

        $columns = array(
            array('db' => 'NIM', 'dt' => 0),
            array('db' => 'NAMA', 'dt' => 1),
            array('db' => 'Alamat', 'dt' => 2),
            array('db' => 'Tahun_masuk', 'dt' => 3),
            array('db' => 'Nama_prodi', 'dt' => 4),
            array('db' => 'tanggallahir', 'dt' => 5),
        );

        $database_ = array(
        	'user' => getenv('DB_USERNAME'),
        	'pass' => getenv('DB_PASSWORD'),
        	'db'   => getenv('DB_DATABASE'),
        	'host' => getenv('DB_HOST')
        );

        // koneksiDatatable ambil dari custom helper
        echo json_encode(
            SSP::simple($_GET, $database_, $table, $primaryKey, $columns)
        );
    }


   public function filter()
    {
        echo "asdasd";
        // if(isset($_GET['id_prodi']) && isset($_GET['tahun'])){
        //     $mhs = $this->mahasiswa_model->getAll()->result_array();
        // }
        // else{
        //     $mhs = $this->mahasiswa_model->filter()->result_array();
        // }
        // header("content-type:json/application");
        // echo json_encode($mhs);
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
                'Alamat' => $this->input->post('Alamat'),
                'Tahun_masuk' => $this->input->post('tahunmasuk'),
                'Prodi_idProdi' => $this->input->post('idProdi'),
                'tanggallahir' => $this->input->post('tanggallahir'),
                'password' => password_hash($this->input->post('tanggallahir'),PASSWORD_DEFAULT)
            );
            if($this->mahasiswa_model->save($data)){
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
        $param['data_mahasiswa'] = $this->mahasiswa_model->getById($id)->result();
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
                'Alamat' => $this->input->post('Alamat'),
                'Tahun_masuk' => $this->input->post('tahunmasuk'),
                'Prodi_idProdi' => $this->input->post('idProdi'),
                'tanggallahir' => $this->input->post('tanggallahir'),
                'password' => password_hash($this->input->post('tanggallahir'),PASSWORD_DEFAULT)
            );
            if($this->mahasiswa_model->update($id, $data)){
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
        
        if($this->mahasiswa_model->delete($id)){
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
              $inserdata[$i]['Alamat'] = $value['C'];
              $inserdata[$i]['Tahun_masuk'] = $value['D'];
              $inserdata[$i]['Prodi_idProdi'] = $value['E'];
              $date = str_replace('/','-',$value['F']);
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
}