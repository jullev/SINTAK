<div class="card shadow py-2">
	<div class="card-body">
	<?php 
		if($bimbingan[0]['ttl']<3){
	?>
		<div class="alert alert-danger custom-alert">
			<span class="fa fa-exclamation-triangle sticky"></span>
			<b>Belum Bisa Mengajukan Seminar</b>
			<br>
			Note: Dapat mengajukan seminar setelah bimbingan minimal 3x.
		</div>
	<?php
		}
		else{
			$seminar = $this->common->getData('Tanggal,NIP_Panelis,jam,Nama_ruangan','td_seminar s',['ruangan r','s.idruangan = r.idRuangan'],['id_TA' => $bimbingan[0]['id']],'')->result_array();
			if(count($seminar)==0){
	?>
			<div class="alert alert-info custom-alert">
				<span class="fab fa-fw fa-slideshare sticky"></span>
				<b>Kamu Bisa Mengajukan Seminar Sekarang!</b>
				<p class="mt-1">
				Sudah bimbingan sebanyak <?= $bimbingan[0]['ttl'] ?>x
				</p>
				<a href="<?php echo base_url() . 'seminar/ajukanSeminar' ?>" class="btn btn-default confirm-alert" data-alert="Dengan menekan tombol 'Ajukan', kamu setuju akan mengajukan seminar." data-submit='Ajukan'>Ajukan Seminar</a>
			</div>
	<?php
			}
			else{
				if($seminar[0]['Tanggal']==NULL && $seminar[0]['NIP_Panelis']==NULL){
					?>
					<div class="alert alert-primary custom-alert">
						<span class="fa fa-fw fa-clock sticky"></span>
						<b>Menunggu Jadwal</b>
						<p class="mt-1">
						Pengajuan seminar kamu sedang dalam proses penentuan tanggal dan tempat.
						<br> Lengkapi berkas-berkas seminar dengan cara Download di link dibawah.
						</p>
					<a href="#" class="btn btn-default confirm-alert" >Download Berkas Seminar</a>
					</div>
					<?php
				}
				else{
					?>
					<div class="alert alert-success custom-alert">
						<span class="fa fa-fw fa-check-circle sticky"></span>
						<b>Seminar Sudah Terjadwal</b>
						<p class="mt-2 mb-2">
						Seminar kamu sudah terjadwal dengan jadwal sebagai berikut:
						</p>
						<p class="mb-2">
							<b>Tanggal : </b> <?php echo date('d-m-Y', strtotime($seminar[0]['Tanggal'])) ?>
						</p>
						<p class="mb-2">
							<b>Jam : </b> <?php echo date('H:i', strtotime($seminar[0]['jam'])) ?> WIB
						</p>
						<p class="mb-2">
							<b>Ruangan : </b> <?php echo $seminar[0]['Nama_ruangan'] ?>
						</p>
					</div>
				<?php
				}
			}
		}
	?>
	</div>
</div>