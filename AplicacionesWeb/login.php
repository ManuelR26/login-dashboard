<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <form method="POST" action="">

            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Iniciar sesion</h2><br><br>
              <?php
                include("conexion_bd.php");
                include("controlador.php");
              ?>
              <div class="form-outline form-white mb-4">
                <input type="text" placeholder="USUARIO" class="form-control form-control-lg" name="usuario" /><br>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="password" placeholder="CONTRASEÑA" class="form-control form-control-lg" name="password" /><br><br><br>
              </div>
                <input name="btningresar" class="btn btn-outline-light btn-lg px-5" type="submit" value="Iniciar">
            </div>
            <div>
              <p class="mb-0">No tienes una cuenta? <a href="register.php" class="text-white-50 fw-bold">Registrarse</a>
              </p>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   
  </div>
</section>
</body>
</html>