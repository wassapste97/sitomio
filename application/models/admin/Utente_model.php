<?php
class Utente_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	public function lista_utente(){
		$this->db->select('id');
		$this->db->select('nome');
		$this->db->select('cognome');
		$this->db->select('username');
		$this->db->select('email');
		$this->db->select('stato');
		$this->db->select('password');
		$this->db->from('persona');
		$query = $this->db->get();
		return $query->result_array();
	}
			
}
