<div class="card shadow py-2">
    <div class="card-body">
    <a href="<?php echo base_url()."Mahasiswa" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Lihat Data</a>
    <?php
    //Form Validation
    //Memunculkan Pemberitahuan Sukses/Gagalnya Input
    echo $this->session->flashdata('input_validation');

    //Validasi Masing-Masing Inputan
    $validation_NIM = "";
    $validation_NAMA = "";
    $validation_email = "";
    $validation_Alamat = "";
    $validation_tahunmasuk = "";
    $validation_idProdi = "";
    $validation_tanggallahir = "";
    if(!empty($this->session->flashdata('error_field'))){
        $validation_NIM = $this->session->flashdata('error_field')->NIM;
        $validation_NAMA = $this->session->flashdata('error_field')->NAMA;
        $validation_email = $this->session->flashdata('error_field')->email;
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
                <div class="col-md-12 mb-3">
                    <label>NIM</label>
                    <input type="text" class="form-control" name="NIM" placeholder="Masukkan NIM" value="<?php echo $data->NIM; ?>" >
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_NIM; ?></div>
                </div>
                <div class="col-md-12 mb-3">
                    <label>NAMA</label>
                    <input type="text" class="form-control" name="NAMA" placeholder="Masukkan Nama" value="<?php echo $data->NAMA; ?>" >
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_NAMA; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Masukkan Email" value="<?php echo $data->email; ?>" >
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_email; ?></div>
                </div>
                <div class="col-md-12 mb-3">
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
            </div>
            <div class="row">
            <div class="col-md-12 mb-3">
                    <label>Tanggal Lahir</label>
                    <input type="text" class="form-control datepicker" name="tanggallahir" placeholder="Masukkan Tanggal Lahir" value="<?php echo $data->tanggallahir; ?>" >
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_tanggallahir; ?></div>
                </div>
                <div class="col-md-12 mb-3">
                    <label>Alamat</label>
                    <textarea name="Alamat" class="form-control" ><?php echo $data->Alamat; ?></textarea>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_Alamat; ?></div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-12 mb-3">
                    <label>Prodi</label>
                    <select class="form-control select2" name="idProdi">
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


                
