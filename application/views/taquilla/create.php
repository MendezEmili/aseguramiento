<?php $this->load->view('assets/header');?>

<body>
	<div class="container">

		<form class="form-signin" method="POST">
			<h2 class="form-signin-heading">Login</h2>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">@</span>
				<input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
			</div>
			<span id="usernameResult"></span>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
			<label for="inputPassword" class="sr-only">Password Again</label>
			<input type="password" name="passwordagain" id="inputPassword" class="form-control" placeholder="Password Again" required>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
			<a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
		</form>
	</div>
</body>

<div id="wrapper">
	<div class="content">
		<div class="panel_s">
			<div class="panel-body">
				<h4 class="no-margin">
					<?php echo $title ?>
				</h4>
				<hr class="hr-panel-heading" />
				<form action="<?php echo $action; ?>" method="post">

					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<label>Ticket</label>
							<input type="text" id="ticket" name="ticket" placeholder="ticket">
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<label>Sala</label>
							<select name="menu">
							<?php foreach ($salas as $sala) { ?>

								

							
							
								<option value=<?php echo $sala->id_sala; ?>><?php echo $sala->nombre; ?></option>

							
							<?php } ?>
							</select>

						</div>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<label>FechaVenta</label>
							<input type="date" id="fecha_venta" name="fecha_venta">
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<label>pruebaaaaaa:
								
							</label>
						</div>
					</div>

					<button class="btn btn-secondary"><a href="index">Cerrar</a></button>
					<button type="submit" class="btn btn-info">Guardar</button>

				</form>
			</div>
		</div>
	</div>
</div>
</body>

</html>
