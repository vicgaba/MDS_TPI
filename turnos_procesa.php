<?php

    session_start();    
    if (isset($_SESSION["servicios"])){
        $servicios = $_SESSION["servicios"];
        $dias = $_SESSION["dias"];
        $horas = $_SESSION["horas"];
    } else {
        $_SESSION["servicios"] = array();
        $_SESSION["dias"]= array();
        $_SESSION["horas"]= array();

        $servicios = $_SESSION["servicios"];
        $dias = $_SESSION["dias"];
        $horas = $_SESSION["horas"];
    }

    $conn = new mysqli("localhost", "sistenea_sentirsebien", "Rosevi007", "sistenea_sentirsebien");



    //Check connection

    if($conn -> connect_errno) {

        echo "Falló la conexión a la base de datos" . $conn -> connect_error;

    } 

 

    $continua = $_POST["continua"];

    $nombre = $_POST["nombre"];

    $celular = $_POST["celular"];

    $servicio = $_POST["servicio"];

    $dia = $_POST["dia"];

    $hora = $_POST["hora"].":00:00";

//    $mensaje = $_POST["dia"];



if ($continua != NULL){
    array_push($servicios, $servicio);
    array_push($dias, $dia);
    array_push($horas, $hora);

   
    $_SESSION["servicios"] = $servicios;
    $_SESSION["dias"] = $dias;
    $_SESSION["horas"] = $horas;


    header("location: turnos.php");
} else {
    array_push($servicios, $servicio);
    array_push($dias, $dia);
    array_push($horas, $hora);

    for ($i=0; $i<count($servicios); $i++){

        $sql = "INSERT INTO Turno (Nombre, Celular, Servicio, Dia, Hora) values ('$nombre', '$celular', '$servicios[$i]', '$dias[$i]', '$horas[$i]')";
        $conn->query($sql);
        $_SESSION["cant_reservas"] = 0;
        var_dump($servicios);
        unset($_SESSION["servicios"]);
        unset($_SESSION["dias"]);
        unset($_SESSION["horas"]);
    }
     
    $conn->close();

    header('location: payments.php');
}
?>