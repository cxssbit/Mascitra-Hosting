<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->AuthModel->auth(1);
		$this->load->library('encryption');
		$this->load->model('UserModel');
		$this->form_validation->set_rules('name',    'Nama',    'required|max_length[50]');
		$this->form_validation->set_rules('email',   'E-Mail',  'required|max_length[100]|valid_email');
		$this->form_validation->set_rules('level',   'Level',   'required|max_length[1]|numeric');
		$this->form_validation->set_rules('password','Password','required|max_length[16]');
		$this->form_validation->set_rules('confirm', 'Confirm', 'required|max_length[16]|matches[password]');
	}

	public function index(){
		$data['user']=$this->UserModel->getAll();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/user/index', $data);
		$this->load->view('admin/layout/footer');
	}

	public function tambah(){
		if($this->form_validation->run()==true){
			$data = array(
				'name'    => $this->input->post('name'),
				'email'   => $this->input->post('email'),
				'password'=> $this->encryption->encrypt($this->input->post('password')),
				'level'   => $this->input->post('level')
			);
			$this->UserModel->postAll($data);
			redirect('user/index');
		}
		$this->load->view('admin/layout/header');
		$this->load->view('admin/user/tambah');
		$this->load->view('admin/layout/footer');
	}

	public function ubah($id){
		if($this->form_validation->run()==true){
			$data = array(
				'name'    => $this->input->post('name'),
				'email'   => $this->input->post('email'),
				'password'=> $this->encryption->encrypt($this->input->post('password')),
				'level'   => $this->input->post('level')
			);
			$this->UserModel->update($id,$data);
			redirect('user/index');
		}
		$data['user'] =$this->UserModel->getSome($id);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/user/ubah', $data);
		$this->load->view('admin/layout/footer');
	}

	public function hapus($id){
    	$this->UserModel->destroy($id);
    	redirect('user/index');
	}
}?>
