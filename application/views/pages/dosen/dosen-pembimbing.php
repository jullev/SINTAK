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
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($data_dosen as $i){
                            $mhsBimbingRows = $this->TugasAkhir_Model->getMhsBimbing($i->NIP,'rows');
                            $mhsBimbing = $this->TugasAkhir_Model->getMhsBimbing($i->NIP);
                            $panelis = $this->Seminar_model->seminarNIP('NIP_Panelis',$i->NIP)->num_rows();
                            $anggota = $this->Sidang_model->getwhere(['NIP_Anggota',$i->NIP])->num_rows();
                            $sekretaris = $this->common->getData('id_sidang','td_sidang s',['tugas_akhir ta','s.id_TA = ta.id'],['ta.Dosen_NIP' => $i->NIP],'')->num_rows();
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
                    </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
