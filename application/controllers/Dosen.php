<?php
defined("BASEPATH") or die("No Direct Access Allowed");

Class Dosen extends CI_controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Dosen_model');
        $this->load->model('Role_model');
        $this->icon = "fa-user";
    }

    function index(){
        $param['pageInfo'] = "Data Dosen";
        $param['data_dosen'] = $this->Dosen_model->getAll()->result();
		$this->template->load("common/template", "pages/dosen/list_dosen", $param);
    }

    function add(){
        $param['pageInfo'] = "Input Dosen";
        $param['role'] = $this->Role_model->getAll()->result();
		$this->template->load("common/template", "pages/dosen/tambah_dosen", $param);
    }

    function add_action(){
        //Form Validasi
        $config = array(
            array(
                'field' => 'NIP',
                'label' => 'NIP',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'NIDN',
                'label' => 'NIDN',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'NAMA',
                'label' => 'Nama',
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
                'field' => 'No_hp',
                'label' => 'No. HP',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'idRole',
                'label' => 'Roles',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
        );
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == TRUE){ //Jika validasi Form Berhasil
            $data = array(
                'NIP' => $this->input->post('NIP'),
                'NIDN' => $this->input->post('NIDN'),
                'NAMA' => $this->input->post('NAMA'),
                'Alamat' => $this->input->post('Alamat'),
                'No_hp' => $this->input->post('No_hp'),
                'password' => $this->input->post('NIP'),
                'idRole' => $this->input->post('idRole')
            );
            if($this->Dosen_model->save($data)){
                //Flash Message Sukses
                $this->session->set_flashdata("input_validation","<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Dosen Berhasil Disimpan</div>");
            }else{
                //Flash Message Gagal
                $this->session->set_flashdata("input_validation","<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Dosen Gagal Disimpan </div>");
            }
        }else{//Jika Validasi Form Gagal
            $error_field = new stdClass();
            $error_field->NIP = form_error('NIP');
            $error_field->NIDN = form_error('NIDN');
            $error_field->NAMA = form_error('NAMA');
            $error_field->Alamat = form_error('Alamat');
            $error_field->No_hp = form_error('No_hp');
            $error_field->idRole = form_error('idRole');
            $this->session->set_flashdata("error_field",$error_field);
        }
        
        redirect(base_url().'Dosen/add');
    }

    function edit($id = null){
        if (!isset($id)) show_404();

        $param['pageInfo'] = "Edit Dosen";
        $param['data_dosen'] = $this->Dosen_model->getById($id)->result();
        $param['role'] = $this->Role_model->getAll()->result();
		$this->template->load("common/template", "pages/dosen/edit_dosen", $param);
    }

    function update_action(){
        //Form Validasi
        $config = array(
            array(
                'field' => 'NIP',
                'label' => 'NIP',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'NIDN',
                'label' => 'NIDN',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'NAMA',
                'label' => 'Nama',
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
                'field' => 'No_hp',
                'label' => 'No. HP',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'idRole',
                'label' => 'Roles',
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
                'NIP' => $this->input->post('NIP'),
                'NIDN' => $this->input->post('NIDN'),
                'NAMA' => $this->input->post('NAMA'),
                'Alamat' => $this->input->post('Alamat'),
                'No_hp' => $this->input->post('No_hp'),
                'password' => $this->input->post('NIP'),
                'idRole' => $this->input->post('idRole')
            );
            if($this->Dosen_model->update($id, $data)){
                //Flash Message Sukses
                $this->session->set_flashdata("update_validation","<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Dosen Berhasil Diubah</div>");
            }else{
                //Flash Message Gagal
                $this->session->set_flashdata("update_validation","<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Dosen Gagal Diubah </div>");
            }
        }else{ //Jika Validasi Form Gagal
            $error_field = new stdClass();
            $error_field->NIP = form_error('NIP');
            $error_field->NIDN = form_error('NIDN');
            $error_field->NAMA = form_error('NAMA');
            $error_field->Alamat = form_error('Alamat');
            $error_field->No_hp = form_error('No_hp');
            $error_field->idRole = form_error('idRole');
            $this->session->set_flashdata("error_field",$error_field);
        }
        
        redirect(base_url().'Dosen/edit/'.$this->input->post('NIP'));
    }

    function delete($id = null){
        if (!isset($id)) show_404();
        
        if($this->Dosen_model->delete($id)){
            //Flash Message Sukses
            $this->session->set_flashdata("delete_validation","<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Dosen Berhasil Dihapus</div>");
        }else{
            //Flash Message Gagal
            $this->session->set_flashdata("delete_validation","<div class='alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Dosen Gagal Dihapus </div>");
        }
        redirect(base_url().'Dosen');
    }
    public function pembimbing()
    {
        $this->load->model('TugasAkhir_Model');
        $this->load->model('Bimbingan_model');
        $this->load->model('Prodi_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('Seminar_model');
        $this->icon = "fa-chalkboard-teacher";
        $param['pageInfo'] = "Data Dosen Pembimbing";
        $param['data_dosen'] = $this->Dosen_model->getDosenPembimbing()->result();
        $param['prodi'] = $this->Prodi_model->getAll()->result_array();
		$this->template->load("common/template", "pages/dosen/dosen-pembimbing", $param);
    }
}