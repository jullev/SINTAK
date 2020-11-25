<?php
Class Sidang extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Sidang_model');
        $this->load->model('TugasAkhir_model');
        $this->load->model('Ruangan_model');
        $this->load->model('Dosen_model');
        $this->load->model('Status_model');
        $this->icon = "fa-calendar";
    }

    function index(){
        $param['pageInfo'] = "List Sidang";
        if($_SESSION['kode_level']==8){
            $param['data_sidang'] = $this->Sidang_model->getWhere(['Mahasiswa_NIM' => $_SESSION['id_login']])->result();
        }
        else{
            $param['data_sidang'] = $this->Sidang_model->getAll()->result();
        }
        //Mengambil Data Dari Tabel Master
        $param['Dosen'] = $this->Dosen_model->getAll()->result();
        $param['Ruangan'] = $this->Ruangan_model->getAll()->result();
        $param['Master_status'] = $this->Status_model->getAllDataForSidang()->result();
		$this->template->load("common/template", "pages/Sidang/list_sidang", $param);
    }
    function rekap_sidang(){
        $param['pageInfo'] = "Rekap Sidang";

		$this->template->load("common/template", "pages/Sidang/rekap_sidang", $param);
    }
    function add(){
        $param['pageInfo'] = "Pengajuan Sidang";
        //Mengambil NIM Login Mahasiswa
        $nim = $this->session->userdata('id_login');
        //Mengambil Data Tugas Akhir Berdasarkan NIM Mahasiswa
        $param['TA'] = $this->TugasAkhir_model->getByNim($nim)->result();

		$this->template->load("common/template", "pages/sidang/pengajuan_sidang", $param);
    }

    function add_action(){
        $config = array(
            array(
                'field' => 'Judul_TA',
                'label' => 'Judul Tugas Akhir',
                'rules' => 'required',
                "errors" => [
                    'required' => '%s Harus Dipilih',
                ],
            )
        );
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == TRUE){ //Jika validasi Form Berhasil
            $data = array(
                'id_TA' => $this->input->post('Judul_TA')
            );
            if($this->Sidang_model->save($data)){
                //Flash Message Sukses
                $this->session->set_flashdata("input_validation","<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Pengajuan Sidang Berhasil</div>");
            }else{
                //Flash Message Gagal
                $this->session->set_flashdata("input_validation","<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Pengajuan Sidang Gagal</div>");
            }
        }else{
            $error_field = new stdClass();
            $error_field->Judul_TA = form_error('Judul_TA');
            $this->session->set_flashdata("error_field",$error_field);
        }

        redirect('Sidang/add');
    }

    function edit(){
        $data = $this->Sidang_model->getById($_GET['id_sidang'])[0];
        header("content-type:json/application");
        echo json_encode($data);
    }
    function update(){
        $id = $this->input->post('id_');
        $data = array(
            'Tanggal' => $this->input->post('Tanggal'),
            'jam' => $this->input->post('jam'),
            'NIP_Panelis' => $this->input->post('NIP_Panelis'),
            'idRuangan' => $this->input->post('idRuangan'),
            'id_status' => $this->input->post('id_status'),
            'Nilai' => $this->input->post('Nilai'),
        );
        if($this->Sidang_model->update($id,$data)){
        //Flash Message Sukses
        $this->session->set_flashdata("update_validation","<div class='alert alert-success'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Berhasil Diupdate</div>");
        }else{
        //Flash Message Gagal
        $this->session->set_flashdata("update_validation","<div class='alert alert-danger'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Gagal Diupdate</div>");
        }
        redirect(base_url().'Sidang');
    }

    function delete($id){
        if (!isset($id)) show_404();
        
        if($this->Sidang_model->delete($id)){
            //Flash Message Sukses
            $this->session->set_flashdata("delete_validation","<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Berhasil Dihapus</div>");
        }else{
            //Flash Message Gagal
            $this->session->set_flashdata("delete_validation","<div class='alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Gagal Dihapus </div>");
        }
        redirect(base_url().'Sidang');
    }
}