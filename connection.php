<?php
    
    $conn = new mysqli("localhost", "sistenea_sentirsebien", "Rosevi007", "sistenea_sentirsebien");

    //Check connection

    if($conn -> connect_errno) {
        $conn -> connect_error;
        echo '<script>
        alert("El servidor no se encuentra disponible")
       
        window.location.replace("login.php");
        
        </script>';        
    } 
?>