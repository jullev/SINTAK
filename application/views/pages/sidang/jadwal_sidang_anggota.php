<div class="card shadow py-2">
	<div class="card-body">
		<?php
		echo $this->session->flashdata('update_validation');
		echo $this->session->flashdata('delete_validation');
		?>
		Sebagai dosen pembimbimbing, Dosen panelis dan Dosen anggota, tampilkan seluruh jadwal yang sidang yg akan datang, dan dapat memberikan nilai. Khusus dosen panelis bisa memberikan revisi dan dosen pembimbing/sekretaris penelis memberikan 2 nilai, yaitu nilai bimbingan dan nilai sidang.
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered datatable table-custom">
				<thead>
					<tr>
						<td>#</td>
						<td>NIM</td>
						<td>Nama Mahasiswa</td>
						<td>Judul Tugas Akhir</td>
						<td>Jadwal Sidang</td>
						<td>Nilai</td>
						<td>Aksi</td>
					</tr>
				<tbody>
					<?php
					print_r($_SESSION);
					$no = 1;
					foreach ($jadwal_sidang as $i) {
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $i->NIM ?></td>
							<td><?php echo $i->NAMA ?></td>
							<td><?php echo $i->Judul_TA ?></td>
							<td><?php echo $i->Tanggal . ' ' . $i->jam; ?></td>
							<td><?php echo $i->Nilai_anggota; ?></td>
							<td class="text-center">
								<div class="dropdown">
									<button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Option
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
										<a href="" class="edit-jadwal-sidang dropdown-item" data-id="<?php echo $i->id_sidang ?>">Edit</a>
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
				<h5 class="modal-title">Edit Item Sidang</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body f-15 my-3">
				<form action="<?= base_url() ?>sidang/updateJadwalAnggota" method="post" id="formValidasi">
					<input type="hidden" name="id_" id="id_">
					<div class="row">
						<div class="col-md-12">
							<label for="">Nilai Anggota</label>
							<input type="text" name="Nilai_Anggota" id="Nilai_Anggota" class="form-control" min="1" max="100">
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