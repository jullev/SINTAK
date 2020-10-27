<div class="card shadow py-2">
    <div class="card-body">
    <a href="<?php echo base_url()."mahasiswa" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> List Mahasiswa</a>
    <hr>
    <div class="alert alert-info">
    <p>
        <b>Daftar ID Prodi</b>
    </p>
        <?php 
            foreach ($prodi as $key => $value) {
                echo "<p><b>".$value->idProdi."</b> &nbsp; ".$value->Nama_prodi."</p>";
            }
            ?>
            <a href="<?php echo base_url()."assets/mahasiswa.csv" ?>" class="btn btn-default mb-3"> <span class="fa fa-download"></span> Download template (.csv)</a>
    </div>
        <form action="<?php echo base_url()."mahasiswa/act_import" ?>" method="post" enctype="multipart/form-data">
            <label>Upload File (.csv)</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name='file'>
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <br>
            <br>
            <?php 
                $this->load->view("common/btn");
            ?>

        </form>
    </div>
</div>
