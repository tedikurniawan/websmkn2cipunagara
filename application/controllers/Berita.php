<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('m_berita');
    }

	public function index()
	{
		$data = array(
					'title'  => 'SMAN 1 Haurgeulis',
                    'title2' => 'Berita',
                    'berita' => $this->m_berita->lists(),
					'isi' 	 => 'admin/berita/v_lists'
				);
		$this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function tambah()
	{
		$this->form_validation->set_rules('judul_berita','Judul Berita','required');
        $this->form_validation->set_rules('isi_berita','Isi Berita','required', array('required'=>'%s Harus diisi !'));
  
        
        if ($this->form_validation->run() == TRUE){
            $config['upload_path']   = './gambar_berita/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 2000;
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('gambar_berita'))
                {

                        $data = array(
                            'title'  => 'SMAN 1 Haurgeulis',
                            'title2' => 'Tambah Berita',
                            'error'  => $this->upload->display_errors(),
                            'isi' 	 => 'admin/berita/v_tambah'
                        );
                        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                }
                else
                {
                        $upload_data             = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image']  = './gambar_berita/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);
                        
                        $data = array(
										'judul_berita'     => $this->input->post('judul_berita'),
										'slug_berita'      => url_title($this->input->post('judul_berita'), 'dash', TRUE),
                                        'isi_berita'  	   => $this->input->post('isi_berita'),
										'gambar_berita'    => $upload_data['uploads']['file_name'],
										'tgl_berita'       => date('Y-m-d H:i'),
										'id_user'          => $this->session->userdata('id_user')
                                     );
                              $this->m_berita->tambah($data);  
                              $this->session->set_flashdata('pesan','Berita behasil ditambahkan !');
                              redirect('berita');     
                }
        }
		$data = array(
					'title'  => 'SMAN 1 Haurgeulis',
                    'title2' => 'Tambah Berita',
                    //'berita' => $this->m_berita->lists(),
					'isi' 	 => 'admin/berita/v_tambah'
				);
		$this->load->view('admin/layout/v_wrapper',$data,FALSE);
	}
	
	public function ubah($id_berita)
	{
		$this->form_validation->set_rules('judul_berita','Judul Berita','required');
        $this->form_validation->set_rules('isi_berita','Isi Berita','required', array('required'=>'%s Harus Diisi !'));
  
        
        if ($this->form_validation->run() == TRUE){
            $config['upload_path']   = './gambar_berita/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 2000;
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('gambar_berita'))
                {

                        $data = array(
                            'title'  => 'SMAN 1 Haurgeulis',
                            'title2' => 'Ubah Berita',
							'error'  => $this->upload->display_errors(),
							'berita' => $this->m_berita->detail($id_berita),
                            'isi' 	 => 'admin/berita/v_ubah'
                        );
                        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                }
                else
                {
                        $upload_data             = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image']  = './gambar_berita/'.$upload_data['uploads']['file_name'];
						$this->load->library('image_lib', $config);
						
                         //Menghapus Foto Lama
						 $berita = $this->m_berita->detail($id_berita);
							if ($berita->gambar_berita !="")
							{
								unlink('./gambar_berita/'.$berita->gambar_berita);
							}

                        $data = array(
										'id_berita'		   => $id_berita,
										'judul_berita'     => $this->input->post('judul_berita'),
										'slug_berita'      => url_title($this->input->post('judul_berita'), 'dash', TRUE),
                                        'isi_berita'  	   => $this->input->post('isi_berita'),
										'gambar_berita'    => $upload_data['uploads']['file_name'],
										'tgl_berita'       => date('Y-m-d H:i'),
										'id_user'          => $this->session->userdata('id_user')
                                     );
                              $this->m_berita->ubah($data);  
                              $this->session->set_flashdata('pesan','Berita behasil diubah !');
                              redirect('berita');     
				}
						$data = array(
										'id_berita'		   => $id_berita,
										'judul_berita'     => $this->input->post('judul_berita'),
										'slug_berita'      => url_title($this->input->post('judul_berita'), 'dash', TRUE),
										'isi_berita'  	   => $this->input->post('isi_berita'),
										'tgl_berita'       => date('Y-m-d H:i'),
										'id_user'          => $this->session->userdata('id_user')
									);
							$this->m_berita->ubah($data);  
							$this->session->set_flashdata('pesan','Berita behasil diubah !');
							redirect('berita');     
					}
		$data = array(
					'title'  => 'SMAN 1 Haurgeulis',
                    'title2' => 'Tambah Berita',
                    'berita' => $this->m_berita->detail($id_berita),
					'isi' 	 => 'admin/berita/v_ubah'
				);
		$this->load->view('admin/layout/v_wrapper',$data,FALSE);
	}
	public function hapus($id_berita)
    {
         //Menghapus Foto Lama
		$berita = $this->m_berita->detail($id_berita);
			if ($berita->gambar_berita !="")
			{
				unlink('./gambar_berita/'.$berita->gambar_berita);
			}

        $data = array('id_berita' => $id_berita);
        $this->m_berita->hapus($data);  
        $this->session->set_flashdata('pesan','Data behasil dihapus !');
        redirect('berita'); 

    }
}