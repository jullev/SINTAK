<?php

Class Mahasiswa_model extends CI_Model{
    private $_table = 'mahasiswa';

    // function rules(){
    //     return [
    //         ['field' => 'NIP',
    //         'label' => 'NIP',
    //         'rules' => 'required'],
            
    //         ['field' => 'NIDN',
    //         'label' => 'NIDN',
    //         'rules' => 'required'],
            
    //         ['field' => 'NAMA',
    //         'label' => 'NAMA',
    //         'rules' => 'required'],

    //         ['field' => 'Alamat',
    //         'label' => 'Alamat',
    //         'rules' => 'required'],

    //         ['field' => 'No_hp',
    //         'label' => 'No. HP',
    //         'rules' => 'required'],

    //         ['field' => 'idRole',
    //         'label' => 'Role',
    //         'rules' => 'required'],

    //         ['field' => 'password',
    //         'label' => 'Password',
    //         'rules' => 'required'],
            
    //         ['field' => 'repassword',
    //         'label' => 'Ulangi Password',
    //         'rules' => 'required']
    //     ];
    // }

    function filter(){
        $this->db->select('NIM,NAMA,email,Alamat,Tahun_masuk,tanggallahir,password,prodi.Nama_prodi');
        $this->db->from($this->_table);
        $this->db->join('prodi', 'mahasiswa.Prodi_idProdi = prodi.idProdi');
        if($_GET['id_prodi']!="" && $_GET['tahun']==""){
            $filter = array('mahasiswa.Prodi_idProdi' => $_GET['id_prodi']);
        }
        else if($_GET['id_prodi']=="" && $_GET['tahun']!=""){
            $filter = array('Tahun_masuk' => $_GET['tahun']);
        }
        else{
            $filter = array('mahasiswa.Prodi_idProdi' => $_GET['id_prodi'],'Tahun_masuk' => $_GET['tahun']);
        }
        $this->db->where($filter);
        return $this->db->get();
    }
    function getAll(){
        $this->db->select('NIM,NAMA,email,Alamat,Tahun_masuk,tanggallahir,password,prodi.Nama_prodi');
        $this->db->from($this->_table);
        $this->db->join('prodi', 'mahasiswa.Prodi_idProdi = prodi.idProdi');
        return $this->db->get();
    }
    function getAngkatan(){
        $this->db->distinct();
        $this->db->select('Tahun_masuk');
        $this->db->from($this->_table);
        return $this->db->get();
    }
    function getById($id){
        $where = array('NIM' => $id);
        return $this->db->get_where($this->_table,$where);
    }

    function getByEmail($email){
        $where = array('email' => $email);
        return $this->db->get_where($this->_table,$where);
    }
    function save($data){
        return $this->db->insert($this->_table,$data);                          
    }
    function saveImport($data){
        return $this->db->insert_batch($this->_table,$data);                          
    }

    function update($id,$data){
        $where = array('NIM' => $id);
        return $this->db->update($this->_table,$data,$where);
    }

    function delete($id){
        $where = array('NIM' => $id);
        return $this->db->delete($this->_table,$where);
    }

}