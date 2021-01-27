<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_home');
	}

	public function index()
	{
		$data = array(

					'title' 	  		=> 'Halaman Beranda',
					'galeri'	  		=> $this->m_home->galeri(),
					'berita'	  		=> $this->m_home->berita_home(),
					'guru'		  		=> $this->m_home->guru_home(),
					'pengumuman_home' 	=> $this->m_home->pengumuman_home(),
					'galeri_home' 		=> $this->m_home->galeri_home(),
					'isi'		  		=> 'v_home'
				);
		$this->load->view('layout/v_wrapperhome',$data,FALSE);
	}
	
	public function guru()
	{
		$data = array(

					'title' => 'Guru',
					'guru'  => $this->m_home->guru(),
					'isi' 	=> 'v_guru'
				);
		$this->load->view('layout/v_wrapper',$data,FALSE);
	}

	public function siswa()
	{
		$data = array(

					'title' => 'Siswa',
					'siswa'  => $this->m_home->siswa(),
					'isi' 	=> 'v_siswa'
				);
		$this->load->view('layout/v_wrapper',$data,FALSE);
	}

	public function berita()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url('home/berita');
		$config['total_rows'] = count($this->m_home->total_berita());
		$config['per_page'] = 8;
		$config['uri_segmen'] = 3;
		// start dan limit
			$limit = $config['per_page'];
			$start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
		//end-----------------------------------------------------------
		$config['first_link']		= 'First';
		$config['last_link']		= 'Last';
		$config['next_link']		= 'Next';
		$config['prev_link']		= 'Prev';
		$config['full_tag_open']	= '<div class="pagination_container d-flex flex-row align-items-center justify-content-start text-center"><ul class="pagination_list">';
		$config['num_tag_open']		= '<li>';
		$config['num_tag_close']	= '</li>';
		$config['cur_tag_open']		= '<li class="active"><a>';
		$config['cur_tag_close']	= '</a></li>';
		$config['next_tag_open']	= '<li>';
		$config['next_tag_close']	= '</li>';
		$config['prev_tag_open']	= '<li>';
		$config['prev_tag_close']	= '</li>';
		$config['first_tag_open']	= '<li>';
		$config['first_tag_close']	= '</li>';
		$config['last_tag_open']	= '<li>';
		$config['last_tag_close']	= '</li>';
		$config['full_tag_close']	= '</li></div>';
		//
		$this->pagination->initialize($config);

		$data = array(

					'paginasi'        => $this->pagination->create_links(),
					'berita_terakhir' => $this->m_home->berita_terakhir(),
					'berita'          => $this->m_home->berita($limit, $start),
					'title'           => 'Berita',
					'isi' 	          => 'v_berita'
				);
		$this->load->view('layout/v_wrapper',$data,FALSE);
	}
	public function detail_berita($slug_berita)
	{
		$data = array(

				'title'   => 'Detail Berita',
				'berita'  => $this->m_home->detail_berita($slug_berita),
				'berita_terakhir' => $this->m_home->berita_terakhir(),
				'isi'     => 'v_detail_berita'
			);
		$this->load->view('layout/v_wrapper',$data,FALSE);
	}

	public function galeri()
	{
		$data = array(

				'title'   => 'Galeri',
				'galeri'  => $this->m_home->galeri(),
				'isi'     => 'v_galeri'
			);
		$this->load->view('layout/v_wrapper',$data,FALSE);
	}

	public function detail_galeri($id_galeri)
	{
		$data = array(

				'title'   => 'Detail Galeri',
				'galeri'  => $this->m_home->detail_galeri($id_galeri),
				'nama_galeri'  => $this->m_home->nama_galeri($id_galeri),
				'isi'     => 'v_detail_galeri'
			);
		$this->load->view('layout/v_wrapper',$data,FALSE);
	}

	public function kontak()
	{
		$data = array(
			'title'  => 'Kontak',
			'isi' 	 => 'v_kontak'
		);
$this->load->view('layout/v_wrapper',$data,FALSE);
	}
}