<div class="card shadow py-2">
	<div class="card-body">
		<a href="<?php echo base_url() . "Penentuan_tanggal_sidang" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Back to table</a>
		<?php
		//Form Validation
		//Memunculkan Pemberitahuan Sukses/Gagalnya Update
		echo $this->session->flashdata('update_validation');
		?>
		<hr>
		<form action="Penentuan_tanggal_sidang/update" method="post" id="formValidasi">
			<input type="hidden" name="id_" id="id_">
			<div class="row">
				<div class="col-md-3">
					<label for="">Tanggal</label>
					<input type="date" name="Tanggal" id="Tanggal" class="form-control">
				</div>
				<div class="col-md-3">
					<label for="">Jam</label>
					<input type="time" name="jam" id="jam" class="form-control">
				</div>
				<div class="col-md-6">
					<label for="">Panelis</label>
					<select name="NIP_Panelis" id="NIP_Panelis" class="form-control">
						<option value="">--Pilih--</option>
						<?php
						foreach ($Dosen as $i) {
							echo "<option value='$i->NIP'>$i->NAMA</option>";
						}
						?>
					</select>
				</div>
			</div>
			<div class="row mt-1">
				<div class="col-md-6">
					<label for="">Ruangan</label>
					<select name="idRuangan" id="idRuangan" class="form-control">
						<option value="">--Pilih--</option>
						<?php
						foreach ($Ruangan as $i) {
							echo "<option value='$i->idRuangan'>$i->Nama_ruangan</option>";
						}
						?>
					</select>
				</div>
				<div class="col-md-6">
					<label for="">Status</label>
					<select name="id_status" id="id_status" class="form-control">
						<option value="">--Pilih--</option>
						<?php
						foreach ($Master_status as $i) {
							echo "<option value='$i->idMaster_status'>$i->Status</option>";
						}
						?>
					</select>
				</div>
				<div class="col-md-6">
					<label for="">Nilai</label>
					<input type="text" name="Nilai" id="Nilai" class="form-control">
				</div>
				<br>
				<br>
				<?php
				$this->load->view("common/btn")
				?>
		</form>
	</div>
</div>
