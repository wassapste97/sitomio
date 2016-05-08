<?php
class gestisciImm_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function insePerco($percorso){
        $data = array(
            'ID_utente' => $_SESSION['id'],
            'collegamento' => $percorso,
        );
        $this->db->insert('immagini_utenti', $data);
    }


}
