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
            $param['action'] = base_url().'profile/updatePassword';
            $param['link'] = "https://web.telegram.org/#/im?p=@Sintak_bot";
        }
        else{
            $page = "pages/dosen/profile-dosen";
            $param['teleId'] = $this->common->getData('telegram_id','dosen','',['NIP' => $_SESSION['id_login']],'')->result_array()[0]['telegram_id'];
            $param['action'] = base_url().'profile/updatePasswordDosen';
            $param['link'] = "https://web.telegram.org/#/im?p=@SintakDosen_bot";
        }
        $this->template->load("common/template", $page, $param);
    }
    public function updatePassword()
    {
        $getPass = $this->common->getData('password','mahasiswa','',['NIM' => $_SESSION['id_login']],'')->result_array()[0];
        $submit = false;
        $alert = 'danger';
        if(password_verify($_POST['old'],$getPass['password'])){
            if($_POST['new']==$_POST['again']){
                $pass  = ['password' => password_hash($_POST['new'],PASSWORD_DEFAULT)];
                $update = $this->common->update('mahasiswa',$pass,['NIM' => $_SESSION['id_login']]);
                if($update){
                    $submit = true;
                    $msg = 'Update Password Berhasil';
                    $alert = 'success';
                }
                else{
                    $msg = 'Update Gagal';
                }
            }
            else{
                $msg = 'Kombinasi Password dan Konfirmasi Kurang Tepat';
            }
        }
        else{
            $msg = 'Password Salah';
        }
        $this->session->set_flashdata(
            "alert",
            "<div class='alert alert-$alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden=true'>&times;</span></button><b>$msg</b></div>"
        );
        redirect(base_url().'profile');
    }
    public function updatePasswordDosen()
    {
        $getPass = $this->common->getData('password','dosen','',['NIP' => $_SESSION['id_login']],'')->result_array()[0];
        $submit = false;
        $alert = 'danger';
        if(password_verify($_POST['old'],$getPass['password'])){
            if($_POST['new']==$_POST['again']){
                $pass  = ['password' => password_hash($_POST['new'],PASSWORD_DEFAULT)];
                $update = $this->common->update('dosen',$pass,['NIP' => $_SESSION['id_login']]);
                if($update){
                    $submit = true;
                    $msg = 'Update Password Berhasil';
                    $alert = 'success';
                }
                else{
                    $msg = 'Update Gagal';
                }
            }
            else{
                $msg = 'Kombinasi Password dan Konfirmasi Kurang Tepat';
            }
        }
        else{
            $msg = 'Password Salah';
        }
        $this->session->set_flashdata(
            "alert",
            "<div class='alert alert-$alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden=true'>&times;</span></button><b>$msg</b></div>"
        );
        redirect(base_url().'profile');
    }
}