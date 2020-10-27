<div class="card shadow py-2">
    <div class="card-body">
    <a href="<?php echo base_url()."index.php/Mahasiswa" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Back to table</a>
    <hr>
        <form method="POST" action="<?php echo base_url().'index.php/Tugas_akhir/update_action' ?>">
            <?php foreach($data_mahasiswa as $data){ ?>
            <input type="hidden" name="id_" value="<?php echo $data->NIM; ?>">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>NIP</label>
                    <input type="text" class="form-control form-control-sm" name="NIP" placeholder="Masukkan NIP" value="<?php echo $data->NIM; ?>">
                </div>
                <div class="col-md-6 form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control form-control-sm" name="NAMA" placeholder="Masukkan NIDN" value="<?php echo $data->NAMA; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Tahun Masuk</label>
                    <input type="text" class="form-control form-control-sm" name="tahunmasuk" placeholder="Masukkan Nama" value="<?php echo $data->Tahun_masuk; ?>">
                </div>
                <div class="col-md-6 form-group">
                    <label>Alamat</label>
                    <textarea class="form-control form-control-sm" name="Alamat"><?php echo $data->Alamat; ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control form-control-sm" name="No_hp" placeholder="Masukkan No. HP" value="<?php echo $data->tanggallahir; ?>">
                </div>
                <div class="col-md-6 form-group">
                    <label>Roles</label>
                    <select class="form-control form-control-sm" name="idRole" required>
                        <option value="">--Pilih--</option>
                        <?php 
                            foreach($prodi as $i){
                                $selected = "";
                                if($data->idProdi == $i->Nama_prodi){
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
