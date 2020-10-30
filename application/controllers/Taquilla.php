<?php

class Taquilla extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('taquillas');
		$this->load->model('salaproyeccion');
	}

	public function index()
	{
		echo "Hola";
		$this->load->view('taquilla/create');
	}

	//Formulario para creacion
	public function create()
	{
		$data['title'] = 'Nuevo ticket';
		$data['salas'] = $this->salaproyeccion->get();
		$data['action'] = 'store';
		$this->load->view('taquilla/create', $data);
	}

	//Insert DB
	public function store()
	{
		$fecha= $this->input->post();
		if (isset($fecha)) {
			$id = $this->taquillas->add($this->input->post());
			if ($id != false) {
				
?>
				<script>
					alert("Insertado correctamente. Su ticket es : <?php echo $id ?> ");
					window.location.replace("/index.php");
				</script>
			<?php
			
				
			} else {
			?>
				<script>
					alert("Error al insertar");
				</script>
<?php
			}
		}
	}


	public function uniqueTicket()
	{
	}
}
