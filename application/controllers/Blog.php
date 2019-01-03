<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('ArticleModel');
		$this->load->model('KategoriModel');
		$this->load->helper('text');
	}

	public function index()
	{
		$data['article'] =$this->ArticleModel->getAll();
		$data['recent']  =$this->ArticleModel->getRecent();
		$data['kategori']=$this->KategoriModel->getAll();
		$this->load->view('layout/header');
		$this->load->view('blog/blog',$data);
		$this->load->view('layout/footer');
	}

	public function page($id)
	{
		$data['article']=$this->ArticleModel->getSome($id);
		$data['recent'] =$this->ArticleModel->getRecent();
		$data['kategori']=$this->KategoriModel->getAll();
		$this->load->view('layout/header');
		$this->load->view('blog/page',$data);
		$this->load->view('layout/footer');
	}
}