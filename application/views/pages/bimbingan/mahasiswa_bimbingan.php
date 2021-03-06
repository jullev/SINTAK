				<?php
          echo $this->session->flashdata('input_validation');
          echo $this->session->flashdata('update_validation');
          echo $this->session->flashdata('delete_validation');
          if($_SESSION['global_role']=='Mahasiswa' && $TA_id!=0){
            $status = $this->common->getData('id_status','tugas_akhir','',['id' => $TA_id],'')->result_array()[0];
            if($status['id_status']!=11){
        ?>
        <div class="row mb-2">
          <div class="col-md-3">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalDesc">Catat Bimbingan</button>
          </div>
        </div>
        <?php } } ?>
        <div class="table-responsive">
            <table class="table datatable table-custom">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Tanggal</td>
                        <td>Deskripsi</td>                        
                        <td>Data Dukung</td>
                        <td>Revisi</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($data_bimbingan as $i){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $i->Tanggal_bimbingan; ?></td>
                        <td><?php echo $i->Deskripsi; ?></td>
                        <td><a target="_blank" href="<?php echo base_url().'assets/berkas/bimbingan/'.$i->Data_Dukung; ?>"><?php echo $i->Data_Dukung; ?></a></td>
                        <td><?=($i->revisi == NULL) ? 'Belum Revisi' : $i->revisi ?></td>
                        <td class="text-center">
                        <?php 
                          if($_SESSION['global_role']=='Mahasiswa' && $i->revisi==NULL){
                        ?>
                          <div class="dropdown">
                            <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Option
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <a href="" class="edit-bimbingan dropdown-item" data-id="<?php echo $i->id_bimbingan; ?>">Edit</a>
                              <a href="<?php echo base_url().'index.php/bimbingan/delete/'.$i->id_bimbingan; ?>" class="dropdown-item confirm">Delete</a>
                            </div>
                          </div>
                          <?php } else if(isDospem() && $i->revisi==NULL){ ?>
                            <div class="dropdown">
                            <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Option
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a href="" class="Revisi-bimbingan dropdown-item" data-id="<?php echo $i->id_bimbingan; ?>">Revisi</a>
                            <a href="<?php echo base_url()."bimbingan/acc/".$i->id_bimbingan."?url=".base_url().'bimbingan/TugasAkhir/'.$TA_id ?>" class="edit-bimbingan dropdown-item confirm-alert" data-submit='ACC' data-alert="Dengan menekan tombol 'ACC' bimbingan ini berstatus ACC Revisi ">ACC</a>
                            </div>
                          </div>
                          <?php } else{ echo "-";} ?>
												</td>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
<div class="modal" id="modalDesc">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Catat Bimbingan</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body f-15">
        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url().'bimbingan/add_action' ?>">
          <input type="hidden" name="TA_id" value="<?php echo $TA_id; ?>">
          <div class="row">
            <div class="col-md-12">
              <label for="">Tanggal</label>
              <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><span class="fa fa-calendar"></span></span>
                </div>
              <input type="text" class="datepicker form-control" name="Tanggal_bimbingan" placeholder="Masukkan Tanggal Bimbingan" >
            </div>

              <br>
            </div>
            <div class="col-md-12">
              <label for="">Deskripsi</label>
              <textarea name="deskripsi" id="deskripsi" class="form-control" style="height:75px;" placeholder="Masukkan Deskripsi" required></textarea>
              <br>
            </div>
            <div class="col-md-12">
              <label for="">Data Dukung</label>
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" name="data_dukung" placeholder="Masukkan Data Dukung">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
              <small class="text-dafault font-italic">Allowed File Format : jpg|png|jpeg|pdf|xls|xlsx|doc|docx|txt</small>
            </div>
          </div>
          <br>
          <?php 
						$this->load->view("common/btn")
					?>
        </form>
      </div>
    </div>
      </div>
    </div>


<div class="modal" id="modalEdit">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Update Bimbingan</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body f-15 my-3">
				<form method="post" enctype="multipart/form-data" action="<?php echo base_url().'Bimbingan/update_action' ?>" id="formValidasi">
          <div>
          <input type="hidden" name="Bimbingan_ID" id="Bimbingan_ID">
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="">Tanggal</label>
              <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><span class="fa fa-calendar"></span></span>
                </div>
              <input type="text" class="datepicker form-control" name="e_Tanggal_bimbingan" id="e_Tanggal_bimbingan" placeholder="Masukkan Tanggal Bimbingan" required>
            </div>
            <br>
            </div>
            <div class="col-md-12">
              <label for="">Deskripsi</label>
              <textarea name="e_deskripsi" id="e_deskripsi" class="form-control" style="height:75px;" placeholder="Masukkan Deskripsi" required></textarea>
            <br>
            </div>
            <div class="col-md-12">
              <label for="">Data Dukung</label>
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" name="e_data_dukung" placeholder="Masukkan Data Dukung">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
              <small class="text-dafault font-italic">Allowed File Format : jpg|png|jpeg|pdf|xls|xlsx|doc|docx|txt</small>
              <br>
              <small class="text-dafault font-italic">*Hanya Digunakan Untuk Mengganti File Lama</small>
            </div>
          </div>
					<br>
					<?php 
						$this->load->view("common/btn")
					?>
				</form>
      </div>
    </div>
  </div>
</div>

<!-- --------- modal revisi ------------- -->
<div class="modal" id="modalRevisi">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Revisi Bimbingan</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body f-15 my-3">
				<form method="post" enctype="multipart/form-data" action="<?php echo base_url().'Bimbingan/revisi_action' ?>" id="formValidasi">
          <div>
          <input type="hidden" name="Bimbingan_ID" id="Bimbingan_ID">
          </div>
          <div class="row">

            <div class="col-md-12">
              <label for="">Revisi</label>
              <textarea name="revisi_dosen" id="revisi_dosen" class="form-control" style="height:75px;" placeholder="Masukkan Deskripsi" required></textarea>
            <br>
            </div>

          </div>
					<br>
					<?php 
						$this->load->view("common/btn")
					?>
				</form>
      </div>
    </div>
  </div>
</div>

