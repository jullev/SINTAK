<div class="card shadow py-2">
    <div class="card-body">
    <a href="<?php echo base_url()."Master_status" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Lihat Data</a>
    <?php
    //Form Validation
    //Memunculkan Pemberitahuan Sukses/Gagalnya Input
    echo $this->session->flashdata('input_validation');
    ?>
    <hr>
        <form method="POST" action="<?php echo base_url().'Master_status/add_action' ?>">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label>Status</label>
                    <input type="text" class="form-control form-control-sm" name="status" placeholder="Masukkan Status">
                </div>
                
            </div>
            <br>
            <?php 
                $this->load->view("common/btn");
            ?>
        </form>
    </div>
</div>
