<?php 
class ArtModel extends CI_Model{
	public function view(){
		return $this->db->get('article')->result();
	}
	public function viewk(){
		return $this->db->get('kategori')->result();
	}
	public function viewby($id){
		$this->db->where('id',$id);
		return $this->db->get('article')->row();
	}
	public function save(){
		$data = array(
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi'),
			'tanggal' =>$this->input->post('tanggal'),
			'kat' =>$this->input->post('kat')
			);
		$this->db->insert('article',$data);
	}
	public function edit($id){
		$data =  array(
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi'),
			'tanggal' =>$this->input->post('tanggal'),
			'kat' =>$this->input->post('kat'));
		$this->db->where('id',$id);
		$this->db->update('article',$data);
	}
	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('article');
	}
	
}
?>