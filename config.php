<?php
    $conn = new mysqli("localhost", "sistenea_sentirsebien", "Rosevi007", "sistenea_sentirsebien");

    //Check connection
    if($conn -> connect_errno) {
        echo "Falló la conexión a la base de datos" . $conn -> connect_error;
    } else {
        echo "Todo salió joya papá";
    }
?>