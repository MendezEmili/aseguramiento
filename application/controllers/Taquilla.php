<?php

class Taquilla extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('taquillas');
		$this->load->model('salaproyeccion');
	}

	public function index(){
		echo "Hola";
		$this->load->view('taquilla/create');
	}

	//Formulario para creacion
	public function create(){
		$data['title'] = 'Nuevo ticket';
		$data['salas'] = $this->salaproyeccion->get();
		$data['action'] = 'store';
		$this->load->view('taquilla/create', $data);
	}

	//Insert DB
	public function store(){
			if ($this->taquillas->add($this->input->post())){
				?>
				<script>
					alert("Insertado correctamente");
				</script>
				<?php
				header("Location: index.php"); 

			} else {
				?>
				<script>
					alert("Error al insertar");
				</script>
				<?php
			}

			header("Location: ../../index.php"); 
	}

	public function getSalas (){
	
		echo "<pre>";
		var_dump($data['salas']);
		die();
		$this->load->view('taquilla/create', $data);
	}

}
