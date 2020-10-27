<?php
Class Seminar_model extends CI_Model{
    private $_table = 'td_seminar';
    private $_view_table = 'v_seminar';

    function getAll(){
        return $this->db->get($this->_view_table);
    }
    function getWhere($where){
        return $this->db->get_where($this->_view_table, $where);
    }

    function getById($id){
        $this->db->select('id_seminar,Tanggal,jam,NIP_Panelis,id_status,idRuangan,Nilai');
        return $this->db->get_where($this->_table, ["id_seminar" => $id])->result_array();
    }

    function save($data){
        return $this->db->insert($this->_table,$data);
    }

    function update($id,$data){
        $where = array('id_seminar' => $id);
        return $this->db->update($this->_table,$data,$where);
    }

    function delete($id){
        $where = array('id_seminar' => $id);
        return $this->db->delete($this->_table,$where);
    }
}