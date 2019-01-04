<?php 
 
class ArticleModel extends CI_Model{

	private $table='article';

	public function getSome($id){
		$this->db->where('id',$id);
		return $this->db->get($this->table)->row();
	}

	public function getAll(){
		return $this->db->order_by("tanggal", "desc")->get($this->table)->result();
	}

	public function getKategori($kategori){
		$this->db->where('kategori',$kategori);
		return $this->db->order_by("tanggal", "desc")->get($this->table)->result();
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

	public function getRecent(){
		return $this->db->order_by("tanggal", "desc")->limit(2)->get($this->table)->result();
	}
 
}