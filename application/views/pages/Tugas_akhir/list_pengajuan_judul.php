<div class="card shadow py-2">
  <div class="card-body">
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
          
          echo "<pre>";
          print_r ($_SESSION);
          echo "</pre>";
          
          foreach ($data_tugas_akhir as $i) {
          ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $i->Judul_TA; ?></td>
              <td>
                <a href="#" class="open-desc" data-id="<?php echo $i->id ?>" data-url="<?php echo base_url() . 'Tugas_akhir/deskripsi' ?>">Lihat Deskripsi</a>
              </td>
              <td>
                <a href="#" class="open-abstract" data-url="<?php echo base_url() . 'Tugas_akhir/abstract' ?>" data-id="<?php echo $i->id ?>">Lihat Abstract</a>
              </td>
              <td><?php echo $i->topik; ?></td>
              <td><?php echo $i->nama_mhs; ?></td>
              <td><?php echo $i->NAMA; ?></td>
              <td><?php echo $i->status?></td>
              <td><?php echo $i->tgl_pengajuan; ?></td>
              <td class="text-center">
              <?php
               if ($_SESSION['global_role'] == 'Koordinator TA'  || $_SESSION['id_login'] == $i->Dosen_NIP) {
              ?>
                  <div class="dropdown">
                    <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Option
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <a href="#" class="pengajuan-judul dropdown-item" data-url="<?php echo base_url() . 'Tugas_akhir/getPembimbing' ?>" data-id="<?php echo $i->id ?>">Validasi</a>
                    </div>
                  </div>
                  <?php
               }
               ?>
               </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- show deskripsi -->
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
if ($_SESSION['global_role'] == 'Koordinator TA') {
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
          <form action="<?php echo base_url() . 'Tugas_akhir/validasi' ?>" method="post" class="submitConfirm" id="formValidasi">
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

                echo "<option value='" . $value->id_status . "'>" . $value->status . "</option>";
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
<?php
} else {
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
          <form action="<?php echo base_url() . 'Tugas_akhir/validasi' ?>" method="post" class="submitConfirm" id="formValidasi">
            <input type="hidden" name="id" id="id">
            <input type="hidden" name="Dosen_NIP" value="<?php echo $_SESSION['id_login'] ?>">
            <label for="" class="mt-3">Status</label>
            <select name="id_status" class="mb-3 form-control select2" id="status" style="width :100%">
              <?php
              foreach ($status as $key => $value) {

                echo "<option value='" . $value->id_status . "'>" . $value->status . "</option>";
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
<?php
}
?>