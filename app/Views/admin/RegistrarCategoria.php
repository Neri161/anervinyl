<?php

if(!isset($_SESSION["nombre"]))
    session_start();
if(isset($_SESSION["nombre"])){
    require 'app/Views/usuario/inicio.php';
    die();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Categoria</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/estilos.css">
</head>
<body>
<div class="container col-md-12" id="contenedor">
    <div class="container col-md-offset-4 col-md-4" id="contenedor-2">
        <div class="panel panel-body col-md-12" id="formulario">
            <form action="index.php?controller=Usuario&action=verificarRegistro" method="post">
                <div class="row" id="col">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nombre">Nombre: </label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                        </div>
                    </div>
           
                <div class="row">
                    <div class="col-md-12" style="padding-bottom: 3%;">
                        <button class="btn-success form-control" id="guardar">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../../../repo/Public/js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="../../../repo/Public/js/verificacion.js"></script>
<script src="../../../repo/Public/js/contrasenia.js"></script>
</body>
</html>