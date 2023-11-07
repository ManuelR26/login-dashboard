<?php
    if(!empty($_GET["id"])) {
        $id=$_GET["id"];
        $sql=$conexion->query(" DELETE FROM proyectos WHERE id=$id ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Proyecto eliminado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">No se pudo eliminar el proyecto</div>';
        }
    }
?>