<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Parcial 2</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body style="background-color: #a6caed;">

    <?php
      include 'conexion.php';
      $sql = "select * from juegos";
      $datos = $conexion->query($sql);

    ?>
    <?php include 'menu.php'?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Jugabilidad</th>
                            <th>Fecha de lanzamiento</th>
                            <th>Clasificacion</th>
                            <th>Descripcion</th>
                            <th>Opciones</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($datos->num_rows > 0) { 
                            while($row = $datos->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["jugabilidad"]; ?></td>
                            <td><?php echo $row["fecha_lanzamiento"]; ?></td>
                            <td><?php echo $row["clasificacion"]; ?></td>
                            <td><?php echo $row["descripcion"]; ?></td>
                            <td>
                                <a href="actualizarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Editar</a>
                            </td>
                            <td>
                                <a href="eliminarDatos.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                      <?php 
                      } 
                    }
                    $conexion->close();
                      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <hr>
    <script src="js/bootstrap.js"></script>
</body>
</html>