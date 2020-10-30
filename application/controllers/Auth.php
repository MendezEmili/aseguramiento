<?php

class auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuarios');
	}

	public function index(){
		$data['action'] = 'auth/inicio';
		$this->load->view('auth/login', $data);
		$this->load->model('Usuarios');
	}

	public function inicio(){
		$usuario = $this->input->post('usuario');
		$contrasenia = $this->input->post('contrasenia');
		$sesion = $this->Usuarios->login($usuario, $contrasenia);
		if($sesion){
			session_start();
			$_SESSION["token"]=(string)"true";
			$_SESSION["user"]=(string)$usuario;
			$this->load->view('welcome_message');
		} else { ?>
			<script>
				alert("Usuario o contraseña incorrecto");
				
			</script>
			<?php $this->load->view('rejected_message');
			header("Location: /index.php");
		 }
	}

	public function logout(){
		session_start();
		session_destroy();
		header("Location: ../../index.php");

	}

}
