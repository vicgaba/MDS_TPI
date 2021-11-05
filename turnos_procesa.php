<?php

    session_start();    

    $conn = new mysqli("localhost", "sistenea_sentirsebien", "Rosevi007", "sistenea_sentirsebien");



    //Check connection

    if($conn -> connect_errno) {

        echo "Falló la conexión a la base de datos" . $conn -> connect_error;

    } 

    

    $nombre = $_POST["nombre"];

    $celular = $_POST["celular"];

    $servicio = $_POST["servicio"];

    $dia = $_POST["dia"];

    $hora = $_POST["hora"].":00:00";

//    $mensaje = $_POST["dia"];

  

$sql = "INSERT INTO Turno (Nombre, Celular, Servicio, Dia, Hora) values ('$nombre', '$celular', '$servicio', '$dia', '$hora')";

/*    if($conn->query($sql) === TRUE) {

        echo "Se ha agregado el registro";

        echo "<br>";

        echo "$sql";

    } else {

        echo "No pudo ser, algo falló"."<br>".$sql;

    }*/

    $conn->query($sql);

    $conn->close();

    header('location: payments.html');

?>