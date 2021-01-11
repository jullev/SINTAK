<div class="card shadow py-2">
    <div class="card-body">
        <?php
        //Form Validation
        //Memunculkan Pemberitahuan Sukses/Gagalnya Input
        echo $this->session->flashdata('input_validation');

        //Validasi Masing-Masing Inputan
        $validation_Judul_TA = "";
        $validation_Deskripsi = "";
        $validation_Abstract = "";
        $validation_keywords = "";
        $validation_NIP = "";
        $validation_id_topik = "";
        if (!empty($this->session->flashdata('error_field'))) {
            $validation_Judul_TA = $this->session->flashdata('error_field')->Judul_TA;
            $validation_Deskripsi = $this->session->flashdata('error_field')->Deskripsi;
            $validation_Abstract = $this->session->flashdata('error_field')->Abstract;
            $validation_NIP = $this->session->flashdata('error_field')->NIP;
            $validation_id_topik = $this->session->flashdata('error_field')->id_topik;
            $validation_keywords = $this->session->flashdata('error_field')->keywords;
        }
        ?>
        <form method="POST" action="<?php if ($_SESSION['global_role'] == 'Administrator') {
        echo base_url() . 'Tugas_akhir/add_action_admin';
        } else{
            echo base_url() . 'Tugas_akhir/add_action';   
        } ?>">
            <?php
            echo validation_errors(); ?>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label>Judul Tugas Akhir</label>
                    <input type="text" class="form-control" name="Judul_TA" placeholder="Masukkan Judul Tugas Akhir" required>
                    <div class="text-danger"><?php echo $validation_Judul_TA; ?></div>
                </div>
                <div class="col-md-12 form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control " name="Deskripsi" style="height:100px;" required></textarea>
                    <div class="text-danger"><?php echo $validation_Deskripsi; ?></div>
                </div>
                <div class="col-md-12 form-group">
                    <label>Abstract</label>
                    <textarea class="form-control " name="Abstract" style="height:100px;" required></textarea>
                    <div class="text-danger"><?php echo $validation_Abstract; ?></div>
                </div>
                <div class="col-md-12 form-group">
                    <label>Keywords</label>
                    <input type="text" class="form-control" name="keywords" placeholder="Masukkan Keywords dipisah dengan komma" required>
                    <div class="text-danger"><?php echo $validation_keywords; ?></div>
                </div>
            </div>
            <div class="row">
                <?php
                if ($_SESSION['global_role'] == 'Administrator') {
                ?>
                    <div class="col-md-4 form-group">
                        <label>Dosen Pembimbing</label>
                        <select class="form-control select2" name="NIP" required>
                            <option value="">--Pilih--</option>
                            <?php
                            foreach ($dosen as $i) {
                                echo "<option value='$i->NIP'>$i->NAMA</option>";
                            }
                            ?>
                        </select>
                        <div class="text-danger"><?php echo $validation_NIP; ?></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <label>Topik</label>
                        <select class="form-control select2" name="id_topik" required>
                            <option value="">--Pilih--</option>
                            <?php
                            foreach ($Topik as $i) {
                                echo "<option value='$i->idTopik'>$i->Topik</option>";
                            }
                            ?>
                        </select>
                        <div class="text-danger"><?php echo $validation_id_topik; ?></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <label>Mahasiswa</label>
                        <select class="form-control select2" name="id_mahasiswa" required>
                            <option value="">--Pilih--</option>
                            <?php
                            foreach ($mahasiswa as $i) {
                                echo "<option value='$i->NIM'>$i->NAMA</option>";
                            }
                            ?>
                        </select>
                        <div class="text-danger"><?php echo $validation_id_topik; ?></div>
                    </div>
                <?php } else { ?>
                    <div class="col-md-6 form-group">
                        <label>Dosen Pembimbing</label>
                        <select class="form-control select2" name="NIP" required>
                            <option value="">--Pilih--</option>
                            <?php
                            foreach ($dosen as $i) {
                                echo "<option value='$i->NIP'>$i->NAMA</option>";
                            }
                            ?>
                        </select>
                        <div class="text-danger"><?php echo $validation_NIP; ?></div>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Topik</label>
                        <select class="form-control select2" name="id_topik" required>
                            <option value="">--Pilih--</option>
                            <?php
                            foreach ($Topik as $i) {
                                echo "<option value='$i->idTopik'>$i->Topik</option>";
                            }
                            ?>
                        </select>
                        <div class="text-danger"><?php echo $validation_id_topik; ?></div>
                    </div>
                <?php } ?>
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