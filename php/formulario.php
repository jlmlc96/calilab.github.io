<?php

if(isset($_POST['nombre']) && isset($_POST['telefono']) && isset($_POST['correo']) && isset($_POST['mensaje'])) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $formcontent="
        Nombre: $nombre \n
        Telefono: $telefono \n
        Correo: $correo \n
        Mensaje: $mensaje
    ";

    $recipient = "alejandrosantillanjhanela@gmail.com, johanlinareslc@gmail.com";

    $subject = "Consulta vía Página Web CALILAB de $nombre";

    $header = "From: $correo \r\n";
    $header .= "Content-Type: text/plain; charset=UTF-8";

    if(mail($recipient, $subject, $formcontent, $header)) {
        // Éxito: redirigir a la página de confirmación
        header("Location: ../confirmacion.html");
        exit();
    } else {
        // Error: mostrar mensaje de error
        die("Hubo un problema al enviar el correo electrónico. Por favor, inténtalo de nuevo más tarde.");
    }
} else {
    // Datos del formulario incompletos: redirigir a la página de error
    header("Location: ../error.html");
    exit();
}

?>
