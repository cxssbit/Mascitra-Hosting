<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->AuthModel->auth(1);
	}

	public function index()
	{
		$this->load->view('admin/layout/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/layout/footer');
	}
}