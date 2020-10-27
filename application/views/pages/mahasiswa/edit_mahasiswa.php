<div class="card shadow py-2">
    <div class="card-body">
    <a href="<?php echo base_url()."Mahasiswa" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Back to table</a>
    <?php
    //Form Validation
    //Memunculkan Pemberitahuan Sukses/Gagalnya Input
    echo $this->session->flashdata('input_validation');

    //Validasi Masing-Masing Inputan
    $validation_NIM = "";
    $validation_NAMA = "";
    $validation_Alamat = "";
    $validation_tahunmasuk = "";
    $validation_idProdi = "";
    $validation_tanggallahir = "";
    if(!empty($this->session->flashdata('error_field'))){
        $validation_NIM = $this->session->flashdata('error_field')->NIM;
        $validation_NAMA = $this->session->flashdata('error_field')->NAMA;
        $validation_Alamat = $this->session->flashdata('error_field')->Alamat;
        $validation_tahunmasuk = $this->session->flashdata('error_field')->tahunmasuk;
        $validation_idProdi = $this->session->flashdata('error_field')->idProdi;
        $validation_tanggallahir = $this->session->flashdata('error_field')->tanggallahir;
    }
    ?>
    <hr>
        <form method="POST" action="<?php echo base_url().'Mahasiswa/update_action' ?>">
            <?php foreach($data_mahasiswa as $data){ ?>
            <input type="hidden" name="id_" value="<?php echo $data->NIM; ?>">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>NIM</label>
                    <input type="text" class="form-control form-control-sm" name="NIM" placeholder="Masukkan NIM" value="<?php echo $data->NIM; ?>" >
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_NIM; ?></div>
                </div>
                <div class="col-md-6 form-group">
                    <label>NAMA</label>
                    <input type="text" class="form-control form-control-sm" name="NAMA" placeholder="Masukkan Nama" value="<?php echo $data->NAMA; ?>" >
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_NAMA; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Tahun Masuk</label>
                    <select name="tahunmasuk" id="tahunmasuk" class="form-control" >
                        <option value="">--Pilih--</option>
                        <?php
                            for($i=date('Y');$i>=2011;$i--){
                                $selected = "";
                                if($data->Tahun_masuk == $i){
                                    $selected = "Selected";
                                }
                                echo "<option value='$i' $selected>$i</option>";
                            }
                        ?>
                    </select>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_tahunmasuk; ?></div>
                </div>
                <div class="col-md-6 form-group">
                    <label>Alamat</label>
                    <textarea name="Alamat" class="form-control form-control-sm" ><?php echo $data->Alamat; ?></textarea>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_Alamat; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control form-control-sm" name="tanggallahir" placeholder="Masukkan Tanggal Lahir" value="<?php echo $data->tanggallahir; ?>" >
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_tanggallahir; ?></div>
                </div>
                <div class="col-md-6 form-group">
                    <label>Roles</label>
                    <select class="form-control form-control-sm" name="idProdi">
                        <option value="">--Pilih--</option>
                        <?php 
                            foreach($prodi as $i){
                                $selected = "";
                                if($data->Prodi_idProdi == $i->idProdi){
                                    $selected = "Selected";
                                }
                                echo "<option value='$i->idProdi' $selected>$i->Nama_prodi</option>";
                            }
                        ?>
                    </select>
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


                
