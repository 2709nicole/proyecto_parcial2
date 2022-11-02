<?php
    include 'conexion.php';
    $id = $_GET["id"];
    $sql = "DELETE from juegos where id = ".$id;
    if ($conexion->query($sql) === TRUE) {
        echo "Registro eliminado con éxito<br><a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: " . $sql. "<br>" . $conexion->error."<br><br><a href='consultarDatos.php>Regresar</a>'";
    }
?>
