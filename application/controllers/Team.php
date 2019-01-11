<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->AuthModel->auth(1);
		$this->load->library('encryption');
		$this->load->model('TeamModel');
		$this->form_validation->set_rules('name'    , 'Nama',    'required');
		$this->form_validation->set_rules('position', 'Jabatan', 'required');
		$this->form_validation->set_rules('skill'   , 'Position','required');
		$this->form_validation->set_rules('bio'     , 'Bio'     ,'required');
	}

	public function index(){
		$data['team']=$this->TeamModel->getAll();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/team/index', $data);
		$this->load->view('admin/layout/footer');
	}

	public function tambah(){
		if($this->form_validation->run()==true){
			$image='';
			$config['upload_path']          = './assets/img/team-img';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 9000;
	        $config['encrypt_name']			= TRUE;
	        $this->load->library('upload', $config);
	        if($this->upload->do_upload('image')){
	            $resize['image_library'] = 'gd2';
	            $resize['source_image']  = $this->upload->data('full_path');
	            $resize['maintain_ratio']= FALSE;
	            $resize['width']         = 310;
	            $resize['height']        = 310;           	

	            $this->load->library('image_lib', $resize);         
	            $this->image_lib->resize();
				$image = $this->upload->data('file_name');
	        }else{
	        	$this->session->set_flashdata('info', $this->upload->display_errors());
	        }
			$data = array(
				'name'    => $this->input->post('name'),
				'position'=> $this->input->post('position'),
				'skill'   => $this->input->post('skill'),
				'bio'     => $this->input->post('bio'),
				'facebook'=> $this->input->post('facebook'),
				'twitter' => $this->input->post('twitter'),
				'gplus'   => $this->input->post('gplus'),
				'image'   => $image
			);
			$this->TeamModel->postAll($data);
			redirect('team');
		}
		$this->load->view('admin/layout/header');
		$this->load->view('admin/team/tambah');
		$this->load->view('admin/layout/footer');
	}

	public function ubah($id){
		$data['team'] =$this->TeamModel->getSome($id);
		if($this->form_validation->run()==true){
			$image=$data['team']->image;
			$config['upload_path']          = './assets/img/team-img';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 9000;

	        if (empty($data['team']->image)) {
	        	$config['encrypt_name']		= TRUE;
	        }else{
	        	$config['file_name']		= $data['team']->image;
        		$config['overwrite']		= TRUE;
	        }

	        $this->load->library('upload', $config);
	        if($this->upload->do_upload('image')){
	            $resize['image_library'] = 'gd2';
	            $resize['source_image']  = $this->upload->data('full_path');
	            $resize['maintain_ratio']= FALSE;
	            $resize['width']         = 310;
	            $resize['height']        = 310;           	

	            $this->load->library('image_lib', $resize);         
	            $this->image_lib->resize();
				$image = $this->upload->data('file_name');
	        }else{
	        	$this->session->set_flashdata('info', $this->upload->display_errors());
	        }
			$data = array(
				'name'    => $this->input->post('name'),
				'position'=> $this->input->post('position'),
				'skill'   => $this->input->post('skill'),
				'bio'     => $this->input->post('bio'),
				'facebook'=> $this->input->post('facebook'),
				'twitter' => $this->input->post('twitter'),
				'gplus'   => $this->input->post('gplus'),
				'image'   => $image
			);
			$this->TeamModel->update($id,$data);
			redirect('team/index');
		}
		
		$this->load->view('admin/layout/header');
		$this->load->view('admin/team/ubah', $data);
		$this->load->view('admin/layout/footer');
	}

	public function hapus($id){
		$data=$this->TeamModel->getSome($id);
		$this->load->helper("file");
		if (!empty($data->image)) {
			unlink('assets/img/team-img/'.$data->image);
		}
    	$this->TeamModel->destroy($id);
    	redirect('team');
	}
}?>
