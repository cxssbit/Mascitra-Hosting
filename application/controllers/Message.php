<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('MessageModel');
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
		$this->MessageModel->update($id,array('status'=>'read'));
		$data['message']=$this->MessageModel->getSome($id);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/message/view', $data);
		$this->load->view('admin/layout/footer');
	}

	public function hapus($id){
		$this->AuthModel->auth(1);
    	$this->MessageModel->destroy($id);
    	redirect('message');
	}
}?>
