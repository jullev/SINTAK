<div class="card shadow py-2">
    <div class="card-body">
        <a href="<?php echo base_url()."Ruangan" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Back to table</a>
        <?php
        //Form Validation
        //Memunculkan Pemberitahuan Sukses/Gagalnya Input
        echo $this->session->flashdata('input_validation');

        //Validasi Masing-Masing Inputan
        $validation_Nama_Ruangan = "";
        if(!empty($this->session->flashdata('error_field'))){
            $validation_Nama_Ruangan = $this->session->flashdata('error_field')->Nama_Ruangan;
        }
        ?>
    <hr>
        <form method="POST" action="<?php echo base_url().'Ruangan/add_action' ?>">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Nama Ruangan</label>
                    <input type="text" class="form-control form-control-sm" name="Nama_Ruangan" placeholder="Masukkan Nama Ruangan">
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_Nama_Ruangan; ?></div>
                </div>
            </div>
            <br>
            <?php 
                $this->load->view("common/btn");
            ?>
        </form>
    </div>
</div>
