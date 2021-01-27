<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {

    public function guru()
    {
        $this->db->select('*');
        $this->db->from('tb_guru',);
        $this->db->order_by('nama_guru','AESC');
        return $this->db->get()->result();
    }

    public function siswa()
	{
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->order_by('kelas', 'AESC');
        return $this->db->get()->result();
    }

    public function galeri()
	{
        $this->db->select('tb_galeri.*, count(tb_foto.id_galeri) as jml_foto');
        $this->db->from('tb_galeri');
        $this->db->join('tb_foto','tb_foto.id_galeri = tb_galeri.id_galeri', 'left');
        $this->db->group_by('tb_galeri.id_galeri');
        $this->db->order_by('tb_galeri.id_galeri', 'AESC');
        return $this->db->get()->result();
    }

    public function berita($limit, $start)
	{
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_user','tb_user.id_user = tb_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }

    public function total_berita()
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_user','tb_user.id_user = tb_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'AESC');
        return $this->db->get()->result();
    }

    public function detail_berita($slug_berita)
	{
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_user','tb_user.id_user = tb_berita.id_user', 'left');
        $this->db->where('slug_berita', $slug_berita);
        return $this->db->get()->row();
    }

    public function berita_terakhir()
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_user','tb_user.id_user = tb_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'DESC');
        $this->db->limit(4);
        return $this->db->get()->result();
    }

    
    public function detail_galeri($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('tb_foto');
        $this->db->where('id_galeri', $id_galeri);
        $this->db->order_by('id_foto', 'AESC');
        return $this->db->get()->result();
    }

    public function nama_galeri($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('tb_galeri');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get()->row();
    }


    public function berita_home()
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_user','tb_user.id_user = tb_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'DESC');
        $this->db->limit(3);
        return $this->db->get()->result();
    }

    public function guru_home()
    {
        $this->db->select('*');
        $this->db->from('tb_guru',);
        $this->db->order_by('nama_guru','AESC');
        $this->db->limit(4);
        return $this->db->get()->result();
    }

    public function pengumuman_home()
    {
        $this->db->select('*');
        $this->db->from('tb_pengumuman',);
        $this->db->order_by('tgl','DESC');
        $this->db->limit(2);
        return $this->db->get()->result();
    }

    public function galeri_home()
	{
        $this->db->select('tb_galeri.*, count(tb_foto.id_galeri) as jml_foto');
        $this->db->from('tb_galeri');
        $this->db->join('tb_foto','tb_foto.id_galeri = tb_galeri.id_galeri', 'left');
        $this->db->group_by('tb_galeri.id_galeri');
        $this->db->order_by('tb_galeri.id_galeri', 'AESC');
        $this->db->limit(3);
        return $this->db->get()->result();
    }
}