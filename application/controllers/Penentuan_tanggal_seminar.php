<?php
defined("BASEPATH") or die("No Direct Access Allowed");

class Penentuan_tanggal_seminar extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Tanggal_seminar_model');
		$this->load->model('TugasAkhir_model');
		$this->load->model('Ruangan_model');
		$this->load->model('Dosen_model');
		$this->load->model('Status_model');
		$this->icon = "fa-calendar";
	}
	function index()
	{
		$param['pageInfo'] = "List Seminar";
		if ($_SESSION['kode_level'] == 8) {
			$param['data_seminar'] = $this->Tanggal_seminar_model->getWhere(["Mahasiswa_NIM" => $_SESSION['id_login']])->result();
		} else {
			$param['data_seminar'] = $this->Tanggal_seminar_model->getAll()->result();
		}
		//Mengambil Data Dari Tabel Master
		$param['Dosen'] = $this->Dosen_model->getAll()->result();
		$param['Ruangan'] = $this->Ruangan_model->getAll()->result();
		$param['Master_status'] = $this->Status_model->getAllDataForSeminar()->result();
		$this->template->load("common/template", "pages/penentuan_tanggal_seminar/list_penentuan_tanggal", $param);
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
			if ($this->Tanggal_seminar_model->save($data)) {
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
		$data = $this->Tanggal_seminar_model->getById($_GET['id_seminar'])[0];
		header("content-type:json/application");
		echo json_encode($data);
	}
	function update()
	{
		$id = $this->input->post('id_');
		$data = array(
			'Tanggal' => $this->input->post('Tanggal'),
			'jam' => $this->input->post('jam'),
			'NIP_Panelis' => $this->input->post('NIP_Panelis'),
			'idRuangan' => $this->input->post('idRuangan'),
			'id_status' => $this->input->post('id_status'),
			'Nilai' => $this->input->post('Nilai'),
		);
		if ($this->Tanggal_seminar_model->update($id, $data)) {
			//Flash Message Sukses
			$this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Seminar Berhasil Diupdate</div>");
		} else {
			//Flash Message Gagal
			$this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Seminar Gagal Diupdate</div>");
		}
		redirect(base_url() . 'Penentuan_tanggal_seminar');
	}

	function delete($id = "")
	{
		$cekId = $this->Tanggal_seminar_model->getWhere(["id_seminar" => $id, "Mahasiswa_NIM" => $_SESSION['id_login']])->num_rows();
		if ($cekId == 1) {

			if ($this->Tanggal_seminar_model->delete($id)) {
				//Flash Message Sukses
				$this->session->set_flashdata("delete_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Seminar Berhasil Dihapus</div>");
			} else {
				//Flash Message Gagal
				$this->session->set_flashdata("delete_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Seminar Gagal Dihapus </div>");
			}
			redirect(base_url() . 'Penentuan_tanggal_seminar');
		} else {
			show_404();
		}
	}
}
