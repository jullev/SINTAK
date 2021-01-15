<div class="card shadow py-2">
    <div class="card-body">
        <?php
        echo $this->session->flashdata('update_validation');
        echo $this->session->flashdata('delete_validation');
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered datatable table-custom">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>NIM</td>
                        <td>Nama Mahasiswa</td>
                        <td>Judul Tugas Akhir</td>
                        <td>Dosen Pembimbing</td>
                        <td>Catatan Revisi</td>
                        <td>Lampiran Revisi</td>
                        <td>Status Revisi</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($revisi_sidang as $i) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $i->NIM ?></td>
                            <td><?php echo $i->nama_mahasiswa ?></td>
                            <td><?php echo $i->Judul_TA ?></td>
                            <td><?php echo $i->dosen_pembimbing ?></td>
                            <td><?php echo $i->revisi ?></td>
                            <td>
                                <a href="<?= assetUrl() . 'berkas/sidang/' . $i->lampiran_revisi; ?>" target="_blank">
                                    <?php echo $i->lampiran_revisi ?>
                                </a>
                            </td>
                            <td><?php echo $i->status_revisi=='' ? 'Belum Revisi' : ucwords($i->status_revisi) ?></td>
                            <td width="10%">
                            <?php 
                                if($i->NIP_Panelis==$_SESSION['id_login']){
                            ?>
                                <a href="" class="edit-sidang btn btn-default" data-id="<?php echo $i->id_sidang ?>"><span class="fa fa-edit"></span> Edit</a>

                            <?php } else { echo "-"; } ?>
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

<div class="modal" id="modalEdit">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Edit Item Sidang</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body f-15 my-3">
                <form action="<?= base_url() ?>sidang/updateRevisisidangDsn" method="post" id="formValidasi">
                    <input type="hidden" name="id_" id="id_">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Status Revisi</label>
                            <select name="status_revisi" id="status_revisi" class="form-control select2">
                                <option value="">--Pilih--</option>
                                <option value="pending">Pending</option>
                                <option value="acc">ACC Revisi</option>
                            </select>
                        </div>
                    </div>

                    <!-- <div class="row mt-1">

					</div> -->
                    <?php
                    $this->load->view("common/btn")
                    ?>
                </form>
            </div>
        </div>
    </div>