<?php

Class Role_model extends CI_model{
    private $_table = 'role';

    function getAll(){
        return $this->db->get($this->_table);
    }
    
}