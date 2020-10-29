<?php

// LLamandoalos campos

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

//Datos para el correo
$destinatario = "arko8902@gmail.com";
$asunto = "Consulta desde la web";

$carta = "De: $nombre\n";
$carta .= "Correo: $email\n";
$carta .= "Email: $email\n";
$carta .= "Mensaje: $email\n";

// Enviando mensaje
mail($asunto, $destinatario, $carta);
header('Location: mensaje-de-envio.html');
?>

