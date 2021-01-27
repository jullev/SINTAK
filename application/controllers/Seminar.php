<?php
class Seminar extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        date_default_timezone_set('Asia/Jakarta');

		$this->load->model('Seminar_model');
		$this->load->model('TugasAkhir_model');
		$this->load->model('Ruangan_model');
		$this->load->model('Dosen_model');
		$this->load->model('Status_model');
		$this->load->model('Mahasiswa_model');
		$this->load->helper(array('form', 'url'));
		$this->icon = "fa-calendar";
	}
	function index()
	{
		$param['pageInfo'] = "List Seminar";
		if ($_SESSION['global_role'] == "Admin Prodi") {
			$param['data_seminar'] = $this->common->getData("s.id_seminar, m.NAMA as nama_mahasiswa, ta.Mahasiswa_NIM, ta.Judul_TA, d.NAMA", "td_seminar s", ["tugas_akhir ta", "s.id_TA = ta.id", "mahasiswa m", "ta.Mahasiswa_NIM = m.NIM", "dosen d", "d.NIP = ta.Dosen_NIP"], ['Tanggal' => NULL, 'm.Prodi_idProdi' => $_SESSION['id_prodi']], "")->result();
			//Mengambil Data Dari Tabel Master
			$param['Dosen'] = $this->Dosen_model->getAll()->result();
			$param['Ruangan'] = $this->Ruangan_model->getAll()->result();
			$param['Master_status'] = $this->Status_model->getAllDataForSeminar()->result();
		} elseif ($_SESSION['global_role'] == "Koordinator TA") {
			//Mengambil Data Dari Tabel Master
			$param['Dosen'] = $this->Dosen_model->getAll()->result();
			$param['Ruangan'] = $this->Ruangan_model->getAll()->result();
			$param['Master_status'] = $this->Status_model->getAllDataForSeminar()->result();
			$param['data_seminar'] = $this->common->getData("s.id_seminar, m.NAMA as nama_mahasiswa, ta.Mahasiswa_NIM, ta.Judul_TA, d.NAMA", "td_seminar s", ["tugas_akhir ta", "s.id_TA = ta.id", "mahasiswa m", "ta.Mahasiswa_NIM = m.NIM", "dosen d", "ta.Dosen_NIP = d.NIP"], ['NIP_Panelis' => NULL, 'm.Prodi_idProdi' => $_SESSION['id_prodi']], "")->result();
		} elseif ($_SESSION['global_role'] == "Mahasiswa") {
			$param['bimbingan'] = $this->common->getData("count(id_bimbingan) ttl, ta.id", "td_bimbingan b", ["tugas_akhir ta", "b.Tugas_akhir_id=ta.id"], ['Mahasiswa_NIM' => $_SESSION['id_login']], "")->result_array();
		}

		if ($_SESSION['global_role'] == "Mahasiswa") {
			$this->template->load("common/template", "pages/Seminar/list_seminar_mhs", $param);
		} else {
			$this->template->load("common/template", "pages/Seminar/list_seminar", $param);
		}
	}

	function ajukanSeminar()
	{
		//
		$param = $this->common->getData("ta.id", "tugas_akhir ta", ["mahasiswa m", "ta.Mahasiswa_NIM = m.NIM"], ['Mahasiswa_NIM' => $_SESSION['id_login']], "")->result_array();
		// print_r($param[0]['id']);
		$insert = $this->common->insert("td_seminar", ['id_TA' => $param[0]['id'],'status_revisi' => '']);
		if($insert){
			$this->common->update('tugas_akhir',['id_status' => 5],['id' => $param[0]['id']]);
			//Flash Message Sukses
			$this->session->set_flashdata("input_validation", "<div class='alert alert-success'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Pengajuan Seminar Berhasil</div>");
			redirect('pengajuan-seminar');
		}
		else{
			show_404();
		}
	}

	function rekap_seminar()
	{
		$nim = $this->session->userdata('id_login');
		$prodi = $this->input->post('prodi');
		$angkatan = $this->input->post('angkatan');

		// kondisi ketika  filter digunakan / tidak. pada rekap seminar
		if ($prodi != "" && $angkatan != "") {
			$param['rekap_seminar'] = $this->Seminar_model->getRekapSeminar($angkatan, $prodi)->result();
			$param['filter_angkatan'] = $angkatan;
			$param['filter_prodi'] = $prodi;
		} else {
			$param['rekap_seminar'] = $this->Seminar_model->getRekapSeminar()->result();
			$param['filter_angkatan'] = '';
			$param['filter_prodi'] = '';
		}
		$param['angkatan'] = $this->Mahasiswa_model->getAngkatan()->result();
		$param['prodi'] = $this->Seminar_model->getProdi()->result();
		$param['pageInfo'] = "Rekap Seminar";
		$this->template->load("common/template", "pages/Seminar/rekap_seminar", $param);
	}
	function add()
	{
		$param['pageInfo'] = "Pengajuan Seminar";
		//Mengambil NIM Login Mahasiswa
		$nim = $this->session->userdata('id_login');
		//Mengambil Data Tugas Akhir Berdasarkan NIM Mahasiswa
		$param['TA'] = $this->TugasAkhir_model->getByNim($nim)->result();

		$this->template->load("common/template", "pages/seminar/pengajuan_seminar", $param);
	}

	function add_action()
	{
		$config = array(
			array(
				'field' => 'Judul_TA',
				'label' => 'Judul Tugas Akhir',
				'rules' => 'required',
				"errors" => [
					'required' => '%s Harus Dipilih',
				],
			)
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == TRUE) { //Jika validasi Form Berhasil
			$data = array(
				'id_TA' => $this->input->post('Judul_TA'),
				'status_revisi' => '',
			);
			if ($this->Seminar_model->save($data)) {
				//Flash Message Sukses
				$this->common->update('tugas_akhir',['id_status' => 5],['id' => $data['id_TA']]);
				$this->session->set_flashdata("input_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Pengajuan Seminar Berhasil</div>");
			} else {
				//Flash Message Gagal
				$this->session->set_flashdata("input_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Pengajuan Seminar Gagal</div>");
			}
		} else {
			$error_field = new stdClass();
			$error_field->Judul_TA = form_error('Judul_TA');
			$this->session->set_flashdata("error_field", $error_field);
		}

		redirect('seminar/add');
	}

	function edit()
	{
		$data = $this->Seminar_model->getById($_GET['id_seminar'])[0];
		header("content-type:json/application");
		echo json_encode($data);
	}

	function update()
	{
		$id = $this->input->post('id_');
		$seminar = $this->common->getData('Tanggal,NIP_Panelis','td_seminar','',["id_seminar" => $id],'')->result_array();
		if (count($seminar) == 1) {
			$sendTele = false;
			if ($_SESSION['global_role'] == "Admin Prodi") {
				$data = array(
					'Tanggal' => $this->input->post('Tanggal'),
					'jam' => $this->input->post('jam'),
					'idRuangan' => $this->input->post('idruangan'),
				);
				if($seminar[0]['NIP_Panelis']!=NULL){
					$sendTele = true;
				}
			} elseif ($_SESSION['global_role'] == "Koordinator TA") {
				$data = array(
					'NIP_Panelis' => $this->input->post('NIP_Panelis'),
				);
				if($seminar[0]['Tanggal']!=NULL){
					$sendTele = true;
				}
			}
			if ($this->Seminar_model->update($id, $data)) {
				//Flash Message Sukses
				$this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Seminar Berhasil Diupdate</b></div>");
				$getIdTA = $this->common->getData('id_TA','td_seminar','',['id_seminar' => $id],'')->result_array()[0];
				$chatId = $this->common->getChatId('mahasiswa',['id' => $getIdTA['id_TA']],true);
				if($chatId!=0 && $sendTele){
					$this->common->update('tugas_akhir',['id_status' => 6],['id' => $getIdTA['id_TA']]);

					$getRuangan = $this->common->getData('Nama_ruangan','ruangan','',['idRuangan' => $_POST['idruangan']],'')->result_array();
					$send = urlencode("<b>Jadwal Seminar</b>\n<b>Tanggal :</b> ".date('d-m-Y',strtotime($_POST['Tanggal']))."\n<b>Jam :</b> ".date('H:i', strtotime($_POST['jam']))." WIB\n<b>Tempat :</b> ".$getRuangan[0]['Nama_ruangan']);
					sendTele($chatId,$send);
				}
			} else {
				//Flash Message Gagal
				$this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Seminar Gagal Diupdate</b></div>");
			}
			redirect(base_url() . 'pengajuan-seminar');
		} else {
			show_404();
		}
	}

	function delete($id = "")
	{
		$cekId = $this->Seminar_model->getWhere(["id_seminar" => $id, "Mahasiswa_NIM" => $_SESSION['id_login']])->num_rows();
		if ($cekId == 1) {

			if ($this->Seminar_model->delete($id)) {
				//Flash Message Sukses
				$this->session->set_flashdata("delete_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Seminar Berhasil Dihapus</div>");
			} else {
				//Flash Message Gagal
				$this->session->set_flashdata("delete_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Seminar Gagal Dihapus </div>");
			}
			redirect(base_url() . 'seminar');
		} else {
			show_404();
		}
	}

	//jadwal seminar
	function jadwalSeminarPanelis()
	{

		$param['pageInfo'] = "Jadwal Seminar Panelis";
		$param['jadwal_seminar'] = $this->Seminar_model->getFilterDosenPanelis($_SESSION['id_login']);
		$this->template->load("common/template", "pages/Seminar/jadwal_seminar_panelis", $param);
	}

	function jadwalSeminarPembimbing()
	{

		$param['pageInfo'] = "Jadwal Seminar Pembimbing";
		$param['jadwal_seminar'] = $this->Seminar_model->getFilterDosen($_SESSION['id_login']);
		$this->template->load("common/template", "pages/Seminar/jadwal_seminar_pembimbing", $param);
	}

	function editJadwal()
	{
		$data = $this->Seminar_model->getById($_GET['id_seminar'])[0];
		header("content-type:json/application");
		echo json_encode($data);
	}

	function updateJadwalPanelis()
	{
		$id = $this->input->post('id_');
		$seminar = $this->common->getData('Nilai_pembimbing','td_seminar','',["id_seminar" => $id],'')->result_array();
		if (count($seminar) == 1 /* && isDospem() */) {
			$data = array(
				'Nilai_panelis' => $this->input->post('Nilai_panelis'),
				'revisi' => $this->input->post('revisi'),
			);
			if ($this->Seminar_model->update($id, $data)) {
				if($seminar[0]['Nilai_pembimbing']!=0){
					$getIdTA = $this->common->getData('id_TA','td_seminar','',['id_seminar' => $id],'')->result_array()[0];
					$chatId = $this->common->getChatId('mahasiswa',['id' => $getIdTA['id_TA']],true);
					if($chatId!=0){
						$send = urlencode("<b>Nilai Seminar</b>\n<b>Nilai Pembimbing :</b> ".$seminar[0]['Nilai_pembimbing']."\n<b>Nilai Panelis :</b> ".$_POST['Nilai_panelis']."\n<b>Revisi :</b> ".$_POST['revisi']);
						sendTele($chatId,$send);
					}
				}

				//Flash Message Sukses
				$this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Seminar Berhasil Diupdate</b></div>");
			} else {
				//Flash Message Gagal
				$this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Seminar Gagal Diupdate<b></div>");
			}
			redirect(base_url() . 'jadwal-seminar-panelis');
		}
		else {
			show_404();
		}
	}

	function updateJadwalPembimbing()
	{
		$id = $this->input->post('id_');
		$nilai = $this->input->post('Nilai_pembimbing');
		$seminar = $this->common->getData('Nilai_panelis,revisi','td_seminar','',["id_seminar" => $id],'')->result_array();

		if (count($seminar) == 1 && isDospem()) {
			$data = array(
				'Nilai_pembimbing' => $nilai,
			);
			$input = $this->Seminar_model->update($id, $data);
			if ($input) {
				if($seminar[0]['Nilai_panelis']!=0){
					$getIdTA = $this->common->getData('id_TA','td_seminar','',['id_seminar' => $id],'')->result_array()[0];
					$chatId = $this->common->getChatId('mahasiswa',['id' => $getIdTA['id_TA']],true);
					if($chatId!=0){
						$send = urlencode("<b>Nilai Seminar</b>\n<b>Nilai Pembimbing :</b> ".$nilai."\n<b>Nilai Panelis :</b> ".$seminar[0]['Nilai_panelis']."\n<b>Revisi :</b> ".$seminar[0]['revisi']);
						sendTele($chatId,$send);
					}
				}
				//Flash Message Sukses
				$this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Seminar Berhasil Diupdate</b></div>");
			} else {
				//Flash Message Gagal
				$this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Seminar Gagal Diupdate</b></div>");
			}
			redirect(base_url() . 'jadwal-seminar-pembimbing');
		} else {
			show_404();
		}
	}

	//revisi seminar
	function revisiSeminar()
	{
		$param['pageInfo'] = "Revisi Seminar";
		$nip = $_SESSION['id_login'];
		if ($_SESSION['global_role'] == "Mahasiswa") {
			$param['revisi_seminar'] = $this->Seminar_model->getFilterMhs();
			$this->template->load("common/template", "pages/Seminar/revisi_seminar_mhs", $param);
		} else {
			$param['revisi_seminar'] = $this->common->getData("s.id_seminar, m.NIM, d.NAMA dosen_pembimbing,s.NIP_Panelis, m.NAMA as nama_mahasiswa, ta.Mahasiswa_NIM, ta.Judul_TA, s.lampiran_revisi, s.revisi, s.status_revisi", "td_seminar s", ["tugas_akhir ta", "s.id_TA = ta.id", "mahasiswa m", "ta.Mahasiswa_NIM = m.NIM", "dosen d", "d.NIP = ta.Dosen_NIP"], "s.NIP_Panelis = '$nip' or ta.Dosen_NIP = '$nip' and s.Nilai_panelis != 0 and s.Nilai_pembimbing != 0 and s.status_revisi != 'acc' ", "")->result();
			$this->template->load("common/template", "pages/Seminar/revisi_seminar_dsn", $param);
		}
	}

	function editSeminar()
	{
		$data = $this->Seminar_model->getById($_GET['id_seminar'])[0];
		header("content-type:json/application");
		echo json_encode($data);
	}

	function updateRevisiSeminarMhs()
	{

		$id = $this->input->post('id_');
		$post = $this->input->post();
		$cekId = $this->Seminar_model->getWhere(["id_seminar" => $id])->num_rows();
		$data = [];
		if ($cekId == 1) {
			if ($_SESSION['global_role'] == 'Mahasiswa') {
				$dir_file = realpath(APPPATH . '../assets/berkas/seminar/');
				$ori_name = pathinfo($_FILES['lampiran_revisi']['name'], PATHINFO_FILENAME);
				$name_file = $_FILES['lampiran_revisi']['name'];
				$extension_file = substr($name_file, strpos($name_file, '.'), strlen($name_file) - 1);
				$nm_file_revisi =  $id . '_' . $ori_name . '_'  . '_' . time() . $extension_file;
				$tmp_file = $_FILES['lampiran_revisi']['tmp_name'];


				if (isset($_FILES['lampiran_revisi'])) { //Jika validasi Form Berhasil
					move_uploaded_file($tmp_file, $dir_file . '/' . $nm_file_revisi);
					$data = array(
						'id_seminar' => $id,
						'lampiran_revisi' => $nm_file_revisi,
						'status_revisi' => 'pending'
					);
				}
			}
			if ($this->Seminar_model->update($id, $data)) {
				//Flash Message Sukses
				$this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Seminar Berhasil Diupdate</b></div>");
			} else {
				//Flash Message Gagal
				$this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Seminar Gagal Diupdate</b></div>");
			}
			redirect(base_url() . 'revisi-seminar');
		} else {
			show_404();
		}
	}

	public function updateRevisiSeminarDsn()
	{
		$id = $this->input->post('id_');
		$cekId = $this->Seminar_model->getWhere(["id_seminar" => $id])->num_rows();

		if ($cekId == 1 /* && isDospem()*/) {
			$data = array(
				'status_revisi' => $this->input->post('status_revisi'),
			);
			if ($this->Seminar_model->update($id, $data)) {
				//Flash Message Sukses
				$getIdTA = $this->common->getData('id_TA','td_seminar','',['id_seminar' => $id],'')->result_array()[0];
				$chatId = $this->common->getChatId('mahasiswa',['id' => $getIdTA['id_TA']],true);
				if($chatId!=0){
					$send = urlencode("<b>Revisi Seminar</b>\n<b>Status Revisi :</b> ".ucwords($_POST['status_revisi']));
					sendTele($chatId,$send);
				}

				$this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Seminar Berhasil Diupdate</b></div>");
			} else {
				//Flash Message Gagal
				$this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Seminar Gagal Diupdate</b></div>");
			}
			redirect(base_url() . 'revisi-seminar');
		}
		else {
			show_404();
		}
	}
}
