<!DOCTYPE html>

<html>
<head>

<title>Spa a Beauty and Spa Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>

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

	<div class="banner">

		<div class="container">

		<div class="header">

<div class="header-left">

	<a href="index.php"><i class="glyphicon glyphicon-leaf" aria-hidden="true"> </i>Spa <span>Sentirse Bien</span></a>

</div>

<div class="header-left1">

	<span class="menu"><img src="images/menu.png" alt=" "></span>

	<ul class="nav1">

		<li class="hvr-sweep-to-bottom active"><a href="index.php">Inicio<i class="glyphicon glyphicon-home" aria-hidden="true"></i></a></li>

		<li class="hvr-sweep-to-bottom"><a href="services.php">Servicios<i class="glyphicon glyphicon-hand-right" aria-hidden="true"></i></a></li>

		<li class="hvr-sweep-to-bottom"><a href="about.php">Sobre Nosotros<i class="glyphicon glyphicon-star-empty" aria-hidden="true"></i></a></li>

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

			<!-- //header -->

			<div class="banner-info">

				<h1>Sentir la vida de una manera diferente</h1>

				<p style="color:white; font-weight: bold" >Buscamos atraer la atención de nuestros clientes a través de experiencias inspiradas en la seducción de los sentidos. Adaptamos las propuestas con el objetivo de que logre desconectarse completamente de la rutina y disfrute de un momento de bienestar, en total armonía con la naturaleza..</p>

				<div class="more">

					<a href="services.html">Aprenda más</a>

				</div>

			</div>

		</div>

	</div>

<!-- //banner -->

<!-- banner-bottom -->

	<div class="banner-bottom">

		<div class="container">

			<div class="col-md-5 banner-bottom-left">

				<img src="images/1.jpg" alt=" " class="img-responsive" />

			</div>

			<div class="col-md-7 banner-bottom-right">

				<h3>Nos cuidamos entre todos</h3>

				<h4>Informacion Covid-19</h4>

				<p class="a"> Debido  a  la  situación  actual  de  COVID-19,  la  Dra.  Feliz  debe  organizar  los  turnos  para  la  atención  de  los 

					clientes teniendo en cuenta la práctica y el cumplimiento del protocolo de seguridad sanitaria, por lo cual 

					se requiere para cada cita:<br>

				    Uso de mascarilla <br>

				    Revision Temperatura <br>

				    Nuesto personal usa mascarillas, se someta a revisiones de temperatura y la desinfección de superficies es obligatoria por parte del personal después de cada visita</p>

			</div>

			<div class="clearfix"> </div>

		</div>

	</div>

<!-- //banner-bottom -->

<!-- banner-bottom-3grds -->

	<div class="banner-bottom-3grds">

		<div class="container">

			<div class="banner-bottom-3grids">

				<div class="col-md-4 banner-bottom-3grid">

					<div class="banner-bottom-3grd">

						<img src="images/circulatorio.jpg" alt=" " class="img-responsive" />

						<h3>Masajes Circulatorios</h3>

						<p>El aparato circulatorio​ o cardiovascular es un sistema de transporte interno que utilizan los seres vivos para mover dentro de su organismo elementos nutritivos, metabolitos, oxígeno, dióxido de carbono, hormonas y otras sustancias.</p>

						<div class="more m1">

							<a href="services.html">Aprenda más</a>

						</div>

					</div>

				</div>

				<div class="col-md-4 banner-bottom-3grid">

					<div class="banner-bottom-3grd">

						<img src="images/masajes relajantes.jpg" alt=" " class="img-responsive" />

						<h3>Masajes Relajantes</h3>

						<p>Los masajes relajantes son ese “mimo” o “regalo” que nos hacemos de vez en cuando, al sentirnos cansados, adoloridos, tensos, con molestias varias… O simplemente sobrepasados y con una sensación de pesadez que no se va ni aún tomándonos un fin de semana para estar de relax.</p>

						<div class="more m1">

							<a href="services.html">Aprenda más</a>

						</div>

					</div>

				</div>

				<div class="col-md-4 banner-bottom-3grid">

					<div class="banner-bottom-3grd">

						<img src="images/piedras calientes.jpg" alt=" " class="img-responsive" />

						<h3>Piedras Calientes</h3>

						<p>El Masaje con Piedras Calientes es una relajante terapia de origen oriental que trabaja no sólo en el plano físico sino también en el mental, ya que ayuda a relajar tensiones musculares y a conseguir un perfecto equilibrio energético.</p>

						<div class="more m1">

							<a href="services.html">Aprenda más</a>

						</div>

					</div>

				</div>

				<div class="clearfix"> </div>

			</div>

		</div>

	</div>

<!-- //banner-bottom-3grds -->

<!-- service-type-grid -->

	<div class="service-type-grid">

		<div class="container">

			<section class="slider">

				<div class="flexslider">

					<ul class="slides">

						<li>

							<div class="service-type-grd-info">

								<div class="service-type-grd">

									<div class="service-type-grd-left">

										<img src="images/6.jpg" alt=" " class="img-responsive" />

									</div>

									<div class="service-type-grd-right">

										<h3>Nuestro spa</h3>

										<h4>Podés tomarte un tiempo para vos!</h4>

										<p>Estás a una llamada de disfrutar de ese descanso tan merecido. ¡No esperes más! Realizá tu reserva ahora mismo y comenzá a disfrutar de todo lo que tenemos para vos..</p>

									</div>

									<div class="clearfix"> </div>

								</div>

								<div class="service-type-grd1">

									<div class="service-type-grd1-left">

										<h3>Punta diamante</h3>

										<p class="odit">Cuidar tu piel también es importante para nosotros, que estas esperando!</p>

									</div>

									<div class="service-type-grd1-left1">

										<img src="images/punta diamante 2.jpg" alt=" " class="img-responsive" />

									</div>

									<div class="service-type-grd1-right">

										<div class="more">

											<a href="services.html">Aprenda más</a>

										</div>

									</div>

									<div class="clearfix"> </div>

								</div>

							</div>

						</li>

						<li>

							<div class="service-type-grd-info">

								<div class="service-type-grd">

									<div class="service-type-grd-left">

										<img src="images/salon masajes.jpg" alt=" " class="img-responsive" />

									</div>

									<div class="service-type-grd-right">

										<h3>Disponemos de numerosos servicios</h3>

										<h4>Elegí el tuyo</h4>

										<p>Nuestro spa provee una gran cantidad de opciones para tu cuidado, utilizamos la mayor tecnología disponible para el bienestar tuyo.</p>

									</div>

									<div class="clearfix"> </div>

								</div>

								<div class="service-type-grd1">

									<div class="service-type-grd1-left">

										<h3>Tratamientos Depilación</h3>

										<p class="odit">Proveemos un lugar solamente para las depilaciones que necesites, con la mejor energía y atención que se pueda encontrar.</p>

									</div>

									<div class="service-type-grd1-left1">

										<img src="images/tratamientos depilaciones salon.jpg" alt=" " class="img-responsive" />

									</div>

									<div class="service-type-grd1-right">

										<div class="more">

											<a href="services.html">Aprenda más</a>

										</div>

									</div>

									<div class="clearfix"> </div>

								</div>

							</div>

						</li>

						<li>

							<div class="service-type-grd-info">

								<div class="service-type-grd">

									<div class="service-type-grd-left">

										<img src="images/tratamientos faciales salon2.jpg" alt=" " class="img-responsive" />

									</div>

									<div class="service-type-grd-right">

										<h3>Tenemos los mejores cuidado para tu rostro</h3>

										<h4>Una piel suave y humectada siempre suma</h4>

										<p>Contamos con los mejores expertos en piel y a su vez los tenemos los mejores productos, antes de cada consulta se preguntara su necesidad y estaremos para usted.</p>

									</div>

									<div class="clearfix"> </div>

								</div>

								<div class="service-type-grd1">

									<div class="service-type-grd1-left">

										<h3>Tratamientos faciales</h3>

										<p class="odit">Nuestros tratamientos de colageno son determinantes en este servicio siempre buscando lo mejor para usted.</p>

									</div>

									<div class="service-type-grd1-left1">

										<img src="images/crio frecuencia rostro.jpg" alt=" " class="img-responsive" />

									</div>

									<div class="service-type-grd1-right">

										<div class="more">

											<a href="services.html">Aprenda más</a>

										</div>

									</div>

									<div class="clearfix"> </div>

								</div>

							</div>

						</li>

					</ul>

				</div>

			</section>

							<!--FlexSlider-->

									<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

									<script defer src="js/jquery.flexslider.js"></script>

									<script type="text/javascript">

									$(window).load(function(){

									  $('.flexslider').flexslider({

										animation: "slide",

										start: function(slider){

										  $('body').removeClass('loading');

										}

									  });

									});

								  </script>

							<!--End-slider-script-->

		</div>

	</div>

<!-- //service-type-grid -->

<!-- keep-in-touch -->

	<div class="keep-in-touch">

		<div class="container">

			<div class="keep-in-touch-grid">

				<div class="col-md-4 keep-in-touch-gridl">

					<h3>Enterate nuestras noticias</h3>

					<p>Te vamos a estar mandando todas las promociones y noticias del spa.</p>

				</div>

				<div class="col-md-8 keep-in-touch-gridr">

					<input type="text" value="Ingresa tu Mail..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Ingresa tu Mail...';}" required="">

					<input type="submit" value=" " >

				</div>

				<div class="clearfix"> </div>

			</div>

		</div>

	</div>

<!-- //keep-in-touch -->

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

<!--footer-->

</body>

<style>

	li.a {

	  margin-top: -10px;

	}	</style>

</html>