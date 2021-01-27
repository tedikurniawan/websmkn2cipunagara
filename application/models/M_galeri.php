<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Galeri extends CI_Model{

	public function lists()
	{
        $this->db->select('tb_galeri.*, count(tb_foto.id_galeri) as jml_foto');
        $this->db->from('tb_galeri');
        $this->db->join('tb_foto','tb_foto.id_galeri = tb_galeri.id_galeri', 'left');
        $this->db->group_by('tb_galeri.id_galeri');
        $this->db->order_by('tb_galeri.id_galeri', 'AESC');
        return $this->db->get()->result();
    }

    public function lists_foto($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('tb_foto');
        $this->db->where('id_galeri', $id_galeri);
        $this->db->order_by('id_foto', 'AESC');
        return $this->db->get()->result();
    }

    public function tambah($data)
    {
        $this->db->insert('tb_galeri', $data);
    }

    public function ubah($data)
    {
        $this->db->where('id_galeri', $data['id_galeri']);
        $this->db->update('tb_galeri', $data);
    }

    public function detail($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('tb_galeri');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get()->row();
    }

    public function hapus($data)
    {
        $this->db->where('id_galeri', $data['id_galeri']);
        $this->db->delete('tb_galeri', $data);
    }

    public function detail_foto($id_foto)
    {
        $this->db->select('*');
        $this->db->from('tb_foto');
        $this->db->where('id_foto', $id_foto);
        return $this->db->get()->row();
    }

    public function tambah_foto($data)
    {
        $this->db->insert('tb_foto', $data);
    }

    public function hapus_foto($data)
    {
        $this->db->where('id_foto', $data['id_foto']);
        $this->db->delete('tb_foto', $data);
    }


}
