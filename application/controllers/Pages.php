<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index(){
		redirect('404');
	}

	public function about(){
		$this->load->view('layout/header');
		$this->load->view('pages/about');
		$this->load->view('layout/footer');
	}

	public function service(){
		$this->load->view('layout/header');
		$this->load->view('pages/service');
		$this->load->view('layout/footer');
	}

	public function gallery(){
		$this->load->view('layout/header');
		$this->load->view('pages/gallery');
		$this->load->view('layout/footer');
	}

	public function faq(){
		$this->load->view('layout/header');
		$this->load->view('pages/faq');
		$this->load->view('layout/footer');
	}

	public function datacenter(){
		$this->load->view('layout/header');
		$this->load->view('pages/datacenter');
		$this->load->view('layout/footer');
	}

	public function testimonial(){
		$this->load->view('layout/header');
		$this->load->view('pages/testimonial');
		$this->load->view('layout/footer');
	}

	public function affiliate(){
		$this->load->view('layout/header');
		$this->load->view('pages/affiliate');
		$this->load->view('layout/footer');
	}

	public function notfound(){
		$this->load->view('layout/header');
		$this->load->view('pages/404');
		$this->load->view('layout/footer');
	}
}