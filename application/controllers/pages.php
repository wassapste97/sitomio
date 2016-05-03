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
        $this->load->library('session');
         
     }
    public function index(){
        $data['pagina']="signup";
        $data['opzione'] = "ISCRIVITI";
        $this->load->view('templates/header',$data); 
        $this->load->view('firstpage');   
        $this->load->view('templates/footer');     
    }
    public function login(){
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $esiste=$this->persona_model->verify($email,$password);
        if($esiste==true){
            //HO USATO LA SESSION, LEGGITI I TUTORIAL DI CODEIGNITER è UNA FIGATA. QUESTE VARIABILI SARANNO GLOBALI FINCHE 
            //NON DECIDIAMO NOI DI CHIUDERE LA SESSION, VEDI LA VIEW "home.php"  PER VEDERE COME L'HO RICHIAMATA.
            $userData=$this->persona_model->getUser($email);
            $user = array(
                    'username'  => $userData->username,
                    'nome'  => $userData->nome,
                    'cognome'  => $userData->cognome,
                    'email'     => $userData->email,
                    'id' => $userData->id,
                    'stato' => '1'
            );
            $this->session->set_userdata($user);
            $this->load->view('home');
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
            $risultato2=$this->controlloDati_model->controlloUsername($username);
            if($risultato==false&&$risultato2==false) {
                $this->persona_model->aggiungiPersona($nome, $cognome, $username, $parola_chiave, $id, $email, $nascita);
                
            }
            else{
                echo"Email già presente,sei già iscritto";
            }
        }
    }
    

}
