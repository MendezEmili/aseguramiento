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
			echo " Si hay sesion";
		} else { ?>
			<script>
				alert("Usuario o contraseña incorrecto");
			</script>
		<?php }
	}

}
