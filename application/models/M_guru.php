<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Guru extends CI_Model{

	public function lists()
	{
        $this->db->select('*');
        $this->db->from('tb_guru');
        $this->db->join('tb_mapel','tb_mapel.id_mapel = tb_guru.id_mapel', 'left');
        $this->db->order_by('id_guru', 'AESC');
        return $this->db->get()->result();
    }

    public function tambah($data)
    {
        $this->db->insert('tb_guru',$data);
    }

    public function detail($id_guru)
	{
        $this->db->select('*');
        $this->db->from('tb_guru');
        $this->db->join('tb_mapel','tb_mapel.id_mapel = tb_guru.id_mapel', 'left');
        $this->db->where('id_guru', $id_guru);
        return $this->db->get()->row();
    }

    public function ubah($data)
    {
        $this->db->where('id_guru', $data['id_guru']);
        $this->db->update('tb_guru', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_guru', $data['id_guru']);
        $this->db->delete('tb_guru', $data);
    }
} 