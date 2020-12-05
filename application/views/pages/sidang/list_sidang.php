<div class="card shadow py-2">
  <div class="card-body">
    <?php
    echo $this->session->flashdata('update_validation');
    echo $this->session->flashdata('delete_validation');
    ?>
    <div class="table-responsive">
      1. Jika mahasiswa, akan menampilkan judul yg di acc beserta deskripsinya, dan tombol untuk submit atau pengajuan sidang, jika sudah submit, munculkan status pengajuan sidang dan munculkan tombol download berkas2 sidang
      2. Jika admin prodi, tampilkan seluruh list pengajuan sidang berdasarkan prodi dan ada menu untuk edit, hanya bisa mengedit/menentukan waktu dan tempat.
      3. Jika koordinator TA, tampilkan seluruh list pengajuan sidang berdasarkan prodi dan ada menu untuk edit, hanya bisa mengedit/menentukan anggota.
      <table class="table table-striped table-hover table-bordered datatable table-custom">
        <thead>
          <tr>
            <td>#</td>
            <td>Mhs.</td>
            <td>Judul TA</td>
            <td>Deskripsi</td>
            <td>Ruangan</td>
            <td>Tgl. Waktu</td>
            <td>Panelis</td>
            <td>Pembimbing</td>
            <td>Status</td>
            <td>Nilai</td>
            <td>Aksi</td>
          </tr>
        </thead>
        <tbody>
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

<div class="modal" id="modalEdit">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Edit Item Sidang</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body f-15 my-3">
        <form action="sidang/update" method="post" id="formValidasi">
          <input type="hidden" name="id_" id="id_">
          <div class="row">
            <div class="col-md-3">
              <label for="">Tanggal</label>
              <input type="date" name="Tanggal" id="Tanggal" class="form-control">
            </div>
            <div class="col-md-3">
              <label for="">Jam</label>
              <input type="time" name="jam" id="jam" class="form-control">
            </div>
            <div class="col-md-6">
              <label for="">Panelis</label>
              <select name="NIP_Panelis" id="NIP_Panelis" class="form-control">
                <option value="">--Pilih--</option>
                <?php
                foreach ($Dosen as $i) {
                  echo "<option value='$i->NIP'>$i->NAMA</option>";
                }
                ?>
              </select>
            </div>
          </div>
          <div class="row mt-1">
            <div class="col-md-6">
              <label for="">Ruangan</label>
              <select name="idRuangan" id="idRuangan" class="form-control">
                <option value="">--Pilih--</option>
                <?php
                foreach ($Ruangan as $i) {
                  echo "<option value='$i->idRuangan'>$i->Nama_ruangan</option>";
                }
                ?>
              </select>
            </div>
            <div class="col-md-6">
              <label for="">Status</label>
              <select name="id_status" id="id_status" class="form-control">
                <option value="">--Pilih--</option>
                <?php
                foreach ($Master_status as $i) {
                  echo "<option value='$i->idMaster_status'>$i->Status</option>";
                }
                ?>
              </select>
            </div>
            <div class="col-md-6">
              <label for="">Nilai</label>
              <input type="text" name="Nilai" id="Nilai" class="form-control">
            </div>
          </div>
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