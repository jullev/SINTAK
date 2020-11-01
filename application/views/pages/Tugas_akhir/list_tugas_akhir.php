<div class="card shadow py-2">
  <div class="card-body">
    <?php
    if ($_SESSION['kode_level'] == 1) {
    ?>
      <a href="<?php echo base_url() . "Tugas_akhir/add" ?>" class="btn btn-primary mb-3"> <span class="fa fa-plus-circle"></span> Add New Record</a>
    <?php } ?>
    <?php
    $this->load->view("common/msg")
    ?>
    <div class="table-responsive">
      <table class="table table-striped table-hover table-bordered datatable table-custom">
        <thead>
          <tr>
            <td>#</td>
            <td>Judul Tugas Akhir</td>
            <td>Deskripsi</td>
            <td>Abstract</td>
            <td>Topik</td>
            <td>Mahasiswa</td>
            <td>Pembimbing</td>
            <td>Status</td>
            <td>Tanggal Pengajuan</td>
            <td>Aksi</td>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($data_tugas_akhir as $i) {
          ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $i->Judul_TA; ?></td>
              <td>
                <a href="" class="open-desc" data-id="<?php echo $i->id ?>">Lihat deskripsi</a>
              </td>
              <td>
                <a href="" class="open-desc" data-id="<?php echo $i->id ?>">Lihat Abstract</a>
              </td>
              <td><?php echo $i->topik; ?></td>
              <td><?php echo $i->nama_mhs; ?></td>
              <td><?php echo $i->NAMA; ?></td>
              <td><?php echo $i->Status; ?></td>
              <td><?php echo $i->tgl_pengajuan; ?></td>
              <td class="text-center">
                <div class="dropdown">
                  <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Option
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <?php
                    if ($_SESSION['kode_level'] == 7) {
                    ?>
                      <a href="#" class="edit-ta dropdown-item" data-id="<?php echo $i->id ?>">Validasi</a>
                    <?php } else if ($_SESSION['kode_level'] == 2 || ($_SESSION['kode_level'] == 8 && $i->id_status != 1)) {
                    ?>
                      <a href="<?php echo base_url() . 'bimbingan/TugasAkhir/' . $i->id; ?>" class="dropdown-item">Bimbingan</a>
                    <?php } ?>
                  </div>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="modal" id="modalDesc">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Modal Heading</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body f-15">

      </div>
    </div>
  </div>
</div>
<?php
if ($_SESSION['kode_level'] == 7) {
?>

  <div class="modal" id="modalEdit">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title">Validasi Judul</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body f-15 my-3">
          <form action="Tugas_akhir/validasi" method="post" class="submitConfirm" id="formValidasi">
            <input type="hidden" name="id" id="id">
            <label for="">Dosen Pembimbing</label>
            <select name="Dosen_NIP" class="form-control select2" id="dosen" style="width :100%">
              <?php
              foreach ($dosen as $key => $value) {
                echo "<option value='" . $value->NIP . "'>" . $value->NAMA . "</option>";
              }
              ?>
            </select>
            <label for="" class="mt-3">Status</label>
            <select name="id_status" class="mb-3 form-control select2" id="status" style="width :100%">
              <?php
              foreach ($status as $key => $value) {

                echo "<option value='" . $value->idMaster_status . "'>" . $value->Status . "</option>";
              }
              ?>
            </select>
            <br>
            <br>
            <?php
            $this->load->view("common/btn")
            ?>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>