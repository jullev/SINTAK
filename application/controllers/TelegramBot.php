<?php
class TelegramBot extends CI_Controller
{
    public function index()
    {
        // ==== BEGIN / variabel must be adjusted ====

        $token = "bot"."1472019164:AAFe7IxZhdJVCygaNivz4_7PrdLJXclvdWI";
        $proxy = "";

        // ==== END / variabel must be adjusted ====



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
                $pesan_balik = 'Masukkan NIM kamu untuk registrasi...';
            }
        }
        else{
            if(count($cekTeleIdExist)==1){
                $pesan_balik = 'Device Kamu sudah terdaftar sebagai NIM '.$cekTeleIdExist[0]['NIM'];
            }
            else{
                $nim = strtoupper($pesan);
                $cekNim = $this->common->getData('telegram_id','mahasiswa','',["NIM" => $nim],'');
                if($cekNim->num_rows()==0){
                    $pesan_balik = 'NIM kamu belum terdaftar di SINTAK lur.. Masukkan lagi NIM nya';
                }
                else{
                    if($cekNim->result_array()[0]['telegram_id']!=0){
                        $pesan_balik = "NIM $nim sudah terdaftar di device lain..";
                    }
                    else{
                        $this->common->update('mahasiswa',['telegram_id' => $chat_id],["NIM" => $nim]);
                        $pesan_balik = "Registrasi NIM berhasil!!. Device Kamu sudah terdaftar sebagai NIM $nim";
                    }
                }
            }
        }

        $url = "https://api.telegram.org/$token/sendMessage?parse_mode=markdown&chat_id=$chat_id&text=$pesan_balik";

        $ch = curl_init();
            
        if($proxy==""){
            $optArray = array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CAINFO => "C:\cacert.pem"	
            );
        }
        else{ 
            $optArray = array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_PROXY => "$proxy",
                CURLOPT_CAINFO => "C:\cacert.pem"	
            );	
        }
            
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
            
        $err = curl_error($ch);
        curl_close($ch);	
            
        if($err<>"") echo "Error: $err";
        else echo "Pesan Terkirim";
    }
}