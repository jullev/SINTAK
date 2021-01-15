<?php

class TugasAkhir_Model extends CI_Model
{
    private $_table = 'tugas_akhir';

    function getAll($filter = "", $like = "")
    {
        $this->db->select('id,Judul_TA,tgl_pengajuan,tugas_akhir.Deskripsi,tugas_akhir.abstract,tugas_akhir.keywords,tugas_akhir.Dosen_NIP,dosen.NAMA,mahasiswa.NIM,mahasiswa.Nama as nama_mhs,status_ta.status,topik.topik,tugas_akhir.id_status,icon,count(td_bimbingan.id_bimbingan) as total_bimbingan, mahasiswa.Tahun_masuk ');
        $this->db->from($this->_table);
        $this->db->join('dosen', 'tugas_akhir.Dosen_NIP = dosen.NIP');
        $this->db->join('mahasiswa', 'tugas_akhir.Mahasiswa_NIM = mahasiswa.NIM');
        $this->db->join('topik', 'tugas_akhir.id_topik = topik.idTopik');
        $this->db->join('status_ta', 'tugas_akhir.id_status = status_ta.id_status');
        $this->db->join('prodi p', 'mahasiswa.Prodi_idProdi = p.idProdi');
        $this->db->join('td_bimbingan', 'tugas_akhir.id = td_bimbingan.Tugas_akhir_id', 'left');
        $this->db->group_by('tugas_akhir.id');

        if ($filter) {
            if (is_array($filter)) {
                foreach ($filter as $key => $value) {
                    if ($value != "") {
                        $this->db->where([$key => $value]);
                    }
                }
            }
            else{
                $this->db->where($filter);
            }
        }
        $this->db->where("tugas_akhir.id_status != 1 and tugas_akhir.id_status != 3 and tugas_akhir.id_status != 11");
        if ($like != "") {
            $this->db->like("LOWER(Judul_TA)", strtolower($like));
            $this->db->or_like("LOWER(topik.topik)", strtolower($like));
        }
        $this->db->order_by("id", 'asc');
        return $this->db->get();
    }

    function getPengajuanJudul($filter)
    {
        $this->db->select('id,Judul_TA,tgl_pengajuan,tugas_akhir.Deskripsi,tugas_akhir.abstract,tugas_akhir.keywords,tugas_akhir.Dosen_NIP,dosen.NAMA,mahasiswa.NIM,mahasiswa.Nama as nama_mhs,status_ta.status,topik.topik,tugas_akhir.id_status,icon,count(td_bimbingan.id_bimbingan) as total_bimbingan, mahasiswa.Tahun_masuk ');
        $this->db->from($this->_table);
        $this->db->join('dosen', 'tugas_akhir.Dosen_NIP = dosen.NIP');
        $this->db->join('mahasiswa', 'tugas_akhir.Mahasiswa_NIM = mahasiswa.NIM');
        $this->db->join('topik', 'tugas_akhir.id_topik = topik.idTopik');
        $this->db->join('status_ta', 'tugas_akhir.id_status = status_ta.id_status');
        $this->db->join('td_bimbingan', 'tugas_akhir.id = td_bimbingan.Tugas_akhir_id', 'left');
        $this->db->group_by('tugas_akhir.id');
        
        if (is_array($filter)) {
            foreach ($filter as $key => $value) {
                if ($value != "") {
                    $this->db->where([$key => $value]);
                }
            }
        }
        else{
            $this->db->where($filter);
        }
        $this->db->where(['tgl_ACC', NULL,'tugas_akhir.id_status' => 1]);
        $this->db->order_by("id", 'asc');
        return $this->db->get();
    }
    function getBimbingan($filter)
    {
        $this->db->select('id,Judul_TA,tgl_pengajuan,tugas_akhir.Deskripsi,tugas_akhir.abstract,tugas_akhir.keywords,dosen.NAMA,mahasiswa.NIM,mahasiswa.Nama as nama_mhs,status_ta.status,topik.topik,tugas_akhir.id_status,icon,count(td_bimbingan.id_bimbingan) as total_bimbingan, mahasiswa.Tahun_masuk ');
        $this->db->from($this->_table);
        $this->db->join('dosen', 'tugas_akhir.Dosen_NIP = dosen.NIP');
        $this->db->join('mahasiswa', 'tugas_akhir.Mahasiswa_NIM = mahasiswa.NIM');
        $this->db->join('topik', 'tugas_akhir.id_topik = topik.idTopik');
        $this->db->join('status_ta', 'tugas_akhir.id_status = status_ta.id_status');
        $this->db->join('td_bimbingan', 'tugas_akhir.id = td_bimbingan.Tugas_akhir_id', 'left');
        $this->db->group_by('tugas_akhir.id');

        if ($filter) {
            foreach ($filter as $key => $value) {
                if ($value != "") {
                    $this->db->where([$key => $value]);
                }
            }
        }
        $this->db->where('tgl_ACC is  NOT NULL');
        $this->db->order_by("id", 'asc');
        return $this->db->get();
    }
    function getById($id)
    {
        $where = array('id' => $id);
        return $this->db->get_where($this->_table, $where);
    }

    function getByNim($nim)
    {
        $this->db->select('id,Judul_TA');
        $where = array('Mahasiswa_NIM' => $nim);
        return $this->db->get_where($this->_table, $where);
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
    function save($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    function update($id, $data)
    {
        $where = array('id' => $id);
        return $this->db->update($this->_table, $data, $where);
    }
    function delete($id)
    {
        $where = array('id' => $id);
        return $this->db->delete($this->_table, $where);
    }
    public function getMhsBimbing($nip, $row = '')
    {
        $this->db->select('tugas_akhir.id,tugas_akhir.Judul_TA,tugas_akhir.Mahasiswa_NIM,mahasiswa.NAMA,status_ta.status,mahasiswa.Tahun_masuk,p.Nama_prodi');
        $this->db->join('mahasiswa', 'tugas_akhir.Mahasiswa_NIM = mahasiswa.NIM');
        $this->db->join('prodi p', 'mahasiswa.Prodi_idProdi = p.idProdi');
        $this->db->join('status_ta', 'tugas_akhir.id_status = status_ta.id_status');
        $this->db->from('tugas_akhir');
        if (isset($_GET['tahun'])) {
            $this->db->where(array('mahasiswa.Tahun_masuk' => $_GET['tahun'], 'mahasiswa.Prodi_idProdi' => $_GET['id_prodi']));
        }
        $this->db->where('Dosen_NIP', $nip);
        $this->db->group_by('tugas_akhir.id');
        if ($row != '') {
            return $this->db->get()->num_rows();
        } else {
            return $this->db->get()->result_array();
        }
    }
}
