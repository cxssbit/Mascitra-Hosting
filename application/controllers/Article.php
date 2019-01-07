<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->AuthModel->auth(1);
		$this->load->model('ArticleModel');
		$this->load->model('KategoriModel');
		$this->form_validation->set_rules('judul', 'Judul', 'required|max_length[50]');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|max_length[16]');
		$this->form_validation->set_rules('isi', 'Isi', 'required|max_length[20000]');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required|max_length[20]');

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
        $config['max_size']             = 9000;
        $config['max_width']            = 1920;
        $config['max_height']           = 1080;
        $config['encrypt_name']			= TRUE;

      	$this->load->library('upload', $config);

		if($this->form_validation->run()==true){
	      	if($this->upload->do_upload('image')){
	            $resize['image_library'] = 'gd2';
	            $resize['source_image']  = $this->upload->data('full_path');
	            $resize['maintain_ratio']= FALSE;
	            $resize['width']         = 1000;
	            $resize['height']        = 667;           	

	            $this->load->library('image_lib', $resize);         
	            $this->image_lib->resize();
				$image = $this->upload->data('file_name');
	        }else{
	        	$this->session->set_flashdata('info', $this->upload->display_errors());
	        }
			$data = array(
				'judul'   => $this->input->post('judul'),
				'url'     => strtolower(str_replace(' ','-',$this->input->post('judul'))),
				'kategori'=> $this->input->post('kategori'),
				'isi'     => $this->input->post('isi'),
				'image'   => $image,
				'tanggal' => $this->input->post('tanggal')
			);
			$this->db->where('kategori',$this->input->post('kategori'));
			if ($this->db->get('kategori')->num_rows()==0) {
				$this->KategoriModel->postAll(['kategori'=> $this->input->post('kategori')]);
			}
			$this->ArticleModel->postAll($data);
			redirect('article/index');
		}
		$data['kategori']=$this->KategoriModel->getAll();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/article/tambah', $data);
		$this->load->view('admin/layout/footer');
	}

	public function ubah($id){
		$data['kategori']=$this->ArticleModel->getAll();
		$data['article'] =$this->ArticleModel->getSome($id);

		$image = $this->input->post('n_image');
        $config['upload_path']          = './assets/img/blog-img';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 9000;
        $config['max_width']            = 1920;
        $config['max_height']           = 1080;
        $config['encrypt_name']			= TRUE;

      	$this->load->library('upload', $config);

		if($this->form_validation->run()==true){
	      	if($this->upload->do_upload('image')){
	            $resize['image_library'] = 'gd2';
	            $resize['source_image']  = $this->upload->data('full_path');
	            $resize['maintain_ratio']= FALSE;
	            $resize['width']         = 1000;
	            $resize['height']        = 667;           	

	            $this->load->library('image_lib', $resize);         
	            $this->image_lib->resize();
				$image = $this->upload->data('file_name');
	        }
			$data = array(
				'judul'   => $this->input->post('judul'),
				'url'     => strtolower(str_replace(' ','-',$this->input->post('judul'))),
				'kategori'=> $this->input->post('kategori'),
				'isi'     => $this->input->post('isi'),
				'image'   => $image,
				'tanggal' => $this->input->post('tanggal')
			);
			$this->ArticleModel->update($id,$data);
			redirect('article/index');
		}

		$this->load->view('admin/layout/header');
		$this->load->view('admin/article/ubah', $data);
		$this->load->view('admin/layout/footer');
	}

	public function hapus($id){
    	$this->ArticleModel->destroy($id);
    	redirect('article/index');
	}
}?>