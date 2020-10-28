<?php

class auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuarios');
	}

	public function index(){
		$this->load->view('auth/login');
		$this->load->model('Usuarios');
	}

	public function inicio(){
		$var = $this->input->post();
		//acá no se si fue por el sueño, pero no le entendi como llenas estas propiedades, porque si haces un dump, si sale bien el json
		
		$sesion = $this->Usuarios->login($usuario, $contrasenia);
		echo "<pre>";
		var_dump($var);
		die();
		//$this->usuarios->login($var->usuario, $var->contrasenia);
	
		echo "Login";
		echo $sesion;
	}


}
