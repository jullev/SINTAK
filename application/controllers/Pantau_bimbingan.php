<?php
defined("BASEPATH") or die("No Direct Access Allowed");

Class Pantau_bimbingan extends CI_controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Dosen_model');
        $this->icon = "fa-user";
    }


    public function index()
    {
        $this->load->model('TugasAkhir_Model');
        $this->load->model('Bimbingan_model');
        $this->load->model('Prodi_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('Seminar_model');
        $this->icon = "fa-headset";
        $param['pageInfo'] = "Pantau Bimbingan Dosen";
        $param['data_dosen'] = $this->Dosen_model->getDosenPembimbing()->result();
        $param['prodi'] = $this->Prodi_model->getAll()->result_array();
		$this->template->load("common/template", "pages/dosen/dosen-pembimbing", $param);
    }
}