<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//trapani sei gay
class Pages extends CI_controller {
     public function __construct(){
        parent::__construct();
        $this->load->model('persona_model');
         $this->load->model('controlloDati_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
         
     }
    public function index(){
        $data['pagina']="signup";
        $data['opzione'] = "ISCRIVITI";
        $this->load->view('templates/header',$data); 
        $this->load->view('firstpage');   
        $this->load->view('templates/footer');     
    }
    public function conferma(){
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $esiste=$this->persona_model->verify($email,$password);
        if($esiste==true){
            $this->load->view('signup');
        }
        else {
            $this->load->view('errore');    
        }
    }
    public function signup(){
            $data['pagina']="index";
            $data['opzione'] = "LOGIN";
            $this->load->view('templates/header',$data); 
            $this->load->view('signup');
            $this->load->view('templates/footer'); 
    }
    public function gestisci($id,$comando){ 
        if($comando=="modifica"){
            
        }
        if($comando=="elimina"){

        }
        if($comando=="aggiungi"){
            $nome =$this->input->post('nome');
            $cognome =$this->input->post('cognome');
            $username=$this->input->post('username');
            $id =pow(2,32)*time()+ rand();
            $password =$this->input->post('password');
            $parola_chiave=password_hash($password, PASSWORD_DEFAULT);
            $email =$this->input->post('email');
            $nascita=$this->input->post('nascita');
            $risultato=$this->controlloDati_model->controlloEmail($email);
            if($risultato==false) {
                $this->persona_model->aggiungiPersona($nome, $cognome, $username, $parola_chiave, $id, $email, $nascita);
            }
            else{
                echo"Email già presente,sei già iscritto";
            }
        }
    }
    

}
