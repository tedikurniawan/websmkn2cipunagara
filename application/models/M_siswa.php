<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Siswa extends CI_Model{

	public function lists()
	{
        $this->db->select('*');
        $this->db->from('tb_siswa');
        //$this->db->join('tb_mapel','tb_mapel.id_mapel = tb_guru.id_mapel', 'left');
        $this->db->order_by('id_siswa', 'AESC');
        return $this->db->get()->result();
    }

    public function tambah($data)
    {
        $this->db->insert('tb_siswa',$data);
    }

    public function detail($id_siswa)
	{
        $this->db->select('*');
        $this->db->from('tb_siswa');
        //$this->db->join('tb_mapel','tb_mapel.id_mapel = tb_siswa.id_mapel', 'left');
        $this->db->where('id_siswa', $id_siswa);
        return $this->db->get()->row();
    }

    public function ubah($data)
    {
        $this->db->where('id_siswa', $data['id_siswa']);
        $this->db->update('tb_siswa', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_siswa', $data['id_siswa']);
        $this->db->delete('tb_siswa', $data);
    }
} 