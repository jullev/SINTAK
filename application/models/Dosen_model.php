<?php

Class Dosen_model extends CI_Model{
    private $_table = 'dosen';
    function getAll(){
        $this->db->select('NIP,NIDN,NAMA,Alamat,No_hp,password,role.idRole,role.Role');
        $this->db->from($this->_table);
        $this->db->join('role', 'dosen.idRole = role.idRole','left');
        return $this->db->get();
    }
    function getDosenPembimbing(){
        $this->db->select('NIP,NIDN,NAMA');
        $this->db->from($this->_table);
        $this->db->where('idRole',7);
        return $this->db->get();
    }

    function getById($id){
        $this->db->join('role','dosen.idRole=role.idRole','left');
        $where = array('NIP' => $id);
        return $this->db->get_where($this->_table,$where);
    }
    
    function getByEmail($email){
        $this->db->join('role','dosen.idRole=role.idRole','left');
        $where = array('email' => $email);
        return $this->db->get_where($this->_table,$where);
    }
    function save($data){
        return $this->db->insert($this->_table,$data);
    }

    function update($id,$data){
        $where = array('NIP' => $id);
        return $this->db->update($this->_table,$data,$where);
    }
    function delete($id){
        $where = array('NIP' => $id);
        return $this->db->delete($this->_table,$where);
    }
}
