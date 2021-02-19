<?php
if(!isset($_SESSION["idAdmin"]))
    session_start();
if(isset($_SESSION["idAdmin"])){
    require 'app/Views/admin/inicio.php';
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
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><link rel="stylesheet" type="text/css" href="../../../repo/Public/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/estilos.css">
</head>
<body>

<div class="container col-md-12" id="contenedor-admin">
    <div class="container col-md-offset-4 col-md-4" id="contenedor-2-admin">
        <div class="panel panel-body col-md-12" id="formulario-admin">
            <br>
            <center><img src="../../../../repo/Public/img/2.png" alt="usuario" width="70px"></center>
            <?php
            if(isset($estatus)){
                echo '<h5 class="alert-danger text-center">'.$estatus.'</h5>';
            }
            ?>
            <form action="index.php?controller=Admin&action=verificarCredenciales" method="post">
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="correo" id="correo" class="form-control" placeholder="Nombre" required>
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
                        <button class="btn form-control" id="btn-admin">Ingresar</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
