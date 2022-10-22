<?php
// llamando a los campos
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono']; 
$email  = $_POST['email']; 
$consulta = $_POST['consulta']; 
// Datos para el correo
$destinatario = "inbox@latinaindustrial.com";
$asunto  = "Consulta desde la web";
$carta = "De: $nombre \n  ";
$carta .="Correo: $email \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Consulta: $consulta ";
// enviando mensaje
mail($destinatario,$asunto,$carta);
header('Location:index.html');

?>