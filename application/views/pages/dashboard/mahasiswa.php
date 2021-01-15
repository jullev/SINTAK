<div class="alert alert-success custom-alert">
    <span class="fa fa-exclamation-triangle sticky"></span>
    Selamat datang, <?= $_SESSION['username'] ?>.
    <br>
    Anda login sebagai <b><?= $_SESSION['level'] ?></b>
</div>
<div class="row">
    <div class="col-md-6 mb-4">
        <div class="card card-dashboard py-2">
            <div class="card-body">    
                <div class="row">
                    <div class="col-md-8 pr-0">
                        <h5 class="color-primary font-weight-bold">Status Tugas Akhir</h5>
                        <h6>
                        <span class="px-2 py-1 badge badge-<?= $alert ?>"><i class="fa <?= $icon ?>"></i> <?= $status ?></span>
                        </h6>
                    </div>
                    <div class="col-md-4 pl-0 text-center">
                        <span class="fa fa-envelope-open-text fa-4x"></span>
                    </div>
                </div>
                <hr>
                <?php 
                    if(count($getStatus)!=0){
                        $topik = $getStatus[0]['Topik'];
                        $judul = $getStatus[0]['Judul_TA'];
                    }
                    else{
                        $topik = "-";
                        $judul = "-";
                    }
                ?>
                    <b class="color-primary">Topik TA &nbsp; : &nbsp; </b> <?= $topik ?>
                    <br>
                    <b class="color-primary">Judul TA &nbsp; : &nbsp; </b><?= $judul ?>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
    <div class="card card-dashboard py-2">
        <div class="card-body">    
            <div class="row">
                <div class="col-md-7">
                    <h2 class="color-primary font-weight-bold"><?= $bimbingan ?>x</h2>
                    Bimbingan
                </div>
                <div class="col-md-5 text-center">
                    <span class="fa fa-chalkboard-teacher fa-4x"></span>
                </div>
            </div>
            <hr>
            <a href="<?php echo base_url()."bimbingan" ?>">Lihat Detail</a>
        </div>
    </div>
</div>
</div>
