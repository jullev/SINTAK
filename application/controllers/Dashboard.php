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
        $role = $_SESSION['global_role'];
        $view = str_replace(' ','-',strtolower($role));
        $param['pageInfo'] = $_SESSION['level'];
        if($role=='Administrator'){
            $view = strtolower($_SESSION['level']);
            $param['pageInfo'] = $_SESSION['level'];
            $param['dosen'] = $this->common->getData('NIP','dosen','','','')->num_rows();
            $param['mahasiswa'] = $this->common->getData('NIM','mahasiswa','','','')->num_rows();
            $param['ruangan'] = $this->common->getData('idRuangan','ruangan','','','')->num_rows();
            $param['topik'] = $this->common->getData('idTopik','topik','','','')->num_rows();
        }
        else if($role=='Dosen Pembimbing'){
            $nip = $_SESSION['id_login'];
            $param['pengajuan'] = $this->common->getData('id','tugas_akhir','',['id_status' => 1,'Dosen_NIP' => $nip],'')->num_rows();
            $param['ta'] = $this->common->getData('id','tugas_akhir','',"Dosen_NIP = '".$nip."' and id_status != '1' and id_status != '3' and id_status != '11'",'')->num_rows();
            $param['bimbingan'] = $this->common->getData('id_bimbingan','td_bimbingan b',["tugas_akhir ta",'b.Tugas_akhir_id = ta.id'],['Dosen_NIP' => $nip],'')->num_rows();
            $param['menungguRevisi'] = $this->common->getData('id_bimbingan','td_bimbingan b',["tugas_akhir ta",'b.Tugas_akhir_id = ta.id'],['Dosen_NIP' => $nip,'revisi' => NULL],'')->num_rows();
            $param['topik'] = $this->common->getData('t.topik,count(id) ttl','tugas_akhir ta',['topik t','ta.id_topik = t.idTopik'],"Dosen_NIP = '$nip' and ta.id_status != '1' and ta.id_status != '3' and ta.id_status != '11'",'','id_topik')->result_array();
            
            $param['belumBimbingan'] = $this->common->getData('id','tugas_akhir','',["Dosen_NIP" => $nip,'id_status' => '2'],'')->num_rows();
            $param['bimbinganSeminar'] = $this->common->getData('id','tugas_akhir','',"Dosen_NIP = '$nip' and id_status between 4 and 6",'')->num_rows();
            $param['bimbinganTA'] = $this->common->getData('id','tugas_akhir','',"Dosen_NIP = '$nip' and id_status between 7 and 9",'')->num_rows();
            $param['selesaiSidang'] = $this->common->getData('id','tugas_akhir','',"Dosen_NIP = '$nip' and id_status = '10' ",'')->num_rows();
        }
        else if($role=='Admin Prodi'){
            $idProdi = $_SESSION['id_prodi'];
            $param['pengajuanSeminar'] = $this->common->getData('s.id_seminar','td_seminar s',['tugas_akhir ta','s.id_TA = ta.id','mahasiswa m','ta.Mahasiswa_NIM = m.NIM'],['m.Prodi_idProdi' => $idProdi,'s.jam' => NULL],'')->num_rows();
            $param['pengajuanSidang'] = $this->common->getData('s.id_sidang','td_sidang s',['tugas_akhir ta','s.id_TA = ta.id','mahasiswa m','ta.Mahasiswa_NIM = m.NIM'],['m.Prodi_idProdi' => $idProdi,'s.jam' => NULL],'')->num_rows();
            $param['mhs'] = $this->common->getData('NIM','mahasiswa','',['Prodi_idProdi' => $idProdi],'')->num_rows();
            $param['prodi'] = $this->common->getData('Nama_prodi','prodi','',['idProdi' => $idProdi],'')->result_array()[0];
        }
        else if($role=='Koordinator TA'){
            $idProdi = $_SESSION['id_prodi'];
            $param['prodi'] = $this->common->getData('Nama_prodi','prodi','',['idProdi' => $idProdi],'')->result_array()[0];
            $param['mhs'] = $this->common->getData('NIM','mahasiswa','',['Prodi_idProdi' => $idProdi],'')->num_rows();
            $param['pengajuanSeminar'] = $this->common->getData('s.id_seminar','td_seminar s',['tugas_akhir ta','s.id_TA = ta.id','mahasiswa m','ta.Mahasiswa_NIM = m.NIM'],['m.Prodi_idProdi' => $idProdi,'s.NIP_Panelis' => NULL],'')->num_rows();
            $param['pengajuanSidang'] = $this->common->getData('s.id_sidang','td_sidang s',['tugas_akhir ta','s.id_TA = ta.id','mahasiswa m','ta.Mahasiswa_NIM = m.NIM'],['m.Prodi_idProdi' => $idProdi,'s.NIP_Anggota' => NULL],'')->num_rows();
            $param['ta'] = $this->common->getData('ta.id','tugas_akhir ta',['mahasiswa m','ta.Mahasiswa_NIM = m.NIM'],"m.Prodi_idProdi = '".$idProdi."' and ta.id_status != '1' and ta.id_status != '3' and ta.id_status != '11'",'')->num_rows();
            $param['pengajuanJudul'] = $this->common->getData('ta.id','tugas_akhir ta',['mahasiswa m','ta.Mahasiswa_NIM = m.NIM'],['ta.id_status' => 1,'m.Prodi_idProdi' => $idProdi],'')->num_rows();
            $param['topik'] = $this->common->getData('t.topik,count(id) ttl','tugas_akhir ta',['topik t','ta.id_topik = t.idTopik','mahasiswa m','ta.Mahasiswa_NIM = m.NIM'],"m.Prodi_idProdi = '$idProdi' and ta.id_status != '1' and ta.id_status != '3' and ta.id_status != '11'",'','id_topik')->result_array();
            
        }
        
        $this->template->load("common/template", "pages/dashboard/$view", $param);
    }
}