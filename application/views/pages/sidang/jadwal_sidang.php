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
						<td>Dospem</td>
						<td>Dospan</td>
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
							<td><?php echo $i->dosen_pembimbing ?></td>
							<td><?php echo $i->dosen_panelis ?></td>
							<td class="text-center">
								<div class="dropdown">
									<button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Option
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
										<a href="" class="edit-sidang dropdown-item" data-id="<?php echo $i->id_sidang ?>">Edit</a>
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
				<form action="sidang/update_jadwal" method="post" id="formValidasi">
					<input type="hidden" name="id_" id="id_">
					<div class="row">
						<?php
						if ($_SESSION['id_login'] = $i->dosen_pembimbing) {
						?>
							<div class="col-md-12">
								<label for="">Nilai Pembimbing</label>
								<input type="text" name="Nilai_pembimbing" id="Nilai_pembimbing" class="form-control">
							</div>
						<?php
						} elseif ($_SESSION['id_login'] = $i->dosen_panelis) {
						?>
							<div class="col-md-12">
								<label for="">Nilai Panelis</label>
								<input name="Nilai_penelis" id="Nilai_penelis" class="form-control">
							</div>
							<div class="col-md-12">
								<label for="">Revisi</label>
								<input type="text" name="revisi" id="revisi" class="form-control">
							</div>
						<?php
						}
						?>
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