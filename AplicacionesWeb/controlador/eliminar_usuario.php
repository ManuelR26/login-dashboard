<?php
    if(!empty($_GET["id"])) {
        $id=$_GET["id"];
        $sql=$conexion->query(" DELETE FROM usuarios WHERE id = '$id' ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Usuario eliminado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">No se pudo eliminar el usuario</div>';
        }
    }
?>