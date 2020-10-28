<?php $this->load->view('assets/header');?>

<body>
<div class="container">

	<form class="form-signin" method="POST">
		<h2 class="form-signin-heading">Login</h2>
		<span id="usernameResult"></span>
		<label for="inputEmail" class="sr-only">Usuario</label>
		<input type="text" name="email" id="inputEmail" class="form-control" placeholder="usuario" required autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
		<a class="btn btn-lg btn-primary btn-block" href="inicio">Login</a>
	</form>
</div>
</body>
