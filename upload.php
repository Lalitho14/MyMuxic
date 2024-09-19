<?php
  include './conexion.php';

  $link = Conectar();
  session_start();
  if($_POST['up'])
  {
    // var_dump($_FILES['file']);
    if(file_exists($_FILES['file']['tmp_name']) && $_FILES['file']['type']=="audio/mpeg")
    {
      if(move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'.$_FILES['file']['name']))
      {
        // echo "exito";
        // print($_SESSION['usuario']);
        $nombre = $_POST['nombre'];
        $url = 'upload/'.$_FILES['file']['name'];
        $query = "INSERT INTO `contenido` (usr, nombre, url) VALUES ('".$_SESSION['usuario']."','".$nombre."','".$url."')";
        $consulta = mysqli_query($link, $query);
        header("Location: sistema.php");
      }
      else
      {
        echo "Error al subir";
      }
    }
    else
    {
      echo "No se selecciono archivo";
    }
  }
