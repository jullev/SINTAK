<div class="card shadow py-2">
	<div class="card-body">
	<?php 
		echo $this->session->flashdata('input_validation');

		if($bimbingan[0]['ttl']<6){
	?>
		<div class="alert alert-danger custom-alert">
			<span class="fa fa-exclamation-triangle sticky"></span>
			<b>Belum Bisa Mengajukan Sidang</b>
			<br>
			Note: Dapat mengajukan sidang setelah bimbingan minimal 6x.
		</div>
	<?php
		}
		else{
			$sidang = $this->common->getData('Tanggal,NIP_Anggota,jam,idruangan','td_sidang','',['id_TA' => $bimbingan[0]['id']],'')->result_array();
			if(count($sidang)==0){
	?>
			<div class="alert alert-info custom-alert">
				<span class="fab fa-fw fa-slideshare sticky"></span>
				<b>Kamu Bisa Mengajukan Sidang Sekarang!</b>
				<p class="mt-1">
				Sudah bimbingan sebanyak <?= $bimbingan[0]['ttl'] ?>x
				</p>
				<a href="<?php echo base_url() . 'sidang/ajukanSidang' ?>" class="btn btn-default confirm-alert" data-alert="Dengan menekan tombol 'Ajukan', kamu setuju akan mengajukan sidang." data-submit='Ajukan'>Ajukan Sidang</a>
			</div>
	<?php
			}
			else{
				if($sidang[0]['Tanggal']==NULL && $sidang[0]['NIP_Anggota']==NULL){
					?>
					<div class="alert alert-primary custom-alert">
						<span class="fa fa-fw fa-clock sticky"></span>
						<b>Menunggu Jadwal</b>
						<p class="mt-1">
						Pengajuan sidang kamu sedang dalam proses penentuan tanggal dan tempat.
						<br> Lengkapi berkas-berkas sidang dengan cara Download di link dibawah.
						</p>
					<a href="#" class="btn btn-default confirm-alert" >Download Berkas Sidang</a>
					</div>
					<?php
				}
				else{
					$getRuangan = $this->common->getData('Nama_ruangan','ruangan','',['idRuangan' => $sidang[0]['idruangan']],'')->result_array();
					?>
					<div class="alert alert-success custom-alert">
						<span class="fa fa-fw fa-check-circle sticky"></span>
						<b>Sidang Sudah Terjadwal</b>
						<p class="mt-2 mb-2">
						Sidang kamu sudah terjadwal dengan jadwal sebagai berikut:
						</p>
						<p class="mb-2">
							<b>Tanggal : </b> <?php echo date('d-m-Y', strtotime($sidang[0]['Tanggal'])) ?>
						</p>
						<p class="mb-2">
							<b>Jam : </b> <?php echo date('H:i', strtotime($sidang[0]['jam'])) ?> WIB
						</p>
						<p class="mb-2">
							<b>Ruangan : </b> <?php echo $getRuangan[0]['Nama_ruangan'] ?>
						</p>
					</div>
				<?php
				}
			}
		}
	?>
	</div>
</div>
