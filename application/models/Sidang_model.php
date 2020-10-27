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
}