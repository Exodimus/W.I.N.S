<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

class contactMail{
    private $mail = null;
    function __construct(){
        $this->mail = new PHPMailer();
        $this->mail->isSMTP();
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = 'tls';
        $this->mail->Host='smtp.gmail.com';
        $this->mail->Port = 587;
        $this->mail->Username = "teampm2022@gmail.com";
        $this->mail->Password = "giyqbojkbitfokww";
    }

    public function contactEnviar(string $nombre, string $correo, string $asunto, string $mensaje){
        $this->mail->setFrom($correo, $nombre);
        $this->mail->addAddress("teampm2022@gmail.com");
        $this->mail->addReplyTo($correo, $nombre);
        $this->mail->Subject = $asunto;
        $this->mail->Body='<h1 align=left>Nombre: '.$nombre.'<br>Email: '.$correo.'<br
        >Mensaje: '.$mensaje.'</h1>';
        $this->mail->isHTML(true);
        $this->mail->CharSet = "UTF-8";

        return $this->mail->send();

        
    }
}
?>