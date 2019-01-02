<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ArticleModel');
		$this->load->model('KategoriModel');
	}

	public function index()
	{
		$data['article']=$this->ArticleModel->getAll();
		$this->load->view('layout/header');
		$this->load->view('blog/blog',$data);
		$this->load->view('layout/footer');
	}

	public function page()
	{
		$this->load->view('layout/header');
		$this->load->view('blog/page');
		$this->load->view('layout/footer');
	}
}