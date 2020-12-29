<?php
class Sidang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sidang_model');
        $this->load->model('TugasAkhir_model');
        $this->load->model('Ruangan_model');
        $this->load->model('Dosen_model');
        $this->load->model('Status_model');
        $this->load->model('Mahasiswa_model');

        $this->icon = "fa-calendar";
    }

    function index()
    {
        $param['pageInfo'] = "List Sidang";
        if ($_SESSION['global_role'] == "Admin Prodi") {
            $param['data_sidang'] = $this->common->getData("s.id_sidang, m.NAMA as nama_mahasiswa, ta.Mahasiswa_NIM, ta.Judul_TA, d.NAMA", "td_sidang s", ["tugas_akhir ta", "s.id_TA = ta.id", "mahasiswa m", "ta.Mahasiswa_NIM = m.NIM", "dosen d", "d.NIP = ta.Dosen_NIP"], ['Tanggal' => NULL, 'm.Prodi_idProdi' => $_SESSION['id_prodi']], "")->result();
        } elseif ($_SESSION['global_role'] == "Koordinator TA") {
            $param['data_sidang'] = $this->common->getData("s.id_sidang, m.NAMA as nama_mahasiswa, ta.Mahasiswa_NIM, ta.Judul_TA, d.NAMA", "td_sidang s", ["tugas_akhir ta", "s.id_TA = ta.id", "mahasiswa m", "ta.Mahasiswa_NIM = m.NIM", "dosen d", "d.NIP = ta.Dosen_NIP"], ['NIP_Anggota' => NULL, 'm.Prodi_idProdi' => $_SESSION['id_prodi']], "")->result();
        } elseif ($_SESSION['global_role'] == "Mahasiswa") {
            $param['data_sidang'] = $this->common->getData("ta.Judul_TA, ta.Deskripsi, ta.Mahasiswa_NIM, m.NAMA, s.Tanggal", "td_sidang s", ["tugas_akhir ta", "s.id_TA=ta.id", "mahasiswa m", "ta.Mahasiswa_NIM = m.NIM"], ['Mahasiswa_NIM' => $_SESSION['id_login'], 'Tanggal !=' => NULL], "")->result_array();
        }
        //		print_r($param);
        //Mengambil Data Dari Tabel Master
        $param['Dosen'] = $this->Dosen_model->getAll()->result();
        $param['Ruangan'] = $this->Ruangan_model->getAll()->result();
        $param['Master_status'] = $this->Status_model->getAllDataForsidang()->result();
        if ($_SESSION['global_role'] == "Mahasiswa") {
            $this->template->load("common/template", "pages/sidang/list_sidang_mhs", $param);
        } else {
            $this->template->load("common/template", "pages/sidang/list_sidang", $param);
        }
    }

    function ajukanSidang()
    {
        $param = $this->common->getData("ta.id", "tugas_akhir ta", ["mahasiswa m", "ta.Mahasiswa_NIM = m.NIM"], ['Mahasiswa_NIM' => $_SESSION['id_login']], "")->result_array();
        $this->common->insert("td_sidang", ['id_TA' => $param[0]['id']]);
        //Flash Message Sukses
        $this->session->set_flashdata(
            "input_validation",
            "<div class='alert alert-success'>
		        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden=true'>&times;</span></button>Pengajuan Sidang Berhasil</div>"
        );
        redirect('sidang');
    }

    function rekap_sidang()
    {
        $prodi = $this->input->post('prodi');
        $angkatan = $this->input->post('angkatan');

        // kondisi ketika  filter digunakan 
        if ($prodi != "" && $angkatan != "") {
            $param['rekap_sidang'] = $this->Sidang_model->getRekapSidang($angkatan, $prodi)->result();
            $param['filter_angkatan'] = $angkatan;
            $param['filter_prodi'] = $prodi;
        } else { // Ketika Filter tidak di gunakan
            $param['rekap_sidang'] = $this->Sidang_model->getRekapSidang()->result();
            $param['filter_angkatan'] = '';
            $param['filter_prodi'] = '';
        }

        $param['angkatan'] = $this->Mahasiswa_model->getAngkatan()->result();
        $param['prodi'] = $this->Sidang_model->getProdi()->result();
        $param['pageInfo'] = "Rekap Sidang";

        $this->template->load("common/template", "pages/Sidang/rekap_sidang", $param);
    }

    function add()
    {
        $param['pageInfo'] = "Pengajuan Sidang";
        //Mengambil NIM Login Mahasiswa
        $nim = $this->session->userdata('id_login');
        //Mengambil Data Tugas Akhir Berdasarkan NIM Mahasiswa
        $param['TA'] = $this->TugasAkhir_model->getByNim($nim)->result();

        $this->template->load("common/template", "pages/sidang/pengajuan_sidang", $param);
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
            if ($this->Sidang_model->save($data)) {
                //Flash Message Sukses
                $this->session->set_flashdata("input_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Pengajuan Sidang Berhasil</div>");
            } else {
                //Flash Message Gagal
                $this->session->set_flashdata("input_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Pengajuan Sidang Gagal</div>");
            }
        } else {
            $error_field = new stdClass();
            $error_field->Judul_TA = form_error('Judul_TA');
            $this->session->set_flashdata("error_field", $error_field);
        }

        redirect('Sidang/add');
    }

    function edit()
    {
        $data = $this->Sidang_model->getById($_GET['id_sidang'])[0];
        header("content-type:json/application");
        echo json_encode($data);
    }

    function update()
    {
        $id = $this->input->post('id_');
        if ($_SESSION['global_role'] == "Admin Prodi") {
            $data = array(
                'Tanggal' => $this->input->post('Tanggal'),
                'jam' => $this->input->post('jam'),
                'idRuangan' => $this->input->post('idRuangan'),
            );
        } elseif ($_SESSION['global_role'] = "Koordinator TA") {
            $data = array(
                'NIP_Anggota' => $this->input->post('NIP_Anggota'),

            );
        }
        if ($this->Sidang_model->update($id, $data)) {
            //Flash Message Sukses
            $this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Berhasil Diupdate</div>");
        } else {
            //Flash Message Gagal
            $this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Gagal Diupdate</div>");
        }
        redirect(base_url() . 'Sidang');
    }

    function delete($id)
    {
        if (!isset($id)) show_404();

        if ($this->Sidang_model->delete($id)) {
            //Flash Message Sukses
            $this->session->set_flashdata("delete_validation", "<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Berhasil Dihapus</div>");
        } else {
            //Flash Message Gagal
            $this->session->set_flashdata("delete_validation", "<div class='alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Gagal Dihapus </div>");
        }
        redirect(base_url() . 'Sidang');
    }

    // jadwal sidang
    function jadwalSidangPanelis()
    {
        $param['pageInfo'] = "Jadwal Sidang";
        $param['jadwal_sidang'] = $this->Sidang_model->getFilterDosenSidang($_SESSION['id_login']);
        $this->template->load("common/template", "pages/Sidang/jadwal_sidang_panelis", $param);
    }

    function jadwalSidangPembimbing()
    {
        $param['pageInfo'] = "Jadwal Sidang";
        $param['jadwal_sidang'] = $this->Sidang_model->getFilterDosenPembimbing($_SESSION['id_login']);
        $this->template->load("common/template", "pages/Sidang/jadwal_sidang_pembimbing", $param);
    }
    function jadwalSidangAnggota()
    {
        $param['pageInfo'] = "Jadwal Sidang";
        $param['jadwal_sidang'] = $this->Sidang_model->getFIlterDosenAnggota($_SESSION['id_login']);
        // if ($_SESSION['global_role'] == "Dosen Pembimbing") {
        //     $param['data_sidang'] = $this->common->getData("s.id_sidang, m.NAMA as nama_mahasiswa, ta.Mahasiswa_NIM, ta.Judul_TA, d.NAMA", "td_sidang s", ["tugas_akhir ta", "s.id_TA = ta.id", "mahasiswa m", "ta.Mahasiswa_NIM = m.NIM", "dosen d", "d.NIP = ta.Dosen_NIP"], "", "")->result();
        // }
        // print_r($param);
        // return;
        $this->template->load("common/template", "pages/Sidang/jadwal_sidang_anggota", $param);
    }

    function editJadwal()
    {
        $data = $this->Sidang_model->getById($_GET['id_sidang'])[0];
        header("content-type:json/application");
        echo json_encode($data);
    }

    function updateJadwalPanelis()
    {
        $id = $this->input->post('id_');
        $cekId = $this->Sidang_model->getWhere(["id_sidang" => $id])->num_rows();
        if ($cekId == 1) {
            if ($_SESSION['global_role'] == "Dosen Pembimbing") {
                $data = array(
                    'Nilai_panelis' => $this->input->post('Nilai_panelis'),
                    'revisi' => $this->input->post('revisi'),
                );
            }
            if ($this->Sidang_model->update($id, $data)) {
                //Flash Message Sukses
                $this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Berhasil Diupdate</div>");
            } else {
                //Flash Message Gagal
                $this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Gagal Diupdate</div>");
            }
            redirect(base_url() . 'Sidang/jadwalSidangPanelis');
        } else {
            show_404();
        }
    }

    function updateJadwalAnggota()
    {
        $id = $this->input->post('id_');
        $cekId = $this->Sidang_model->getWhere(["id_sidang" => $id])->num_rows();
        if ($cekId == 1) {
            if ($_SESSION['global_role'] == "Dosen Pembimbing") {
                $data = array(
                    'Nilai_Anggota' => $this->input->post('Nilai_Anggota'),
                );
            }
            if ($this->Sidang_model->update($id, $data)) {
                //Flash Message Sukses
                $this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Berhasil Diupdate</div>");
            } else {
                //Flash Message Gagal
                $this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Gagal Diupdate</div>");
            }
            redirect(base_url() . 'Sidang/jadwalSidangAnggota');
        } else {
            show_404();
        }
    }

    function updateJadwalPembimbing()
    {
        $id = $this->input->post('id_');
        $nilai = $this->input->post('Nilai_pembimbing');
        $cekId = $this->Sidang_model->getWhere(["id_sidang" => $id])->num_rows();
        if ($cekId == 1) {
            if ($_SESSION['global_role'] == "Dosen Pembimbing") {
                $data = array(
                    // 'Nilai_pembimbing' => $nilai,
                    'Nilai_bimbingan' => $this->input->post('Nilai_bimbingan'),
                    'Nilai_sidang' => $this->input->post('Nilai_sidang'),
                );
            }
            $input = $this->Sidang_model->update($id, $data);
            if ($input) {
                //Flash Message Sukses
                $this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Berhasil Diupdate</div>");
            } else {
                //Flash Message Gagal
                $this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Gagal Diupdate</div>");
            }
            redirect(base_url() . 'Sidang/jadwalSidangPembimbing');
        } else {
            show_404();
        }
    }

    function updateJadwal()
    {
        $id = $this->input->post('id_');
        if ($_SESSION['global_role'] == "Admin Prodi") {
            $data = array(
                'Tanggal' => $this->input->post('Tanggal'),
                'jam' => $this->input->post('jam'),
                'idRuangan' => $this->input->post('idRuangan'),
            );
        } elseif ($_SESSION['global_role'] = "Koordinator TA") {
            $data = array(
                'NIP_Anggota' => $this->input->post('NIP_Anggota'),
            );
        }
        if ($this->Sidang_model->update($id, $data)) {
            //Flash Message Sukses
            $this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Berhasil Diupdate</div>");
        } else {
            //Flash Message Gagal
            $this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Gagal Diupdate</div>");
        }
        redirect(base_url() . 'Sidang');
    }


    //revisi sidang
    function revisisidang()
    {
        $param['pageInfo'] = "Revisi sidang";
        $nip = $_SESSION['id_login'];
        if ($_SESSION['global_role'] == "Mahasiswa") {
            $param['revisi_sidang'] = $this->Sidang_model->getFilterMhs();
            $this->template->load("common/template", "pages/sidang/revisi_sidang_mhs", $param);
        } else {
            // $param['revisi_sidang'] = $this->common->getData("s.id_sidang, m.NAMA as nama_mahasiswa, ta.Mahasiswa_NIM, ta.Judul_TA, s.lampiran_revisi, s.revisi, s.status_revisi", "td_sidang s", ["tugas_akhir ta", "s.id_TA = ta.id", "mahasiswa m", "ta.Mahasiswa_NIM = m.NIM", "dosen d", "d.NIP = ta.Dosen_NIP"], ['s.nip_panelis' => $nip], "")->result();
            $param['revisi_sidang'] = $this->Sidang_model->getFilterDosenSidang($_SESSION['id_login']);
            // $this->Sidang_model->getFilterDosenSidang($_SESSION['id_login']);
            $this->template->load("common/template", "pages/sidang/revisi_sidang_dsn", $param);
        }
    }

    function editSidang()
    {
        $data = $this->Sidang_model->getById($_GET['id_sidang'])[0];
        header("content-type:json/application");
        echo json_encode($data);
    }

    function updateRevisiSidangMhs()
    {

        $id = $this->input->post('id_');
        $post = $this->input->post();
        $cekId = $this->Sidang_model->getWhere(["id_sidang" => $id])->num_rows();
        $data = [];
        if ($cekId == 1) {
            if ($_SESSION['global_role'] == 'Mahasiswa') {
                $dir_file = realpath(APPPATH . '../assets/berkas/sidang/');
                $ori_name = pathinfo($_FILES['lampiran_revisi']['name'], PATHINFO_FILENAME);
                $name_file = $_FILES['lampiran_revisi']['name'];
                $extension_file = substr($name_file, strpos($name_file, '.'), strlen($name_file) - 1);
                $nm_file_revisi =  $id . '_' . $ori_name . '_'  . '_' . time() . $extension_file;
                $tmp_file = $_FILES['lampiran_revisi']['tmp_name'];


                if (isset($_FILES['lampiran_revisi'])) { //Jika validasi Form Berhasil
                    move_uploaded_file($tmp_file, $dir_file . '/' . $nm_file_revisi);
                    $data = array(
                        'id_sidang' => $id,
                        'lampiran_revisi' => $nm_file_revisi,
                    );
                }
            }
            if ($this->Sidang_model->update($id, $data)) {
                //Flash Message Sukses
                $this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Berhasil Diupdate</div>");
            } else {
                //Flash Message Gagal
                $this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Gagal Diupdate</div>");
            }
            redirect(base_url() . 'Sidang/revisiSidang');
        } else {
            show_404();
        }
    }

    public function updateRevisiSidangDsn()
    {
        $id = $this->input->post('id_');
        $cekId = $this->Sidang_model->getWhere(["id_sidang" => $id])->num_rows();
        if ($cekId == 1) {
            if ($_SESSION['global_role'] == "Dosen Pembimbing") {
                $data = array(
                    'status_revisi' => $this->input->post('status_revisi'),
                );
                if ($this->Sidang_model->update($id, $data)) {
                    //Flash Message Sukses
                    $this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Berhasil Diupdate</div>");
                } else {
                    //Flash Message Gagal
                    $this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Gagal Diupdate</div>");
                }
                redirect(base_url() . 'Sidang/revisiSidang');
            } else {
                show_404();
            }
        }
    }
}
