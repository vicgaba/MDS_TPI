<?php
    session_start();
?>

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
                 if(isset($USER)){echo "<li class='hvr-sweep-to-bottom'><a href='turnos.php'>Turnos<i class='glyphicon glyphicon-envelope' aria-hidden='true'></i></a></li>";} 
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