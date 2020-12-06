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
						<td>Judul</td>
						<td>Pembimbing</td>
						<td>Aksi</td>
					</tr>
				<tbody>
					<?php
					$no = 1;
					foreach ($data_seminar as $i) {
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $i->Mahasiswa_NIM ?></td>
							<td><?php echo $i->nama_mahasiswa ?></td>
							<td><?php echo $i->Judul_TA ?></td>
							<td><?php echo $i->NAMA ?></td>
							<td class="text-center">
								<div class="dropdown">
									<button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Option
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
										<a href="" class="edit-seminar dropdown-item" data-id="<?php echo $i->id_seminar ?>">Edit</a>
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


<!-- modal -->
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
				<form action="seminar/update" method="post" id="formValidasi">
					<input type="hidden" name="id_" id="id_">
					<div class="row">
						<?php
						if ($_SESSION['kode_level'] >= 3 && $_SESSION['kode_level'] <= 5) {
						?>
							<div class="col-md-12">
								<label for="">Tanggal</label>
								<input type="date" name="Tanggal" id="Tanggal" class="form-control">
							</div>
							<div class="col-md-12">
								<label for="">Jam</label>
								<input type="time" name="jam" id="jam" class="form-control">
							</div>
							<div class="col-md-12">
								<label for="">Ruangan</label>
								<select name="idruangan" id="idruangan" class="form-control select2">
									<option value="">--Pilih--</option>
									<?php
									foreach ($Ruangan as $i) {
										echo "<option value='$i->idRuangan'>$i->Nama_ruangan</option>";
									}
									?>
								</select>
							</div>

						<?php
						} elseif ($_SESSION['kode_level'] >= 6 && $_SESSION['kode_level'] <= 8) {
						?>
							<div class="col-md-12">
								<label for="">Panelis</label>
								<select name="NIP_Panelis" id="NIP_Panelis" class="form-control select2">
									<option value="">--Pilih--</option>
									<?php
									foreach ($Dosen as $i) {
										echo "<option value='$i->NIP'>$i->NAMA</option>";
									}
									?>
								</select>
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