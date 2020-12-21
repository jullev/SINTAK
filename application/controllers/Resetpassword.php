<?php
defined("BASEPATH") or die("No Direct Access Allowed");

Class Resetpassword extends CI_controller{
  function __construct(){
    parent::__construct();
    $this->load->model("Mahasiswa_model");
    $this->load->model("Dosen_model");
  }

  public function index()
  {
    $this->load->view("auth/reset_password");
  }

  public function resetPassword()
  {
      $email = $this->input->post('email');

      $cek = 0;
      if($this->Dosen_model->getByEmail($email)->num_rows() == 1){ //Username Ditemukan
        $cek = 2;
        $dosen = $this->Dosen_model->getByEmail($email)->row_array();

      }else if($this->Mahasiswa_model->getByEmail($email)->num_rows() == 1){ //Username Ditemukan
        $cek = 3;
        $mhs = $this->Mahasiswa_model->getByEmail($email)->row_array();

      }else{
        $this->session->set_flashdata("message","Email tidak terdaftar");
  			echo "u";
  			// die("username tidak ditemukan");
      }

      if($cek > 0){
          if($cek == 2){ //Dosen
            $password = $dosen['NIP'];
            $this->Dosen_model->update($dosen['NIP'], ['password' => password_hash($password,PASSWORD_DEFAULT)]);
          }
          else if($cek == 3){ //Mahasiswa
            $nim = $mhs['NIM'];
            $password = $mhs['tanggallahir'];
            $this->Mahasiswa_model->update($nim, ['password' => password_hash($password,PASSWORD_DEFAULT)]);
          }
          
          $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'sintakjti@gmail.com',
            'smtp_pass' => 'sintakjti2020',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
          );
          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");

          $this->email->from('sintakjti@gmail.com', 'SINTAK JTI');
          $this->email->to($email); 

          $this->email->subject('Reset Password');
          $this->email->message('Password anda berhasil di reset.<br>Password : ' . $password. '<br>Silahkan login kembali ' . base_url().'login' );
          
          try {
            $this->email->send();
            echo "success";
            $this->session->set_flashdata("message", "Password salah");
          } catch (\Throwable $th) {
            echo "gagal kirim email";
          }
      }
  }
}