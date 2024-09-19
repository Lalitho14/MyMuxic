<?php 

  include('./conexion.php');
  $link = Conectar();

  $nombre = $_REQUEST['nombre'];
  $usuario = $_GET['usuario'];
  $email = $_GET['email'];
  $password = $_GET['password'];

  $query = "SELECT usuarios.usr FROM `usuarios` where usuarios.usr = '".$usuario."';";

  $consulta = mysqli_query($link,$query);

	$datos = mysqli_num_rows($consulta);

  if($fila = mysqli_fetch_row($consulta)){
    echo "<script>alert('¡El usuario ya esta ocupado!');</script>";
    header('Location: ./error.php');
  }
  else
  {
    $query = "INSERT INTO `usuarios` (`nombre`, `usr`, `email`, `password`) VALUES ('".$nombre."', '".$usuario."', '".$email."', '".$password."')";
    $consulta = mysqli_query($link, $query);
    session_start();
    $_SESSION['usuario'] = $usuario;
    header('Location: ./sistema.php');
  }
?>