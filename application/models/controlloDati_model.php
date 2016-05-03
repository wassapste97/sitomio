<?php
class controlloDati_model extends CI_Model {
    
    public function __construct()
    {
        $this->load->database();
    }
    
    public function controlloEmail($email){
        $risultato = $this -> db
            -> select('email')
            -> where('email', $email);
        $query = $this->db->get('persona');
        if ($query->num_rows() <= 0) {
            return false;
        }
        else {
            return true;
        }
    }
    public function controlloUsername($username){
        $risultato = $this -> db
            -> select('username')
            -> where('username', $username);
        $query = $this->db->get('persona');
        if ($query->num_rows() <= 0) {
            return false;
        }
        else {
            return true;
        }
    }
    
}
