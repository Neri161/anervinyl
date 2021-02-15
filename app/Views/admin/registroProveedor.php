<?php
if(!isset($_SESSION["idAdmin"]))
    session_start();
$varsesion='';
if(isset($_SESSION["idAdmin"]))
    $varsesion = $_SESSION["idAdmin"];
if($varsesion==null || $varsesion=''){
    require 'app/Views/usuario/login.php';
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
    <title>Registro Proveedor</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/estilos.css">
</head>
<body>
<div class="container col-md-12">
    <div class="container col-md-6" style="border: solid;" >
        <form action="">
            <h3 class="text-center">Registro de Proveedor</h3>
            <div class="row" id="col">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nombre">Nombre: </label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" id="correo" name="correo" placeholder="Correo" required class="form-control">
                        <?php
                        if(isset($usuarioNoExiste)){
                            echo '<h5 class="alert-danger text-center">'.$usuarioNoExiste.'</h5>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <?php
                        if(isset($error_encontrado)){
                            echo '<h5 class="alert-danger text-center">Contraseña no valida'.$error_encontrado.'</h5>';
                        }
                        ?>
                        <label for="contrasenia">Contraseña:</label>
                        <input type="password" id="contrasenia-1" name="contrasenia" placeholder="Contraseña" required class="form-control">
                        <span id="mensaje"></span>
                        <br>
                        <span id="alerta" role="alert"><strong>!</strong> La contraseña debe contener al menos 6 caracteres</span>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="contrasenia-2">Contraseña</label>
                        <input type="password" id="contrasenia-2" name="contrasenia2" placeholder="Contraseña" required class="form-control">
                        <span  id="mensaje-2"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding-bottom: 3%;">
                    <button class="btn-success form-control" id="guardar">Guardar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container col-md-6" style="border: solid; height: 100px;">

    </div>
</div>
<script src="../../../repo/Public/js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="../../../repo/Public/js/verificacion.js"></script>
<script src="../../../repo/Public/js/contrasenia.js"></script>
</body>
</html>