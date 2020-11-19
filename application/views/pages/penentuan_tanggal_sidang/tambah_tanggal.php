<div class="card shadow py-2">
	<div class="card-body">
		<a href="<?php echo base_url() . "Penentuan_tanggal_sidang" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Back to table</a>
		<?php
		//Form Validation
		//Memunculkan Pemberitahuan Sukses/Gagalnya Input
		echo $this->session->flashdata('input_validation');
		?>
		<hr>
		<form method="POST" action="<?php echo base_url() . 'Penentuan_tanggal_sidang/add_action' ?>">
			<div class="row">
				<div class="col-md-12 form-group">
					<label>Nilai</label>
					<input type="num" class="form-control form-control-sm" name="Nilai" disabled>
				</div>
				<div class="col-md-12 form-group">
					<label>Tanggal</label>
					<input type="date" class="form-control form-control-sm" name="Tanggal">
				</div>
				<div class="col-md-12 form-group">
					<label>Jam</label>
					<input type="time" class="form-control form-control-sm" name="jam">
				</div>
				<div class="col-md-12 form-group">
					<label>Judul TA</label>
					<input type="text" class="form-control form-control-sm" name="id_TA" placeholder="Masukkan Judul TA">
				</div>
				<div class="col-md-12 form-group">
					<label>Dosen Panelis</label>
					<input type="text" class="form-control form-control-sm" name="NIP_Panelis" placeholder="Masukkan Nama Panelis">
				</div>
				<div class="col-md-12 form-group">
					<label>Status</label>
					<input type="text" class="form-control form-control-sm" name="id_status" placeholder="Masukkan Status">
				</div>
				<div class="col-md-12 form-group">
					<label>Ruangan</label>
					<input type="text" class="form-control form-control-sm" name="idruangan" placeholder="Masukkan Ruangan">
				</div>

			</div>
			<br>
			<?php
			$this->load->view("common/btn");
			?>
		</form>
	</div>
</div>
