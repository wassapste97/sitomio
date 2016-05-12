<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//trapani sei gay
//Questo cotnroller gestisci le headerhome dell'utente quando è loggato
class Torneo extends CI_controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('torneo_model');
        $this->load->model('gioco_model');
        $this->load->helper('date');
    }
    public function index(){
        $data['torneo']=$this->torneo_model->listaTornei_singoli();
        $this->load->view('templatesHome/headerhome');
        $this->load->view('torneo_view',$data);
        $this->load->view('templatesHome/footerhome');
    }
    public function creaTorneo(){
        $data['gioco']=$this->gioco_model->getListaGioco();
        $this->load->view('templatesHome/headerhome');
        $this->load->view('crea_torneo',$data);
        $this->load->view('templatesHome/footerhome');
    }
    public function caricaTorneo(){
         $organizzatore=$_SESSION['username'];
         $id =pow(2,32)*time()+ rand();
         $nome =$this->input->post('nome');
         $data =date('d-m-y');
         $partecipanti =$this->input->post('partecipanti');
         $id_gioco =$this->input->post('id_gioco');
         $this->torneo_model->aggiungiTorneo($id,$nome,$data,$partecipanti,$id_gioco,$organizzatore);
         redirect('torneo');
    }
    public function dettaglio_torneo($id_torneo){
        $data['partecipanti']=$this->torneo_model->getPartecipanti($id_torneo);
        $this->load->view('templatesHome/headerhome');
        $this->load->view('partecipanti_torneo',$data);
        $this->load->view('templatesHome/footerhome');
    }
    public function partecipa($id_torneo,$id_gioco){
        $id =pow(2,32)*time()+ rand();
        $id_persona=$_SESSION['id'];
        $this->torneo_model->aggiungiPartecipante($id,$id_persona,$id_torneo,$id_gioco);
        redirect('torneo/dettaglio_torneo/'.$id_torneo);
    }
}
