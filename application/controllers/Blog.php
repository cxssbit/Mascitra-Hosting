<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('ArticleModel');
		$this->load->model('KategoriModel');
	}

	public function index()
	{
		$this->load->library('pagination');		

		$config['base_url'] = base_url('blog');
		$config['total_rows'] = 10;
		$config['per_page'] = 2;		
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<li>';
		$config['cur_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';




		$this->pagination->initialize($config);

		$data['article'] =$this->ArticleModel->getAll();
		$data['recent']  =$this->ArticleModel->getRecent();
		$data['kategori']=$this->KategoriModel->getAll();
		$this->load->view('layout/header');
		$this->load->view('blog/blog',$data);
		$this->load->view('layout/footer');
	}

	public function page($judul)
	{
		$data['article']=$this->ArticleModel->getUrl($judul);
		$data['recent'] =$this->ArticleModel->getRecent();
		$data['kategori']=$this->KategoriModel->getAll();
		$this->load->view('layout/header');
		$this->load->view('blog/page',$data);
		$this->load->view('layout/footer');
	}

	public function kategori($kategori)
	{
		$data['article'] =$this->ArticleModel->getKategori($kategori);
		$data['recent']  =$this->ArticleModel->getRecent();
		$data['kategori']=$this->KategoriModel->getAll();
		$this->load->view('layout/header');
		$this->load->view('blog/blog',$data);
		$this->load->view('layout/footer');
	}
}