    <?php 
        echo $this->session->flashdata('input_validation');
        $this->load->view("common/msg");
        if(isset($cekAcc) && $cekAcc==0 || count((array)$data_tugas_akhir)==0){
          $this->load->view('common/empty');
          if($_SESSION['global_role']=='Mahasiswa'){
            if(count($statusTA)==0 || $statusTA[0]['id_status']==3){
    ?>
    <div class="text-center">
      <a href="<?php echo base_url() . "Tugas_akhir/add" ?>" class="btn btn-primary mb-3"> <span class="fas fa-fw fa-envelope-open-text"></span> Ajukan Judul</a>
    </div>
    <?php } } } else{ ?>
    <div class="table-responsive">
      <table class="table datatable table-custom">
        <thead>
          <tr>
            <td>#</td>
            <td>Judul Tugas Akhir</td>
            <td>Deskripsi</td>
            <td>Abstract</td>
            <td>Topik</td>
            <td>Mahasiswa</td>
            <td>Pembimbing</td>
            <td>Bimbingan</td>
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
                <a href="#" class="open-desc" data-id="<?php echo $i->id ?>" data-url ="<?php echo base_url().'Tugas_akhir/deskripsi'?>">Lihat Deskripsi</a>
              </td>
              <td>
                <a href="#" class="open-abstract" data-url ="<?php echo base_url().'Tugas_akhir/abstract'?>" data-id="<?php echo $i->id ?>">Lihat Abstract</a>
              </td>
              <td><?php echo $i->topik; ?></td>
              <td><?php echo $i->nama_mhs; ?></td>
              <td><?php echo $i->NAMA; ?></td>
              <td><?php echo $i->total_bimbingan; ?>x</td>
              <td class="text-center">
                <?php
                if ($_SESSION['global_role'] == 'Mahasiswa' || $_SESSION['global_role'] == 'Koordinator TA' || $_SESSION['global_role'] == 'Dosen Pembimbing' || $_SESSION['global_role'] == 'KPS') {
                    ?>
                  <div class="dropdown">
                    <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Option
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a href="<?php echo base_url() . 'bimbingan/TugasAkhir/' . $i->id; ?>" class="dropdown-item">Bimbingan</a>
                    </div>
                  </div>
                <?php } ?>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
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
  if ($_SESSION['global_role']=='Koordinator TA') {
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
<?php } } ?>