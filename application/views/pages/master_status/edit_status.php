<div class="card shadow py-2">
    <div class="card-body">
    <a href="<?php echo base_url()."Master_status" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Lihat Data</a>
    <?php
    //Form Validation
    //Memunculkan Pemberitahuan Sukses/Gagalnya Update
    echo $this->session->flashdata('update_validation');
    ?>
    <hr>
        <form method="POST" action="<?php echo base_url().'Master_status/update_action' ?>">
            <?php foreach($data_status as $data){ ?>
            <input type="hidden" name="id_" value="<?php echo $data->id_status; ?>">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Status</label>
                    <input type="text" class="form-control form-control-sm" name="status" placeholder="Masukkan Status" value="<?php echo $data->status; ?>">
                </div>
            </div>
            <?php } ?>
            <br>
            <?php 
                $this->load->view("common/btn");
            ?>
        </form>
    </div>
</div>
