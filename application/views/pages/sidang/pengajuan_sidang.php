<div class="card shadow py-2">
    <div class="card-body">
    <?php
    //Form Validation
    //Memunculkan Pemberitahuan Sukses/Gagalnya Input
    echo $this->session->flashdata('input_validation');

    //Validasi Masing-Masing Inputan
    $validation_Judul_TA = "";
    if(!empty($this->session->flashdata('error_field'))){
        $validation_Judul_TA = $this->session->flashdata('error_field')->Judul_TA;
    }
    ?>    
        <form method="POST" action="<?php echo base_url().'Sidang/add_action' ?>">
            <?php
            echo validation_errors(); ?>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label>Judul Tugas Akhir</label>
                    <select class="form-control form-control-sm" name="Judul_TA" id="Judul_TA">
                        <option value="">--Pilih--</option>
                        <?php
                            foreach($TA as $i){
                                echo "<option value='$i->id'>$i->Judul_TA</option>";
                            }
                        ?>
                    </select>
                    <div class="text-danger"><?php echo $validation_Judul_TA; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <br>
            <?php 
                $this->load->view("common/btn");
            ?>
        </form>
    </div>
</div>
