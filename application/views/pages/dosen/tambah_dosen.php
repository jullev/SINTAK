<div class="card shadow py-2">
    <div class="card-body">
    <a href="<?php echo base_url()."Dosen" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Back to table</a>
    <?php
    //Form Validation
    //Memunculkan Pemberitahuan Sukses/Gagalnya Input
    echo $this->session->flashdata('input_validation');

    //Validasi Masing-Masing Inputan
    $validation_NIP = "";
    $validation_NIDN = "";
    $validation_NAMA = "";
    $validation_Alamat = "";
    $validation_No_hp = "";
    $validation_idRole = "";
    if(!empty($this->session->flashdata('error_field'))){
        $validation_NIP = $this->session->flashdata('error_field')->NIP;
        $validation_NIDN = $this->session->flashdata('error_field')->NIDN;
        $validation_NAMA = $this->session->flashdata('error_field')->NAMA;
        $validation_Alamat = $this->session->flashdata('error_field')->Alamat;
        $validation_No_hp = $this->session->flashdata('error_field')->No_hp;
        $validation_idRole = $this->session->flashdata('error_field')->idRole;
    }
    ?>
    <hr>
        <form method="POST" action="<?php echo base_url().'Dosen/add_action' ?>">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>NIP</label>
                    <input type="text" class="form-control form-control-sm" name="NIP" placeholder="Masukkan NIP" required>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_NIP; ?></div>
                </div>
                <div class="col-md-6 form-group">
                    <label>NIDN</label>
                    <input type="text" class="form-control form-control-sm" name="NIDN" placeholder="Masukkan NIDN" required>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_NIDN; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control form-control-sm" name="NAMA" placeholder="Masukkan Nama" required>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_NAMA; ?></div>
                </div>
                <div class="col-md-6 form-group">
                    <label>Alamat</label>
                    <textarea class="form-control form-control-sm" name="Alamat" required></textarea>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_Alamat; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>No.HP</label>
                    <input type="text" class="form-control form-control-sm" name="No_hp" placeholder="Masukkan No. HP" required>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_No_hp; ?></div>
                </div>
                <div class="col-md-6 form-group">
                    <label>Roles</label>
                    <select class="form-control form-control-sm select2" name="idRole" required>
                        <option value="">--Pilih--</option>
                        <?php 
                            foreach($role as $i){
                                echo "<option value='$i->idRole'>$i->Role</option>";
                            }
                        ?>
                    </select>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_idRole; ?></div>
                </div>
            </div>
            <br>
            <?php 
                $this->load->view("common/btn");
            ?>
        </form>
    </div>
</div>
