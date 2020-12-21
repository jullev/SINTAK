<div class="card shadow py-2">
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <a href="<?php echo base_url() . "Mahasiswa/add" ?>" class="btn btn-primary mb-3"> <span class="fa fa-plus-circle"></span> Add New Record</a>
                <a href="<?php echo base_url() . "Mahasiswa/import" ?>" class="btn btn-success mb-3"> <span class="fa fa-file"></span> Import</a>
            </div>
            <div class="col-md-6 ml-auto">
                <div class="row">
                    <div class="col-md-6">
                        <select name="id_prodi" class="select2 form-control" id="id_prodi" onchange="showFilteredDataMahasiswa()">
                            <option value="">Semua Prodi</option>
                            <?php
                            foreach ($prodi as $value) {
                                echo "<option value='" . $value->idProdi . "'>" . $value->Nama_prodi . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select name="tahun" class="select2 form-control" id="tahun" onchange="showFilteredDataMahasiswa()">
                            <option value="">Semua Tahun</option>
                            <?php
                            $thisYear = date("Y");
                            for ($i = 1; $i <= 5; $i++) {
                                $year = (int)$thisYear - $i;
                                echo "<option>$year</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <?php
        //Memunculkan Pemberitahuan Sukses/Gagalnya Delete
        echo $this->session->flashdata('input_validation');
        echo $this->session->flashdata('delete_validation');
        $this->load->view('common/msg')
        ?>
        <div class="table-responsive">
            <table id="table_mahasiswa" class="table table-striped table-hover table-bordered datatable table-custom">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>NIM</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>Alamat</td>
                        <td>Tahun Masuk</td>
                        <td>Prodi</td>
                        <td>Tanggal Lahir</td>
                        <td>Aksi</td>
                    </tr>
                <tbody id="body_mahasiswa">
                    <?php
                    $no = 1;
                    foreach ($data_mahasiswa as $i) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $i->NIM; ?></td>
                            <td><?php echo $i->NAMA; ?></td>
                            <td><?php echo $i->email; ?></td>
                            <td><?php echo $i->Alamat; ?></td>
                            <td><?php echo $i->Tahun_masuk; ?></td>
                            <td><?php echo $i->Nama_prodi; ?></td>
                            <td><?php echo $i->tanggallahir; ?></td>
                            <td class="text-center">
                                <?php
                                $dropdown['link'] = array(
                                    "Edit" => base_url() . 'Mahasiswa/edit/' . $i->NIM,
                                    "Reset Password" => base_url() . 'Mahasiswa/resetpassword/' . $i->NIM,
                                    "Delete" => base_url() . 'Mahasiswa/delete/' . $i->NIM
                                );
                                $this->load->view("common/dropdown", $dropdown);
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {

    });

    function showFilteredDataMahasiswa() {
        var id_prodi = parseInt($("#id_prodi").val());
        var tahun = parseInt($("#tahun").val());

        $.ajax({
            url: "<?php echo base_url() ?>Mahasiswa/filter",
            type: "get",
            data: {
                id_prodi: id_prodi,
                tahun: tahun
            },
            success: function(response) {
                $('#table_mahasiswa').DataTable();
                $('#body_mahasiswa').html(response);

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    }
</script>