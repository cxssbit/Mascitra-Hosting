<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
	public function hapus($id){
	
    	$this->ArtModel->delete($id);
    	redirect('article/index');
}
	public function __construct(){
	parent::__construct();
	$this->load->model('ArtModel');
	}

	public function index(){
	$data['article']=$this->ArtModel->view();

	$this->load->view('admin/layout/header');
	$this->load->view('admin/article/art', $data);
	$this->load->view('admin/layout/footer');
}


public function tambah(){
	if($this->input->post('submit')){
		$this->ArtModel->save();
	redirect('article/index');
	}
	$data['kategori']=$this->ArtModel->viewk();
	$this->load->view('tambah3',$data);
}
public function ubah($id){
	if($this->input->post('submit')){
		$this->ArtModel->edit($id);
		redirect(base_url('article'));
	}
	$data['kategori']=$this->ArtModel->viewk();
	$data['article']=$this->ArtModel->viewby($id);
	$this->load->view('admin/layout/header');
	$this->load->view('admin/article/ubah', $data);
	$this->load->view('admin/layout/footer');
}

}?>