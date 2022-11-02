<?php
    include 'conexion.php';

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $jugabilidad = $_POST["jugabilidad"];
    $fecha_lanzamiento = $_POST["fecha_lanzamiento"];
    $clasificacion = $_POST["clasificacion"];
    $descripcion = $_POST["descripcion"];
    
    $sql = "UPDATE juegos SET nombre='".$nombre."', clasificacion='".$clasificacion."', descripcion='".$descripcion."',
    fecha_lanzamiento='".$fecha_lanzamiento."', jugabilidad='".$jugabilidad."' "."WHERE id=".$id;

    if ($conexion->query($sql) === TRUE) {
        echo "Registro guardado con éxito<a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }
?>