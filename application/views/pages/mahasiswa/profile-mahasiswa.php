<?php 
    if($teleId==0){
?>
<div class="alert alert-danger custom-alert">
    <span class="fa fa-exclamation-triangle sticky"></span>
    <b>Notif Telegram Belum Aktif.</b>
    <br>
    <p class="mb-0">Lakukan aktivasi notif telegram di akun telegram <a href="<?php echo $link ?>" target="_blank"><u>Disini</u></a> </p>
</div>
<?php } else{?>
<div class="alert alert-success custom-alert">
    <span class="fab fa-telegram sticky"></span>
    <b>Notif Telegram Telah Aktif.</b>
    <br>
    <p class="mb-0">Cek BOT telegram <a href="<?php echo $link ?>" target="_blank"><u>Disini</u></a> </p>
</div>
<?php } ?>

<div class="card shadow py-2">
    <div class="card-body">

        <form action="">
            
        </form>
    </div>
</div>