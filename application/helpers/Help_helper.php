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
    if ($_SESSION['global_role'] == 'Dosen Pembimbing' || $_SESSION['global_role'] == 'Koordinator TA' || $_SESSION['global_role'] == 'KPS') {
        if($_SESSION['global_role']=='Dosen Pembimbing'){
            return true;
        }
        else{
            $cek = $ci->common->getData('id','tugas_akhir','',['Dosen_NIP' => $nip, 'id_status !=' => 1, 'id_status !=' => 3,'id_status !=' => 11],'')->num_rows();
            if($cek!=0){
                return true;
            }
            else{
                return false;
            }
        }
    }else{
        return false;
    }
}
function sendTele($chatId,$msg){
    $token = "bot1553760840:AAHEfnGRmM72D-NC85DszYfJAWgDuz5U3qs";
    $url = "https://api.telegram.org/$token/sendMessage?parse_mode=HTML&chat_id=$chatId&text=$msg";
    $result = file_get_contents($url,true);
}
function sendTeleDosen($chatId,$msg){
    $token = "bot1440500582:AAHcodvxhblt6xhHuDcr5GqqCbHnM_xmWsU";
    $url = "https://api.telegram.org/$token/sendMessage?parse_mode=HTML&chat_id=$chatId&text=$msg";
    $result = file_get_contents($url,true);
}
