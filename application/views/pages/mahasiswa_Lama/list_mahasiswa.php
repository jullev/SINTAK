<div class="card shadow py-2">
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <a href="<?php echo base_url()."Mahasiswa/add" ?>" class="btn btn-primary mb-3"> <span class="fa fa-plus-circle"></span> Tambah Data</a>
                <a href="<?php echo base_url()."Mahasiswa/import" ?>" class="btn btn-success mb-3"> <span class="fa fa-file"></span> Import</a>
            </div>
            <div class="col-md-6 ml-auto">
                <div class="row">
                    <div class="col-md-6">
                        <select name="id_prodi" class="select2 form-control" id="id_prodi" onchange="showFilteredDataMahasiswa()">
                            <option value="">Semua Prodi</option>
                            <?php
                                foreach ($prodi as $value) {
                                    echo "<option value='".$value->idProdi."'>".$value->Nama_prodi."</option>";
                                }
                                ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select name="tahun" class="select2 form-control" id="tahun" onchange="showFilteredDataMahasiswa()">
                            <option value="">Semua Tahun</option>
                            <?php 
                                $thisYear = date("Y");
                                for($i=1;$i<=5;$i++){
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
        echo $this->session->flashdata('delete_validation');
        $this->load->view('common/msg')
        ?>
        <div class="table-responsive">
            <table id="table_mahasiswa" class="table table-striped table-hover table-bordered datatable table-custom">
                <thead>
                    <tr>
                        <td>NIM</td>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>Tahun Masuk</td>
                        <td>Prodi</td>
                        <td>Tanggal Lahir</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        showAllDataMahasiswa();
	});
    
    function showAllDataMahasiswa(){
        $("#table_mahasiswa").DataTable({
            "processing" : true,
            "serverSide" : true,
            "ajax" : "<?php echo base_url().'Mahasiswa/getAllData' ?>",
            // Mendefinisikan Column Aksi
            "columnDefs" : [{
                "targets" : -1,
                "className" : "text-center",
                render: function (data, type, row, meta) {
					// return "<a class='btn btn-sm btn-info btn-detail' href='<?php echo base_url().'index.php/Mahasiswa/' ?>'>Edit</button>"
                    // return row[0];
                    return  "<div class='dropdown dropdown-link'>"+
                                "<button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown'>Option</button>"+
                                "<div class='dropdown-menu'>"+
                                    "<a href='<?php echo base_url().'index.php/mahasiswa/edit/'?>"+row[0]+"' class='dropdown-item'>Edit</a>"+
                                    "<a href='<?php echo base_url().'index.php/mahasiswa/delete/'?>"+row[0]+"' class='dropdown-item'>Delete</a>"+
                                "</div>"+
                            "</div>"
				}
            }]
        });
    }

    function showFilteredDataMahasiswa(){
        var id_prodi = parseInt($("#id_prodi").val());
		var tahun = parseInt($("#tahun").val());


        //Clear Old Data
        $('#table_mahasiswa').DataTable().clear().destroy();

        //Show Filtered Data
        $("#table_mahasiswa").DataTable({
            "processing" : true,
            "serverSide" : true,
            // "ajax" : "<?php echo base_url().'Mahasiswa/getFilteredData?tahun='?>",
            "ajax" : {
                "url" : "<?php echo base_url().'Mahasiswa/getFilteredData'?>",
                "type" : "POST",
                "data" : {id_prodi:id_prodi, tahun:tahun}
            },
                
            // Mendefinisikan Column Aksi
            "columnDefs" : [{
                "targets" : -1,
                "className" : "text-center",
                render: function (data, type, row, meta) {
                    return  "<div class='dropdown dropdown-link'>"+
                                "<button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown'>Option</button>"+
                                "<div class='dropdown-menu'>"+
                                    "<a href='<?php echo base_url().'Mahasiswa/edit/'?>"+row[0]+"' class='dropdown-item'>Edit</a>"+
                                    "<a href='<?php echo base_url().'Mahasiswa/delete/'?>"+row[0]+"' class='dropdown-item'>Delete</a>"+
                                "</div>"+
                            "</div>"
				}
            }]
        });
    }
</script>
