<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	 public function __construct(){
     
        parent::__construct();
		if (! isset($_SERVER['PHP_AUTH_USER'])) {
			header('WWW-Authenticate: Basic realm="Privato"');
			header('HTTP/1.0 401 Unauthorized');
			echo 'Bravo bravo schiaccia cancel ;)';
			exit;
		} 
		else {
			$this->load->database();
			$this->load->model('admin/admin_model');
			$isValido = $this->admin_model->verify($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']);
			if($isValido==false){
				redirect('/admin/errore');
			}
		}
	 }

}


