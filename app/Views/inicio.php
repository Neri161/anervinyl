<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesion</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<div class="col-md-12 hola" id="Form" style="margin-top: 10%;margin-bottom: 10%;">
    <div class="col-md-6 col-md-offset-3 tercera color-texto" id="Formulario">
        <form id="mi-primer-form" class="mi-primer-clase" action="registro.php" method="post">
            <div class="row" id="col">
                <h2 class="text-center">Inicio de Sesion</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" id="correo" name="correo" required class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required class="form-control">
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
