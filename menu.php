<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">
      <img src="./img/Imagen1.png" alt="logo" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./sistema.php">Descubre</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Nosotros</a>
        </li> -->
        <li class="nav-item">
          <?php
          // session_start();
          if (!isset($_SESSION['usuario'])) {
          ?>
            <a class="nav-link" href="./login.php">Registrate</a>
          <?php
          } else {
          ?>
            <a class="nav-link" href="./logout.php">Log Out</a>
          <?php
          }
          ?>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar Usuario, Cancion..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit" onclick="buscar()">Search</button>
      </form>
    </div>
  </div>
</nav>