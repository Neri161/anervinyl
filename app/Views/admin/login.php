<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesion</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="../../../../repo/Public/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/estilos.css">
</head>
<body>

<div class="container col-md-12" id="contenedor">
    <div class="container col-md-offset-4 col-md-4" id="contenedor-2">
        <div class="panel panel-body col-md-12" id="formulario">
            <center><img src="../../../../repo/Public/img/1.png" alt="usuario" width="70px"></center>
            <?php
            if(isset($estatus)){
                echo '<h5 class="alert-danger text-center">'.$estatus.'</h5>';
            }
            ?>
            <form action="index.php?controller=Usuario&action=verificarCredenciales" method="post">
                <div class="form-group">
                    <label for="">Correo</label>
                    <input type="text" name="correo" id="correo" class="form-control" placeholder="Correo" required>
                </div>
                <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" name="contrasenia" id="contrasenia" class="form-control" placeholder="Contraseña" required>
                    <?php
                    if(isset($Contrasenia)){
                        echo '<h5 class="alert-danger text-center">'.$Contrasenia.'</h5>';
                    }
                    ?>
                </div>
                    <div class="form-group">
                        <button class="btn-success form-control">Ingresar</button>
                    </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <a href="" target="_blank">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <a href="index.php?controller=Usuario&action=registro" target="_blank">Crear cuenta</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
