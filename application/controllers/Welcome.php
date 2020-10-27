<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('TugasAkhir_Model');
        $this->load->model('Topik_model');
        $this->load->model('Prodi_model');
	}
	public function index()
	{
		$param['topik'] = $this->Topik_model->getAll()->result();
        $param['ta'] = $this->TugasAkhir_Model->getAll()->result();
        $param['prodi'] = $this->Prodi_model->getAll()->result();
		$this->load->view("pages/home", $param);
	}
	public function filter()
	{
		if(isset($_GET['id_topik']) && isset($_GET['id_prodi'])){
			$ta = $this->TugasAkhir_Model->getAll(["id_topik" => $_GET['id_topik'], "mahasiswa.Prodi_idProdi" => $_GET['id_prodi']])->result();
			header("content-type:json/application");
			echo json_encode($ta);
		}
		else if(isset($_GET['key'])){
			$ta = $this->TugasAkhir_Model->getAll("",$_GET['key'])->result();
			header("content-type:json/application");
			echo json_encode($ta);
		}
		else{
			echo "error";
		}
	}
}
