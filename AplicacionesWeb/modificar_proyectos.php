<?php
include "modelo/conexdashboard.php";
$id = $_GET["id"];

$sql=$conexion->query(" SELECT * FROM proyectos WHERE id=$id ");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
            <h3 class="text-center text-secondary">Modificar proyecto</h3>
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php
                include "controlador/modificar_proyecto.php";
            while($datos=$sql->fetch_object()){ ?>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Fecha inicio</label>
                <input type="text" class="form-control" name="fecha_inicio" value="<?= $datos->fecha_inicio ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha termino</label>
                <input type="text" class="form-control" name="fecha_termino" value="<?= $datos->fecha_termino ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Vigente</label>
                <input type="text" class="form-control" name="vigente" value="<?= $datos->vigente ?>">
            </div>
            <?php }
            ?>
            <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar proyecto</button>
        </form>
</body>
</html>