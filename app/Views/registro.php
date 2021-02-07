<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/estilos.css">
</head>
<body>
<div class="container col-md-12" id="contenedor">
    <div class="panel panel-body col-md-offset-3 col-md-6" id="formulario">
        <div class="panel-heading text-center">
                <h2>REGISTRO</h2>
        </div>
        <div class="panel-body">
            <form action="" method="post">
                <div class="row" id="col">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nombre">Nombre: </label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="apellido-paterno">Apellido Paterno: </label>
                            <input type="text" name="paterno" id="apellido-paterno" class="form-control" placeholder="Apellido Paterno" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="apellido-Materno">Apellido Materno: </label>
                            <input type="text" name="materno" id="apellido-Materno" class="form-control" placeholder="Apellido Materno" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="fecha">Fecha: </label>
                            <input type="date" name="fecha" id="fecha" class="form-control" required>
                            <small class="form-text text-muted text-danger">.</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="correo">Teléfono</label>
                            <input type="number" id="tel" name="tel" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" id="correo" name="correo" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password-2">Repetir Password</label>
                            <input type="password" id="password-2" name="password-2" required class="form-control">
                        </div>
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

</body>
</html>