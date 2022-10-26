<?php
include("conexion_bd.php");

if (isset($_POST["nombre"], $_POST["telefono"], $_POST["correo"] ,$_POST["consulta"]) ){
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['nombre']) >= 1) {
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono']; 
$correo  = $_POST['correo']; 
$consulta = $_POST['consulta']; 
$consulta2 = "INSERT INTO contactos (nombre,telefono,correo,consulta) VALUES ('$nombre','$telefono','$correo','$consulta')";
$resultado = mysqli_query($conex,$consulta2);
if ($resultado) {
  

    echo "Datos Guardados Correctamente";
   
} 
}
else{
    echo "¡Por favor complete los campos!";
}
}
  else {
    
    echo "¡Por favor complete los campos!";
   
}

?>