<?php
require_once "../PHPMailer/clsMail.php";
$codigo = rand(1000,9999);
$email =$_POST['email'];
$mailSend = new clsMail();

$enviado =  $mailSend->metEnviar("Restablecer contraseña", "<Team PM>", "$email","Codigo para restablecer su contraseña",
$bodyHTML = '
<html>
<head>
  <title>Restablecer</title>
</head>
<body>
    <h2>Team PM</h2>
    <div style="text-align:center; background-color:#ccc">
        <p>Restablecer contraseña</p>
        <h3>'.$codigo.'</h3>
        <p> <small>Si usted no envio este codigo favor de omitir</small> </p>
    </div>
</body>
</html>
 ');
 if ($enviado) {
     echo "Enviado";
 } else {
     echo "No enviado";
 }
?>