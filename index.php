<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyMuXic</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="./css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="principal">
      <!-- MENU -->
      <?php include("./menu.php") ?>
      <?php ?>
      <!-- MENU -->
      <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
          <h1>Nueva musica para nuevas experiencias</h1>
          <div class="center">
            <div id="carouselExampleCaptions" class="carousel slide w-75" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./img/concierto.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Vive la Musica</h5>
                    <p>Disfruta de musica en vivo de nuestro usuarios en cualquier instante.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="./img/Tendencias-en-el-negocio-de-la-música.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Ponte a la moda</h5>
                    <p>Descubre los artistas en tendencia y unete a ellos.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://articles-img.sftcdn.net/f_auto,t_article_cover_l/auto-mapping-folder/sites/2/2023/04/musica-youtube-descargar.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Musica para todos</h5>
                    <p>Horas de musica gratis de tus amigos o artistas destacados.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="contenido">
            <div>
              <h3 class="text-center">Artistas destacados de la semana</h3>
              <?php
              include('./conexion.php');
              $link = Conectar();
              $query = "SELECT * FROM `destacados`;";

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
            <div>
              <h3 class="text-center">Top #1 de la semana</h3>
              <?php
              // include('./conexion.php');
              // $link = Conectar();
              $query = "SELECT usuarios.usr, contenido.nombre, contenido.url FROM usuarios, contenido WHERE usuarios.usr = 'vmx_xxx51' and contenido.usr = 'vmx_xxx51';";

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
              <a class="btn btn-success" href="./sistema.php">Descubre mas artistas...</a>
            </div>
          </div>
        </div>
        <div class="col-1"></div>
        <footer>
          MyMuXic&reg;
          Derechos Reservados&copy;
        </footer>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="./js/control.js"></script>
</body>

</html>