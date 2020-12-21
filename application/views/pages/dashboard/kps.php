<?php 
    $this->load->view('pages/dashboard/alert');
?>
<div class="row">
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
        <div class="card card-dashboard py-2">
            <div class="card-body">    
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="color-primary font-weight-bold"><?= $ta ?></h2>
                        Tugas Akhir ACC
                    </div>
                    <div class="col-md-5 text-center">
                        <span class="fa fa-laptop-code fa-4x"></span>
                    </div>
                </div>
                <hr>
                <a href="">Lihat Detail</a>
            </div>
        </div>
    </div>    
</div>