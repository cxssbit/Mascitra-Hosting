<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('encryption');
		$this->form_validation->set_rules('email', 'email', 'required|max_length[60]');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[16]');
	}

	public function index(){

	}

	public function login()
	{
		if ($this->form_validation->run()==true) {
			$this->db->where('email',$this->input->post('email'));
			if ($user=$this->db->get('user')->row()) {
				if ($this->input->post('password')==$this->encryption->decrypt($user->password)) {
					$this->AuthModel->login($this->input->post('email'));
				}else{
					$this->session->set_flashdata('info', 'Wrong email or password');
				}
			}else{
				$this->session->set_flashdata('info', 'Wrong email or password');
			}
		}
		$this->load->view('layout/header');
		$this->load->view('pages/login');
		$this->load->view('layout/footer');
	}

	public function register()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|max_length[20]');
		$this->form_validation->set_rules('confirm', 'Confirm', 'required|matches[password]');
		if ($this->form_validation->run()==true) {
			$data = array(
				'name'     => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => $this->encryption->encrypt($this->input->post('password'))
			);
			$this->AuthModel->postAll($data);
			redirect('auth/login');
		}
		echo "Under Maintance";	
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('auth/login');
	}

}
