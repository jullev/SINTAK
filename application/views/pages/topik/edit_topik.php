<div class="card shadow py-2">
    <div class="card-body">
        <a href="<?php echo base_url()."Topik" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Back to table</a>
        <?php
            //Form Validation
            //Memunculkan Pemberitahuan Sukses/Gagalnya update
            echo $this->session->flashdata('update_validation');

            //Validasi Masing-Masing Inputan
            $validation_Topik = "";
            $validation_Deskripsi = "";
            $validation_icon = "";
            if(!empty($this->session->flashdata('error_field'))){
                $validation_Topik = $this->session->flashdata('error_field')->Topik;
                $validation_Deskripsi = $this->session->flashdata('error_field')->Deskripsi;
                $validation_icon = $this->session->flashdata('error_field')->icon;
            }
        ?>
        <hr>
        <form method="POST" action="<?php echo base_url().'Topik/update_action' ?>">
            <?php foreach($data_topik as $data){ ?>
            <input type="hidden" name="id_" value="<?php echo $data->idTopik; ?>">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Topik</label>
                    <input type="text" class="form-control form-control-sm" name="Topik" placeholder="Masukkan Topik" value="<?php echo $data->Topik; ?>">
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_Topik; ?></div>
                </div>
                <div class="col-md-6 form-group">
                <label>Icon</label>
                    <input type="text" class="form-control form-control-sm" name="icon" placeholder="Masukkan Icon" value="<?php echo $data->icon; ?>">
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_icon; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control form-control-sm" name="Deskripsi" placeholder="Masukkan Deskripsi"><?php echo $data->Deskripsi; ?></textarea>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_Deskripsi; ?></div>
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
