<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MessageModel');
	}

	public function index()
	{
		$this->form_validation->set_rules('name',    'Nama',    'required|max_length[50]');
		$this->form_validation->set_rules('email',   'E-Mail',  'required|max_length[100]|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'required|max_length[50]');
		$this->form_validation->set_rules('message', 'Messagea','required|max_length[1000]');
		$this->form_validation->set_error_delimiters('','');
		if($this->form_validation->run()==true){
			$data = array(
				'name'    => strip_tags($this->input->post('name')),
				'email'   => $this->input->post('email'),
				'subject' => strip_tags($this->input->post('subject')),
				'message' => strip_tags($this->input->post('message'))
			);
			$this->MessageModel->postAll($data);
			redirect('contact');
		}
		$this->load->view('layout/header');
		$this->load->view('contact');
		$this->load->view('layout/footer');
	}

	public function manager()
	{
		$this->AuthModel->auth(1);
		$this->form_validation->set_rules('contact','Kontak','required');
		if($this->form_validation->run()==true){
			$this->ContactModel->update('address' ,array('detail'=>$this->input->post('contact')));
			$this->ContactModel->update('email'   ,array('detail'=>$this->input->post('email')));
			$this->ContactModel->update('phone'   ,array('detail'=>$this->input->post('phone')));

			$this->SocialModel->update('facebook' ,array('url'=>$this->input->post('facebook')));
			$this->SocialModel->update('twitter'  ,array('url'=>$this->input->post('twitter')));
			$this->SocialModel->update('gplus'    ,array('url'=>$this->input->post('gplus')));
			$this->SocialModel->update('instagram',array('url'=>$this->input->post('instagram')));
		}

		$this->load->view('admin/layout/header');
		$this->load->view('admin/contact');
		$this->load->view('admin/layout/footer');
	}

}