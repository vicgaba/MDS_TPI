<!--

Author: W3layouts

Author URL: http://w3layouts.com

License: Creative Commons Attribution 3.0 Unported

License URL: http://creativecommons.org/licenses/by/3.0/

-->

<!DOCTYPE html>

<html>

<head>

<title>Spa a Beauty and Spa Category Flat Bootstarp Resposive Website Template | Contact :: w3layouts</title>

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

						<li class="hvr-sweep-to-bottom"><a href="about.php">Sobre Nosotros<i class="glyphicon glyphicon-star-empty" aria-hidden="true"></i></a></li>

						<li class="hvr-sweep-to-bottom active"><a href="contact.php">Contacto<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></a></li>
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

<!--contact-->

	<div class="contact">

		<div class="container">

			<h3>Contáctenos</h3>

			<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=french%20414,%20resistencia,%20chaco,%20argentina&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-a.com"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">how to add a map to wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>

			<div class="contact-form">

				<div class="col-md-4 contact-form-left">

					<h4>Dirección :</h4>

					<p>French 414,</p>

					<p>H3500, Resistencia, Chaco, Argentina</p>

					<p>Telephone : +1 800 603 6035</p>

					<p>FAX : +1 800 889 9898</p>

					<a href="mailto:sentirsebien@sentirsebien.ml">sentirsebien@sentirsebien.ml</a>

				</div>

				<div class="col-md-8 contact-form-right">

					<h4>Formulario de contacto</h4>

					<form action="procesa.php" method="POST">

						<input type="text" name= "nombre" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">

						<input type="email" name = "email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">

						<input type="text" name = "telefono" value="Telefono" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">

						<textarea type="text"  name = "mensaje" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Mensaje...</textarea>

						<input type="submit" value="Enviar" >

					</form>

				</div>

				<div class="clearfix"></div>

			</div>

		</div>

	</div>

<!--//contact-->

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

</body>

</html>

