<?php 
    $this->load->view('pages/dashboard/alert');
?>
<div class="row">
    <div class="col-md-3 mb-4">
        <div class="card card-dashboard py-2">
            <div class="card-body">    
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="color-primary font-weight-bold"><?= $dosen ?></h2>
                        Dosen
                    </div>
                    <div class="col-md-5 text-center">
                        <span class="fa fa-user-graduate fa-4x"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-dashboard py-2">
            <div class="card-body">    
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="color-primary font-weight-bold"><?= $mahasiswa ?></h2>
                        Mahasiswa
                    </div>
                    <div class="col-md-5 text-center">
                        <span class="fa fa-users fa-4x"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-dashboard py-2">
            <div class="card-body">    
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="color-primary font-weight-bold"><?= $ruangan ?></h2>
                        Ruangan
                    </div>
                    <div class="col-md-5 text-center">
                        <span class="fa fa-school fa-4x"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-dashboard py-2">
            <div class="card-body">    
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="color-primary font-weight-bold"><?= $topik ?></h2>
                        Topik
                    </div>
                    <div class="col-md-5 text-center">
                        <span class="fa fa-atom fa-4x"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>