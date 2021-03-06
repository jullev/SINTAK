<!DOCTYPE html>
<html lang="en">
<?php
if (empty($_SESSION['id_login'])) {
	redirect(base_url() . 'login');
}
?>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<?php
	$uri = !empty($this->uri->segment(2)) ? $this->uri->segment(2) : $this->uri->segment(1);
	$pageTitle = ucwords(str_replace(["_",'-'], " ", $uri));
	?>
	<title><?php echo $pageTitle . " - " . $pageInfo ?></title>

	<!-- Custom fonts for this template-->
	<link href="<?php echo assetUrl() ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
	<!-- Custom styles for this template-->
	<link href="<?php echo assetUrl() ?>css/sb-admin-2.min.css" rel="stylesheet" />
	<link href="<?php echo assetUrl() ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="<?php echo assetUrl() ?>vendor/select2-develop/dist/css/select2.min.css" rel="stylesheet" />
	<link href="<?php echo assetUrl() ?>vendor/sweetalert-master/dist/sweetalert.css" rel="stylesheet" />
	<link href="<?php echo assetUrl() ?>vendor/bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" />
	<link href="<?php echo assetUrl() ?>css/custom.css" rel="stylesheet" />
	<script src="<?php echo assetUrl() ?>vendor/jquery/jquery.min.js"></script>
</head>

<body id="page-top">
	<span id="baseUrl" data-url="<?php echo base_url() ?>"></span>
	<!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Sidebar -->
		<div class="left-sidebar">
			<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
				<!-- Sidebar - Brand -->
				<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
					<div class="sidebar-brand-icon">
						<i class="fas fa-desktop"></i>
					</div>
					<div class="sidebar-brand-text mx-3">Sintak <sup>JTI</sup></div>
				</a>

				<!-- Nav Item - Dashboard -->
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url() . 'dashboard' ?>">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span></a>
				</li>
				<?php
				if ($_SESSION['global_role'] != 'Dosen Pembimbing' && isDospem()) {
				?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url() . 'dashboard/dospem' ?>">
							<i class="fas fa-fw fa-tachometer-alt"></i>
							<span>Dashboard Dospem</span></a>
					</li>
				<?php } ?>
				<?php
				if (isDospem() || $_SESSION['global_role'] == 'Mahasiswa' || $_SESSION['global_role']=='Koordinator TA' || $_SESSION['global_role']=='Admin Prodi' || $_SESSION['global_role']=='KPS') {
				?>
					<li class="nav-item">
						<?php
						if ($_SESSION['global_role'] == 'Mahasiswa') {
							$cekAcc = $this->common->getData("id",'tugas_akhir','',['Mahasiswa_NIM' => $_SESSION['id_login'],'tgl_ACC !=' => NULL],'')->num_rows();
							if($cekAcc==0){
						?>
							<a class="nav-link" href="<?php echo base_url() . "pengajuan-judul" ?>">
								<i class="fas fa-fw fa-envelope-open-text"></i>
								<span>Pengajuan Judul</span></a>
						<?php
						}} else {
						?>
							<a class="nav-link" href="<?php echo base_url() . "pengajuan-judul/" ?>">
								<i class="fas fa-fw  fa-envelope-open-text"></i>
								<span>Pengajuan Judul</span></a>
						<?php
						}
						?>
						<!---
              1. Jika mahasiswa tampilkan form untuk menambah pengajuan judul
              2. Jika Dosen, tampilkan seluruh list mahasiswa bimbingan dan judul yg diajukan, dan dosen dapat melakukan acc atau tidak
            -->
					</li>
				<?php } ?>
				<?php
				if ($_SESSION['global_role'] == 'Mahasiswa' || $_SESSION['global_role'] == 'Koordinator TA' || isDospem()) {
				?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url() . "Tugas_akhir" ?>">
							<i class="fas fa-fw fa-laptop-code"></i>
							<span>Tugas Akhir</span></a>
						<!-- 
              1. Jika  mahasiswa, tampilkan seluruh submit tugas akhir berdasarkan mahasiswa login
              2. Jika dosen pembimbing tampilkan seluruh judul tugas akhir berdasarkan mahasiswa bimbingan, dan dapat melakukan acc seminar, dan sidang jika memenuhi syarat bimbingan(misal 3x)
            -->
					</li>
				<?php } ?>

				<?php
				if ($_SESSION['global_role'] == 'Mahasiswa' || isDospem()) {
				?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url() . "bimbingan/" ?>">
							<i class="fas fa-fw fa-chalkboard-teacher"></i>
							<span>
							<?php 
								if(isDospem()){
									echo "Bimbingan Baru ";
/* 									$bimbinganBaru = $this->common->getData('id_bimbingan','td_bimbingan b',['tugas_akhir ta','b.Tugas_akhir_id = ta.id'],['revisi' => NULL,'ta.Dosen_NIP' => $_SESSION['id_login']],'')->num_rows();
									echo $bimbinganBaru!=0 ? "<span class='badge badge-yellow color-white'>$bimbinganBaru</span>" : "";
 */								}
								else{
									echo "Bimbingan";
								}
							?>
							</span></a>
						<!--- 
              1. Jika mahasiswa tampilkan daftar riwayat bimbingan
              2. Jika dosen pembimbing, munculkan list submit bimbingan, order by id  desc
            -->
					</li>
				<?php } ?>
				<?php
				if ($_SESSION['global_role'] == 'Koordinator TA') {
				?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url() . 'pantau-bimbingan' ?>">
							<i class="fas fa-fw fa-headset"></i>
							<span>Pantau Bimbingan</span></a>
						<!---
              menu koordinator
            -->
					</li>
				<?php } ?>
				<?php
				if ($_SESSION['global_role'] != 'Administrator') {
				?>
					<li class="nav-item">
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseTwo">
							<i class="fab fa-fw fa-slideshare"></i>
							<span>Seminar</span>
						</a>
						<div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
							<div class="py-2 collapse-inner rounded">
								<?php
								if ($_SESSION['global_role'] == 'Mahasiswa' || $_SESSION['global_role'] == 'Admin Prodi' || $_SESSION['global_role']=='Koordinator TA') {
								?>
									<a class="nav-link" href="<?php echo base_url() . "pengajuan-seminar" ?>">Pengajuan Seminar</a>
									<!-- 
                1. Jika mahasiswa, akan menampilkan judul yg di acc beserta deskripsinya, dan tombol untuk submit atau pengajuan seminar, setelah submit, munculkan tombol download berkas2 seminar
                2. Jika admin prodi, tampilkan seluruh list pengajuan seminar berdasarkan prodi dan ada menu untuk edit, hanya bisa mengedit/menentukan waktu dan tempat.
                3. Jika koordinator TA, tampilkan seluruh list pengajuan seminar berdasarkan prodi dan ada menu untuk edit, hanya bisa mengedit/menentukan panelis.
              -->
								<?php } ?>
								<?php
								if ($_SESSION['global_role'] != 'Administrator' && $_SESSION['global_role'] != 'Mahasiswa') {
								?>
									<a class="nav-link" href="<?php echo base_url() . "jadwal-seminar-pembimbing" ?>">Jadwal Seminar Pembimbing</a>
									<a class="nav-link" href="<?php echo base_url() . "jadwal-seminar-panelis" ?>">Jadwal Seminar Panelis</a>
									<!-- 
				1.	Menu jadwal seminar hanya untuk dosen pembimbing dan dosen panelis
                2.	Sebagai dosen pembimbimbing, dan Dosen panelis, tampilkan seluruh jadwal yang seminar yg akan datang, dan dapat memberikan nilai. Khusus dosen panelis bisa memberikan revisi.
              -->
								<?php } ?>
								<?php
								if ($_SESSION['global_role'] != 'Administrator' || $_SESSION['global_role'] == 'Admin Prodi') {
								?>
									<a class="nav-link" href="<?php echo base_url() . "revisi-seminar" ?>">Revisi Seminar</a>
									<!-- 
                1. Jika mahasiswa, akan melihat status revisi dan menampilkan form upload utk revisi
                2. Jika panelis, bisa melihat dan mengACC revisi
                3. Jika dosen pembimbing, bisa melihat revisi
              -->
								<?php } ?>
							</div>
						</div>
					</li>
				<?php } ?>
				<?php
				if ($_SESSION['global_role'] != 'Administrator') {
				?>
					<li class="nav-item">
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseTwo">
							<i class="fas fa-fw fa-graduation-cap"></i>
							<span>Sidang</span>
						</a>
						<div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
							<div class="py-2 collapse-inner rounded">
								<?php
								if ($_SESSION['global_role'] == 'Mahasiswa') {
								?>
									<a class="nav-link" href="<?php echo base_url() . "pengajuan-sidang" ?>">Pengajuan Sidang</a>
									<a class="nav-link" href="<?php echo base_url() . "revisi-sidang" ?>">Revisi Sidang</a>
									<!-- 
                1. Jika mahasiswa, akan menampilkan judul yg di acc beserta deskripsinya, dan tombol untuk submit atau pengajuan sidang, jika sudah submit, munculkan status pengajuan sidang dan munculkan tombol download berkas2 sidang
                2. Jika admin prodi, tampilkan seluruh list pengajuan sidang berdasarkan prodi dan ada menu untuk edit, hanya bisa mengedit/menentukan waktu dan tempat.
                3. Jika koordinator TA, tampilkan seluruh list pengajuan sidang berdasarkan prodi dan ada menu untuk edit, hanya bisa mengedit/menentukan anggota.
			-->
								<?php } else{ if($_SESSION['global_role']=='Koordinator TA' || $_SESSION['global_role']=='Admin Prodi'){?>
									<a class="nav-link" href="<?php echo base_url() . "pengajuan-sidang" ?>">Pengajuan Sidang</a>
								<?php } ?>
									<!-- <a class="nav-link" href="<?php echo base_url() . "Sidang/jadwalSidang" ?>">Jadwal Sidang</a> -->
									<a class="nav-link" href="<?php echo base_url() . "jadwal-sidang-pembimbing" ?>">Jadwal Sidang Pembimbing</a>
									<a class="nav-link" href="<?php echo base_url() . "jadwal-sidang-panelis" ?>">Jadwal Sidang Panelis</a>
									<a class="nav-link" href="<?php echo base_url() . "jadwal-sidang-anggota" ?>">Jadwal Sidang Anggota</a>
									<a class="nav-link" href="<?php echo base_url() . "revisi-sidang" ?>">Revisi Sidang</a>
									<!-- 
              Sebagai dosen pembimbimbing, Dosen panelis dan Dosen anggota, tampilkan seluruh jadwal yang sidang yg akan datang, dan dapat memberikan nilai. Khusus dosen panelis bisa memberikan revisi dan dosen pembimbing/sekretaris panelis memberikan 2 nilai, yaitu nilai bimbingan dan nilai sidang.
            -->
								<?php } ?>
							</div>
						</div>
					</li>
				<?php } ?>
				<?php
				if ($_SESSION['global_role'] == 'Admin Prodi' || $_SESSION['global_role'] == 'Koordinator TA' || $_SESSION['global_role']=='KPS') {
				?>
					<li class="nav-item">
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseTwo">
							<i class="fas fa-fw fa-file-excel"></i>
							<span>Rekap</span>
						</a>
						<div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
							<div class="py-2 collapse-inner rounded">
								<a class="nav-link" href="<?php echo base_url() . "rekap-nilai" ?>">Rekap Nilai</a>
								<a class="nav-link" href="<?php echo base_url() . "rekap-sidang" ?>">Rekap Sidang</a>
								<a class="nav-link" href="<?php echo base_url() . "rekap-seminar" ?>">Rekap Seminar</a>
							</div>
						</div>
					</li>
				<?php } ?>



				<!-- Nav Item - Pages Collapse Menu -->
				<?php
				if ($_SESSION['global_role'] == 'Administrator') {
				?>
					<li class="nav-item">
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							<i class="fas fa-fw fa-database"></i>
							<span>Data Master</span>
						</a>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
							<div class="py-2 collapse-inner rounded">
								<a class="nav-link" href="<?php echo base_url() . "Dosen" ?>">Dosen</a>
								<a class="nav-link" href="<?php echo base_url() . "Mahasiswa" ?>">Mahasiswa</a>
								<a class="nav-link" href="<?php echo base_url() . "Topik" ?>">Topik</a>
								<a class="nav-link" href="<?php echo base_url() . "Ruangan" ?>">Ruangan</a>
							</div>
						</div>
					</li>
				<?php } ?>


				<!-- Sidebar Toggler (Sidebar) -->
				<div class="text-center mt-3 d-none d-md-inline">
					<button class="rounded-circle border-0" id="sidebarToggle"></button>
				</div>
			</ul>
		</div>
		<!-- End of Sidebar -->
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>

						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'] ?></span>
								<img class="img-profile rounded-circle" src="<?php echo assetUrl() . "img/default.png" ?>">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="<?php echo base_url()."profile" ?>">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid common-container">

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<div class="h4 mb-0 solid-color font-weight-bold">
							<?php
							echo ucwords(str_replace(["_",'-'], " ", $this->uri->segment(1)));
							?>
						</div>
						<div class="float-right info-text-page">
							<a href="#"> <?php echo $pageTitle ?></a>
							<span class="ml-2 mr-2">/</span>
							<a href="#"> <?php echo $pageInfo ?></a>
						</div>
					</div>
					<div class="row pb-5">
						<div class="col-md-12">
							<?php echo $contents; ?>
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->
			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Sintak JTI <?= date('Y') ?></span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->
	</div>
	<!-- End of Page Wrapper -->

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					Select "Logout" below if you are ready to end your current session.
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">
						Cancel
					</button>
					<a class="btn btn-primary" href="<?php echo base_url() . "login/logout" ?>">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin untuk keluar?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					Tekan tombol keluar untuk keluar.
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">
						Batal
					</button>
					<a class="btn btn-primary" href="<?php echo base_url() . "/login/logout" ?>">Keluar</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo assetUrl() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="<?php echo assetUrl() ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo assetUrl() ?>js/sb-admin-2.min.js"></script>
	<script src="<?php echo assetUrl() ?>vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo assetUrl() ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo assetUrl() ?>vendor/select2-develop/dist/js/select2.min.js"></script>
	<script src="<?php echo assetUrl() ?>vendor/sweetalert-master/dist/sweetalert-dev.js"></script>
	<script src="<?php echo assetUrl() ?>vendor/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="<?php echo assetUrl() ?>js/custom.js"></script>
</body>

</html>