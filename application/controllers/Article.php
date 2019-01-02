<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ArticleModel');
		$this->load->model('KategoriModel');
	}

	public function index(){
		$data['article']=$this->ArticleModel->getAll();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/article/art', $data);
		$this->load->view('admin/layout/footer');
	}

	public function tambah(){
		if($this->input->post('submit')){
			$data = array(
				'judul'  => $this->input->post('judul'),
				'isi'    => $this->input->post('isi'),
				'tanggal'=> $this->input->post('tanggal')
			);
			$this->ArticleModel->postAll($data);
			redirect('article/index');
		}
		$data['kategori']=$this->KategoriModel->getAll();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/article/tambah', $data);
		$this->load->view('admin/layout/footer');
	}

	public function ubah($id){
		if($this->input->post('submit')){
			$data = array(
				'judul'  => $this->input->post('judul'),
				'isi'    => $this->input->post('isi'),
				'tanggal'=> $this->input->post('tanggal')
			);
			$this->ArticleModel->update($id,$data);
			redirect('article/index');
		}
		$data['kategori']=$this->ArticleModel->getAll();
		$data['article'] =$this->ArticleModel->getSome($id);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/article/ubah', $data);
		$this->load->view('admin/layout/footer');
	}

	public function hapus($id){
    	$this->ArticleModel->destroy($id);
    	redirect('article/index');
	}
}?>