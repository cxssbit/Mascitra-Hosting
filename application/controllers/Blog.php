<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('blog/blog');
		$this->load->view('layout/footer');
	}

	public function page()
	{
		$this->load->view('layout/header');
		$this->load->view('blog/page');
		$this->load->view('layout/footer');
	}
}