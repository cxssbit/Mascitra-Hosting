<?php 
 
class SocialModel extends CI_Model{

	private $table='social';

	public function get($name){
		$this->db->where('name',$name);
		return $this->db->get($this->table)->row()->url;
	}

	public function update($name,$data){
		$this->db->where('name',$name);
		$this->db->update($this->table,$data);
	}
 
}