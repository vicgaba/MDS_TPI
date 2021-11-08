<!--

Author: W3layouts

Author URL: http://w3layouts.com

License: Creative Commons Attribution 3.0 Unported

License URL: http://creativecommons.org/licenses/by/3.0/

-->
<?php
    session_start();

    require("connection.php");

    $_SESSION["cant_reservas"] = 0;

    if (!$_SESSION["USER"]) {
        header("location: index.php");
    };

?>

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

<!-- importo el header-->

<?php

	require_once('header.php');

?>



<!--contact-->

	<div class="contact">

		<div class="container">

			<h3>Turnos</h3>

			<div class="contact-form">

				<div class="col-md-8 contact-form-right">

                        <form action="turnos_procesa.php" method="POST">

                            <input type="text" name="nombre" id="nombre" value="Nombre">

                            <br>

                            <input type="text" name="celular" value="celular">

                            <br><br>

                            <label for="servicio">Elija el servicio que desea reservar</label><br>

                            <select name="servicio">
                            <?php
                                $sql = "select Id_servicio, Nombre from Servicios";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value='.$row["Nombre"].'>'.$row["Nombre"].'</opton>';
                                    }
                                }
                                
                                ?>

                                <!-- <option value="Belleza">Belleza</option>

                                <option value="Masajes">Masajes</option>

                                <option value="Faciales">Tratamientos faciales</option>

                                <option value="Corporales">Tratamienots corporales</option> -->

                            </select>

                            <br><br>

                            <label for="fecha">Seleccione el día: </label><br>

                            <input type="date" name="dia" id="dia"><br><br>

                            <select name="hora" id="hora">

                                <?php

                                    for($i=9; $i<=21; $i++){

                                        echo "<option value ='{$i}'>$i</option>";

                                    }

                                ?>

                            </select>

                            <br><br>
                            <input name="continua" id= "continua" type="submit" value="Reservar y agregar otro turno">      
                            <input type="submit" value="Reservar">

				    	</form>

				</div>

				<div class="clearfix"></div>

			</div>

		</div>

	</div>

<!--//contact-->

<!-- importo el footer>

<?php

	require_once('footer.php');

?>

</body>

</html>



   

