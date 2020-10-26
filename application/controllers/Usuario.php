<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuarios');
	}

	public function index(){
		echo "Hola";
		$this->load->view('usuario/usuario_management');
	}

	//Formulario para creacion
	public function create(){
		$data['title'] = 'Nuevo usuario';
		$data['action'] = 'store';
		$this->load->view('usuario/create', $data);
	}

	//Insert DB
	public function store(){
			if ($this->usuarios->add($this->input->post())){
				echo "Insertado correctamente";
				redirect('index');
			} else {
				echo "Error al insertar";
			}

		redirect('create');
	}

}
