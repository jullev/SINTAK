<?php
Class Sidang_model extends CI_Model{
    private $_table = 'td_sidang';
    private $_view_table = 'v_sidang';

    function getAll(){
        return $this->db->get($this->_view_table);
    }
    function getWhere($where){
        return $this->db->get_where($this->_view_table, $where);
    }

    function getById($id){
        $this->db->select('id_sidang,Tanggal,jam,NIP_Panelis,id_status,idRuangan,Nilai');
        return $this->db->get_where($this->_table, ["id_sidang" => $id])->result_array();
    }

    function save($data){
        return $this->db->insert($this->_table,$data);
    }

    function update($id,$data){
        $where = array('id_sidang' => $id);
        return $this->db->update($this->_table,$data,$where);
    }

    function delete($id){
        $where = array('id_sidang' => $id);
        return $this->db->delete($this->_table,$where);
    }
	public function getRekapSidang($angkatan = "", $prodi = "")
	{
		$this->db->select("a.id_sidang, a.Nilai_panelis as nil_sid_panelis, a.Nilai_anggota as nil_sid_anggota, a.Nilai_sidang, a.Nilai_bimbingan, a.NIP_Anggota, b.Judul_TA, a.Tanggal, a.jam, c.Nama_ruangan, d.NAMA as nama_panelis, dd.NAMA as nama_pembimbing, ddd.NAMA as nama_anggota, e.NAMA as nama_mahasiswa, e.NIM, bb.Nilai_penelis as nil_sem_panelis, bb.Nilai_pembimbing as nil_sem_pembimbing, e.Tahun_masuk, f.Nama_prodi ");
        $this->db->from("td_sidang as a");
		$this->db->join("td_seminar as bb", "bb.id_TA = a.id_TA");
		$this->db->join("tugas_akhir as b", "b.id = a.id_TA");
		$this->db->join("ruangan as c", "c.idRuangan = a.idruangan");
		$this->db->join("dosen as d", "d.NIP = bb.NIP_Panelis", "inner");
        $this->db->join("dosen as dd", "dd.NIP = b.Dosen_NIP", "inner");
		$this->db->join("dosen as ddd", "ddd.NIP = a.NIP_Anggota", "inner");
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