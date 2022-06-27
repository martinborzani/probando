<?php

if(!isset($_GET["nombre"])){
    die("Necesita ingresar un nombre");
}


if(!isset($_GET["email"])){
    die("Necesita ingresar un email");
}

if(!isset($_GET["mensaje"])){
    die("Necesita ingresar un mensaje");
}


$nombre = $_GET["nombre"];
$email = $_GET["email"];
$mensaje = $_GET["mensaje"];

$to = 'martinborzani0@gmail.com';
$subject = 'Consulta de la web';
$body = 'Nueva consulta desde la web' . "\r\n";
$body = 'Nombre' . $nombre . "\r\n";
$body = 'Email' . $email . "\r\n";
$body = 'Mensaje' . $mensaje . "\r\n";

$headers = 'From' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to,$subject,$body,$headers);


?>