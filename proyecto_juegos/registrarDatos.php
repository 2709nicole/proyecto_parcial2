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
    <?php include 'menu.php'?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Videojuego</h1><hr>
                <form action="guardarDatos.php" method="post">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nombre</span>
                    </div>
                    <input name="nombre" type="text" class="form-control" placeholder="Ingresa el nombre del videojuego" aria-label="nombre" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="input-group-text" id="basic-addon2">Jugabilidad</span>
                    </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="jugabilidad" value="Online">
                    </div>
                    <input type="jugabilidad" class="form-control bg-white" value="Online" aria-label="jugabilidad" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="jugabilidad" value="Individual o mundo abierto">
                    </div>
                    <input type="jugabilidad" class="form-control bg-white" value="Individual o mundo abierto" aria-label="jugabilidad" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="jugabilidad" value="Ambos">
                    </div>
                    <input type="jugabilidad" class="form-control bg-white" value="Ambos" aria-label="jugabilidad" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Fecha de lanzamiento</span>
                    </div>
                    <input name="fecha_lanzamiento" type="date" class="form-control" aria-label="fecha_lanzamiento">
                    <div class="input-group-append">
                        <span class="input-group-text">dd/mm/aaaa</span>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="input-group-text" id="basic-addon2">Clasificacion</span>
                    </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="clasificacion" value="E">
                    </div>
                    <input type="clasificacion" class="form-control bg-white" value="E" aria-label="clasificacion" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="clasificacion" value="E10+">
                    </div>
                    <input type="clasificacion" class="form-control bg-white" value="E10+" aria-label="clasificacion" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="clasificacion" value="T">
                    </div>
                    <input type="clasificacion" class="form-control bg-white" value="T" aria-label="clasificacion" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="clasificacion" value="M">
                    </div>
                    <input type="clasificacion" class="form-control bg-white" value="M" aria-label="clasificacion" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="clasificacion" value="+18">
                    </div>
                    <input type="clasificacion" class="form-control bg-white" value="+18" aria-label="clasificacion" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Descripcion</span>
                    </div>
                        <textarea name="descripcion" class="form-control" aria-label="descripcion"></textarea>
                    </div>
                    <hr>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                    <br>
                </form>
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