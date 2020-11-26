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
				<h1><?= $data_seminar[0]["Judul_TA"] ?></h1>
			</div>
		<?php } ?>

	</div>
</div>
