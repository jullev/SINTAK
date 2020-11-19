<div class="card shadow py-2">
    <div class="card-body">
    <!-- disini -->
    <?php if($_SESSION['kode_level']==2){ ?>
    <div class="col-md-3 col-sm-12">
        <div class="form-group">
            <select class="select2 form-control form-control-line" style="width: 100%;" id="filter_angkatan" >
            <option value="" data-angkatan="">~ Cari Angkatan ~</option>
            <?php 
            if(!empty($angkatan)){
            foreach ($angkatan as $thn) { ?>

                <option value="" data-angkatan="<?= $thn->Tahun_masuk ?>"><?= $thn->Tahun_masuk ?></option>

            <?php 
                }
            } ?>
            </select>
        </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped table-hover table-bordered datatable table-custom" id="dataTable">
        <thead>
          <tr>
            <td>#</td>
            <td>Judul Tugas Akhir</td>
            <td>Topik</td>
            <td>Mahasiswa</td>
            <td>Pembimbing</td>
            <td>Status</td>
            <td>Tanggal Pengajuan</td>
            <td>Jumlah Bimbingan</td>
            <td>Angkatan</td>
          </tr>
        </thead>
        <tbody>
          <?php
          if(!empty($data_tugas_akhir)){
          $no = 1;
          foreach ($data_tugas_akhir as $i) {
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $i->Judul_TA; ?></td>
              <td><?= $i->topik; ?></td>
              <td><?= $i->nama_mhs; ?></td>
              <td><?= $i->NAMA; ?></td>
              <td><?= $i->Status; ?></td>
              <td><?= $i->tgl_pengajuan; ?></td>
              <td><?= $i->total_bimbingan; ?> Kali Bimbingan</td>
              <td><?= $i->Tahun_masuk; ?></td>
            </tr>
          <?php }
          } ?>
        </tbody>
      </table>
    </div>
    <?php  } ?>
    </div>
</div>
