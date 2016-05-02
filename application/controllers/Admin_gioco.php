<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_gioco extends MY_controller {
	 public function __construct(){
        parent::__construct();
        $this->load->model('admin/gioco_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
	 }
	public function index(){
		$data['gioco']=$this->gioco_model->lista_gioco();
		$data['username']=$_SERVER['PHP_AUTH_USER'];
		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/tabella_gioco',$data);
		$this->load->view('admin/template/footer');
	}
	public function gestisci($id,$metodo) {
		$data['username']=$_SERVER['PHP_AUTH_USER'];
		$data['comando']=$metodo;
		$gioco=$this->gioco_model->get_gioco($id);
		if($metodo=="aggiungi"){
				$data['proprieta']='autofocus';
				$data['id']=null;
				$data['nome']=null;
				$data['console']=null;
				$data['producer']=null;
				$this->load->view('admin/template/header',$data);
				$this->load->view('admin/gestione_gioco',$data);
				$this->load->view('admin/template/footer');
		}	
		if($metodo=="modifica"){
			$data['id']=$gioco->id;
			$data['nome']=$gioco->nome;
			$data['console']=$gioco->console;
			$data['producer']=$gioco->producer;
			$data['proprieta']='autofocus';
			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/gestione_gioco',$data);
			$this->load->view('admin/template/footer');
		}
		if($metodo=="elimina"){
			$data['proprieta']='disabled';
			$data['id']=$gioco->id;
			$data['nome']=$gioco->nome;
			$data['console']=$gioco->console;
			$data['producer']=$gioco->producer;
			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/gestione_gioco',$data);
			$this->load->view('admin/template/footer');
		}	
				
	}
	public function conferma($comando,$id){
		
		if($comando=="modifica"){
			$nome =$this->input->post('nome');
			$console=$this->input->post('console');
			$producer =$this->input->post('producer');
			$this->gioco_model->setGioco($nome,$console,$producer,$id);
		}
		if($comando=="elimina"){
			$this->gioco_model->eliminaGioco($id);
		}
		if($comando=="aggiungi"){
			$nome =$this->input->post('nome');
			$console=$this->input->post('console');
			$id =pow(2,32)*time()+ rand();
			$producer =$this->input->post('producer');
			$this->gioco_model->aggiungiGioco($nome,$console,$producer,$id);
			$data['gioco']=$this->gioco_model->lista_gioco();
		}	
		redirect('/admin_gioco/index');		
	}
	

}