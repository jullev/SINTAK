<?php

Class Ruangan_model extends CI_Model{
    private $_table = 'ruangan';
    
    function getAll(){
        return $this->db->get($this->_table);
    }

    function getById($id){
        $where = array('idRuangan' => $id);
        return $this->db->get_where($this->_table,$where);
    }
    function save($data){
        return $this->db->insert($this->_table,$data);
    }

    function update($id,$data){
        $where = array('idRuangan' => $id);
        return $this->db->update($this->_table,$data,$where);
    }
    function delete($id){
        $where = array('idRuangan' => $id);
        return $this->db->delete($this->_table,$where);
    }

}