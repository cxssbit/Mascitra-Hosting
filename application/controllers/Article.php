<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->AuthModel->auth(1);
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
		$image = 'img-1.jpg';
        $config['upload_path']          = './assets/img/blog-img';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 1500;
        $config['max_height']           = 1500;
        $config['encrypt_name']			= TRUE;

      	$this->load->library('upload', $config);

      	if($this->upload->do_upload('image'))
        {
            $resize['image_library'] = 'gd2';
            $resize['source_image']  = $this->upload->data('full_path');
            $resize['maintain_ratio']= FALSE;
            $resize['width']         = 1000;
            $resize['height']        = 667;           

            $this->load->library('image_lib', $resize);         
            $this->image_lib->resize();
			$image = $this->upload->data('file_name');
        }

		if($this->input->post('submit')){
			$data = array(
				'judul'  => $this->input->post('judul'),
				'isi'    => $this->input->post('isi'),
				'image'  => $image,
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