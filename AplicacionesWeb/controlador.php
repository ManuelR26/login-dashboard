<?php

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTÁN VACIOS</div>';
    } else {
        $usuario = $_POST["usuario"];
        $clave = $_POST["password"];
        $sql = $conexion->query("SELECT * FROM datos WHERE nombre = '$usuario' and contraseña = '$clave'");
        if ($datos = $sql->fetch_object()) {
            header("location:panel.php");
        } else {
            echo '<div class="alert alert-danger">ACESSO DENEGADO</div>';
        }
    }
}
?>