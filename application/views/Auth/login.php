<?php $this->load->view('assets/header');?>

<body>
<div class="container">

	<form class="form-signin" action="<?php echo $action; ?>" method="post">
		<h2 class="form-signin-heading">Login</h2>
		<span id="usernameResult"></span>
		<label for="inputEmail" class="sr-only">Usuario</label>
		<input type="text" name="usuario" id="usuario" class="form-control" placeholder="usuario" required autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" name="contrasenia" id="contrasenia" class="form-control" placeholder="Password" required>
		<button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
	</form>
</div>
</body>
