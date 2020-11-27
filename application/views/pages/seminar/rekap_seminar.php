<div class="card shadow py-2">
    <div class="card-body">
    <form action="" method="post">
            <div class="row">
                <div class="col-md-3">
                    <label for="">Tahun Angkatan</label>
                    <select class="select2 form-control form-control-line" style="width: 100%;" name="angkatan" >
                        <option value="" >Pilih Angkatan </option>
                            <?php 
                            if(!empty($angkatan)){
                            foreach ($angkatan as $thn) { 
                            ?>
                                <option value="<?= $thn->Tahun_masuk ?>" <?= $filter_angkatan == $thn->Tahun_masuk ? 'selected' : '' ?> ><?= $thn->Tahun_masuk ?></option>
                            <?php 
                                }
                            } 
                            ?>
                     </select>
                </div>
                <div class="col-md-3">
                    <label for="">Prodi</label>
                    <select name="prodi" class="form-control select2" id="">
                        <option value="">Pilih Prodi</option>
                        <?php 
                            if(!empty($prodi)){
                            foreach ($prodi as $prd) { 
                            ?>
                                <option value="<?= $prd->idProdi ?>" <?= $filter_prodi == $prd->idProdi ? 'selected' : '' ?>><?= $prd->Nama_prodi ?></option>
                            <?php 
                                }
                            } 
                            ?>
                    </select>
                </div>
                <div class="col-auto">
                <br>
                    <button class="btn btn-primary mt-2"><span class="fa fa-filter"></span> Filter</button>
                </div>
            </div>
        </form>
<div class="table-responsive">
            <table class="table table-bordered table-hover table-striped datatable table-custom">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Nama Mahasiswa</td>
                        <td>NIM</td>
                        <td>Nilai Seminar</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $n = 0;
                        foreach ($rekap_seminar as $key ) {
                            $n++;
                    ?>  
                        <tr>
                            <td><?= $n ?></td>
                            <td><?= $key->nama_mahasiswa?></td>
                            <td><?= $key->NIM?> </td>
                            <td><?= $key->Nilai_penelis + $key->Nilai_pembimbing / 2 ?> </td>

                            <td>
                                <a role="button"  aria-controls="collapse<?= $n ?>" data-toggle="collapse" href="#collapse<?= $n ?>"><span class="fa fa-chevron-circle-down fa-lg solid-color"></span></a>
                            </td>
                        </tr>
                        <tr class="collapse" id="collapse<?= $n ?>">
                            <td colspan="7">
                                <table class="table">
                                
                                    <!-- cell data dosen dosen  -->
                                    <tr>
                                        <td>Nilai Pembimbing :</td>
                                        <td><?= $key->nama_pembimbing ?></td>
                                        <td><?= $key->Nilai_pembimbing?></td>
                                    </tr>
                                    <tr>
                                        <td>Nilai panelis :</td>
                                        <td><?= $key->nama_panelis?></td>
                                        <td><?= $key->Nilai_penelis?></td>
                                    </tr>
                                    <tr>
                                        <!-- cell data mahasiswa -->
                                        <td colspan="3">
                                            <hr style="border-color:red;">
                                            <table class="table">
                                                <tr>
                                                    <td>Mahasiswa :</td>
                                                    <td><?= $key->nama_mahasiswa?></td>
                                                </tr>
                                                <tr>
                                                    <td>Judul :</td>
                                                    <td><?= $key->Judul_TA?></td>
                                                </tr>
                                                <tr>
                                                    <td>Program Studi</td>
                                                    <td><?= $key->Nama_prodi?></td>
                                                </tr>
                                                <tr>
                                                    <td>Angkatan :</td>
                                                    <td><?= $key->Tahun_masuk?></td>
                                                </tr>
                                                <tr>
                                                    <td>Ruangan :</td>
                                                    <td><?= $key->Nama_ruangan?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Seminar :</td>
                                                    <td><?= $key->Tanggal?></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <?php
                                        // }
                                    ?>
                                </table>
                            </td>
                        </tr>
                        <?php 
                        } 
                        ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>