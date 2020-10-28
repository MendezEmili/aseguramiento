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
			echo " Si hay sesion";
			$_SESSION["token"]=(string)"true";
			$_SESSION["user"]=(string)$usuario;
			echo $_SESSION["token"];
			echo $_SESSION["user"]; 
			header("Location: ../../index.php"); 
		} else { ?>
			<script>
				alert("Usuario o contraseña incorrecto");
			</script>
			header("Location: ../../indexv.php"); 
		<?php }
	}

}
