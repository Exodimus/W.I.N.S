<?php
require_once "../PHPMailer/contactMail.php";
$mailSend = new contactMail();
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$mailSend->contactEnviar($nombre, $correo, $asunto, $mensaje);

?>


