<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function assetUrl(){
    $url = "http://localhost/newsintak/assets/";
    return $url;
}
function printr($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
function isDospem()
{
    $nip = $_SESSION['id_login'];
    $ci =& get_instance();
    $ci->load->model('common');
    $cek = $ci->common->getData('id','tugas_akhir','',['Dosen_NIP' => $nip, 'id_status !=' => 1, 'id_status !=' => 3,'id_status !=' => 11],'')->num_rows();
    if($cek!=0){
        return true;
    }
    else{
        return false;
    }
}