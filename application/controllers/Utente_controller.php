<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//trapani sei gay
//Questo cotnroller gestisci le headerhome dell'utente quando è loggato
class Utente_controller extends CI_controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');

    }
    public function index(){
        $this->load->view('templatesHome/headerhome');
        $this->load->view('me_view');
        $this->load->view('templatesHome/footerhome');
    }
    public function caricaImmagine(){
        if (!isset($_FILES['userfile']) || !is_uploaded_file($_FILES['userfile']['tmp_name'])) {
            echo 'Non hai inviato nessun file...';
            exit;
        }

        //percorso della cartella dove mettere i file caricati dagli utenti
        $uploaddir = "C:/xampp/htdocs/sitomio/resources/images";

        //Recupero il percorso temporaneo del file
        $userfile_tmp = $_FILES['userfile']['tmp_name'];

        //recupero il nome originale del file caricato
        $userfile_name = $_FILES['userfile']['name'];

        //copio il file dalla sua posizione temporanea alla mia cartella upload
        if (move_uploaded_file($userfile_tmp, $uploaddir . $userfile_name)) {
            //Se l'operazione è andata a buon fine...
            echo 'File inviato con successo.';
        }else{
            //Se l'operazione è fallta...
            echo 'Upload NON valido!';
        }
    }
    


}
