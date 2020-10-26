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
								<input type="text" id="id_sala" name="id_sala" placeholder="id_sala">
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<label>FechaVenta</label>
								<input type="date" id="fecha_venta" name="fecha_venta" >
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
