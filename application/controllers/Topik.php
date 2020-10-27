<?php

Class Topik extends CI_controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Topik_model');
        $this->icon = "fa-book";
    }

    function index(){
        $param['pageInfo'] = "Daftar Topik";
        $param['data_topik'] = $this->Topik_model->getAll()->result();
		$this->template->load("common/template", "pages/topik/list_topik", $param);
    }

    function add(){
        $param['pageInfo'] = "Input Topik";
		$this->template->load("common/template", "pages/topik/tambah_topik", $param);
    }

    function add_action(){
        //Form Validasi
        $config = array(
            array(
                'field' => 'Topik',
                'label' => 'Topik',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'icon',
                'label' => 'Icon',
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
        );
        
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == TRUE){ //Jika validasi Form Berhasil
            $data = array(
                'Topik' => $this->input->post('Topik'),
                'Deskripsi' => $this->input->post('Deskripsi'),
                'icon' => $this->input->post('icon')
            );
            if($this->Topik_model->save($data)){
                //Flash Message Sukses
                $this->session->set_flashdata("input_validation","<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Topik Berhasil Disimpan</div>");
            }else{
                //Flash Message Gagal
                $this->session->set_flashdata("input_validation","<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Topik Gagal Disimpan </div>");
            }
        }else{ //Jika Validasi Gagal
            $error_field = new stdClass();
            $error_field->Topik = form_error('Topik');
            $error_field->Deskripsi = form_error('Deskripsi');
            $error_field->icon = form_error('icon');
            $this->session->set_flashdata("error_field",$error_field);
        }
        redirect(base_url().'Topik/add');
    }

    function edit($id = null){
        if (!isset($id)) show_404();

        $param['pageInfo'] = "Edit Topik";
        $param['data_topik'] = $this->Topik_model->getById($id)->result();
		$this->template->load("common/template", "pages/topik/edit_topik", $param);
    }

    function update_action(){
        $id = $this->input->post('id_');
        //Form Validasi
        $config = array(
            array(
                'field' => 'Topik',
                'label' => 'Topik',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Diisi',
                ],
            ),
            array(
                'field' => 'icon',
                'label' => 'Icon',
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
        );
        
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == TRUE){ //Jika validasi Form Berhasil
            $data = array(
                'Topik' => $this->input->post('Topik'),
                'Deskripsi' => $this->input->post('Deskripsi'),
                'icon' => $this->input->post('icon')
            );
            if($this->Topik_model->update($id, $data)){
                //Flash Message Sukses
                $this->session->set_flashdata("update_validation","<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Topik Berhasil Diubah</div>");
            }else{
                //Flash Message Gagal
                $this->session->set_flashdata("update_validation","<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Topik Gagal Diubah </div>");
            }
        }else{ //Jika Validasi Gagal
            $error_field = new stdClass();
            $error_field->Topik = form_error('Topik');
            $error_field->Deskripsi = form_error('Deskripsi');
            $error_field->icon = form_error('icon');
            $this->session->set_flashdata("error_field",$error_field);
        }
        
        redirect(base_url().'Topik/edit/'.$id);
    }

    function delete($id = null){
        if (!isset($id)) show_404();
        
        if($this->Topik_model->delete($id)){
            //Flash Messages
            $this->session->set_flashdata("delete_validation","<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Topik Berhasil Dihapus</div>");
        }else{
            //Flash Messages
            $this->session->set_flashdata("delete_validation","<div class='alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Topik Gagal Dihapus </div>");
        }
        redirect(base_url().'Topik');
    }
}