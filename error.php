<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyMuXic - Bienvenido</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="./css/style.css" rel="stylesheet">
  <link href="./css/stye-login.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="principal fadeInDown">
      <h1>USUARIO INCORRECTO O NO REGISTRADO</h1>
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Registrate</button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Ya tengo una cuenta</button>
        </div>
      </nav>
      <!-- CONTENIDO -->
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
          <div class="row">
            <div class="col-1"></div>
            <div class="col-6">
              <form action="./registrar.php" method="get">
                <div class="form-group input-group mt-5">
                  <span class="input-group-text">
                    <i class="fa fa-user"></i>
                  </span>
                  <input type="text" class="form-control" placeholder="Ingrese su nombre completo" name="nombre">
                </div>
                <div class="form-group input-group">
                  <span class="input-group-text">
                    <i class="fa fa-user"></i>
                  </span>
                  <input type="text" class="form-control" placeholder="Ingrese un nombre de usuario" name="usuario">
                </div>
                <div class="form-group input-group">
                  <span class="input-group-text">
                    <i class="fa fa-envelope"></i>
                  </span>
                  <input type="email" class="form-control" placeholder="abcde@correo.com" name="email">
                </div>
                <div class="form-gruop input-group">
                  <span class="input-group-text">
                    <i class="fa fa-lock"></i>
                  </span>
                  <input type="password" class="form-control" placeholder="Minimo 8 caracteres" name="password">
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary mb-2" onclick="datos()" type="button">Registrar</button>
                  <button type="submit" class="btn btn-danger hide" name="registrar" id="botonC">Confirmar</button>
                </div>
              </form>
            </div>
            <div class="col-4" id="datos">
              <img src="./img/login.png" width="50%">
              <h3>Una experiencia musical te espera...</h3>
            </div>
            <div class="col-1"></div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
          <div class="row">
            <div class="col-1"></div>
            <div class="col-6">
              <form action="./log-in.php" method="get">
                <div class="form-group input-group mt-5">
                  <span class="input-group-text">
                    <i class="fa fa-user"></i>
                  </span>
                  <input type="text" class="form-control" placeholder="Ingrese un nombre de usuario" name="usuario">
                </div>
                <div class="form-gruop input-group">
                  <span class="input-group-text">
                    <i class="fa fa-lock"></i>
                  </span>
                  <input type="password" class="form-control" placeholder="Minimo 8 caracteres" name="password">
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-danger" name="registrar">Log In</button>
                </div>
              </form>
            </div>
            <div class="col-4">
              <img src="./img/login.png" width="50%" class="mt-4">
              <h3>Bienvenido de vuelta...</h3>
            </div>
            <div class="col-1"></div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="./js/index.js"></script>
</body>

</html>