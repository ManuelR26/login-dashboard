<?php
if(!empty($_POST["btncrear"])) {
    if(!empty($_POST["nombre"]) and !empty($_POST["fecha_inicio"]) and !empty($_POST["fecha_termino"]) and !empty($_POST["vigente"])) {
        $nombre = $_POST["nombre"];
        $fecha_inicio = $_POST["fecha_inicio"];
        $fecha_termino = $_POST["fecha_termino"];
        $vigente = $_POST["vigente"];

        $sql = $conexion->query(" INSERT INTO proyectos( nombre, fecha_inicio, fecha_termino, vigente) VALUES( '$nombre','$fecha_inicio','$fecha_termino','$vigente')");
        if ($sql==1) {
            echo '<div class="alert alert-success">Proyecto registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar el proyecto, intenta de nuevo.</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacio</div>';
    }
}
?>