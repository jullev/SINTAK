		<?php
		echo $this->session->flashdata('update_validation');
		echo $this->session->flashdata('delete_validation');
		?>
		<div class="table-responsive">
			<table class="table datatable table-custom">
				<thead>
					<tr>
						<td>#</td>
						<td>NIM</td>
						<td>Nama Mahasiswa</td>
						<td>Judul Tugas Akhir</td>
						<td>Jadwal Seminar</td>
						<td>Nilai Pembimbing</td>
						<td>Nilai Panelis</td>
						<td>Revisi</td>
						<td>Aksi</td>
					</tr>
				<tbody>
					<?php
					$no = 1;
					foreach ($jadwal_seminar as $i) {
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $i->NIM ?></td>
							<td><?php echo $i->NAMA ?></td>
							<td><?php echo $i->Judul_TA ?></td>
							<td><?php echo date('d-m-Y', strtotime($i->Tanggal)) . ' ' . date('H:i', strtotime($i->jam)); ?></td>
							<td><?php echo $i->Nilai_pembimbing ?></td>
							<td><?php echo $i->Nilai_panelis ?></td>
							<td><?php echo $i->revisi ?></td>
							<td width='13%'>
								<?php if(strtotime($i->Tanggal)>=strtotime(date('Y-m-d'))){?>
								<a href="" class="edit-jadwal-seminar btn btn-default" data-id="<?php echo $i->id_seminar ?>"><span class="fa fa-edit"></span> Penilaian</a>
								<?php } else{ echo '-'; } ?>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>


<div class="modal" id="modalEdit">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h5 class="modal-title">Penilaian Panelis</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body f-15 my-3">
				<form action="<?= base_url() ?>seminar/updateJadwalPanelis" method="post" id="formValidasi">
					<input type="hidden" name="id_" id="id_" value="">
					<div class="row">
						<div class="col-md-12 mb-3">
							<label for="">Nilai Panelis</label>
							<input type="number" name="Nilai_panelis" id="Nilai_panelis" class="form-control" min="0" max="100">
						</div>
						<div class="col-md-12 mb-3">
							<label for="">Revisi</label>
							<textarea name="revisi" class="form-control" rows="5"></textarea>
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
</div>