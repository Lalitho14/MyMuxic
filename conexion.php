<?php
  function Conectar()
  {
    $servername = 'localhost';
    $database = 'mymuxic';
    $username = 'root';
    $password = '';

    if(!($conn = mysqli_connect($servername, $username, $password)))
    {
      print("Error al conectarse a la base de datos....");
      exit();
    }

    if(!mysqli_select_db($conn, $database))
    {
      print("Error al seleccionar la base de datos....");
      exit();
    }

    return $conn;
  }
?>