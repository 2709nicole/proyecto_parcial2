<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body style="background-color: #a6caed;">
    <?php
        include 'conexion.php';
        include 'menu.php';
    ?>
        <hr>
        <div class="container">
        <div class="row">
        <div class="col-12">
    <?php
        if ($_GET["termino"]=="") {   
    ?>
    <br>
    </div>
    <div class="alert alert-danger">No existen registros con ese término de búsqueda</div>
    <?php } else {
        $sql="SELECT * FROM juegos WHERE nombre LIKE '%" . $_GET["termino"]."%'";
        $juegos = $conexion->query($sql);
        if ($juegos->num_rows==0) {
            echo "<div class='alert alert-danger'>No existe registros con ese término de búsqueda</div><br>";
        } else {
    ?>
    <table class="table table-horver">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Jugabilidad</th>
            <th>Fecha de lanzamiento</th>
            <th>Clasificacion</th>
            <th>Descripcion</th>
            <th>Opciones</th>
            <th></th>
        </thead>
        <tbody>
        <?php while($row = $juegos->fetch_assoc()) { ?>
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
            <?php }?>
        </tbody>
    </table>
    <?php }} ?>
        </div></div></div>

    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>