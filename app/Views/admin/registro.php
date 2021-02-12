<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Usuario</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/estilos.css">
</head>
<body>
<div class="container col-md-12" id="contenedor">
    <div class="panel panel-body col-md-offset-4 col-md-4" id="formulario">
            <h3 class="text-center">Crear Cuenta</h3>
            <form action="index.php?controller=Usuario&action=verificarRegistro" method="post">
                <div class="row" id="col">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nombre">Nombre: </label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="paterno">Apellido Paterno: </label>
                            <input type="text" name="paterno" id="paterno" class="form-control" placeholder="Apellido Paterno" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="materno">Apellido Materno: </label>
                            <input type="text" name="materno" id="materno" class="form-control" placeholder="Apellido Materno" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input type="email" id="correo" name="correo" required class="form-control">
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
                            <input type="password" id="contrasenia-1" name="contrasenia" required class="form-control">
                            <span id="mensaje"></span>
                            <h5 class="alert-warning" role="alert"><strong>!</strong> La contraseña debe contener al menos 6 caracteres</h5>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="contrasenia-2">Contraseña</label>
                            <input type="password" id="contrasenia-2" name="contrasenia2" required class="form-control">
                            <span  id="mensaje-2"></span>
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
<script src="../../../repo/Public/js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="../../../repo/Public/js/verificacion.js"></script>
<script src="../../../repo/Public/js/contrasenia.js"></script>
</body>
</html>