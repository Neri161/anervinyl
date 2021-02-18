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
    <title>Registro de Direccion</title>
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
            <center><img src="../../../../repo/Public/img/1.png" alt="usuario" width="70px"></center>
            <form action="index.php?controller=Usuario&action=verificarRegistro" method="post">
                <div class="row" id="col">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nombre">CP: </label>
                            <input type="text" name="CP" id="CP" class="form-control" placeholder="CP" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nombre">Calle: </label>
                            <input type="text" name="calle" id="calle" class="form-control" placeholder="calle" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nombre">No. Interior: </label>
                            <input type="text" name="no_Interior" id="no_Interior" class="form-control" placeholder="No. Interior" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nombre">No. Exterior: </label>
                            <input type="text" name="no_Exterior" id="no_Exterior" class="form-control" placeholder="No. Exterior" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nombre">Telefono: </label>
                            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nombre">Referencia: </label>
                            <input type="text" name="referencia" id="referencia" class="form-control" placeholder="Referencia" required>
                        </div>
                    </div>
    
           
                <div class="row">
                    <div class="col-md-12" style="padding-bottom: 3%;">
                        <!--<input type="submit" class="form-control btn-info" value="Enviar">-->
                        <button class="btn-success form-control" id="guardar">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container col-md-12" id="contenedor">
    <div class="container col-md-offset-4 col-md-4" id="contenedor-2">
        <div class="panel panel-body col-md-12" id="formulario">
            <center><img src="../../../../repo/Public/img/1.png" alt="usuario" width="70px"></center>
            <form action="index.php?controller=Usuario&action=verificarRegistro" method="post">
                <div class="row" id="col">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nombre">Folio de Tarjeta: </label>
                            <input type="text" name="folio_Tarjeta" id="folio_Tarjeta" class="form-control" placeholder="Folio de Tarjeta" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nombre">Fecha de Vencimiento: </label>
                            <input type="text" name="fech_Vencimineto" id="fech_Vencimiento" class="form-control" placeholder="Fecha de Vencimiento" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nombre">Numero de Seguridad: </label>
                            <input type="text" name="noSeguridad" id="noSeguridad" class="form-control" placeholder="Numero de Seguridad" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nombre">Compañia: </label>
                            <input type="text" name="compania" id="compania" class="form-control" placeholder="Compañia" required>
                        </div>
                    </div>
    
           
                <div class="row">
                    <div class="col-md-12" style="padding-bottom: 3%;">
                        <!--<input type="submit" class="form-control btn-info" value="Enviar">-->
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