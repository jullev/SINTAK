<?php
class Seminar_model extends CI_Model
{
	private $_table = 'td_seminar';

	function getAll()
	{
		return $this->db->get($this->_table);
	}
	function getWhere($where)
	{
		return $this->db->get_where($this->_table, $where);
	}

	function getJoinData()
	{
		$this->db->select("td_seminar.id_seminar, td_seminar.status_revisi, td_seminar.lampiran_revisi, tugas_akhir.Judul_TA, td_seminar.Tanggal, td_seminar.Jam, ruangan.Nama_ruangan, dosen.NAMA");
		$this->db->from("td_seminar");
		$this->db->join("tugas_akhir", "tugas_akhir.id = td_seminar.id_TA");
		$this->db->join("ruangan", "ruangan.idRuangan = td_seminar.idruangan");
		$this->db->join("dosen", "dosen.NIP = td_seminar.NIP_Panelis");
		$query = $this->db->get()->result();
		return $query;
	}

	function getFilterDosen($nip)
	{
		$now = date('Y-m-d');
		$nip = $_SESSION['id_login'];
		$query = $this->db->query("SELECT mahasiswa.NIM, mahasiswa.NAMA, tugas_akhir.Judul_TA, td_seminar.Tanggal, td_seminar.jam, td_seminar.Nilai_pembimbing, td_seminar.Nilai_panelis ,dospem.NAMA as dosen_pembimbing, dospan.NAMA as dosen_panelis, td_seminar.id_seminar, td_seminar.NIP_Panelis FROM  td_seminar JOIN tugas_akhir ON tugas_akhir.id = td_seminar.id_TA JOIN mahasiswa ON mahasiswa.NIM = tugas_akhir.Mahasiswa_NIM JOIN dosen as dospan on dospan.NIP = td_seminar.NIP_Panelis JOIN dosen as dospem on dospem.NIP = tugas_akhir.Dosen_NIP WHERE tugas_akhir.Dosen_NIP = '$nip' and td_seminar.status_revisi != 'acc' and td_seminar.Tanggal >= '$now'");
		return $query->result();
	}

	function getFilterDsn()
	{
		$nip = $_SESSION['id_login'];
		$query = $this->db->query("SELECT td_seminar.id_seminar,td_seminar.revisi, td_seminar.status_revisi, td_seminar.lampiran_revisi, tugas_akhir.Judul_TA, master_status.Status
									FROM  td_seminar
									JOIN tugas_akhir ON tugas_akhir.id = td_seminar.id_TA
									JOIN dosen ON dosen.NIP = td_seminar.NIP_Panelis
									JOIN mahasiswa ON mahasiswa.NIM = tugas_akhir.Mahasiswa_NIM
									JOIN master_status on master_status.idMaster_status
									WHERE td_seminar.NIP_Panelis = '$nip'")->result();
		return $query;
	}

	function getFilterMhs()
	{
		$nim = $_SESSION['id_login'];
		$query = $this->db->query("SELECT td_seminar.id_seminar,td_seminar.revisi, td_seminar.status_revisi, td_seminar.lampiran_revisi, tugas_akhir.Judul_TA
									FROM  td_seminar
									JOIN tugas_akhir ON tugas_akhir.id = td_seminar.id_TA
									JOIN mahasiswa ON mahasiswa.NIM = tugas_akhir.Mahasiswa_NIM
									WHERE mahasiswa.NIM = '$nim'")->result();
		return $query;
	}

	function getFIlterDosenPanelis($nip)
	{
		$now = date('Y-m-d');
		$nip = $_SESSION['id_login'];
		$query = $this->db->query("SELECT mahasiswa.NIM, mahasiswa.NAMA, tugas_akhir.Judul_TA, td_seminar.Tanggal, td_seminar.jam, td_seminar.id_seminar, td_seminar.NIP_Panelis, td_seminar.Nilai_panelis,td_seminar.Nilai_pembimbing, td_seminar.revisi FROM  td_seminar JOIN tugas_akhir ON tugas_akhir.id = td_seminar.id_TA JOIN mahasiswa ON mahasiswa.NIM = tugas_akhir.Mahasiswa_NIM WHERE td_seminar.NIP_panelis = '$nip' and td_seminar.status_revisi != 'acc' and td_seminar.Tanggal >= '$now' ");
		return $query->result();
	}

	function getById($id)
	{
		$this->db->select('id_seminar,Tanggal,jam,NIP_Panelis,id_status,idRuangan');
		return $this->db->get_where($this->_table, ["id_seminar" => $id])->result_array();
	}

	function save($data)
	{
		return $this->db->insert($this->_table, $data);
	}

	function update($id, $data)
	{
		$where = array('id_seminar' => $id);
		$this->db->where($where);
		return $this->db->update($this->_table, $data);
	}

	function delete($id)
	{
		$where = array('id_seminar' => $id);
		return $this->db->delete($this->_table, $where);
	}

	public function getLampiran($id)
	{
		$this->db->select("lampiran_revisi");
		return $this->db->get_where($this->_table, ["id" => $id])->result_array();
	}

	public function seminarNIP($field, $nip)
	{
		$this->db->where($field, $nip);
		return $this->db->get($this->_table);
	}

	public function getRekapSeminar($angkatan = "", $prodi = "")
	{
		$this->db->select("a.id_seminar, b.Judul_TA, a.Tanggal, a.jam, c.Nama_ruangan, d.NAMA as nama_panelis, dd.NAMA as nama_pembimbing, e.NAMA as nama_mahasiswa, e.NIM, a.Nilai_panelis, a.Nilai_pembimbing, e.Tahun_masuk, f.Nama_prodi ");
		$this->db->from("td_seminar as a");
		$this->db->join("tugas_akhir as b", "b.id = a.id_TA");
		$this->db->join("ruangan as c", "c.idRuangan = a.idruangan");
		$this->db->join("dosen as d", "d.NIP = a.NIP_Panelis", "inner");
		$this->db->join("dosen as dd", "dd.NIP = b.Dosen_NIP", "inner");
		$this->db->join("mahasiswa as e", "e.NIM = b.Mahasiswa_NIM ");
		$this->db->join("prodi as f", "f.idProdi = e.Prodi_idProdi ");

		if ($angkatan != "" && $prodi != "") {
			$filter = array('e.Prodi_idProdi' => $prodi, 'e.Tahun_masuk' => $angkatan);
			$this->db->where($filter);
		}

		$query = $this->db->get();
		return $query;
	}
	function getProdi()
	{
		return $this->db->get('prodi');
	}
}
