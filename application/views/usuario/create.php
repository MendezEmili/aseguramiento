<?php $this->load->view('assets/header');?>

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
						<input type="hidden" id="id_user" name="id_user">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<label>Usuario</label>
								<input type="text" id="usuario" name="usuario" placeholder="usuario">
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<label>Contraseña</label>
								<input type="password" id="contrasenia" name="contrasenia" placeholder="contrasenia">
							</div>
						</div>
						<button class="btn btn-secondary"><a href="index">Cerrar</a></button>
						<button type="submit" class="btn btn-info">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>

</html>
