<?php
class Gioco_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	public function getListaGioco(){
		$q = $this -> db-> select('*');
		$query = $this->db->get('lista_gioco');	 
		return $query->result_array();
	}
}
