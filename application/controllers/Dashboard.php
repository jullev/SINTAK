<?php
Class Dashboard extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->icon = "fa-home";
        $this->load->model('TugasAkhir_Model');
        $this->load->model('Mahasiswa_model');

    }

    function index(){

        if($_SESSION['kode_level']==2){
            $filter = ['Dosen_NIP' => $_SESSION['id_login']];
        }else{
            $filter='';
        }
        $param['data_tugas_akhir'] = $this->TugasAkhir_Model->getAll($filter)->result();  
        $param['angkatan'] = $this->Mahasiswa_model->getAngkatan()->result();              
        $param['pageInfo'] = "Dashboard";
		$this->template->load("common/template", "pages/dashboard/view_dashboard", $param);
    }
}