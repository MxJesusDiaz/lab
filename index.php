<?php
/**
 * Created by IntelliJ IDEA.
 * User: DevSalva
 * Date: 14/03/17
 * Time: 10:18 PM
 */

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="recursos/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>DImage</title>
</head>
<body style="background-color: #202020">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../">DImage</a>
            </div>
            <ul class="nav navbar-nav"></ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a type="button" data-toggle="modal" data-target="#subirButtonModal"><span class="glyphicon glyphicon-cloud-upload"></span> Up Load</a></li>
                <li><a href="imagenes.php"><span class="glyphicon glyphicon-picture"></span> View</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <br>
        <br>
        <div class="jumbotron trans text-center">
            <h2>DImage</h2>
            <h3>La mejor pagina para subir imagenes</h3>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subirButtonModal"><span class="glyphicon glyphicon-cloud-upload"/> Subir Imagen</button>
            <a href="imagenes.php" class="btn btn-success"><span class="glyphicon glyphicon-picture"></span> Ver Imagenes</a>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Modal -->
    <div class="modal fade" id="subirButtonModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Subir Imagen</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <h2>Selecciona una Imagen:</h2>
                            <input class="blanco" type="file" name="fileToUpload" id="fileToUpload">
                            <br>
                            <input type="submit" value="Sube la Imagen" name="submit">
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--MOdal2-->

</body>
</html>
