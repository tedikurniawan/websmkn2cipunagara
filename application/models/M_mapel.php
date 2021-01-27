<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mapel extends CI_Model{

	public function lists()
	{
        $this->db->select('*');
        $this->db->from('tb_mapel');
        $this->db->order_by('id_mapel','AESC');
        return $this->db->get()->result();
    }

    public function detail($id_mapel)
	{
        $this->db->select('*');
        $this->db->from('tb_mapel');
        //$this->db->join('tb_mapel','tb_mapel.id_mapel = tb_mapel.id_mapel', 'left');
        $this->db->where('id_mapel', $id_mapel);
        return $this->db->get()->row();
    }

    public function tambah($data)
    {
        $this->db->insert('tb_mapel',$data);
    }

    public function ubah($data)
    {
        $this->db->where('id_mapel', $data['id_mapel']);
        $this->db->update('tb_mapel', $data);
    }

    
    public function hapus($data)
    {
        $this->db->where('id_mapel', $data['id_mapel']);
        $this->db->delete('tb_mapel', $data);
    }
} 