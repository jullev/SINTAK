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
    <?php
        echo $this->session->flashdata('alert');
    ?>
        <form action="profile/updatePassword" method="post">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Password Lama</label>
                    <input type="password" class="form-control" name="old">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Password Baru</label>
                    <input type="password" class="form-control" name="new">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Ulangi Password</label>
                    <input type="password" class="form-control" name="again">
                </div>
                <div class="col-md-6 mb-3">
                <br>
                <div class="mt-2">
                    <?php 
                        $this->load->view("common/btn");
                    ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>