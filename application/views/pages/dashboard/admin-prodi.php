<?php 
    $this->load->view('pages/dashboard/alert');
?>
<div class="row">
    <div class="col-md-3 mb-4">
        <div class="card card-dashboard py-2 <?= $pengajuanSeminar!=0 ? 'has-notif' : '' ?>">
            <div class="card-body">    
                <div class="row">
                    <div class="col-md-7 pr-0">
                        <h2 class="color-primary font-weight-bold"><?= $pengajuanSeminar ?></h2>
                        Pengajuan Seminar
                    </div>
                    <div class="col-md-5 pl-0 text-center">
                        <span class="fab fa-slideshare fa-4x"></span>
                    </div>
                </div>
                <hr>
                <a href="">Lihat Detail</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-dashboard py-2 <?= $pengajuanSidang!=0 ? 'has-notif' : '' ?>">
            <div class="card-body">    
                <div class="row">
                    <div class="col-md-7 pr-0">
                        <h2 class="color-primary font-weight-bold"><?= $pengajuanSidang ?></h2>
                        Pengajuan Sidang
                    </div>
                    <div class="col-md-5 pl-0 text-center">
                        <span class="fa fa-graduation-cap fa-4x"></span>
                    </div>
                </div>
                <hr>
                <a href="">Lihat Detail</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-dashboard py-2">
            <div class="card-body">    
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="color-primary font-weight-bold"><?= $mhs ?></h2>
                        Mahasiswa
                    </div>
                    <div class="col-md-5 text-center">
                        <span class="fa fa-users fa-4x"></span>
                    </div>
                    <div class="col-md-12">
                    <?= $prodi['Nama_prodi'] ?>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-dashboard">
            <div class="card-body">    
                <span>Lihat Rekap</span>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <a href="">
                            <span class="fa fa-file-excel color-green fa-4x mb-2"></span>
                            Seminar
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <span class="fa fa-file-excel color-green fa-4x mb-2"></span>
                            Sidang
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <span class="fa fa-file-excel color-green fa-4x mb-2"></span>
                            Nilai
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>