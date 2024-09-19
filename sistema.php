<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: ./login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyMuXic</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="./css/style.css" rel="stylesheet">
  <link href="./css/style-sistema.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="principal">
      <!-- MENU -->
      <?php include("./menu.php") ?>
      <div id="contenido">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Inicio</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Compartir</button>
            <button class="nav-link" id="nav-MyMuXic-tab" data-bs-toggle="tab" data-bs-target="#nav-MyMuXic" type="button" role="tab" aria-controls="nav-MyMuXic" aria-selected="false">MyMuXic</button>
          </div>
        </nav>
        <!-- Inicio -->
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <div class="row">
              <div class="col-1"></div>
              <div class="col-10">
                <h3>Ultimas publicaciones</h3>
                <?php
                include('./conexion.php');
                $link = Conectar();
                $query = "SELECT usr, nombre, url FROM contenido;";

                $consulta = mysqli_query($link, $query);

                $datos = mysqli_num_rows($consulta);

                while ($fila = mysqli_fetch_row($consulta)) {
                  // print("$fila[1] - $fila[2] <br>");
                  print("
                    <div class=\"tarjeta m-4\">
                      <img src=\"https://www.nicepng.com/png/detail/218-2188924_icono-taller-de-musica.png\" alt=\"perfil1\">
                      <p>" . $fila[0] . " - " . $fila[1] . "</p>
                      <audio src=\"./" . $fila[2] . "\" controls></audio>
                    </div>
                  ");
                }
                ?>
              </div>
              <div class="col-1"></div>
            </div>
          </div>
          <!-- Compartir -->
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <h1>Tu nueva musica comienza aqui</h1>
            <div class="row">
              <div class="col-1"></div>
              <div class="col-10">
                <form action="./upload.php" method="post" enctype="multipart/form-data" class="publicar">
                  <h2>Crear Publicacion</h2>
                  <input type="text" name="nombre" class="nombre_in" placeholder="Nombre de tu cancion">
                  <input type="file" name="file" class="file_in">
                  <input type="submit" name="up" value="Compartir" class="compartir btn btn-success">
                </form>
              </div>
              <div class="col-1"></div>
            </div>
          </div>
          <!-- MyMuXic -->
          <div class="tab-pane fade" id="nav-MyMuXic" role="tabpanel" aria-labelledby="nav-MyMuXic-tab" tabindex="0">
            <div class="row">
              <div class="col-1"></div>
              <div class="col-10">
                <h3>Mi Musica</h3>
                <?php
                // include('./conexion.php');
                $link = Conectar();
                $query = "SELECT usr, nombre, url FROM contenido WHERE usr = '" . $_SESSION['usuario'] . "';";

                $consulta = mysqli_query($link, $query);

                $datos = mysqli_num_rows($consulta);

                while ($fila = mysqli_fetch_row($consulta)) {
                  // print("$fila[1] - $fila[2] <br>");
                  print("
                    <div class=\"tarjeta m-4\">
                      <img src=\"https://www.nicepng.com/png/detail/218-2188924_icono-taller-de-musica.png\" alt=\"perfil1\">
                      <p>" . $fila[0] . " - " . $fila[1] . "</p>
                      <audio src=\"./" . $fila[2] . "\" controls></audio>
                    </div>
                  ");
                }
                ?>
              </div>
              <div class="col-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="./js/control.js"></script>
</body>

</html>