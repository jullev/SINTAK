<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model("mahasiswa_model");
    $this->load->model("Dosen_model");
    $this->load->model("TugasAkhir_Model");
  }

  // Catatan:
  // 2 = Dosen
  // 3 = Mahasiswa

  public function index()
  {
    $this->load->view("auth/login");
  }

  function aksi_login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    //Mahasiswa
    // $username = "E41160388"
    // $password = "31011998"
    //Dosen
    // $username = "198907102019031010"
    // $password = "198907102019031010"

    $cek = 0;
    if ($this->Dosen_model->getById($username)->num_rows() == 1) { //Username Ditemukan
      $cek = 2;
      $data_login_dosen = $this->Dosen_model->getById($username)->row_array();
      $password_db = $data_login_dosen['password'];
    } else if ($this->mahasiswa_model->getById($username)->num_rows() == 1) { //Username Ditemukan
      $cek = 3;
      $data_login_mhs = $this->mahasiswa_model->getById($username)->row_array();
      $password_db = $data_login_mhs['password'];
    } else {
      $this->session->set_flashdata("message", "Username tidak terdaftar");
      echo "up";
      // die("username tidak ditemukan");
    }

    //Proses
    if ($cek > 0) {
      if (password_verify($password, $password_db)) {
        if ($cek == 2) { //Dosen
          // koordinator TA
          if ($data_login_dosen['idRole'] >= 6 && $data_login_dosen['idRole'] <= 8) {
            $getProdi = $this->Dosen_model->getProdi($data_login_dosen['idRole']);
            $data_session = array(
              'id_login'   => $data_login_dosen['NIP'],
              'username'   => $data_login_dosen['NAMA'],
              'level'      => $data_login_dosen['Role'],
              'kode_level' => $data_login_dosen['idRole'],
              'koordinator' => true,
              'kps'        => false,
              'admin_prodi' => false,
              'id_prodi'   => $getProdi->id_prodi
            );
          }
          // ketua program studi
          else if ($data_login_dosen['idRole'] >= 9 && $data_login_dosen['idRole'] <= 11) {
            $getProdi = $this->Dosen_model->getProdi($data_login_dosen['idRole']);
            $data_session = array(
              'id_login'   => $data_login_dosen['NIP'],
              'username'   => $data_login_dosen['NAMA'],
              'level'      => $data_login_dosen['Role'],
              'kode_level' => $data_login_dosen['idRole'],
              'koordinator' => false,
              'kps'        => true,
              'admin_prodi' => false,
              'id_prodi'   => $getProdi->id_prodi
            );
          }
          // admin prodi
          else if ($data_login_dosen['idRole'] >= 3 && $data_login_dosen['idRole'] <= 5) {
            $getProdi = $this->Dosen_model->getProdi($data_login_dosen['idRole']);
            $data_session = array(
              'id_login'   => $data_login_dosen['NIP'],
              'username'   => $data_login_dosen['NAMA'],
              'level'      => $data_login_dosen['Role'],
              'kode_level' => $data_login_dosen['idRole'],
              'koordinator' => false,
              'kps'        => false,
              'admin_prodi' => false,
              'id_prodi'   => $getProdi->id_prodi
            );
          } else {
            $data_session = array(
              'id_login'   => $data_login_dosen['NIP'],
              'username'   => $data_login_dosen['NAMA'],
              'level'      => $data_login_dosen['Role'],
              'kode_level' => $data_login_dosen['idRole'],
              'koordinator' => false,
              'kps'        => false,
              'admin_prodi' => false,
              'id_prodi'   => null
            );
          }
        } else if ($cek == 3) { //Mahasiswa
          $data_session = array(
            'id_login'   => $data_login_mhs['NIM'],
            'username'   => $data_login_mhs['NAMA'],
            'level'      => "Mahasiswa",
            'kode_level' => 12
          );
        }
        $this->session->set_userdata($data_session);
        echo base_url() . 'dashboard';
      } else {
        $this->session->set_flashdata("message", "Password salah");
        echo "p";
        // die("password salah");
      }
    }
  }

  public function generate_pass($redirect = "")
  {
    $mahasiswa = $this->mahasiswa_model->getAll()->result();
    // echo json_encode($mahasiswa);
    foreach ($mahasiswa as $value) {
      $this->built_pass($value->NIM);
    }
    if ($redirect != "") {
      $this->session->set_flashdata("msg", "Data Mahasiswa Berhasil Diimport");

      redirect(base_url() . $redirect);
    }
  }

  public function generate_passDosen()
  {
    $dosen = $this->Dosen_model->getAll()->result();
    // echo json_encode($mahasiswa);
    foreach ($dosen as $value) {
      $password = password_hash($value->NIP, PASSWORD_DEFAULT, array("cost" => 10));
      $this->db->where("NIP", $value->NIP);
      $this->db->update("dosen", array('password' => $password));
    }
  }

  public function built_pass($nim)
  {
    $mahasiswa = $this->mahasiswa_model->getById($nim)->row_array();
    $nim = $mahasiswa["NIM"];
    $tglpass = date("dmY", strtotime($mahasiswa["tanggallahir"]));
    $data = array(
      'password' => password_hash($tglpass, PASSWORD_DEFAULT, array("cost" => 10)),
    );
    $this->db->where("NIM", $nim);
    $this->db->update("mahasiswa", $data);
    // echo $data['password']."<br>";
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect("login");
  }
}
