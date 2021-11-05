<?php
    session_start();

    $conn = new mysqli("localhost", "sistenea_sentirsebien", "Rosevi007", "sistenea_sentirsebien");

    //Check connection

    if($conn -> connect_errno) {
        $conn -> connect_error;
        echo '<script>
        alert("El servidor no se encuentra disponible")
       
        window.location.replace("register.php");
        
        </script>';        
    } 

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $dni = $_POST["dni"];
    $contrasenia1 = $_POST["pass1"];
    $contrasenia2 = $_POST["pass2"];

    // Check valid information was sent
    if(isset($email) && isset($nombre) && isset($apellido) && isset($telefono) && isset($contrasenia1) && isset($contrasenia2)){
        if($contrasenia1 == $contrasenia2){
            $sql = "SELECT * FROM Cliente where Mail='$email'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                $_SESSION["USER"]=null;
                echo '<script>
                alert("Este mail ya se utilizo")
                window.location.replace("login.php");
                </script>';
            } else {
                $sql = "INSERT INTO Cliente (Mail, Nombre, Apellido, Telefono, DNI, Contrasenia) values ('$email', '$nombre', '$apellido', '$dni', '$telefono', '$contrasenia1')";
                if($conn->query($sql) === TRUE){
                    $_SESSION["USER"]=$email;
                    $conn->close();
                    echo '<script>
                    alert("Se registro correctamente")
                
                    window.location.replace("index.php");
                    
                    </script>';
                } else{
                    $_SESSION["USER"]=null;
                    $conn->close();
                    echo '<script>
                    alert("No se pudo registrar el usuario")
                
                    window.location.replace("index.php");
                    
                    </script>';
                }
            }
            
        } else{
            $_SESSION["USER"]=null;
            $conn->close();
            echo '<script>
            alert("Las contraseñas deben ser iguales")
           
            window.location.replace("register.php");
            
            </script>';
        }

    } else {
        $_SESSION["USER"]=null;
        $conn->close();
        echo '<script>
        alert("Algunos de los datos es invalido")
       
        window.location.replace("register.php");
        
        </script>';
    }
    $conn->close();
?>