<?php
class Persona_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}

	public function verify($email,$password){
	$q = $this -> db
				   -> select('*')
				   -> where('email', $email);
		$query = $this->db->get('persona');	 
		if ($query->num_rows() <= 0) {
			return false;
		}
		
		// se la persona esiste, restiuisco true se la pwd è ok, fasle altrimenti
		return password_verify($password , $query->row()->password);
	}	
	public function aggiungiPersona($nome,$cognome,$username,$password,$id,$email,$nascita){
		$data = array(
					'id' => $id,
					'nome' => $nome,
					'cognome' => $cognome,
					'username' => $username,
					'password' => $password,
					'email' => $email,
					'birthday' => $nascita
				);
				$this->db->insert('persona', $data);
	}
	public function getUser($email){
		$q = $this -> db
				   -> select('*')
				   -> where('email', $email);
		$query = $this->db->get('persona');	 
		return $query->row();
	}

}
