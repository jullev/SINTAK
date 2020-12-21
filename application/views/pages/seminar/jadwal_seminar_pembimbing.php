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
						<td>Jadwal Seminar</td>
						<td>Nilai Pembimbing</td>
						<td>Nilai Panelis</td>
						<td>Aksi</td>
					</tr>
					Sebagai dosen pembimbimbing, dan Dosen panelis, tampilkan seluruh jadwal yang seminar yg akan datang, dan dapat memberikan nilai. Khusus dosen panelis bisa memberikan revisi.
				<tbody>
					<?php
					print_r($_SESSION);
					$no = 1;
					foreach ($jadwal_seminar as $i) {
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $i->NIM ?></td>
							<td><?php echo $i->NAMA ?></td>
							<td><?php echo $i->Judul_TA ?></td>
							<td><?php echo $i->Tanggal . ' ' . $i->jam; ?></td>
							<td><?php echo $i->Nilai_pembimbing ?></td>
							<td><?php echo $i->Nilai_penelis ?></td>
							<td class="text-center">
								<div class="dropdown">
									<button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Option
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
										<a href="" class="edit-jadwal-seminar dropdown-item" data-id="<?php echo $i->id_seminar ?>">Edit</a>
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

<div class="modal" id="modalEdit">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h5 class="modal-title">Edit Item Seminar</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body f-15 my-3">
				<form action="<?= base_url() ?>seminar/updateJadwalPembimbing" method="post" id="formValidasi">
					<input type="hidden" name="id_" id="id_">
					<div class="row">
						<div class="col-md-12">
							<label for="">Nilai Pembimbing</label>
							<input type="number" name="Nilai_pembimbing" id="Nilai_pembimbing" class="form-control" min="0" max="100">
						</div>
					</div>

					<!-- <div class="row mt-1">

					</div> -->
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