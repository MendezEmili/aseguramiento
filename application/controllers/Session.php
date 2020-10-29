<?php
session_start();
if (isset($_SESSION['token']) && $_SESSION['token'] == "true") {
	echo "Bienvenido! " . $_SESSION['user'];
}
else { ?>
	<script>
		alert('Esta pagina es solo para usuarios registrados.');
	</script>
	<?php
	$this->load->view('rejected_message');
	exit;
}
