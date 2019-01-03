<?php 
 
class AuthModel extends CI_Model{

	private $table='user';

	public function userdata(){
		$this->db->where('email',$this->session->userdata('email'));
		$auth = $this->db->get($this->table)->row();
		return $auth;
	}

	public function login($email){
		$this->db->where('email',$username);
		$auth = $this->db->get($this->table)->row();
		$data_session = array(
			'email' => $email,
			'name'     => $auth->name,
			'login' => true
		);
		$this->session->set_userdata($data_session);
		$_SESSION['login'] = true;

		if ($auth->level==0) {
			redirect('dashboard');
		}else{
			redirect('user');
		}
	}

	public function auth($level){
		if (!empty($this->session->userdata('email'))){
			$this->db->where('email',$this->session->userdata('email'));
			$auth = $this->db->get($this->table)->row();
			if ($this->session->userdata('email') != $auth->email) {
				redirect('auth/login');
			}elseif($auth->level<$level) {
				redirect('notfound');
			}
		}else{
			redirect('auth/login');
		}
	}

	public function postAll($data){
		$this->db->insert($this->table,$data);
	}
 
}