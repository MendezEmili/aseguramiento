<html>

<head>
	<title>User Registration Script in CodeIgniter</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="styles.css">
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

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

