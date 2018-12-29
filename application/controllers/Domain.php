<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Domain extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('domain');
		$this->load->view('layout/footer');
	}
}