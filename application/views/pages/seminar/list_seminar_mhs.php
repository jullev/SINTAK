<div class="card shadow py-2">
	<div class="card-body">
		<?php
		if (count($data_seminar) == 0) {
		?>
			<div class="alert alert-danger custom-alert">
				<span class="fa fa-exclamation-triangle sticky"></span>
				<h1>Belum ACC Seminar</h1>
			</div>
		<?php
		} else {
		?>
			<div class="alert alert-success custom-alert">
				<span class="fas fa-laptop-code sticky"></span>
				<h2 class="font-weight-bold"><?= $data_seminar[0]["Judul_TA"] ?></h2>
			</div>
		<?php } ?>
		<div class="col-md-12">
			<div class="card-body py-2">
				<div class="row">
					<div class="col-md-12">
						<span class="fas fa-file-alt sticky">
							Deskripsi
						</span>
						<h2 class="color-primary font-weight-bold"><?= $data_seminar[0]["Deskripsi"] ?></h2>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<a href="" class="btn btn-primary"><span class="fas fa-file-upload"> Ajukan Seminar</span></a>
		<a href="" class="btn btn-success"><span class="fas fa-file-download"> Unduh Berkas Seminar</span></a>
	</div>
</div>