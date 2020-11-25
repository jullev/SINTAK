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
		$this->db->select("td_seminar.id_seminar, tugas_akhir.Judul_TA, td_seminar.Tanggal, td_seminar.Jam, ruangan.Nama_ruangan, dosen.NAMA");
		$this->db->from("td_seminar");
		$this->db->join("tugas_akhir", "tugas_akhir.id = td_seminar.id_TA");
		$this->db->join("ruangan", "ruangan.idRuangan = td_seminar.idruangan");
		$this->db->join("dosen", "dosen.NIP = td_seminar.NIP_Panelis");
		$query = $this->db->get()->result();
		return $query;
	}

	function getById($id)
	{
		$this->db->select('id_seminar,Tanggal,jam,NIP_Panelis,id_status,idRuangan,Nilai');
		return $this->db->get_where($this->_table, ["id_seminar" => $id])->result_array();
	}

	function save($data)
	{
		return $this->db->insert($this->_table, $data);
	}

	function update($id, $data)
	{
		$where = array('id_seminar' => $id);
		return $this->db->update($this->_table, $data, $where);
	}

	function delete($id)
	{
		$where = array('id_seminar' => $id);
		return $this->db->delete($this->_table, $where);
	}
	public function seminarNIP($field, $nip)
	{
		$this->db->where($field, $nip);
		return $this->db->get($this->_table);
	}
}
