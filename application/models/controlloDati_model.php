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
    
}
