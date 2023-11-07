<?php
    if (!empty($_POST["btnmodificar"])) {
        if (!empty($_POST["nombre"]) and !empty($_POST["fecha_inicio"]) and !empty($_POST["fecha_termino"]) and !empty($_POST["vigente"])){
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $fecha_inicio = $_POST["fecha_inicio"];
            $fecha_termino = $_POST["fecha_termino"];
            $vigente = $_POST["vigente"];
            $sql = $conexion->query(" UPDATE proyectos SET nombre='$nombre', fecha_inicio='$fecha_inicio', fecha_termino='$fecha_termino', vigente='$vigente' WHERE id=$id");
            if ($sql==1){
                header("location:panel.php");
            } else {
                echo "<div class='alert alert-danger'>Error al modificar un proyecto</div>";
            }
        } else {
            echo "<div class='alert alert-warning'>Campos vacios</div>";
        }
    }
?>