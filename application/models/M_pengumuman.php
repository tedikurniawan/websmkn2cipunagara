<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pengumuman extends CI_Model{

	public function lists()
	{
        $this->db->select('*');
        $this->db->from('tb_pengumuman');
        //$this->db->join('tb_mapel','tb_mapel.id_mapel = tb_guru.id_mapel', 'left');
        $this->db->order_by('id_pengumuman', 'AESC');
        return $this->db->get()->result();
    }

    public function tambah($data)
    {
        $this->db->insert('tb_pengumuman',$data);
    }

    public function detail($id_pengumuman)
	{
        $this->db->select('*');
        $this->db->from('tb_pengumuman');
        //$this->db->join('tb_mapel','tb_mapel.id_mapel = tb_pengumuman.id_mapel', 'left');
        $this->db->where('id_pengumuman', $id_pengumuman);
        return $this->db->get()->row();
    }

    public function ubah($data)
    {
        $this->db->where('id_pengumuman', $data['id_pengumuman']);
        $this->db->update('tb_pengumuman', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_pengumuman', $data['id_pengumuman']);
        $this->db->delete('tb_pengumuman', $data);
    }
} 