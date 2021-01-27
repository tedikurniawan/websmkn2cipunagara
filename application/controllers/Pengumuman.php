<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengumuman');
    }

	public function index()
	{
		$data = array(
					'title'      => 'SMAN 1 Haurgeulis',
                    'title2'     => 'Pengumuman',
                    'pengumuman' => $this->m_pengumuman->lists(),
					'isi' 	     => 'admin/pengumuman/v_list'
				);
		$this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function tambah()
	{

        $this->form_validation->set_rules('judul_pengumuman','Judul Pengumuman','required');
        $this->form_validation->set_rules('isi_pengumuman','Isi pengumuman','required', array('required'=>'%s Harus diisi !'));
        
        if ($this->form_validation->run() == FALSE){

            $data = array(
                'title'      => 'SMAN 1 Haurgeulis',
                'title2'     => 'Tambah Pengumuman',
                'pengumuman' => $this->m_pengumuman->lists(),
                'isi'        => 'admin/pengumuman/v_tambah'
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);

        }else{
        
		$data = array(
                        'judul_pengumuman' => $this->input->post('judul_pengumuman'),
                        'isi_pengumuman'   => $this->input->post('isi_pengumuman'),
                        'tgl'              => date('Y-m-d H:i')
					 );
		$this->m_pengumuman->tambah($data);
		$this->session->set_flashdata('pesan','Data berhasill ditambahkan !');
        redirect('pengumuman');
        
        }
    }
    
    public function ubah($id_pengumuman)
	{

        $this->form_validation->set_rules('judul_pengumuman','Judul Penumuman','required');
        $this->form_validation->set_rules('isi_pengumuman','Isi Pengumuman','required');
        
        if ($this->form_validation->run() == FALSE){

            $data = array(
                'title'      => 'SMAN 1 Haurgeulis',
                'title2'     => 'Ubah Pengumuman',
                'pengumuman' => $this->m_pengumuman->detail($id_pengumuman),
                'isi' 	     => 'admin/pengumuman/v_ubah'
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);

        }else{

		$data = array(
                        'id_pengumuman'    => $id_pengumuman,
                        'judul_pengumuman' => $this->input->post('judul_pengumuman'),
                        'isi_pengumuman'   => $this->input->post('isi_pengumuman'),
                        'tgl'              => date('Y-m-d H:i')
					 );
		$this->m_pengumuman->ubah($data);
		$this->session->set_flashdata('pesan','Data berhasill diubah !');
        redirect('pengumuman');
        
        }
    }
    
    public function hapus($id_pengumuman)
	{
		$data = array(
						'id_pengumuman' 	 => $id_pengumuman,
					 );
		$this->m_pengumuman->hapus($data);
		$this->session->set_flashdata('pesan','Data berhasill dihapus!');
		redirect('pengumuman');
	}
}