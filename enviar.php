<?php
/* // llamando a los campos
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono']; 
$email  = $_POST['correo']; 
$consulta = $_POST['consulta']; 
// Datos para el correo
$destinatario = "inbox@latinaindustrial.com";
$asunto  = "Consulta desde la web";
$carta = "De: $nombre \n  ";
$carta .="Correo: $email \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Consulta: $consulta ";
// enviando mensaje
mail($destinatario,$asunto,$carta); */
$activo = $_POST['activo'].'.pdf';

if(file_exists('pdf/'.$activo)){
    if($activo){
        echo '<embed  src="pdf/'.$activo.'" type="application/pdf" width="420px" height="590px">';
    }else {
        echo 'Ingrese el numero de activo';
    }
}else{
    echo 'Archivo no encontrados';
}



 



?>