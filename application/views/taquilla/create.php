<?php
session_start();
if (isset($_SESSION['token']) && $_SESSION['token'] == "true") {
	$this->load->view('assets/header'); ?>
		<div class="container-fluid bg-info">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1>Bienvenido <?php echo $_SESSION['user'];?></h1>
					</div>
					<div class="col">
						<a href="../auth/logout" class="btn btn-danger">Cerrar Sesión</a>
					</div>
				</div>
			</div>
		</div>
	<?php
}
else { ?>
	<script>
		alert('Esta pagina es solo para usuarios registrados.');
	</script>
	<?php
	$this->load->view('rejected_message');
	exit;
	}
?>

<body>
	<div class="container">


		<form action="<?php echo $action ; ?>" method="post">
			<h2 class="form-signin-heading"><?php echo $title ?></h2>


			<label>Ticket</label>
			<input type="text" id="ticket" name="ticket" placeholder="Ticket" class="form-control">
			<label>Fecha Venta</label>
			<input class="form-control" type="date" id="fecha_venta" name="fecha_venta" id="example-date-input">


			<label>Sala</label>
			<select class="form-control" id="sel1">
				<?php foreach ($salas as $sala) { ?>
					<option value=<?php echo $sala->id_sala; ?>><?php echo $sala->nombre; ?></option>
				<?php } ?>
			</select>

			<button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button>

		</form>
	</div>
</body>

</html>
