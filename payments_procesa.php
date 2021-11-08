<?php
    session_start();
    function randomNumber() {
      $result = '';
  
      for($i = 0; $i < 9; $i++) {
          $result .= mt_rand(0, 9);
      }
  
      return $result;
  }
 
  
  $conn = new mysqli("localhost", "sistenea_sentirsebien", "Rosevi007", "sistenea_sentirsebien");

    //Check connection

    if($conn -> connect_errno) {
        $conn -> connect_error;
        echo '<script>
        alert("El servidor no se encuentra disponible")
       
        window.location.replace("payments.php");
        
        </script>';        
    } 
   
    $nombre = $_POST["first-name"];
    $numero = $_POST["number"];
    $expira = $_POST["expiry"];
    $cvv = $_POST["cvc"];

    if(isset($nombre) && !preg_match('~[0-9]+~',$nombre)){

    // Check valid information was sent
    if(isset($nombre) && isset($numero) && isset($expira) && isset($cvv)){
      $id_factura = randomNumber();
      $sql = "UPDATE Turno SET Estado='$id_factura' Where '$nombre' = 1";
      if($conn->query($sql)){

        
        
        //Recibir detalles de factura
        
        $fecha_factura = date("d.m.y");
        
        //Recibir los datos de la empresa
        $nombre_tienda = "Spa Sentirse Bien";
        $direccion_tienda = "C. French 414, H3500CHJ";
        $provincia_tienda = "Resistencia, Chaco";
        $codigo_postal_tienda = "3600";
        $telefono_tienda = "+54 362 443-2683";
        $identificacion_fiscal_tienda = "201234567893";
        
        //Recibir los datos del cliente
        
        
        
        //Recibir los datos de los productos
        // $productos = $_POST["productos"];
        // $precio_unidad = $_POST["precio_unidad"];
        
        //variable que guarda el nombre del archivo PDF
        $archivo="factura-0001-$id_factura.pdf";
        
        //Llamada al script fpdf
        require('fpdf.php');
        
        
        $archivo_de_salida=$archivo;
        
        $pdf=new FPDF();  //crea el objeto
        $pdf->AddPage();  //añadimos una página. Origen coordenadas, esquina superior izquierda, posición por defeto a 1 cm de los bordes.
        
        
        //logo de la tienda
        $pdf->Image('empresa.jpg' , 0 ,0, 40 , 40,'JPG', 'http://php-estudios.blogspot.com');
        
        // Encabezado de la factura
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(190, 10, "FACTURA", 0, 2, "C");
        $pdf->SetFont('Arial','B',10);
        $pdf->MultiCell(190,5, "Numero de factura: $id_factura"."\n"."Fecha: $fecha_factura", 0, "C", false);
        $pdf->Ln(2);
        
        // Datos de la tienda
        $pdf->SetFont('Arial','B',12);
        $top_datos=45;
        $pdf->SetXY(40, $top_datos);
        $pdf->Cell(190, 10, "Datos de la tienda:", 0, 2, "J");
        $pdf->SetFont('Arial','',9);
        $pdf->MultiCell(190, //posición X
        5, //posición Y
        $nombre_tienda."\n".
        "Direccion: ".$direccion_tienda."\n".
        "Provincia: ".$provincia_tienda."\n".
        "Codigo Postal: ".$codigo_postal_tienda."\n".
        "Telefono: ".$telefono_tienda."\n".
        "Indentificacion Fiscal: ".$identificacion_fiscal_tienda,
         0, // bordes 0 = no | 1 = si
         "J", // texto justificado 
         false);
        
        
        // Datos del cliente
        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY(125, $top_datos);
        $pdf->Cell(190, 10, "Datos del cliente:", 0, 2, "J");
        $pdf->SetFont('Arial','',9);
        $pdf->MultiCell(
        190, //posición X
        5, //posicion Y
        "Nombre: ".$nombre."\n".
        "Numero Recibo: ".$id_factura."\n".
        0, // bordes 0 = no | 1 = si
        "J", // texto justificado
        false);
        
        //Salto de línea
        $pdf->Ln(2);
        
        
        
        // extracción de los datos de los productos a través de la función explode
        // $e_productos = explode(",", $productos);
        // $e_precio_unidad = explode(",", $precio_unidad);
        
        //Creación de la tabla de los detalles de los productos productos
        $top_productos = 110;
            $pdf->SetXY(80, $top_productos);
            $pdf->Cell(40, 5, 'PRODUCTOS', 0, 1, 'C');
            $pdf->SetXY(115, $top_productos);
            $pdf->Cell(40, 5, 'PRECIO UNIDAD', 0, 1, 'C');    
         
        $precio_subtotal = 0; // variable para almacenar el subtotal
        $y = 115; // variable para la posición top desde la cual se empezarán a agregar los datos
        
        
        
        //Cálculo del precio total
        // $total_mas_iva = round($precio_subtotal, 2);
        
        $pdf->Ln(2);
        $pdf->SetFont('Arial','B',10);
        // $pdf->Cell(190, 5, "Subtotal: $precio_subtotal €", 0, 1, "C");
        // $pdf->Cell(190, 5, "TOTAL: ".$total_mas_iva." €", 0, 1, "C");
        
        switch ($pdf->Output('F',$archivo_de_salida)) {
          default:
              header("location: index.php?");
      }
        //cierra el objeto pdf
        

        
        //Creacion de las cabeceras que generarán el archivo pdf
        header ("Content-Type: application/download");
        header ("Content-Disposition: attachment; filename=$archivo");
        header("Content-Length: " . filesize("$archivo"));
        $fp = fopen($archivo, "r");
        fpassthru($fp);
        fclose($fp);
        
        //Eliminación del archivo en el servidor
        unlink($archivo);
      }

      
  } else {
      
      echo '<script>
      alert("Informacion no valida")
     
      window.location.replace("payments.php");
      
      </script>';
  }
       
    } else{
      echo '<script>
      alert("Nombre invalido")
     
      window.location.replace("payments.php");
      
      </script>';
    }



    $conn->close();
  
  
  

    
?>
