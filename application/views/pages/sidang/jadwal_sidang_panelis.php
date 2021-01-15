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
						<td>Jadwal Sidang</td>
						<td>Pembimbing</td>
						<td>Panelis</td>
						<td>Anggota</td>
						<td>Nilai Panelis</td>
						<td>Aksi</td>
					</tr>
				<tbody>
					<?php
					$no = 1;
					foreach ($jadwal_sidang as $i) {
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $i->NIM ?></td>
							<td><?php echo $i->NAMA ?></td>
							<td><?php echo $i->Judul_TA ?></td>
							<td><?php echo date('d-m-Y', strtotime($i->Tanggal)). ' ' .date('H:i', strtotime($i->jam)); ?></td>
							<td><?php echo $i->dosen_pembimbing ?></td>
							<td><?php echo $i->dosen_panelis ?></td>
							<td><?php echo $i->dosen_anggota ?></td>
							<td><?php echo $i->Nilai_panelis ?></td>
							<td width='13%'>
								<a href="" class="edit-jadwal-sidang btn btn-default" data-id="<?php echo $i->id_sidang ?>"><span class="fa fa-edit"></span> Penilaian</a>
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
				<form action="<?= base_url() ?>sidang/updateJadwalPanelis" method="post" id="formValidasi" class="submitConfirm" data-info="Apakah anda yakin untuk memberikan nilai untuk sidang tugas akhir ini?">
					<input type="hidden" name="id_" id="id_">
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