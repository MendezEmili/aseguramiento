<?php
session_start();
if (isset($_SESSION['token']) && $_SESSION['token'] == true) {
	echo "Bienvenido! " . $_SESSION['user'];
}
else {
	echo "Esta pagina es solo para usuarios registrados.<br>";
	exit;
	}
	
?>
