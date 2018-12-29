<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hosting extends CI_Controller {

	public function index(){
		redirect('404');
	}

	public function shared(){
		$this->load->view('layout/header');
		$this->load->view('hosting/shared');
		$this->load->view('layout/footer');
	}

	public function reseller(){
		$this->load->view('layout/header');
		$this->load->view('hosting/reseller');
		$this->load->view('layout/footer');
	}

	public function vps(){
		$this->load->view('layout/header');
		$this->load->view('hosting/vps');
		$this->load->view('layout/footer');
	}

	public function dedicated(){
		$this->load->view('layout/header');
		$this->load->view('hosting/dedicated');
		$this->load->view('layout/footer');
	}
}