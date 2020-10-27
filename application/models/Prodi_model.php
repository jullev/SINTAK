<?php

Class Prodi_model extends CI_model{
    private $_table = 'prodi';

    function getAll(){
        return $this->db->get($this->_table);
    }
    
}