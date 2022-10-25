<?php
session_start();


$server = 'localhost';
$username = 'root';
$password = '';
$database = 'idea';

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
  die ("No hay conexion". mysqli_connect_error());
}

$nombre = $_POST["usuario"];
$pass = $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM usuarios  WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);


if($nr == 1){
  $_SESSION['usuario'] = $nombre;
  echo 'Ingreso correctamente';
  exit;
}else {
  echo 'Usuario o Contraseña no validos';
  exit;
}

?>