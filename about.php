<!--

Author: W3layouts

Author URL: http://w3layouts.com

License: Creative Commons Attribution 3.0 Unported

License URL: http://creativecommons.org/licenses/by/3.0/

-->

<!DOCTYPE html>

<html>

<head>

<title>Spa Sentirse Bien</title>

<!-- for-mobile-apps -->

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Spa Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 

Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //for-mobile-apps -->

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- js -->

<script src="js/jquery-1.11.1.min.js"></script>

<!-- //js -->

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

</head>

	

<body>

<!-- banner -->

	<div class="banner1">

		<div class="container">

						<!-- header -->

						<div class="header">

							<div class="header-left">
			
								<a href="index.php"><i class="glyphicon glyphicon-leaf" aria-hidden="true"> </i>Spa <span>Sentirse Bien</span></a>
			
							</div>
			
							<div class="header-left1">
			
								<span class="menu"><img src="images/menu.png" alt=" "></span>
			
								<ul class="nav1">
			
									<li class="hvr-sweep-to-bottom"><a href="index.php">Inicio<i class="glyphicon glyphicon-home" aria-hidden="true"></i></a></li>
			
									<li class="hvr-sweep-to-bottom"><a href="services.php">Servicios<i class="glyphicon glyphicon-hand-right" aria-hidden="true"></i></a></li>
			
									<li class="hvr-sweep-to-bottom active"><a href="about.php">Sobre Nosotros<i class="glyphicon glyphicon-star-empty" aria-hidden="true"></i></a></li>
			
									<li class="hvr-sweep-to-bottom"><a href="contact.php">Contacto<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></a></li>
									<?php
		session_start();
		 if(isset($_SESSION["USER"])){echo "<li class='hvr-sweep-to-bottom'><a href='turnos.php'>Turnos<i class='glyphicon glyphicon-envelope' aria-hidden='true'></i></a></li>";} 
		else {echo "<li class='hvr-sweep-to-bottom'><a href='login.php'>Ingresar<i class='glyphicon glyphicon-hand-right' aria-hidden='true'></i></a></li>"; }
		 ?>
									
			
									
			
								</ul>
			
							</div>
			
			
							<div class="clearfix"> </div>
			
						</div>
			<!-- script for menu -->

				<script> 

					$( "span.menu" ).click(function() {

					$( "ul.nav1" ).slideToggle( 300, function() {

					 // Animation complete.

					});

					});

				</script>

			<!-- //script for menu -->

		</div>

	</div>

<!-- //banner -->

<main>

	<h1 class="text-center text-success"> Nuestro equipo</h1>

	<div class="service">

		<div class="container">

			<h3>Nosotros</h3>

			<div class="service-grids">

				<div class="col-md-4 service-grid">

					<img src="images/2.png" alt=" " class="img-responsive" />

					<h4> Siempre presentes para personas como vos</h4>

					<p>Intentamos presentar todo lo necesario para poder hacer funcionar como vos queres!</p>

					<div class="service-hov">

						<h5>Desarrolladora</h5>

						<p>Lo mejor para vos.</p>

					</div>

 				</div>

				<div class="col-md-4 service-grid">

					<img src="images/3.png" alt=" " class="img-responsive" />

					<h4> Dejanos que nos preocupemos nosotros!</h4>

					<p>Las mejores imagenes para que sepas lo que te proponemos!</p>

					<div class="service-hov">

						<h5>Diseñador</h5>

						<p>Todo el estilo necesario.</p>

					</div>

				</div>

				<div class="col-md-4 service-grid">

					<img src="images/4.png" alt=" " class="img-responsive" />

					<h4> La calidad es fundamental en nuestros servicios</h4>

					<p>La mejor calidad para todos nuestros clientes!</p>

					<div class="service-hov">

						<h5>Tecnico en Calidad</h5>

						<p>Todo estara bien.</p>

					</div>

				</div>

				<div class="clearfix"> </div>

			</div>

		</div>

	<br>

	<p class="text-center text-success">Buscamos atraer la atención de nuestros clientes

	a través de experiencias inspiradas en la

	<br>

	seducción de los sentidos. Adaptamos las

	propuestas con el objetivo de que logre

	<br>



	desconectarse completamente de la rutina y

	disfrute de un momento de bienestar, en total

	<br>

	armonía con la naturaleza</p>

	<br>

	<div class="container">

		<h3>Nuestras redes sociales</h3>

		<head>



			<link href="https://fonts.googleapis.com/css?family=Raleway+Dots" rel="stylesheet" type="text/css">

			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		  

		  </head>

		  <section>

			<ul id="services">

			  <li>

				<div class="facebook">

				  <a href="https://www.facebook.com/SPAENARMONIA">

					<i class="fa fa-facebook" aria-hidden="true"></i>

				  </a>

				</div>

				<span>Facebook</span>

			  </li>

			  <li>

				<div class="youtube">

				  <a href="https://www.youtube.com/watch?v=A-yYTkfrHR0&ab_channel=WebConnectionAsia">

					<i class="fa fa-youtube" aria-hidden="true"></i>

				  </a>

				</div>

				<span>YouTube</span>

			  </li>

			  <li>

				<div class="instagram">

				  <a href="https://www.instagram.com/salonspamajoromero/">

					<i class="fa fa-instagram" aria-hidden="true"></i>

				  </a>

				</div>

				<span>Instagram</span>

			  </li>

				</ul>

		  </section>

	</div>



</main>

	



<!--footer-->

<div class="footer">

		<div class="container">				 	

			<div class="col-md-2 ftr_navi ftr">

				<h3>Navegación</h3>

				<ul>

					<li><a href="index.php">Inicio</a></li>

					<li><a href="about.php">Sobre Nosotros</a></li>

					<li><a href="services.php">Servicios</a></li>						

					<li><a href="contact.php">Contacto</a></li>

					<?php
	
		 if(!isset($_SESSION["USER"])){echo "<li><a href='login.php'>Ingresa</a></li>";} 
		else {echo "<li><a href='turnos.php'>Turnos</a></li>"; }
		 ?>
			</ul>

			</div>

			<div class="col-md-3 get_in_touch ftr">

				<h3>Contactanos</h3>

				<p>C. French 414, H3500CHJ Resistencia, Chaco,</p>

				<p>260-14 Chaco, Argentina</p>

				<p>+54 362 443-2683</p>

				<a href="gruporosevi@gmail.com">http://sentirsebien.ml/</a>

			</div>

			<div class="col-md-4 ftr-logo">

				<a href="index.php"><h3>Spa <span> Sentirse Bien</span></h3></a>


				<p>© 2021 Spa. Diseñado por <a href="https://gruporosevi.blogspot.com/">Rosevi</a></p>

			</div>

			<div class="clearfix"> </div>

		</div>

	</div>

</div>

<!--footer-->

<style>





section #services {

  text-align: center;

  transform: translatez(0);

}

section #services h2 {

  margin: 80px 0px 40px;

  color: #fff;

  font-size: 2.4em;

  text-transform: uppercase;

  text-align: center;

}

section #services li {

  width: 120px;

  height: 140px;

  display: inline-block;

  margin: 20px;

  list-style: none;

}

section #services li div {

  width: 120px;

  height: 120px;

  color: #fff;

  font-size: 3.4em;

  text-align: center;

  line-height: 120px;

  background-color: #77cc6d;

  transition: all 0.5s ease;

}

section #services li a {

  color: #fff;

}

section #services li div:hover {

  transform: rotate(360deg);

  border-radius: 100px;

}

section #services li span {

  width: 120px;

  height: 20px;

  display: block;

  padding: 15px 0px;

  color: #77cc6d;

  text-transform: uppercase;

  font-size: 1.2em;

  text-align: center;

}

.credits a {

  display: block;

  text-align: center;

  color: #fff;

  text-decoration: none;

  font-size: 24px;

  margin-top: 50px;

  background: green;

  padding: 20px;

  max-width: 300px;

}

</style>

</body>



</html>

