<?php
class Profile extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if(empty($_SESSION['id_login'])){
            redirect(base_url().'login');
        }
    
        $this->icon = "fa-user";
    }
    public function index()
    {
        $param['pageInfo'] = "Profile";

        if($_SESSION['global_role']=='Mahasiswa'){
            $page = "pages/mahasiswa/profile-mahasiswa";
            $param['teleId'] = $this->common->getData('telegram_id','mahasiswa','',['NIM' => $_SESSION['id_login']],'')->result_array()[0]['telegram_id'];
            $param['link'] = "https://web.telegram.org/#/im?p=@Sintak_bot";
        }
        else{
            $page = "pages/dosen/profile-dosen";
            $param['teleId'] = $this->common->getData('telegram_id','dosen','',['NIP' => $_SESSION['id_login']],'')->result_array()[0]['telegram_id'];
            $param['link'] = "https://web.telegram.org/#/im?p=@SintakDosen_bot";
        }
        $this->template->load("common/template", $page, $param);
    }
}