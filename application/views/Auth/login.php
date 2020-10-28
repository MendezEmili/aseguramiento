<?php $this->load->view('assets/header');?>

<body>
<div class="container">

	<form class="form-signin" method="POST" action="auth/inicio">
		<h2 class="form-signin-heading">Login</h2>
		<span id="usernameResult"></span>
		<label for="inputEmail" class="sr-only">Usuario</label>
		<input type="text" name="usuario" id="usuario" class="form-control" placeholder="usuario" required autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" name="contrasenia" id="contrasenia" class="form-control" placeholder="Password" required>
		<a class="btn btn-lg btn-primary btn-block" type="submit">Login</a>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button>
	</form>
</div>
</body>
