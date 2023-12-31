<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("Estas seguro que deseas eliminar?");
            return respuesta
        }
    </script>
    <nav class="navbar navbar-expand-lg navbar-dark p-3 bg-danger" id="headerNav">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 active" aria-current="page" href="#">DASHBOARD</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Usuario
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="login.php">Cambiar de cuenta</a></li>
                <li><a class="dropdown-item" href="logout.php">Cerrar sesion</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php
        include "modelo/conexdashboard.php";
        include "controlador/eliminar_usuario.php";
        include "controlador/eliminar_proyecto.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-4" method="POST">
            <h3 class="text-center text-secondary">Crear nuevo usuario</h3>
            <?php
                include "modelo/conexdashboard.php";
                include "controlador/registro_usuario.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apodo</label>
                <input type="text" class="form-control" name="apodo">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Clave</label>
                <input type="text" class="form-control" name="clave">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Vigente</label>
                <input type="text" class="form-control" name="vigente">
            </div>
            <button type="submit" class="btn btn-primary" name="btncrear" value="ok"><i class="bi bi-plus"></i> Agregar</button>
        </form>
    <div class="col-8 p-5">
        <h3 class="text-center text-secondary">Tabla Usuarios</h3>
        <table class="table table-bordered border-dark"> 
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Apodo</th>
                    <th scope="col">Clave</th>
                    <th scope="col">Vigente</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "modelo/conexdashboard.php";
                $sql = $conexion->query(" SELECT * FROM usuarios ");
                while ($datos = $sql->fetch_object()){ ?>
                    <tr>
                        <th><?= $datos->id ?></th>
                        <td><?= $datos->apodo ?></td>
                        <td><?= $datos->clave ?></td>
                        <td><?= $datos->vigente ?></td>
                        <td>
                            <a href="modificar_usuarios.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="bi bi-pencil-fill"></i></a>
                            <a onclick="return eliminar()" href="panel.php?id=<?= $datos->id ?>" class="btn btn-samll btn-danger"><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
    </table>
    </div>
    </div>
    <div class="container-fluid row">
        <form class="col-4 p-4" method="POST">
            <h3 class="text-center text-secondary">Crear nuevo proyecto</h3>
            <?php
                include "modelo/conexdashboard.php";
                include "controlador/registro_proyecto.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Fecha inicio</label>
                <input type="text" class="form-control" name="fecha_inicio">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha termino</label>
                <input type="text" class="form-control" name="fecha_termino">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Vigente</label>
                <input type="text" class="form-control" name="vigente">
            </div>
            <button type="submit" class="btn btn-primary" name="btncrear" value="ok"><i class="bi bi-plus"></i> Agregar</button>
        </form>
    <div class="col-8 p-5">
        <h3 class="text-center text-secondary">Tabla Proyectos</h3>
        <table class="table table-bordered border-dark"> 
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha inicio</th>
                    <th scope="col">Fecha termino</th>
                    <th scope="col">Vigente</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "modelo/conexdashboard.php";
                $sql = $conexion->query(" SELECT * FROM proyectos ");
                while ($datos = $sql->fetch_object()){ ?>
                    <tr>
                        <th><?= $datos->id ?></th>
                        <td><?= $datos->nombre ?></td>
                        <td><?= $datos->fecha_inicio ?></td>
                        <td><?= $datos->fecha_termino ?></td>
                        <td><?= $datos->vigente ?></td>
                        <td>
                            <a href="modificar_proyectos.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="bi bi-pencil-fill"></i></a>
                            <a onclick="return eliminar()" href="panel.php?id=<?= $datos->id ?>" class="btn btn-samll btn-danger"><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
    </table>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>