<?php

Class Status_model extends CI_Model{
    private $_table = 'master_status';
    
    function getAll(){
        return $this->db->get($this->_table);
    }

    function getAllDataForTugasAkhir(){
        $this->db->where_in('idMaster_status',array('1','2','4','8'));
        return $this->db->get_where($this->_table);
    }

    function getAllDataForSeminar(){
        $this->db->where_in('idMaster_status',array('1','3','4','7','8'));
        return $this->db->get_where($this->_table);
    }

    function getAllDataForSidang(){
        $this->db->where_in('idMaster_status',array('1','4','5','6','8'));
        return $this->db->get_where($this->_table);
    }

    function getById($id){
        $where = array('idMaster_status' => $id);
        return $this->db->get_where($this->_table,$where);
    }
    function save($data){
        return $this->db->insert($this->_table,$data);
    }

    function update($id,$data){
        $where = array('idMaster_status' => $id);
        return $this->db->update($this->_table,$data,$where);
    }
    function delete($id){
        $where = array('idMaster_status' => $id);
        return $this->db->delete($this->_table,$where);
    }

}