<?php
class Seminar extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Seminar_model');
		$this->load->model('TugasAkhir_model');
		$this->load->model('Ruangan_model');
		$this->load->model('Dosen_model');
		$this->load->model('Status_model');
		$this->load->model('Mahasiswa_model');
		$this->icon = "fa-calendar";
	}
	function index()
	{
		$param['pageInfo'] = "List Seminar";
		if ($_SESSION['kode_level'] >= 3 && $_SESSION['kode_level'] <= 5) {
			$param['data_seminar'] = $this->common->getData("s.id_seminar, m.NAMA as nama_mahasiswa, ta.Mahasiswa_NIM, ta.Judul_TA, d.NAMA", "td_seminar s", ["tugas_akhir ta", "s.id_TA = ta.id", "mahasiswa m", "ta.Mahasiswa_NIM = m.NIM", "dosen d", "d.NIP = ta.Dosen_NIP"], ['Tanggal' => NULL, 'm.Prodi_idProdi' => $_SESSION['id_prodi']], "")->result();
		} elseif ($_SESSION['kode_level'] >= 6 && $_SESSION['kode_level'] <= 8) {
			$param['data_seminar'] = $this->common->getData("s.id_seminar, m.NAMA as nama_mahasiswa, ta.Mahasiswa_NIM, ta.Judul_TA, d.NAMA", "td_seminar s", ["tugas_akhir ta", "s.id_TA = ta.id", "mahasiswa m", "ta.Mahasiswa_NIM = m.NIM", "dosen d", "d.NIP = ta.Dosen_NIP"], ['NIP_Panelis' => NULL, 'm.Prodi_idProdi' => $_SESSION['id_prodi']], "")->result();
		} elseif ($_SESSION['kode_level'] == 12) {
			$param['data_seminar'] = $this->common->getData("ta.Judul_TA, ta.Deskripsi, ta.Mahasiswa_NIM, m.NAMA", "tugas_akhir ta", ["mahasiswa m", "ta.Mahasiswa_NIM = m.NIM"], ['Mahasiswa_NIM' => $_SESSION['id_login'], 'tgl_ACC !=' => NULL], "")->result_array();
			print_r($_SESSION);
		}
		//Mengambil Data Dari Tabel Master
		$param['Dosen'] = $this->Dosen_model->getAll()->result();
		$param['Ruangan'] = $this->Ruangan_model->getAll()->result();
		$param['Master_status'] = $this->Status_model->getAllDataForSeminar()->result();
		if ($_SESSION['kode_level'] == 12) {
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
		$this->common->insert("td_seminar", ['id_TA' => $param[0]['id']]);
		//Flash Message Sukses
		$this->session->set_flashdata("input_validation", "<div class='alert alert-success'>
		        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Pengajuan Seminar Berhasil</div>");
		redirect('seminar');
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
				'id_TA' => $this->input->post('Judul_TA')
			);
			if ($this->Seminar_model->save($data)) {
				//Flash Message Sukses
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
		$cekId = $this->Seminar_model->getWhere(["id_seminar" => $id])->num_rows();
		if ($cekId == 1) {
			if ($_SESSION['kode_level'] >= 3 && $_SESSION['kode_level'] <= 5) {
				$data = array(
					'Tanggal' => $this->input->post('Tanggal'),
					'jam' => $this->input->post('jam'),
					'idRuangan' => $this->input->post('idRuangan'),
				);
			} elseif ($_SESSION['kode_level'] >= 6 && $_SESSION['kode_level'] <= 8) {
				$data = array(
					'NIP_Panelis' => $this->input->post('NIP_Panelis'),
				);
			}
			if ($this->Seminar_model->update($id, $data)) {
				//Flash Message Sukses
				$this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Seminar Berhasil Diupdate</div>");
			} else {
				//Flash Message Gagal
				$this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Seminar Gagal Diupdate</div>");
			}
			redirect(base_url() . 'Seminar');
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
	function jadwalSeminar()
	{

		$param['pageInfo'] = "Jadwal Seminar";
		$param['jadwal_seminar'] = $this->Seminar_model->getFilterDosen($_SESSION['id_login']);
		print_r($param);
		//		$this->template->load("common/template", "pages/Seminar/jadwal_seminar", $param);
	}

	function editJadwal()
	{
		$data = $this->Seminar_model->getById($_GET['id_seminar'])[0];
		header("content-type:json/application");
		echo json_encode($data);
	}

	function updateJadwal()
	{
		$id = $this->input->post('id_');
		$cekId = $this->Seminar_model->getWhere(["id_seminar" => $id])->num_rows();
		if ($cekId == 1) {
			if ($_SESSION['kode_level'] >= 3 && $_SESSION['kode_level'] <= 5) {
				$data = array(
					'Nilai_pembimbing' => $this->input->post('Nilai_pembimbing'),
				);
			} elseif ($_SESSION['kode_level'] >= 6 && $_SESSION['kode_level'] <= 8) {
				$data = array(
					'Nilai_penelis' => $this->input->post('Nilai_penelis'),
					'revisi' => $this->input->post('revisi'),
				);
			}
			if ($this->Seminar_model->update($id, $data)) {
				//Flash Message Sukses
				$this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Seminar Berhasil Diupdate</div>");
			} else {
				//Flash Message Gagal
				$this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Seminar Gagal Diupdate</div>");
			}
			redirect(base_url() . 'Seminar');
		} else {
			show_404();
		}
	}

	//revisi seminar
	function revisiSeminar()
	{
		$param['pageInfo'] = "Revisi Seminar";
		$nip = $_SESSION['id_login'];
		if ($_SESSION['kode_level'] == 12) {
			$param['revisi_seminar'] = $this->Seminar_model->getFilterMhs();
			$this->template->load("common/template", "pages/Seminar/revisi_seminar", $param);
			// } elseif ($_SESSION['kode_level'] == $nip) {
			// 	$param['revisi_seminar'] = $this->Seminar_model->getFilterDospem();
			// 	$this->template->load("common/template", "pages/Seminar/revisi_seminar", $param);
		} else {
			$param['revisi_seminar'] = $this->Seminar_model->getFilterDosen();
			$this->template->load("common/template", "pages/Seminar/revisi_seminar", $param);
		}
	}
}
