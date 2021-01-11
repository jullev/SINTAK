<?php
class TelegramBot extends CI_Controller
{
    public function index()
    {
        $updates = file_get_contents("php://input");

        $updates = json_decode($updates,true);
        $pesan = $updates['message']['text'];
        $chat_id = $updates['message']['chat']['id'];

        $pesan = strtoupper($pesan);
        $cekTeleIdExist = $this->common->getData('NIM','mahasiswa','',['telegram_id' => $chat_id],'')->result_array();
        $sendMessege = true;
        if($pesan=='/START'){
            if(count($cekTeleIdExist)==1){
                $pesan_balik = 'Device Kamu sudah terdaftar sebagai NIM '.$cekTeleIdExist[0]['NIM'];
            }
            else{
                $pesan_balik = "Masukkan NIM dan Password Sintak kamu untuk registrasi dengan format : \n<b>#NIM#Password</b>";
            }
        }
        else{
            if(count($cekTeleIdExist)==1){
                $sendMessege = false;
            }
            else{
                $split = explode("#",$pesan);
                if(count($split)!=3){
                    $pesan_balik = "<b>Format yang kamu masukkan salah</b>\nMasukkan NIM dan Password Sintak kamu untuk registrasi dengan format : \n<b>#NIM#Password</b>";
                }
                else{
                    $nim = strtoupper($split[1]);
                    $cekNim = $this->common->getData('telegram_id,password','mahasiswa','',["NIM" => $nim],'');
                    if($cekNim->num_rows()==0){
                        $pesan_balik = "NIM kamu belum terdaftar di SINTAK lur.. \nSilahan masukkan lagi NIM dan Password Sintak kamu untuk registrasi dengan format : \n<b>#NIM#Password</b>";
                    }
                    else{
                        $dataMhs = $cekNim->result_array()[0];
                        if($dataMhs['telegram_id']!=0){
                            $pesan_balik = "NIM $nim sudah terdaftar di device lain..";
                        }
                        else{
                            $password = strtolower($split[2]);
                            if(password_verify($password, $dataMhs['password'])){
                                $this->common->update('mahasiswa',['telegram_id' => $chat_id],["NIM" => $nim]);
                                $pesan_balik = "Registrasi NIM berhasil!!. Device Kamu sudah terdaftar sebagai NIM $nim";
                            }
                            else{
                                $pesan_balik = "<b>Password Salah</b>";
                            }
                        }
                    }
                }
            }
        }
        if($sendMessege){
            sendTele($chat_id,urlencode($pesan_balik));
        }
    }
    public function dosen()
    {
        $updates = file_get_contents("php://input");

        $updates = json_decode($updates,true);
        $pesan = $updates['message']['text'];
        $chat_id = $updates['message']['chat']['id'];

        $pesan = strtoupper($pesan);
        $cekTeleIdExist = $this->common->getData('NIP','dosen','',['telegram_id' => $chat_id],'')->result_array();
        $sendMessege = true;
        if($pesan=='/START'){
            if(count($cekTeleIdExist)==1){
                $pesan_balik = 'Device Anda sudah terdaftar sebagai NIP '.$cekTeleIdExist[0]['NIP'];
            }
            else{
                $pesan_balik = "Masukkan NIP dan Password Sintak anda untuk registrasi dengan format : \n<b>#NIP#Password</b>";
            }
        }
        else{
            if(count($cekTeleIdExist)==1){
                $sendMessege = false;
            }
            else{
                $split = explode("#",$pesan);
                if(count($split)!=3){
                    $pesan_balik = "<b>Format yang anda masukkan salah</b>\nMasukkan NIP dan Password Sintak anda untuk registrasi dengan format : \n<b>#NIP#Password</b>";
                }
                else{
                    $nip = strtoupper($split[1]);
                    $cekNip = $this->common->getData('telegram_id,password','dosen','',["NIP" => $nip],'');
                    if($cekNip->num_rows()==0){
                        $pesan_balik = "<b>NIP anda belum terdaftar di SINTAK.</b>\nSilahan masukkan lagi NIP dan Password Sintak anda untuk registrasi dengan format : \n<b>#NIP#Password</b>";
                    }
                    else{
                        $dataDosen = $cekNip->result_array()[0];
                        if($dataDosen['telegram_id']!=0){
                            $pesan_balik = "NIP $nip sudah terdaftar di device lain..";
                        }
                        else{
                            $password = strtolower($split[2]);
                            if(password_verify($password, $dataDosen['password'])){
                                $this->common->update('dosen',['telegram_id' => $chat_id],["NIP" => $nip]);
                                $pesan_balik = "Registrasi NIP berhasil!!. Device anda sudah terdaftar sebagai NIP $nip";
                            }
                            else{
                                $pesan_balik = "<b>Password Salah</b>";
                            }
                        }
                    }
                }
            }
        }
        if($sendMessege){
            sendTeleDosen($chat_id,urlencode($pesan_balik));
        }
    }
}