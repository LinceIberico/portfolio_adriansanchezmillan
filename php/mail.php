<?php
error_reporting(0);
$name = $_POST['name'];
$email= $_POST['email'];
$message=$_POST['message'];


$header = 'From: ' . $email ."\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $name . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= $message. " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = "asmillanwebdeveloper@gmail.com";
$asunto = 'Mensaje desde Portfolio';

mail($para, $asunto, utf8_decode($mensaje), $header);

print_r ($name, $email, $message.'mensaje enviado correctamente');
?>