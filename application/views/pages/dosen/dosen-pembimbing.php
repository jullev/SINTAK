<div class="card shadow py-2">
    <div class="card-body">
        <form action="" method="get">
            <div class="row">
                <div class="col-md-3">
                    <label for="">Tahun Angkatan</label>
                    <select name="tahun" class="form-control select2" id="">
                    <option value="">Semua Tahun</option>
                        <?php 
                            $y = (int)date("Y");
                            $until = $y-10;
                            for ($i=$y; $i >= $until ; $i--) { 
                                $selected = isset($_GET['tahun']) && $_GET['tahun']==$i ? 'selected' : '';
                                echo "<option $selected>$i</option>";
                            }
                            ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="">Prodi</label>
                    <select name="id_prodi" class="form-control select2" id="">
                        <option value="">Semua Prodi</option>
                        <?php 
                            foreach ($prodi as $key => $value) {
                                $selected = isset($_GET['id_prodi']) && $_GET['id_prodi']==$value['idProdi'] ? 'selected' : '';
                                echo "<option value='$value[idProdi]' $selected>$value[Nama_prodi]</option>";
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
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped table-custom">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>NIP</td>
                        <td>NIDN</td>
                        <td>Nama</td>
                        <td>Mahasiswa Bimbing</td>
                        <td>Panelis</td>
                        <td>Anggota</td>
                        <td>Sekretaris</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($data_dosen as $i){
                            $mhsBimbingRows = $this->TugasAkhir_Model->getMhsBimbing($i->NIP,'rows');
                            $mhsBimbing = $this->TugasAkhir_Model->getMhsBimbing($i->NIP);
                            $panelis = $this->Seminar_model->seminarNIP('NIP_Panelis',$i->NIP)->num_rows();
                            $anggota = $this->Seminar_model->seminarNIP('NIP_Anggota',$i->NIP)->num_rows();
                            $sekretaris = $this->Seminar_model->seminarNIP('NIP_Sekretaris',$i->NIP)->num_rows();
                            ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $i->NIP; ?></td>
                        <td><?php echo $i->NIDN; ?></td>
                        <td><?php echo $i->NAMA; ?></td>
                        <td><?php echo $mhsBimbingRows; ?></td>
                        <td><?php echo $panelis.'x'; ?></td>
                        <td><?php echo $anggota.'x'; ?></td>
                        <td><?php echo $sekretaris.'x'; ?></td>
                        <td>
                            <a role="button" aria-expanded="false" aria-controls="collapse<?= $no ?>" data-toggle="collapse" href="#collapse<?= $no ?>"><span class="fa fa-chevron-circle-down fa-lg solid-color"></span></a>
                        </td>
                    </tr>
                        <tr class="collapse" id="collapse<?= $no ?>">
                            <td colspan="9">
                                <table class="table">
                                    <tr>
                                        <td>#</td>
                                        <td>NIM</td>
                                        <td>Mahasiswa</td>
                                        <td>Tahun</td>
                                        <td>Prodi</td>
                                        <td>Judul</td>
                                        <td>Bimbingan</td>
                                        <td>Status</td>
                                    </tr>
                                    <?php 
                                        $n = 0;
                                        foreach ($mhsBimbing as $key => $value) {
                                            $n++;
                                        $bimbingan = $this->Bimbingan_model->getTA_id($value['id'])->num_rows();
                                    ?>
                                        <tr>
                                            <td><?= $n ?></td>
                                            <td><?= $value['Mahasiswa_NIM'] ?></td>
                                            <td><?= $value['NAMA'] ?></td>
                                            <td><?= $value['Tahun_masuk'] ?></td>
                                            <td><?= $value['Nama_prodi'] ?></td>
                                            <td><?= $value['Judul_TA'] ?></td>
                                            <td><?= $bimbingan ?>x</td>
                                            <td><?= $value['Status'] ?></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </table>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
