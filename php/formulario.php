<?php

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$formcontent="
    Nombre: $name \n
    Telefono: $telefono \n
    Correo: $correo \n
    Mensaje: $mensaje
";

$recipient = "alejandrosantillanjhanela@gmail.com, johanlinareslc@gmail.com";

$subject = "Consulta vía Página Web CALILAB de $nombre";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: ../index.html");



/*https://www.youtube.com/watch?v=MjlIi5pa4Ec*///


?>
