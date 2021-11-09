<?php
    session_start();

    $conn = new mysqli("localhost", "sistenea_sentirsebien", "Rosevi007", "sistenea_sentirsebien");

    //Check connection

    if($conn -> connect_errno) {
        $conn -> connect_error;
        echo '<script>
        alert("El servidor no se encuentra disponible")
       
        window.location.replace("login.php");
        
        </script>';        
    } 

    $email = $_POST["email"];
    $contrasenia = $_POST["pass"];

    // Check valid information was sent
    if(isset($email) && isset($contrasenia)){
        $sql = "SELECT Nombre, Apellido, Mail,Contrasenia FROM Cliente where Mail='$email' AND Contrasenia='$contrasenia'";
        $result = mysqli_query($conn, $sql);
        if($result){
           
            $row = mysqli_num_rows($result);

            if($row > 0){
                $fila = mysql_fetch_row($result);
                $_SESSION["NOMBRE"]=$fila[0];
                $_SESSION["APELLIDO"]=$fila[1];
                $_SESSION["USER"]=$email;
            
                echo '<script>
                alert("Ingreso correctamente")
               
                window.location.replace("index.php");
                
                </script>';
            } else {
                $_SESSION["USER"]=null;
                echo '<script>
                alert("Usuario no existe")
               
                window.location.replace("login.php");
                
                </script>';
            }
           

        } else{
            $_SESSION["USER"]=null;
            echo '<script>
            alert("Email o contraseña incorrectos")
           
            window.location.replace("login.php");
            
            </script>';
        }
    } else {
        $_SESSION["USER"]=null;
        echo '<script>
        alert("Email o contraseña incorrectos")
       
        window.location.replace("login.php");
        
        </script>';
    }
    $conn->close();
?>
