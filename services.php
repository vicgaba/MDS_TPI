<!--

Author: W3layouts

Author URL: http://w3layouts.com

License: Creative Commons Attribution 3.0 Unported

License URL: http://creativecommons.org/licenses/by/3.0/

-->

<!DOCTYPE html>

<html>

<head>

<title>Spa Sentirse Bien Flat Bootstarp Resposive Website Template | Services :: w3layouts</title>

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

						<li class="hvr-sweep-to-bottom active"><a href="services.php">Servicios<i class="glyphicon glyphicon-hand-right" aria-hidden="true"></i></a></li>

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

		</div>

	</div>

<!-- //banner -->

<!-- service -->

	<div class="service">

		<div class="container">

			<h3 class="text-center" >Servicios</h3>

			<div class="service-grids">

				<h3>Belleza</h3>

				<div class="col-md-4 service-grid">

					<img src="images/handsFeets.jpeg" alt=" " class="img-responsive" />

					<h4> Belleza de manos y pies</h4>

					<div class="service-hov">

						<h5>Las mejores t??cnicas</h5>

						<p>	Descuento y paquetes para 

							novias hace tu consulta</p>

					</div>

 	   			</div>

     	 	    <div class="col-md-4 service-grid">

					<img src="images/depilacion facial.jpg" alt=" " class="img-responsive" />

					<h4> Depilaci??n facial</h4>	

					<div class="service-hov">

						<h5>Las mejores t??cnicas</h5>

						<p>	Membresia anual, consultanos</p>

					</div>

 				</div>

				<div class="col-md-4 service-grid">

					<img src="images/lifthing pesta??as.jpg" alt=" " class="img-responsive" />

					<h4> Lifthing de pesta??as</h4>

					<div class="service-hov">

						<h5>Las mejores t??cnicas</h5>

						<p>	Membresia anual, consultanos</p>

					</div>

				</div>

			</div>

		</div>

		<div class="container">	

			<div class="service-grids">	

				<h3>Masajes</h3>

				<div class="col-md-4 service-grid">

					<img src="images/circulatorio.jpg" alt=" " class="img-responsive" />

					<h4> Sistema circulatorio</h4>

					<p>Es una t??cnica cuya finalidad es la de activar 

						el riego sangu??neo y linf??tico favoreciendo 

						el intercambio celular. 

					</p>

					<div class="service-hov">

						<h5>Consultar Turnos</h5>

						<p>Consulta los tratamientos para  

							molestias circulatorias</p>

					</div>

				</div>

				<div class="col-md-4 service-grid">

					<img src="images/piedras calientes.jpg" alt=" " class="img-responsive" />

					<h4> Piedras Calientes</h4>

					<p>Antigua t??cnica de masaje oriental, activa los chakras energ??ticos

						las piedras empleadas son de origen volc??nico

					</p>

					

					<div class="service-hov">

						<h5>Relajante</h5>

						<p>	Sesiones individuales



						</p>

					</div>

 				</div>

				 <div class="col-md-4 service-grid">

					<img src="images/anti stress.jpg" alt=" " class="img-responsive" />

					<h4> Anti-stress y descontracturantes</h4>

					

					<div class="service-hov">

						<h5>Relajante</h5>

						<p>	Sesiones individuales



						</p>

					</div>



				  

 				</div>





				<div class="clearfix"> </div>

			</div>

		</div>

	</div>

	<div class="service1">

		<div class="container">

			<div class="wmuSlider example1">

			    <div class="wmuSliderWrapper">

				   <article style="position: absolute; width: 100%; opacity: 0;"> 

					<div class="banner-wrap">

						<div class="service1-info">

							<h3>Protocolo COVID - 19 </h3>

							<p>Temporalmente por cuestiones de p??blico conocimiento en la pandemia 

								Covid - 19, est??n suspendidas las actividades grupales</p>

						</div>

					</div>

					</article>

					<article style="position: absolute; width: 100%; opacity: 0;"> 

						<div class="banner-wrap">

							<div class="service1-info">

								<h3>Protocolo COVID - 19</h3>

								<p> Se hace obligatorio el uso de mascarilla dentro del Spa de todo el personal y de los clientes??

									Se realizar??n las revisiones de temperatura en el ingreso al Spa??

									Se realiza la desinfecci??n de superficies obligatoria por parte del personal despu??s de cada visita</p>

							</div>

						</div>

					</article>

					

					    <ul class="wmuSliderPagination">

							<li><a href="#" class="">0</a></li>

							<li><a href="#" class="">1</a></li>

							<li><a href="#" class="wmuActive">2</a></li>

						</ul>

				</div>

					<script src="js/jquery.wmuSlider.js"></script> 

					  <script>

						$('.example1').wmuSlider();         

					 </script> 	  

				</div>



		</div>

	</div>

		<div class="service">

		<div class="container">

			<h3>Servicios</h3>

			<div class="service-grids">

				<h3>Tratamientos faciales</h3>

				<div class="col-md-4 service-grid">

					<img src="images/punta de diamante.jpg" alt=" " class="img-responsive" />

					<h4>Punta de diamante</h4>

					<div class="service-hov">

						<h5>Limpieza facial</h5>

						<p>	Membres??a anual 

							descuentos

						</p>

					</div>

 				</div>

				 <div class="col-md-4 service-grid">

					<img src="images/hidratacionFacial.jpeg" alt=" " class="img-responsive" />

					<h4> Limpieza e hidrataci??n</h4>	

					<div class="service-hov">

						<h5>Recomendado del mes</h5>

						<p>	T??cnicas innovadoras</p>

					</div>

 				</div>

				

				<div class="col-md-4 service-grid">

					<img src="images/crio frecuencia rostro.jpg" alt=" " class="img-responsive" />

					<h4> Crio Frecuencia </h4>

					<div class="service-hov">

						<h5>Nuevo</h5>

						<p>	Primera sesi??n de cortes??a 

							sin cargo

						</p>

					</div>

				</div>

			</div>

			</div>

			<div class="container">

			<div class="service-grids">

				<h3>Tratamientos corporales</h3>

				 

				 <div class="col-md-4 service-grid">

					<img src="images/ultracavitacion 2.jpg" alt=" " class="img-responsive" />

					<h4> Ultracavitaci??n</h4>

					<p>

						

						</p>

					

					<div class="service-hov">

						<h5>Consultar Turnos</h5>

						<p></p>

					</div>

				</div>

				<div class="col-md-4 service-grid">

					<img src="images/vela slim tratamiento.jpg" alt=" " class="img-responsive" />

					<h4> Vela Slim</h4>

					<p>

					</p>

					

					<div class="service-hov">

						<h5>Nuevo</h5>

						<p>	Primera sesi??n de cortes??a



						</p>

					</div>



				  

 				</div>

				 <div class="col-md-4 service-grid">

					<img src="images/crio frecuencia corporal.jpg" alt=" " class="img-responsive" />

					<h4> Crio Frecuencia </h4>

					<div class="service-hov">

						<h5>Nuevo</h5>

						<p>	Primera sesi??n de cortes??a 

							sin cargo

						</p>

					</div>

				</div>

			</div>

			</div>

			<div class="container">

			<div class="service-grids">

				<div class="col-md-4 service-grid">

					<img src="images/DermoHealth.jpg" alt=" " class="img-responsive" />

					<h4>Dermohealth</h4>

					<div class="service-hov">

						<h5>Nuevo</h5>

						<p>	Primera sesi??n de cortes??a 

							sin cargo

						</p>

					</div>

				</div>



				<div class="clearfix"> </div>

			</div>

		</div>

	</div>

	<div class="servc">

		<div class="container">

			<h3>LOS MEJORES SERVICIOS Y PROMOCIONES</h3>

			<div class="servc-grids">

				<div class="col-md-6 servc-grid">

					<div class="col-xs-3 servc-grid-left">

						<span class="glyphicon glyphicon-apple" aria-hidden="true"></span>

					</div>

					<div class="col-xs-9 servc-grid-left">

						<h4>PACK NOVIAS Y MADRINAS</h4>

						<p>Durante tu estadia nos ocupamos de que reciban el mejor tratamiento 

							para ese d??a tan especial, belleza de manos y pies, masajes y m??s Servicios

							disponibles para ti en nuestro Spa, para que te sientas bell??zima en tu boda.

						</p>

					</div>

					<div class="clearfix"> </div>

				</div>

				<div class="col-md-6 servc-grid">

					<div class="col-xs-3 servc-grid-left">

						<span class="glyphicon glyphicon-grain" aria-hidden="true"></span>

					</div>

					<div class="col-xs-9 servc-grid-left">

						<h4>NATURAL</h4>

						<p>Todos nuestros productos son de ingredientes naturales</p>

					</div>

					<div class="clearfix"> </div>

				</div>

				<div class="clearfix"> </div>

			</div>

			<div class="servc-grids">

				<div class="col-md-6 servc-grid">

					<div class="col-xs-3 servc-grid-left">

						<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>

						

					</div>

					<div class="col-xs-9 servc-grid-left">

						<h4>DESCUENTOS A PAREJAS</h4>

						<p>Regalate un d??a completo en nuestro Spa, prob?? los mejores tratamientos

							sal?? renovada junto a tu pareja</p>

					</div>

					<div class="clearfix"> </div>

				</div>

				<div class="col-md-6 servc-grid">

					<div class="col-xs-3 servc-grid-left">

						<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>

						

					</div>

					<div class="col-xs-9 servc-grid-left">

						<h4>COMPROMISO CON EL MEDIO AMBIENTE</h4>

						<p>Nuestro compromiso es no contaminar con agentes abrasivos el medio ambiente,

							para preservar nuestro h??bitat y promover el bienestar general

						</p>

					</div>

					<div class="clearfix"> </div>

				</div>

				<div class="clearfix"> </div>

			</div>

		</div>

	</div>





<!-- //service -->

<!--footer-->

<div class="footer">

		<div class="container">				 	

			<div class="col-md-2 ftr_navi ftr">

				<h3>Navegaci??n</h3>

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


				<p>?? 2021 Spa. Dise??ado por <a href="https://gruporosevi.blogspot.com/">Rosevi</a></p>

			</div>

			<div class="clearfix"> </div>

		</div>

	</div>

</div>

<!--footer-->

</body>

</html>

