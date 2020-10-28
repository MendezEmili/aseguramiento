<?php $this->load->view('assets/header');?>

<body>
	<div class="container">

	<form action="<?php echo $action; ?>" method="post">
			<h2 class="form-signin-heading"><?php echo $title ?></h2>
		

			<label>Ticket</label>
			<input type="text" id="ticket" name="ticket" placeholder="Ticket" class="form-control">
			<label>Fecha Venta</label>
			<input class="form-control" type="date"id="fecha_venta" name="fecha_venta" id="example-date-input">


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

