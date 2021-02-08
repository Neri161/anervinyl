<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesion</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/estilos.css">
</head>
<body>

<div class="container col-md-12" id="login">
    <div class="panel panel-body col-md-offset-3 col-md-6" id="formulario">
        <div class="panel-heading text-center">
            <h2>INICIAR SESION</h2>
        </div>
        <div class="panel-body">
            <form action="index.php?controller=Usuario&action=dologin" method="post">
                <div class="form-group">
                    <label for="">Correo</label>
                    <input type="text" name="correo" id="correo" class="form-control" placeholder="Correo" required>
                </div>
                <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" name="contrasenia" id="contrasenia" class="form-control" required>
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
                        <a href="registro.php" target="_blank">Crear cuenta</a>
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
