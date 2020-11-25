<?php
Class Dashboard extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->icon = "fa-tachometer-alt";
        $this->load->model('TugasAkhir_Model');
        $this->load->model('Mahasiswa_model');

    }

/*     function index(){

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
    */
    public function index()
    {
        $level = $_SESSION['kode_level'];
        if($level==1){
            $view = strtolower($_SESSION['level']);
            $param['pageInfo'] = $_SESSION['level'];
            $param['dosen'] = $this->common->getData('NIP','dosen','','','')->num_rows();
            $param['mahasiswa'] = $this->common->getData('NIM','mahasiswa','','','')->num_rows();
            $param['ruangan'] = $this->common->getData('idRuangan','ruangan','','','')->num_rows();
            $param['topik'] = $this->common->getData('idTopik','topik','','','')->num_rows();
        }
        else if($level==2){
            $view = str_replace(' ','-',strtolower($_SESSION['level']));
            $param['pageInfo'] = $_SESSION['level'];
            $param['pengajuan'] = $this->common->getData('id','tugas_akhir','',['id_status' => 1],'')->num_rows();
            $param['ta'] = $this->common->getData('id','tugas_akhir','',"Dosen_NIP = '".$_SESSION['id_login']."' and id_status != '1' or Dosen_NIP = '".$_SESSION['id_login']."' and id_status != '3' or Dosen_NIP = '".$_SESSION['id_login']."' and id_status != '10'",'')->num_rows();
            $param['bimbingan'] = $this->common->getData('id_bimbingan','td_bimbingan b',["tugas_akhir ta",'b.Tugas_akhir_id = ta.id'],['Dosen_NIP' => $_SESSION['id_login']],'')->num_rows();
            $param['menungguRevisi'] = $this->common->getData('id_bimbingan','td_bimbingan b',["tugas_akhir ta",'b.Tugas_akhir_id = ta.id'],['Dosen_NIP' => $_SESSION['id_login'],'revisi' => NULL],'')->num_rows();
        }
        
        $this->template->load("common/template", "pages/dashboard/$view", $param);
    }
}