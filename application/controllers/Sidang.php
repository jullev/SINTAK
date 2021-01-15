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
            $param['Ruangan'] = $this->Ruangan_model->getAll()->result();
            $param['data_sidang'] = $this->common->getData("s.id_sidang, m.NAMA as nama_mahasiswa, ta.Mahasiswa_NIM, ta.Judul_TA, d.NAMA", "td_sidang s", ["tugas_akhir ta", "s.id_TA = ta.id", "mahasiswa m", "ta.Mahasiswa_NIM = m.NIM", "dosen d", "d.NIP = ta.Dosen_NIP"], ['Tanggal' => NULL, 'm.Prodi_idProdi' => $_SESSION['id_prodi']], "")->result();
        } elseif ($_SESSION['global_role'] == "Koordinator TA") {
            $param['Dosen'] = $this->Dosen_model->getAll()->result();
            $param['data_sidang'] = $this->common->getData("s.id_sidang, m.NAMA as nama_mahasiswa, ta.Mahasiswa_NIM, ta.Judul_TA, d.NAMA", "td_sidang s", ["tugas_akhir ta", "s.id_TA = ta.id", "mahasiswa m", "ta.Mahasiswa_NIM = m.NIM", "dosen d", "d.NIP = ta.Dosen_NIP"], ['NIP_Anggota' => NULL, 'm.Prodi_idProdi' => $_SESSION['id_prodi']], "")->result();
        } elseif ($_SESSION['global_role'] == "Mahasiswa") {
			$param['bimbingan'] = $this->common->getData("count(id_bimbingan) ttl, ta.id", "td_bimbingan b", ["tugas_akhir ta", "b.Tugas_akhir_id=ta.id"], ['Mahasiswa_NIM' => $_SESSION['id_login']], "")->result_array();
        }
        //		print_r($param);
        //Mengambil Data Dari Tabel Master
        if ($_SESSION['global_role'] == "Mahasiswa") {
            $this->template->load("common/template", "pages/sidang/list_sidang_mhs", $param);
        } else {
            $this->template->load("common/template", "pages/sidang/list_sidang", $param);
        }
    }

    function ajukanSidang()
    {
        $param = $this->common->getData("ta.id", "tugas_akhir ta", ["mahasiswa m", "ta.Mahasiswa_NIM = m.NIM"], ['Mahasiswa_NIM' => $_SESSION['id_login']], "")->result_array();
        $insert = $this->common->insert("td_sidang", ['id_TA' => $param[0]['id']]);
        if($insert){
            $this->common->update('tugas_akhir',['id_status' => 8],['id' => $param[0]['id']]);
            //Flash Message Sukses
            $this->session->set_flashdata(
                "input_validation",
                "<div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden=true'>&times;</span></button><b>Pengajuan Sidang Berhasil</b></div>"
            );
            redirect('sidang');
        }
        else{
            show_404();
        }
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
        if($_SESSION['global_role']!='Mahasiswa'){
            $param['pageInfo'] = "Jadwal Sidang";
            $param['jadwal_sidang'] = $this->Sidang_model->getFIlterDosenAnggota($_SESSION['id_login']);
            $this->template->load("common/template", "pages/Sidang/jadwal_sidang_anggota", $param);
        }
        else{
            show_404();
        }
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
		$sidang = $this->common->getData('Nilai_anggota,Nilai_sidang,Nilai_bimbingan','td_sidang','',["id_sidang" => $id],'')->result_array();
        
        if (count($sidang) == 1 && isDospem()) {
            $data = array(
                'Nilai_panelis' => $this->input->post('Nilai_panelis'),
                'revisi' => $this->input->post('revisi'),
            );
            if ($this->Sidang_model->update($id, $data)) {
				if($sidang[0]['Nilai_anggota']!=0 && $sidang[0]['Nilai_sidang']!=0 && $sidang[0]['Nilai_bimbingan']!=0){
                    $this->common->update('tugas_akhir',['id_status' => 10],['id_sidang' => $id]);

					$getIdTA = $this->common->getData('id_TA','td_sidang','',['id_sidang' => $id],'')->result_array()[0];
					$chatId = $this->common->getChatId('mahasiswa',['id' => $getIdTA['id_TA']],true);
					if($chatId!=0){
						$send = urlencode("<b>Nilai Sidang</b>\n<b>Nilai Sidang :</b> ".$sidang[0]['Nilai_sidang']."\n<b>Nilai Bimbingan :</b> ".$sidang[0]['Nilai_bimbingan']."\n<b>Nilai Anggota :</b> ".$sidang[0]['Nilai_anggota']."\n<b>Nilai Panelis :</b> ".$_POST['Nilai_panelis']."\n<b>Revisi :</b> ".$_POST['revisi']);
						sendTele($chatId,$send);
					}
				}

                //Flash Message Sukses
                $this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Sidang Berhasil Diupdate</b></div>");
            } else {
                //Flash Message Gagal
                $this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Sidang Gagal Diupdate</b></div>");
            }
            redirect(base_url() . 'Sidang/jadwalSidangPanelis');
        } else {
            show_404();
        }
    }

    function updateJadwalAnggota()
    {
        $id = $this->input->post('id_');
		$sidang = $this->common->getData('Nilai_panelis,Nilai_sidang,Nilai_bimbingan,revisi','td_sidang','',["id_sidang" => $id],'')->result_array();
        
        if (count($sidang) == 1 && isDospem()) {
            $data = array(
                'Nilai_anggota' => $this->input->post('Nilai_Anggota'),
            );
            
            if ($this->Sidang_model->update($id, $data)) {
                if($sidang[0]['Nilai_panelis']!=0 && $sidang[0]['Nilai_sidang']!=0 && $sidang[0]['Nilai_bimbingan']!=0){
                    $this->common->update('tugas_akhir',['id_status' => 10],['id_sidang' => $id]);

                    $getIdTA = $this->common->getData('id_TA','td_sidang','',['id_sidang' => $id],'')->result_array()[0];
                    $chatId = $this->common->getChatId('mahasiswa',['id' => $getIdTA['id_TA']],true);
                    if($chatId!=0){
                        $send = urlencode("<b>Nilai Sidang</b>\n<b>Nilai Sidang :</b> ".$sidang[0]['Nilai_sidang']."\n<b>Nilai Bimbingan :</b> ".$sidang[0]['Nilai_bimbingan']."\n<b>Nilai Anggota :</b> ".$_POST['Nilai_Anggota']."\n<b>Nilai Panelis :</b> ".$sidang[0]['Nilai_panelis']."\n<b>Revisi :</b> ".$sidang[0]['revisi']);
                        sendTele($chatId,$send);
                    }
                }
                //Flash Message Sukses
                $this->session->set_flashdata("update_validation", "<div class='font-weight-bold alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Berhasil Diupdate</div>");
            } else {
                //Flash Message Gagal
                $this->session->set_flashdata("update_validation", "<div class='font-weight-bold alert alert-danger'>
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
		$sidang = $this->common->getData('Nilai_panelis,Nilai_anggota,revisi','td_sidang','',["id_sidang" => $id],'')->result_array();
        if (count($sidang) == 1 && isDospem()) {
            $data = array(
                // 'Nilai_pembimbing' => $nilai,
                'Nilai_bimbingan' => $this->input->post('Nilai_bimbingan'),
                'Nilai_sidang' => $this->input->post('Nilai_sidang'),
            );
            $input = $this->Sidang_model->update($id, $data);
            if ($input) {
                if($sidang[0]['Nilai_panelis']!=0 && $sidang[0]['Nilai_anggota']!=0){
                    $this->common->update('tugas_akhir',['id_status' => 10],['id_sidang' => $id]);
                    $getIdTA = $this->common->getData('id_TA','td_sidang','',['id_sidang' => $id],'')->result_array()[0];
                    $chatId = $this->common->getChatId('mahasiswa',['id' => $getIdTA['id_TA']],true);
                    if($chatId!=0){
                        $send = urlencode("<b>Nilai Sidang</b>\n<b>Nilai Sidang :</b> ".$_POST['Nilai_sidang']."\n<b>Nilai Bimbingan :</b> ".$_POST['Nilai_bimbingan']."\n<b>Nilai Anggota :</b> ".$sidang[0]['Nilai_anggota']."\n<b>Nilai Panelis :</b> ".$sidang[0]['Nilai_panelis']."\n<b>Revisi :</b> ".$sidang[0]['revisi']);
                        sendTele($chatId,$send);
                    }
                }

                //Flash Message Sukses
                $this->session->set_flashdata("update_validation", "<div class='font-weight-bold alert alert-success'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Berhasil Diupdate</div>");
            } else {
                //Flash Message Gagal
                $this->session->set_flashdata("update_validation", "<div class='font-weight-bold alert alert-danger'>
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
        $sidang = $this->common->getData('Tanggal,NIP_Anggota','td_sidang','',["id_sidang" => $id],'')->result_array();
        if(count($sidang)==1){
            $sendTele = false;
            if ($_SESSION['global_role'] == "Admin Prodi") {
                $data = array(
                    'Tanggal' => $this->input->post('Tanggal'),
                    'jam' => $this->input->post('jam'),
                    'idruangan' => $this->input->post('idruangan'),
                );
				if($sidang[0]['NIP_Anggota']!=NULL){
					$sendTele = true;
				}

            } elseif ($_SESSION['global_role'] = "Koordinator TA") {
                $data = array(
                    'NIP_Anggota' => $this->input->post('NIP_Anggota'),
                );
				if($sidang[0]['Tanggal']!=NULL){
					$sendTele = true;
				}
            }
            if ($this->Sidang_model->update($id, $data)) {
                //Flash Message Sukses
				$getIdTA = $this->common->getData('id_TA','td_sidang','',['id_sidang' => $id],'')->result_array()[0];
                $chatId = $this->common->getChatId('mahasiswa',['id' => $getIdTA['id_TA']],true);
				if($chatId!=0 && $sendTele){
					$this->common->update('tugas_akhir',['id_status' => 9],['id' => $getIdTA['id_TA']]);

					$getRuangan = $this->common->getData('Nama_ruangan','ruangan','',['idRuangan' => $_POST['idruangan']],'')->result_array();
					$send = urlencode("<b>Jadwal Sidang</b>\n<b>Tanggal :</b> ".date('d-m-Y',strtotime($_POST['Tanggal']))."\n<b>Jam :</b> ".date('H:i', strtotime($_POST['jam']))." WIB\n<b>Tempat :</b> ".$getRuangan[0]['Nama_ruangan']);
					sendTele($chatId,$send);
				}

                $this->session->set_flashdata("update_validation", "<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Sidang Berhasil Diupdate</b></div>");
            } else {
                //Flash Message Gagal
                $this->session->set_flashdata("update_validation", "<div class='alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><b>Data Sidang Gagal Diupdate</b></div>");
            }
            redirect(base_url() . 'Sidang');
        }
        else{
            show_404();
        }

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
            $param['revisi_sidang'] = $this->common->getData("s.id_sidang, m.NIM, m.NAMA as nama_mahasiswa, ta.Mahasiswa_NIM, ta.Judul_TA, s.lampiran_revisi, s.revisi, s.status_revisi, d.NAMA dosen_pembimbing,sem.NIP_Panelis", "td_sidang s", ["tugas_akhir ta", "s.id_TA = ta.id","td_seminar sem","ta.id = sem.id_TA", "mahasiswa m", "ta.Mahasiswa_NIM = m.NIM", "dosen d", "d.NIP = ta.Dosen_NIP"], "sem.NIP_Panelis = '$nip' or ta.Dosen_NIP = '$nip' and s.Nilai_panelis != 0 and s.Nilai_anggota != 0 and s.Nilai_sidang != 0 and s.Nilai_bimbingan != 0 and s.status_revisi != 'acc'", "")->result();
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
                $this->session->set_flashdata("update_validation", "<div class='font-weight-bold alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Berhasil Diupdate</div>");
            } else {
                //Flash Message Gagal
                $this->session->set_flashdata("update_validation", "<div class='font-weight-bold alert alert-danger'>
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
        if ($cekId == 1 && isDospem()) {
            $data = array(
                'status_revisi' => $this->input->post('status_revisi'),
            );
            if ($this->Sidang_model->update($id, $data)) {
                $getIdTA = $this->common->getData('id_TA','td_sidang','',['id_sidang' => $id],'')->result_array()[0];
                $chatId = $this->common->getChatId('mahasiswa',['id' => $getIdTA['id_TA']],true);
                if($chatId!=0){
                    $send = urlencode("<b>Revisi Sidang</b>\n<b>Status Revisi :</b> ".ucwords($_POST['status_revisi']));
                    sendTele($chatId,$send);
                }

                if($_POST['status_revisi']=='acc'){
                    $this->common->update('tugas_akhir',['id_status' => 11],['id_sidang' => $id]);
                }

                //Flash Message Sukses
                $this->session->set_flashdata("update_validation", "<div class='font-weight-bold alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Berhasil Diupdate</div>");
            } else {
                //Flash Message Gagal
                $this->session->set_flashdata("update_validation", "<div class='font-weight-bold alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Sidang Gagal Diupdate</div>");
            }
            redirect(base_url() . 'Sidang/revisiSidang');
        }
        else {
            show_404();
        }
    }
}
