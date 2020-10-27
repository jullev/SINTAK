<?php

Class Ruangan extends CI_controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Ruangan_model');
        $this->icon = "fa-university";
    }

    function index(){
        $param['pageInfo'] = "Data Ruangan";
        $param['data_ruangan'] = $this->Ruangan_model->getAll()->result();
		$this->template->load("common/template", "pages/ruangan/list_ruangan", $param);
    }

    function add(){
        $param['pageInfo'] = "Input Ruangan";
		$this->template->load("common/template", "pages/ruangan/tambah_ruangan", $param);
    }

    function add_action(){
        //Form Validasi
        $config = array(
            array(
                'field' => 'Nama_Ruangan',
                'label' => 'Nama Ruangan',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            )
        );
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == TRUE){ //Jika validasi Form Berhasil
            $data = array(
                'Nama_ruangan' => $this->input->post('Nama_Ruangan')
            );
            if($this->Ruangan_model->save($data)){
                //Flash Message Sukses
                $this->session->set_flashdata("input_validation","<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Ruangan Berhasil Disimpan</div>");
            }else{
                //Flash Message Gagal
                $this->session->set_flashdata("input_validation","<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Ruangan Gagal Disimpan </div>");
            }
        }else{
            $error_field = new stdClass();
            $error_field->Nama_Ruangan = form_error('Nama_Ruangan');
            $this->session->set_flashdata("error_field",$error_field);
        }
        
        redirect(base_url().'Ruangan/add');
    }

    function edit($id = null){
        if (!isset($id)) show_404();

        $param['pageInfo'] = "Edit Ruangan";
        $param['data_ruangan'] = $this->Ruangan_model->getById($id)->result();
		$this->template->load("common/template", "pages/ruangan/edit_ruangan", $param);
    }

    function update_action(){
        $id = $this->input->post('id_');
        //Form Validasi
        $config = array(
            array(
                'field' => 'Nama_Ruangan',
                'label' => 'Nama Ruangan',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            )
        );
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == TRUE){ //Jika validasi Form Berhasil
            $data = array(
                'Nama_ruangan' => $this->input->post('Nama_Ruangan')
            );
            if($this->Ruangan_model->update($id, $data)){
                //Flash Message Sukses
                $this->session->set_flashdata("update_validation","<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Ruangan Berhasil Diubah</div>");
            }else{
                //Flash Message Gagal
                $this->session->set_flashdata("update_validation","<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Ruangan Gagal Diubah </div>");
            }
        }else{ //Jika Validasi Gagal
            $error_field = new stdClass();
            $error_field->Nama_Ruangan = form_error('Nama_Ruangan');
            $this->session->set_flashdata("error_field",$error_field);
        }
        redirect(base_url().'ruangan/edit/'.$id);
    }

    function delete($id = null){
        if (!isset($id)) show_404();
        
        if($this->Ruangan_model->delete($id)){
            //Flash Messages
            $this->session->set_flashdata("delete_validation","<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Ruangan Berhasil Dihapus</div>");
        }else{
            //Flash Message Gagal
            $this->session->set_flashdata("delete_validation","<div class='alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Ruangan Gagal Dihapus </div>");
        }
        redirect(base_url().'ruangan');
    }
}