<?php
defined("BASEPATH") or die("No Direct Access Allowed");

Class Master_status extends CI_controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Status_model');
        $this->icon = "fa-user";
    }

    function index(){
        $param['pageInfo'] = "Data Master Status";
        $param['data_status'] = $this->Status_model->getAll()->result();
		$this->template->load("common/template", "pages/master_status/list_status", $param);
    }

    function add(){
        $param['pageInfo'] = "Input Data Master Status";
        $param['role'] = $this->Status_model->getAll()->result();
		$this->template->load("common/template", "pages/master_status/tambah_status", $param);
    }

    function add_action(){
        //Form Validasi Belum

        $data = array(
            'status' => $this->input->post('status')
        );
        if($this->Status_model->save($data)){
            //Flash Message Sukses
            $this->session->set_flashdata("input_validation","<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Master Status Berhasil Disimpan</div>");
        }else{
            //Flash Message Gagal
            $this->session->set_flashdata("input_validation","<div class='alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Master Gagal Disimpan </div>");
        }
        
        redirect(base_url().'Master_status');
    }

    function edit($id = null){
        if (!isset($id)) show_404();

        $param['pageInfo'] = "Edit Master Status";
        $param['data_status'] = $this->Status_model->getById($id)->result();
		$this->template->load("common/template", "pages/master_status/edit_status", $param);
    }

    function update_action(){
        //Form Validasi Belum

        $id = $this->input->post('id_');
        $data = array(
            'status' => $this->input->post('status')
        );
        if($this->Status_model->update($id, $data)){
            //Flash Message Sukses
            $this->session->set_flashdata("update_validation","<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Master Status Berhasil Diubah</div>");
        }else{
            //Flash Message Gagal
            $this->session->set_flashdata("update_validation","<div class='alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Master Status Gagal Diubah </div>");
        }
        
        redirect(base_url().'Master_status');
    }

    function delete($id = null){
        if (!isset($id)) show_404();
        
        if($this->Status_model->delete($id)){
            //Flash Messages
            $this->session->set_flashdata("delete_validation","<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Master Status Berhasil Dihapus</div>");
        }else{
            //Flash Message Gagal
            $this->session->set_flashdata("delete_validation","<div class='alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Master Status Gagal Dihapus </div>");
        }
        redirect(base_url().'Master_status');
    }
}