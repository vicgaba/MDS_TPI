<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="./style.css">

</head>
<body background-color="#e0ffcd">
<!-- partial:index.partial.html -->
  <form  action="payments_procesa.php" method="POST">
    <div class="form-container">
      <div class="personal-information">
        <h1>Informacion de Pago</h1>
      </div> <!-- end of personal-information -->
           
          <input id="input-field" type="text" name="first-name" placeholder="Nombre y apellido impreso en la tarjeta" required />
          <input id="input-field" type="text" name="number" placeholder="Numero Tarjeta" required />
          <input id="column-left" type="text" name="expiry" placeholder="MM / YY" required />
          <input id="column-right" type="text" name="cvc" placeholder="CVV" required />
         
          <div class="card-wrapper"></div>
      
          <input id="input-button" type="submit" value="Aceptar" />
        
    </form>
  </div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/card.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/jquery.card.js'></script><script  src="./script.js"></script>

</body>
<style>
  body {
background-color: #DBF9FC;
}
</style>
</html>