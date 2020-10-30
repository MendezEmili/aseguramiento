<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('assets/header');
?>
<!DOCTYPE html>
<html lang="en">

<body>
	
	<div id="container" class="container">
		<div class="row">
			<div class="col-8">
				<h1>Cines</h1>
			</div>
			<div class="col-4">
				<a class="btn btn-success" href="index.php/auth">Iniciar Sesión</a>
			</div>
		</div>
	</div>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="https://cdnmundo3.img.sputniknews.com/img/106290/75/1062907509_0:185:1024:738_1000x541_80_0_0_fdfca6c7f65f04a392cf8a48effd2275.jpg.webp" alt="Los Angeles" class="img-responsive center-block" />
				</div>

				<div class="item">
					<img src="https://cdnmundo3.img.sputniknews.com/img/106290/75/1062907509_0:185:1024:738_1000x541_80_0_0_fdfca6c7f65f04a392cf8a48effd2275.jpg.webp" alt="Chicago" class="img-responsive center-block" />
				</div>

				<div class="item">
					<img src="https://cdnmundo3.img.sputniknews.com/img/106290/75/1062907509_0:185:1024:738_1000x541_80_0_0_fdfca6c7f65f04a392cf8a48effd2275.jpg.webp" alt="New York" class="img-responsive center-block" />
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
			<p class="footer">
				 <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

<!-- Grid row -->
<div class="container">

	<!-- Content -->
	<h5 class="text-uppercase">Ingeniería en Sistemas</h5>
	<p>Aseguramiento de la calidad de software</p>

  <!-- Grid column -->

  <hr class="clearfix w-100 d-md-none pb-3">

  <!-- Grid column -->

</div>
<!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
<a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
</div>
<!-- Copyright -->

			</p>
			
		</div>



</body>

</html>
