<div class="card shadow py-2">
    <div class="card-body">
    <a href="<?php echo base_url()."Dosen" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Lihat Data</a>
    <?php
    //Form Validation
    //Memunculkan Pemberitahuan Sukses/Gagalnya Update
    echo $this->session->flashdata('update_validation');

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
        <form method="POST" action="<?php echo base_url().'Dosen/update_action' ?>">
            <?php foreach($data_dosen as $data){ ?>
            <input type="hidden" name="id_" value="<?php echo $data->NIP; ?>">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label>NIP</label>
                    <input type="text" class="form-control" name="NIP" placeholder="Masukkan NIP" value="<?php echo $data->NIP; ?>" required>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_NIP; ?></div>
                </div>
                <div class="col-md-12 mb-3">
                    <label>NIDN</label>
                    <input type="text" class="form-control" name="NIDN" placeholder="Masukkan NIDN" value="<?php echo $data->NIDN; ?>" required>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_NIDN; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="NAMA" placeholder="Masukkan Nama" value="<?php echo $data->NAMA; ?>" required>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_NAMA; ?></div>
                </div>
                <div class="col-md-12 mb-3">
                    <label>Alamat</label>
                    <textarea class="form-control" name="Alamat" required><?php echo $data->Alamat; ?> </textarea>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_Alamat; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label>No.HP</label>
                    <input type="text" class="form-control" name="No_hp" placeholder="Masukkan No. HP (08xxxxxxxxxx)" value="<?php echo $data->No_hp; ?>" required>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_No_hp; ?></div>
                </div>
                <div class="col-md-12 mb-3">
                    <label>Roles</label>
                    <select class="form-control select2" name="idRole" required>
                        <option value="">--Pilih--</option>
                        <?php 
                            foreach($role as $i){
                                $selected = "";
                                if($data->idRole == $i->idRole){
                                    $selected = "Selected";
                                }
                                echo "<option value='$i->idRole' $selected>$i->Role</option>";
                            }
                        ?>
                    </select>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_idRole; ?></div>
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
