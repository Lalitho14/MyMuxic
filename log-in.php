<?php

include('./conexion.php');
$link = Conectar();

$usuario = $_GET['usuario'];
$password = $_GET['password'];

$query = "SELECT * FROM `usuarios` where usuarios.usr = '" . $usuario . "';";

$consulta = mysqli_query($link, $query);

$datos = mysqli_num_rows($consulta);

$fila = mysqli_fetch_row($consulta);

// print($fila[3]);

if ($datos == 0) {
  // echo "<script>alert('¡Usuario Incorrecto o No Registrado!');</script>";
  header("Location: error.php");
}
elseif ($fila[3] != $password) {
  print(" <br> <br> <br> Error en Contraseña <br>");
  header("Location: error.php");
}
elseif($fila[1] == $usuario && $fila[3] == $password){
  // print(" <br> <br> <br> Bienvenidos al Sistema <br>");
  session_start();
  $_SESSION['usuario'] = $fila[1];
  header("Location: sistema.php");
}
