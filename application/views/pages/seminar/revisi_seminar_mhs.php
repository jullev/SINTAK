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
                        <td>Judul Tugas Akhir</td>
                        <td>Catatan Revisi</td>
                        <td>Status Revisi</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($revisi_seminar as $i) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $i->Judul_TA ?></td>
                            <td><?php echo $i->revisi ?></td>
                            <td><?php echo $i->status_revisi=='' ? 'Belum Revisi' : ucwords($i->status_revisi) ?></td>
                            <td>
                                <a href="" class="edit-seminar btn btn-default" data-id="<?php echo $i->id_seminar ?>"><span class="fa fa-upload"></span> Upload Revisi</a>
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
                <?= form_open_multipart('Seminar/updateRevisiSeminarMhs'); ?>

                <input type="hidden" name="id_" id="id_">
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Upload Data Pendukung Revisi Seminar</label>
                        <input type="file" name="lampiran_revisi" id="lampiran_revisi" class="form-control">
                    </div>
                </div>

                <!-- <div class="row mt-1">

					</div> -->
                <br>
                <br>
                <?php
                $this->load->view("common/btn")
                ?>
                <?= form_close() ?>
            </div>
        </div>
    </div>