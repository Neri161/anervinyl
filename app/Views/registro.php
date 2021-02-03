<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../../public/css/index.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<div class="nav" id="login">
    <div class="col-md-12 " id="central">
        <form class="navbar-form navbar-right" action="login.php" method="post">
            <div class="form-group">
                <label for="correo">Correo</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Correo" required>
                <div class="form-group">
                    <label for="correo">Password</label>
                    <input class="form-control" type="password" name="pass" id="pass" placeholder="Contraseña" required>
                </div>
                <div class="form-group">
                    <button  class="btn btn-success form-control" id="inicio">Iniciar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="col-md-12 hola" id="Form" style="margin-top: 3%;margin-bottom: 3%;">
    <div class="col-md-6 col-md-offset-3 tercera color-texto" id="Formulario">
        <form id="mi-primer-form" class="mi-primer-clase" action="registro.php" method="post">
            <div class="row" id="col">
                <h2 class="text-center">Registro</h2>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nombre">Nombre: </label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apellido-paterno">Apellido Paterno: </label>
                        <input type="text" name="apellido-paterno" id="apellido-paterno" class="form-control" placeholder="Apellido Paterno" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apellido-Materno">Apellido Materno: </label>
                        <input type="text" name="apellido-Materno" id="apellido-Materno" class="form-control" placeholder="Apellido Materno" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="direccion">Dirección: </label>
                        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirección" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cp">CP:</label>
                        <input type="text" name="cp" id="cp" class="form-control" placeholder="CP" required>
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
                        <label for="descripcion">Descripcion</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" required></textarea>
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
                <div class="col-md-12">
                    <div class="form-group">
                        <a href="" target="_blank">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
                <div class="col-md-12" style="padding-bottom: 3%;">
                    <!--<input type="submit" class="form-control btn-info" value="Enviar">-->
                    <button class="btn-success form-control" id="guardar">Guardar</button>
                </div>
            </div>

        </form>
        <input type="hidden" id="ejemplo" value="5">
    </div>
</div>

</body>
</html>