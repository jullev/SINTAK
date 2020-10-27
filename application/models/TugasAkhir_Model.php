<?php

Class TugasAkhir_Model extends CI_Model{
    private $_table = 'tugas_akhir';

    function getAll($filter="",$like=""){
        $this->db->select('id,Judul_TA,tgl_pengajuan,tugas_akhir.Deskripsi,tugas_akhir.abstract,tugas_akhir.keywords,dosen.NAMA,mahasiswa.NIM,mahasiswa.Nama as nama_mhs,master_status.Status,topik.topik,tugas_akhir.id_status,icon');
        $this->db->from($this->_table);
        $this->db->join('dosen', 'tugas_akhir.Dosen_NIP = dosen.NIP');
        $this->db->join('mahasiswa', 'tugas_akhir.Mahasiswa_NIM = mahasiswa.NIM');
        $this->db->join('topik', 'tugas_akhir.id_topik = topik.idTopik');
        $this->db->join('master_status', 'tugas_akhir.id_status = master_status.idMaster_status');
        if($filter!=""){
            foreach ($filter as $key => $value) {
                if($value!=""){
                    $this->db->where([$key => $value]);
                }
            }
        }
        if($like!=""){
            $this->db->like("LOWER(Judul_TA)",strtolower($like));
            $this->db->or_like("LOWER(topik.topik)",strtolower($like));
        }
        return $this->db->get();
    }

    function getById($id){
        $where = array('id' => $id);
        return $this->db->get_where($this->_table,$where);
    }

    function getByNim($nim){
        $this->db->select('id,Judul_TA');
        $where = array('Mahasiswa_NIM' => $nim);
        return $this->db->get_where($this->_table,$where);
    }

    public function getDeskripsi($id)
    {
        $this->db->select("deskripsi,Judul_TA");
        return $this->db->get_where($this->_table, ["id" => $id])->result_array();
    }
    public function getAbstract($id)
    {
        $this->db->select("abstract,Judul_TA");
        return $this->db->get_where($this->_table, ["id" => $id])->result_array();
    }
    public function getPembimbing($id)
    {
        $this->db->select("id,Dosen_NIP,id_status");
        
        return $this->db->get_where($this->_table, ["id" => $id])->result_array();
    }
    function save($data){
        return $this->db->insert($this->_table,$data);
    }

    function update($id,$data){
        $where = array('id' => $id);
        return $this->db->update($this->_table,$data,$where);
    }
    function delete($id){
        $where = array('id' => $id);
        return $this->db->delete($this->_table,$where);
    }

}