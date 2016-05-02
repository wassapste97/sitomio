<?php
class Admin_model extends CI_Model {
   
   public function __construct()
   {
      $this->load->database();
   }
   
   public function lista_admin(){
      $this->db->select('id');
      $this->db->select('username');
      $this->db->select('nome_cognome');
      $this->db->select('password');
      $this->db->from('admin');
      $query = $this->db->get();
      return $query->result_array();
   }
      public function get_admin($id){
         $q = $this -> db
                  -> select('id, username, nome_cognome,password')
                  -> where('id', $id);
         $query = $this->db->get('admin');   
         return $query->row();
   }
   public function aggiungiAdmin($nome_cognome,$username,$password,$id){
      $data = array(
               'id' => $id,
               'nome_cognome' => $nome_cognome,
               'username' => $username,
               'password' => $password
            );
            $this->db->insert('admin', $data);
   }
   public function setAdmin($nome_cognome,$username,$password,$id){   
      $this->db->set('nome_cognome', $nome_cognome);
      $this->db->set('username', $username);
      $this->db->set('password', $password);
      $this->db->where('id', $id);
      $this->db->update('admin');
   }
   public function eliminaAdmin($id){
      $this->db->where('id', $id);
      $this->db->delete('admin');    
   }
   public function verify($username,$password){
   $q = $this -> db
               -> select('username, password')
               -> where('username', $username);
      $query = $this->db->get('admin');   
      if ($query->num_rows() <= 0) {
         return false;
      }
      // se la persona esiste, restiuisco true se la pwd è ok, fasle altrimenti
      return password_verify($password , $query->row()->password);
   }     
}