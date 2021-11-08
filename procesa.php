<?php
    
    $conn = new mysqli("localhost", "sistenea_sentirsebien", "Rosevi007", "sistenea_sentirsebien");

    //Check connection
    if($conn -> connect_errno) {
        echo "Falló la conexión a la base de datos" . $conn -> connect_error;
    } 
    
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $celular = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $sql = "INSERT INTO Cliente (Nombre, Mail, Celular, aux2) values ('$nombre', '$email', $celular, '$mensaje')";
/*    if($conn->query($sql) === TRUE) {
        echo "Se ha agregado el registro";
    } else {
        echo "No pudo ser, algo falló"."<br>".$sql;
    }*/
    $conn->query($sql);
    $conn->close();
    header('location: index.html');
?>