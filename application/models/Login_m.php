<?php 
class Login_m extends CI_Model
{
	function tampil_data()
	{
		$datanya= $this->db->get('contact');
		return $datanya->result_array();
	}
	
	public function login($email,$password)
	{

		return $this->db->get_where('user', array('email' => $email ,'password' => md5($password)))->row();
	} 
}
?>