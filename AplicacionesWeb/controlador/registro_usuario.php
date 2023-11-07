<?php
if(!empty($_POST["btncrear"])) {
    if(!empty($_POST["apodo"]) and !empty($_POST["clave"]) and !empty($_POST["vigente"])) {
        $apodo = $_POST["apodo"];
        $clave = $_POST["clave"];
        $vigente = $_POST["vigente"];

        $sql = $conexion->query(" INSERT INTO usuarios( apodo, clave, vigente) VALUES('$apodo','$clave','$vigente')");
        if ($sql==1) {
            echo '<div class="alert alert-success">Usuario registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar el usuario, intenta de nuevo.</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacio</div>';
    }
}
?>