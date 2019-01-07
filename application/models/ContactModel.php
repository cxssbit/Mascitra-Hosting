<?php 
 
class ContactModel extends CI_Model{

	private $table='contact';

	public function get($name){
		$this->db->where('name',$name);
		return $this->db->get($this->table)->row()->detail;
	}

	public function update($name,$data){
		$this->db->where('name',$name);
		$this->db->update($this->table,$data);
	}
 
}