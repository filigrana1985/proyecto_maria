<?php
session_start();


$server = 'localhost';
$username = 'root';
$password = '';
$database = 'IDEA';

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
  die ("No hay conexion". mysqli_connect_error());
}

$nombre = $_POST["correo"];
$pass = $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM usuarios  WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);


if($nr == 1){
  $_SESSION['usuario'] = $nombre;
  header("Location: login.php");
  exit;
}else {
  header("Location: Index.html");
  exit;
}

?>