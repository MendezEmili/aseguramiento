<?php

class Auth extends CI_Controller {

	public function index(){
		$this->load->view('auth/login');
		$this->load->model('usuarios');
	}

	public function inicio(){
		$var = $this->input->post();
		echo "<pre>";
		var_dump($var);
		die();
		$sesion = $this->usuarios->login($usuario, $password);
	}
}
