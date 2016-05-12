<?php
class Torneo_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	public function listaTornei_singoli(){
		$q = $this -> db-> select('*');
		$query = $this->db->get('tornei_singoli_incorso');	 
		return $query->result_array();
	}
	public function aggiungiTorneo($id,$nome,$data,$partecipanti,$id_gioco,$organizzatore){
		$data = array(
			'id' => $id,
			'nome' => $nome,
			'data_creazione' => $data,
			'numero_partecipanti' => $partecipanti,
			'id_gioco' => $id_gioco,
			'organizzatore' => $organizzatore
		);
		$this->db->insert('torneo_singolo', $data);
	}
	public function aggiungiPartecipante($id,$id_persona,$id_torneo,$id_gioco){
		$data = array(
			'id' => $id,
			'id_persona' => $id_persona,
			'id_torneo' => $id_torneo,
			'id_gioco' => $id_gioco
		);
		$this->db->insert('partecipanti_torneo_singolo', $data);
	}
	public function getPartecipanti($id_torneo){
		$q = $this -> db-> select('*')
					    ->where('id_torneo',$id_torneo);
		$query = $this->db->get('partecipanti_torneo_singolo');	 
		return $query->result_array();
	}
}
