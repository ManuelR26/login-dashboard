<?php
    if (!empty($_POST["btnmodificar"])) {
        if (!empty($_POST["apodo"]) and !empty($_POST["clave"]) and !empty($_POST["vigente"])){
            $id = $_POST["id"];
            $apodo = $_POST["apodo"];
            $clave = $_POST["clave"];
            $vigente = $_POST["vigente"];
            $sql = $conexion->query(" UPDATE usuarios SET apodo='$apodo', clave='$clave', vigente='$vigente' WHERE id = '$id'");
            if ($sql==1){
                header("location:panel.php");
            } else {
                echo "<div class='alert alert-danger'>Error al modificar un usuario</div>";
            }
        } else {
            echo "<div class='alert alert-warning'>Campos vacios</div>";
        }
    }
?>