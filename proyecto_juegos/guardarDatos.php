<?php

    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $jugabilidad = $_POST['jugabilidad'];
    $fecha_lanzamiento = $_POST['fecha_lanzamiento'];
    $clasificacion = $_POST['clasificacion'];
    $descripcion = $_POST['descripcion'];
    

    $sql = "INSERT INTO juegos (nombre, jugabilidad, fecha_lanzamiento, clasificacion, descripcion)". 
            "VALUE('".$nombre."', '".$jugabilidad."', '".$fecha_lanzamiento."' , '".$clasificacion."','".$descripcion."')";
    if ($conexion->query($sql) === TRUE) {
        echo "Registro guardado con éxito<br><a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: " .$sql. "<br>" . $conexion->error."<br><br><a href='consultarDatos.php>Regresar</a>'";
    }

    $conexion->close();

?>