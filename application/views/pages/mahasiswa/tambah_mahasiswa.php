<div class="card shadow py-2">
    <div class="card-body">
    <a href="<?php echo base_url()."Mahasiswa" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Back to table</a>
    <?php
    //Form Validation
    //Memunculkan Pemberitahuan Sukses/Gagalnya Input
    echo $this->session->flashdata('input_validation');

    //Validasi Masing-Masing Inputan
    $validation_NIM = "";
    $validation_email = "";
    $validation_NAMA = "";
    $validation_Alamat = "";
    $validation_tahunmasuk = "";
    $validation_idProdi = "";
    $validation_tanggallahir = "";
    if(!empty($this->session->flashdata('error_field'))){
        $validation_NIM = $this->session->flashdata('error_field')->NIM;
        $validation_email = $this->session->flashdata('error_field')->email;
        $validation_NAMA = $this->session->flashdata('error_field')->NAMA;
        $validation_Alamat = $this->session->flashdata('error_field')->Alamat;
        $validation_tahunmasuk = $this->session->flashdata('error_field')->tahunmasuk;
        $validation_idProdi = $this->session->flashdata('error_field')->idProdi;
        $validation_tanggallahir = $this->session->flashdata('error_field')->tanggallahir;
    }
    ?>
    <hr>
        <form method="POST" action="<?php echo base_url().'Mahasiswa/add_action' ?>">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>NIM</label>
                    <input type="text" class="form-control form-control-sm" name="NIM" placeholder="Masukkan NIM" required>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_NIM; ?></div>
                </div>
                <div class="col-md-6 form-group">
                    <label>NAMA</label>
                    <input type="text" class="form-control form-control-sm" name="NAMA" placeholder="Masukkan Nama" required>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_NAMA; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Email</label>
                    <input type="text" class="form-control form-control-sm" name="email" placeholder="Masukkan Email" required>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_email; ?></div>
                </div>
                <div class="col-md-6 form-group">
                    <label>Tahun Masuk</label>
                    <select name="tahunmasuk" id="tahunmasuk" class="form-control select2" required>
                        <option value="">--Pilih--</option>
                        <?php
                            for($i=date('Y');$i>=2011;$i--){
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_tahunmasuk; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Tanggal Lahir</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fa fa-calendar"></span></span>
                        </div>
                        <input type="text" name="tanggallahir" class="datepicker form-control" placeholder="Masukkan Tanggal Lahir" required>
                    </div>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_tanggallahir; ?></div>
                </div>
                <div class="col-md-6 form-group">
                    <label>Alamat</label>
                    <textarea name="Alamat" class="form-control form-control-sm" required></textarea>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_Alamat; ?></div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-6 form-group">
                    <label>Prodi</label>
                    <select class="form-control form-control-sm select2" name="idProdi" required>
                        <option value="">--Pilih--</option>
                        <?php 
                            foreach($prodi as $i){
                                echo "<option value='$i->idProdi'>$i->Nama_prodi</option>";
                            }
                        ?>
                    </select>
                    <div class="text-danger ml-1 mt-1"><?php echo $validation_idProdi; ?></div>
                </div>
            </div>
            <br>
            <?php 
                $this->load->view("common/btn");
            ?>
        </form>
    </div>
</div>
