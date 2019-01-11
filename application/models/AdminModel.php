<?php 
 
class AdminModel extends CI_Model{

	public function Notif(){
		$this->db->where('status','unread');
		return $this->db->order_by("timestamp", "DESC")->get('message')->result();
	}

	public function NotifRow(){
		$this->db->where('status','unread');
		return $this->db->order_by("timestamp", "DESC")->get('message')->num_rows();
	}
 
}