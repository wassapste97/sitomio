<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//trapani sei gayrrrrr
class Admin extends MY_controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('admin/admin_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
   public function index(){
      $data['username']=$_SERVER['PHP_AUTH_USER'];
      $data['admin']=$this->admin_model->lista_admin();
      $this->load->view('admin/template/header',$data);
      $this->load->view('admin/tabella_admin',$data);
      $this->load->view('admin/template/footer');
   }
   public function verifica_password($id,$comando){
      $data['id']=$id;
      $data['comando']=$comando;
      $data['controller']="admin";
      $this->load->view('admin/password',$data);
   }
   public function gestisci($id,$metodo) {
      $data['username']=$_SERVER['PHP_AUTH_USER'];
      $data['comando']=$metodo;
      $admin=$this->admin_model->get_admin($id);
      if($metodo=="aggiungi"){
            $data['proprieta']='autofocus';
            $data['id']=null;
            $data['nome_cognome']=null;
            $data['username']=null;
            $data['password']=null;
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/gestione_admin',$data);
            $this->load->view('admin/template/footer');
      }  
      $password=$this->input->post('password');
      $hash=$admin->password;
      if(password_verify($password,$hash)){
         if($metodo=="modifica"){
            $data['id']=$admin->id;
            $data['nome_cognome']=$admin->nome_cognome;
            $data['username']=$admin->username;
            $data['proprieta']='autofocus';
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/gestione_admin',$data);
            $this->load->view('admin/template/footer');
         }
         if($metodo=="elimina"){
            $data['proprieta']='disabled';
            $data['id']=$admin->id;
            $data['nome_cognome']=$admin->nome_cognome;
            $data['username']=$admin->username;
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/gestione_admin',$data);
            $this->load->view('admin/template/footer');
         }  
      }
      else{
         echo 'password sbagliata';
      }        
   }
   public function conferma($comando,$id){
      
      if($comando=="modifica"){
         $nome_cognome =$this->input->post('nome_cognome');
         $username=$this->input->post('username');
         $password =$this->input->post('password');
         $parola_chiave=password_hash($password, PASSWORD_DEFAULT);
         $this->admin_model->setAdmin($nome_cognome,$username,$parola_chiave,$id);
      }
      if($comando=="elimina"){
         $this->admin_model->eliminaAdmin($id);
         $data['admin']=$this->admin_model->lista_admin();
      }
      if($comando=="aggiungi"){
         $nome_cognome =$this->input->post('nome_cognome');
         $username=$this->input->post('username');
         $id =pow(2,32)*time()+ rand();
         $password =$this->input->post('password');
         $parola_chiave=password_hash($password, PASSWORD_DEFAULT);
         $this->admin_model->aggiungiAdmin($nome_cognome,$username,$parola_chiave,$id);
         $data['admin']=$this->admin_model->lista_admin();
      }  
      redirect('admin/index');     
   }
   function logout(){
       header('HTTP/1.1 401 Unauthorized');
       die('Admin access turned off');
   }

}