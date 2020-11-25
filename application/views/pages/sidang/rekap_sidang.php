<div class="card shadow py-2">
    <div class="card-body">
    <form action="" method="get">
            <div class="row">
                <div class="col-md-3">
                    <label for="">Tahun Angkatan</label>
                    <select name="tahun" class="form-control select2" id="">
                    <option value="">Semua Tahun</option>
                        <?php 
                            // $y = (int)date("Y");
                            // $until = $y-10;
                            // for ($i=$y; $i >= $until ; $i--) { 
                            //     $selected = isset($_GET['tahun']) && $_GET['tahun']==$i ? 'selected' : '';
                            //     echo "<option $selected>$i</option>";
                            // }
                            ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="">Prodi</label>
                    <select name="id_prodi" class="form-control select2" id="">
                        <option value="">Semua Prodi</option>
                        <?php 
                            // foreach ($prodi as $key => $value) {
                            //     $selected = isset($_GET['id_prodi']) && $_GET['id_prodi']==$value['idProdi'] ? 'selected' : '';
                            //     echo "<option value='$value[idProdi]' $selected>$value[Nama_prodi]</option>";
                            // }
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
                        <td>Nilai Sidang</td>
                        <td>Nilai Total</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>1</td>
                            <td>Muhammad Irfan shidqi Laksono</td>
                            <td>E41171111 </td>
                            <td>30 </td>
                            <td>60 </td>
                            <td>90 </td>

                            <td>
                                <a role="button"  aria-controls="collapse2" data-toggle="collapse" href="#collapse2"><span class="fa fa-chevron-circle-down fa-lg solid-color"></span></a>
                            </td>
                        </tr>
                        <tr class="collapse" id="collapse2">
                            <td colspan="7">
                                <table class="table">
                                <?php 
                                        // $n = 0;
                                        // foreach ($mhsBimbing as $key => $value) {
                                        //     $n++;
                                        // $bimbingan = $this->Bimbingan_model->getTA_id($value['id'])->num_rows();
                                    ?>  
                                    <!-- cell data dosen dosen  -->
                                    <tr>
                                        <td>Pembimbing :</td>
                                        <td>Nugroho Setyo Wibowo ST MT</td>
                                    </tr>
                                    <tr>
                                        <td>Panelis :</td>
                                        <td>Ery Jullev Setyawan</td>
                                    </tr>
                                    <tr>
                                        <td>Sekretaris :</td>
                                        <td>Angga Gumilang</td>
                                    </tr>
                                    <tr>
                                        <td>Panelis :</td>
                                        <td>Zilvani Hisna</td>
                                    </tr>
                                    <tr>
                                        <!-- cell data mahasiswa -->
                                        <td colspan="2">
                                            <table class="table">
                                                <tr>
                                                    <td>Mahasiswa :</td>
                                                    <td>Muhammad Irfan shidqi Laksono</td>
                                                </tr>
                                                <tr>
                                                    <td>Judul :</td>
                                                    <td>Melakukan Sharingan Dengan Eksponensial</td>
                                                </tr>
                                                <tr>
                                                    <td>Program Studi</td>
                                                    <td>TEKNIK INFORMATIKA</td>
                                                </tr>
                                                <tr>
                                                    <td>Angkatan :</td>
                                                    <td>2018</td>
                                                </tr>
                                                <tr>
                                                    <td>Ruangan :</td>
                                                    <td>A4</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Sidang :</td>
                                                    <td>10-1-2021</td>
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
                        // } 
                        ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>