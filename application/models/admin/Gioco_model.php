<?php
class Gioco_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	public function lista_gioco(){
		$this->db->select('id');
		$this->db->select('nome');
		$this->db->select('console');
		$this->db->select('producer');
		$this->db->from('lista_gioco');
		$this->db->order_by('nome',"asc");
		$query = $this->db->get();
		return $query->result_array();
	}
	public function get_gioco($id){
		$q = $this -> db
					   -> select('id, nome, console,producer')
					   -> where('id', $id);
			$query = $this->db->get('lista_gioco');	 
			return $query->row();
	}
	public function setGioco($nome,$console,$producer,$id){
		$this->db->set('nome', $nome);
		$this->db->set('console', $console);
		$this->db->set('producer', $producer);
		$this->db->where('id', $id);
		$this->db->update('lista_gioco');
	}
	public function eliminaGioco($id){
		$this->db->where('id', $id);
		$this->db->delete('lista_gioco');	
	}
	public function aggiungiGioco($nome,$console,$producer,$id){
		$data = array(
					'id' => $id,
					'nome' => $nome,
					'console' => $console,
					'producer' => $producer
				);
				$this->db->insert('lista_gioco', $data);
	}
		
}