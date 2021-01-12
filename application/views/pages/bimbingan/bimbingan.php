<div class="card shadow py-2">
  <div class="card-body">
    <?php
    $this->load->view("common/msg");
    echo $this->session->flashdata('update_validation');

    ?>
    <div class="table-responsive">
    <table class="table table-striped table-hover table-bordered datatable table-custom">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>NIM</td>
                        <td>Nama</td>
                        <td>Tanggal</td>
                        <td>Deskripsi</td>                        
                        <td>Data Dukung</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($bimbingan as $i){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $i->NIM; ?></td>
                        <td><?php echo $i->NAMA; ?></td>
                        <td><?php echo $i->Tanggal_bimbingan; ?></td>
                        <td><?php echo $i->Deskripsi; ?></td>
                        <td><a target="_blank" href="<?php echo base_url().'assets/berkas/bimbingan/'.$i->Data_dukung; ?>"><?php echo $i->Data_dukung; ?></a></td>
                        <td class="text-center">
                        <?php if($i->revisi==NULL){
                        ?>
                            <div class="dropdown">
                            <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Option
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a href="" class="Revisi-bimbingan dropdown-item" data-id="<?php echo $i->id_bimbingan; ?>">Revisi</a>
                              <a href="<?php echo base_url()."bimbingan/acc/".$i->id_bimbingan."?url=".base_url().'bimbingan' ?>" class="edit-bimbingan dropdown-item confirm-alert" data-submit='ACC' data-alert="Dengan menekan tombol 'ACC' bimbingan ini berstatus ACC Revisi ">ACC</a>
                            </div>
                          </div>
                        <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
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
