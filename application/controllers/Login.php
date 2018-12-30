<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Login_m');
	}

	public function index(){
		$this->load->view('akun/login');
	}
	function masuk()
	{   
		$this->load->model('Login_m');
		$email=$this->input->post('email');
		$password =$this->input->post('password');
		$this->Login_m->Login($email,$password);
		if ($user = "admin") 
		{
			redirect('Login/adminnya');
		}
	}
	 function adminnya()
    {
         $datanya['datanya'] = $this->Login_m->tampil_data();
         $this->load->view('akun/admin',$datanya);
    }
    //untuk logout
    public function keluar()
    {
    	header('location: '.base_url(''));
    }

	
}?>
<?php
