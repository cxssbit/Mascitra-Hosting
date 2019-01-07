<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('MessageModel');
		$this->load->helper('text');
		$this->form_validation->set_rules('name',    'Nama',    'required|max_length[50]');
		$this->form_validation->set_rules('email',   'E-Mail',  'required|max_length[100]|valid_email');
	}

	public function index(){
		$this->AuthModel->auth(1);
		$data['message']=$this->MessageModel->getAll();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/message/index', $data);
		$this->load->view('admin/layout/footer');
	}

	public function view($id){
		$this->AuthModel->auth(1);
		$data['message']=$this->MessageModel->getSome($id);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/message/view', $data);
		$this->load->view('admin/layout/footer');
	}

	public function send(){
		if($this->form_validation->run()==true){
			$data = array(
				'name'    => $this->input->post('name'),
				'email'   => $this->input->post('email'),
				'subject' => $this->input->post('subject'),
				'message' => $this->input->post('message')
			);
			$this->MessageModel->postAll($data);
			redirect('contact');
		}
	}

	public function hapus($id){
		$this->AuthModel->auth(1);
    	$this->MessageModel->destroy($id);
    	redirect('message');
	}
}?>
