<?php 
 
class MessageModel extends CI_Model{

	private $table='message';

	public function getSome($id){
		$this->db->where('id',$id);
		return $this->db->get($this->table)->row();
	}

	public function getAll(){
		return $this->db->order_by("timestamp", "DESC")->get($this->table)->result();
	}

	public function postAll($data){
		$this->db->insert($this->table,$data);
	}

	public function destroy($id){
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}

	public function update($id,$data){
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
 
}