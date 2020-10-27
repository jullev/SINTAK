<?php
Class Bimbingan_model extends CI_Model{
    private $_table = 'td_bimbingan';
    
    function getById($id){
        return $this->db->get_where($this->_table, ["id_bimbingan" => $id]);
    }

    function getTA_id($id){
        $this->db->select('Tugas_akhir_id');
        return $this->db->get_where($this->_table, ["id_bimbingan" => $id]);
    }

    function getByTugasAkhirId($id){
        $where = array('Tugas_akhir_id' => $id);
        return $this->db->get_where($this->_table,$where);
    }

    function getNamaMahasiswaByTA_Id($TA_id="",$filter=""){
        $this->db->select('NIM,NAMA');
        $this->db->from('mahasiswa');
        $this->db->join('tugas_akhir','tugas_akhir.Mahasiswa_NIM = mahasiswa.NIM');
        $this->db->where(array('tugas_akhir.id' => $TA_id));
        if($filter!=""){
            foreach ($filter as $key => $value) {
                if($value!=""){
                    $this->db->where([$key => $value]);
                }
            }
        }

        return $this->db->get();
    }

    function save($data){
        return $this->db->insert($this->_table,$data);
    }

    function update($id,$data){
        $where = array('id_bimbingan' => $id);
        return $this->db->update($this->_table,$data,$where);
    }

    function delete($id){
        return $this->db->delete($this->_table, ["id_bimbingan" => $id]);
    }
}