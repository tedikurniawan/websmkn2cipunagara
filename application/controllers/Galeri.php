<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('m_galeri');
    }

	public function index()
	{
		$data = array(
					'title'  => 'SMAN 1 Haurgeulis',
                    'title2' => 'Galeri',
                    'galeri' => $this->m_galeri->lists(),
					'isi' 	 => 'admin/galeri/v_list'
				);
		$this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function tambah()
	{
		$this->form_validation->set_rules('nama_galeri','Nama Galeri','required');
  
        
        if ($this->form_validation->run() == TRUE){
            $config['upload_path']   = './sampul/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size']      = 2000;
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('sampul'))
                {

                        $data = array(
                            'title'  => 'SMAN 1 Haurgeulis',
                            'title2' => 'Tambah Galeri',
                            'error'  => $this->upload->display_errors(),
                            'isi' 	 => 'admin/galeri/v_tambah'
                        );
                        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                }
                else
                {
                        $upload_data             = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image']  = './sampul/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);
                        
                        $data = array(

										'nama_galeri'     => $this->input->post('nama_galeri'),
										'sampul'    => $upload_data['uploads']['file_name'],
								
                                     );
                              $this->m_galeri->tambah($data);  
                              $this->session->set_flashdata('pesan','Galeri behasil ditambahkan !');
                              redirect('galeri');     
                }
        }
		$data = array(
					'title'  => 'SMAN 1 Haurgeulis',
                    'title2' => 'Tambah Galeri',
                    //'galeri' => $this->m_galeri->lists(),
					'isi' 	 => 'admin/galeri/v_tambah'
				);
		$this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }
    
    public function ubah($id_galeri)
	{
		$this->form_validation->set_rules('nama_galeri','Nama Galeri','required');
  
        
        if ($this->form_validation->run() == TRUE){
            $config['upload_path']   = './sampul/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size']      = 2000;
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('sampul'))
                {

                        $data = array(
                            'title'  => 'SMAN 1 Haurgeulis',
                            'title2' => 'Ubah Galeri',
                            'error'  => $this->upload->display_errors(),
                            'galeri' => $this->m_galeri->detail($id_galeri),
                            'isi' 	 => 'admin/galeri/v_ubah'
                        );
                        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                }
                else
                {
                        $upload_data             = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image']  = './sampul/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);

                          //Menghapus Foto Lama
                            $galeri = $this->m_galeri->detail($id_galeri);
                                if ($galeri->sampul !="")
                                {
                                    unlink('./sampul/'.$galeri->sampul);
                                }
                        
                        $data = array(
                                        'id_galeri'       => $id_galeri,
										'nama_galeri'     => $this->input->post('nama_galeri'),
										'sampul'          => $upload_data['uploads']['file_name'],
								
                                     );
                              $this->m_galeri->ubah($data);  
                              $this->session->set_flashdata('pesan','Galeri behasil ditambahkan !');
                              redirect('galeri');     
                }
                        $data = array(
                                        'id_galeri'       => $id_galeri,
                                        'nama_galeri'     => $this->input->post('nama_galeri')
                        );
                            $this->m_galeri->ubah($data);  
                            $this->session->set_flashdata('pesan','Galeri behasil ditambahkan !');
                            redirect('galeri');    
                }
                        $data = array(
                                    'title'  => 'SMAN 1 Haurgeulis',
                                    'title2' => 'Ubah Galeri',
                                    'galeri' => $this->m_galeri->detail($id_galeri),
                                    'isi' 	 => 'admin/galeri/v_ubah'
                                );
                        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function hapus($id_galeri)
    {
         //Menghapus Foto Lama
		$galeri = $this->m_galeri->detail($id_galeri);
			if ($galeri->sampul !="")
			{
				unlink('./sampul/'.$galeri->sampul);
			}

        $data = array('id_galeri' => $id_galeri);
        $this->m_galeri->hapus($data);  
        $this->session->set_flashdata('pesan','Data behasil dihapus !');
        redirect('galeri'); 

    }

    public function tambah_foto($id_galeri)
    {
        $this->form_validation->set_rules('ket_foto', 'Keterangan Foto','required');
  
        
        if ($this->form_validation->run() == TRUE){
            $config['upload_path']   = './foto/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size']      = 2000;
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('foto'))
                {
                        $galeri = $this->m_galeri->detail($id_galeri);
                        $data = array(
                            'title'  => 'SMAN 1 Haurgeulis',
                            'title2' => 'Tambah Foto Galeri : '.$galeri->nama_galeri,
                            'error'  => $this->upload->display_errors(),
                            'galeri' => $galeri,
                            'foto'   => $this->m_galeri->lists_foto($id_galeri),
                            'isi' 	 => 'admin/galeri/v_tambah_foto'
                        );
                        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                }
                else
                {
                        $upload_data             = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image']  = './foto/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);

                        
                        $data = array(
                                        'id_galeri'       => $id_galeri,
										'ket_foto'        => $this->input->post('ket_foto'),
										'foto'            => $upload_data['uploads']['file_name'],
								
                                     );
                              $this->m_galeri->tambah_foto($data);  
                              $this->session->set_flashdata('pesan','Foto behasil ditambahkan !');
                              redirect('galeri/tambah_foto/'.$id_galeri);     
                }

                
            }
                        $galeri = $this->m_galeri->detail($id_galeri);
                        $data = array(
                                    'title'  => 'SMAN 1 Haurgeulis',
                                    'title2' => 'Foto Galeri : '.$galeri->nama_galeri,
                                    'galeri' => $galeri,
                                    'foto'   => $this->m_galeri->lists_foto($id_galeri),
                                    'isi' 	 => 'admin/galeri/v_tambah_foto'

                                );
                        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function hapus_foto($id_galeri,$id_foto)
    {
         //Menghapus Foto Lama
		$foto = $this->m_galeri->detail_foto($id_foto);
			if ($foto->foto !="")
			{
				unlink('./foto/'.$foto->foto);
			}

        $data = array('id_foto' => $id_foto);
        $this->m_galeri->hapus_foto($data);  
        $this->session->set_flashdata('pesan','Foto behasil dihapus !');
        redirect('galeri/tambah_foto/'.$id_galeri); 

    }
}