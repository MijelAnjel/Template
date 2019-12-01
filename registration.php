<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$region = $_POST['region'];
$empresa = $_POST['mensaje'];
$telefono = $_POST['telefono'];
$textarea = $_POST['textarea'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "empresa: " . $_POST['empresa'] . " \r\n";
$mensaje .= "textarea: " . $_POST['textarea'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'mijel.fgr@gmail.com';
$asunto = 'Mensaje de Happy Client';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>