<?php

class Taquilla extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('taquillas');
	}

	public function index(){
		echo "Hola";
		$this->load->view('taquilla/create');
	}

	//Formulario para creacion
	public function create(){
		$data['title'] = 'Nuevo ticket';
		$data['action'] = 'store';
		$this->load->view('taquilla/create', $data);
	}

	//Insert DB
	public function store(){
			if ($this->taquillas->add($this->input->post())){
				echo "Insertado correctamente";
				redirect('index');
			} else {
				echo "Error al insertar";
			}

		redirect('create');
	}

}
