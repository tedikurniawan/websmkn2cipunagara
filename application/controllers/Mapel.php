<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mapel');
	}

	public function index()
	{
		$data = array(
                    'title'  => 'SMAN 1 Haurgeulis',
					'title2' => 'Mata Pelajaran',
					'mapel'  => $this->m_mapel->lists(),
					'isi'  	 => 'admin/mapel/v_list'
				);
		$this->load->view('admin/layout/v_wrapper',$data,FALSE);
	}
	
	public function tambah()
	{

		$this->form_validation->set_rules('id_mapel','Id Mata Pelajaran','required');
        $this->form_validation->set_rules('nama_mapel','Nama Mata Pelajaran','required');
        
        if ($this->form_validation->run() == FALSE){

            $data = array(
                'title'      => 'SMAN 1 Haurgeulis',
                'title2'     => 'Tambah Mata Pelajaran',
                'mapel'      => $this->m_mapel->lists(),
                'isi'        => 'admin/mapel/v_tambah'
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);

        }else{
		$data = array(
			         	'id_mapel' 	 => $this->input->post('id_mapel'),
						'nama_mapel' => $this->input->post('nama_mapel')
					 );
		$this->m_mapel->tambah($data);
		$this->session->set_flashdata('pesan','Data berhasill ditambahkan !');
		redirect('mapel');
		}
	}

	public function ubah($id_mapel)
	{
        $this->form_validation->set_rules('nama_mapel','Nama Mata Pelajaran','required');
        
        if ($this->form_validation->run() == FALSE){

            $data = array(
                'title'      => 'SMAN 1 Haurgeulis',
                'title2'     => 'Tambah Mata Pelajaran',
                'mapel'      => $this->m_mapel->detail($id_mapel),
                'isi'        => 'admin/mapel/v_ubah'
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);

        }else{
		$data = array(
						'id_mapel' 	 => $id_mapel, 
						'nama_mapel' => $this->input->post('nama_mapel')
					 );
		$this->m_mapel->ubah($data);
		$this->session->set_flashdata('pesan','Data berhasill diubah !');
		redirect('mapel');
		}
	}

	public function hapus($id_mapel)
	{
		$data = array(
						'id_mapel' 	 => $id_mapel,
					 );
		$this->m_mapel->hapus($data);
		$this->session->set_flashdata('pesan','Data berhasill dihapus!');
		redirect('mapel');
	}

}