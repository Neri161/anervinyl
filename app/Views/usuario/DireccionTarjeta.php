<?php
if(!isset($_SESSION["idUsuario"]))
    session_start();
$varsesion='';
if(isset($_SESSION["idUsuario"]))
    $varsesion = $_SESSION["idUsuario"];
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
    <title>Registro de Direccion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/inicio.css">
</head>
<body>
<!-- Navbar en la parte superior que se deliza lo largo de la pagina -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="../../../repo/index.php?controller=Usuario&action=dologin">Aner Vinyl </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--Items, titulos -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!--Menu desplegable -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <!--Busqueda -->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <!--Elementos de la derecha -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Carrito</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="true">
                    <?php
                    if(isset($_SESSION["nombre"])){
                        echo "Bienvenido ".$_SESSION["nombre"];
                    }
                    ?>
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../../../repo/index.php?controller=Usuario&action=perfil">Perfil</a>
                    <?php
                    if(!isset($_SESSION["idDireccion"])){
                        ?>
                        <a class="dropdown-item" href="../../../repo/index.php?controller=Usuario&action=registroDatos">Agregar Direccion</a>
                        <?php
                    }
                    if(!isset($_SESSION["idTarjeta"])){
                        ?>
                        <a class="dropdown-item" href="../../../repo/index.php?controller=Usuario&action=registroDatos">Agregar Tarjeta</a>
                        <?php
                    }
                    ?>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../../../repo/index.php?controller=Usuario&action=logout">Cerrar Sesion</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<main class="container">
    <?php
        if(!isset($_SESSION["idDireccion"])){
            ?>
            <form action="index.php?controller=Direccion&action=verificarRegistro" method="post">
                <div class="form-group">
                    <label for="nombre">CP: </label>
                    <input type="text" name="CP" id="CP" class="form-control" placeholder="CP" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Calle: </label>
                    <input type="text" name="calle" id="calle" class="form-control" placeholder="calle" required>
                </div>
                <div class="form-group">
                    <label for="nombre">No. Interior: </label>
                    <input type="text" name="no_Interior" id="no_Interior" class="form-control" placeholder="No. Interior" required>
                </div>
                <div class="form-group">
                    <label for="nombre">No. Exterior: </label>
                    <input type="text" name="no_Exterior" id="no_Exterior" class="form-control" placeholder="No. Exterior" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Telefono: </label>
                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Referencia: </label>
                    <input type="text" name="referencia" id="referencia" class="form-control" placeholder="Referencia" required>
                </div>
                <button class="btn-success form-control" id="guardar">Guardar</button>
            </form>
            <?php
        }
        if(!isset($_SESSION["idTarjeta"])){
            ?>
            <form action="index.php?controller=Usuario&action=verificarRegistro" method="post">
                <div class="form-group">
                    <label for="nombre">Folio de Tarjeta: </label>
                    <input type="text" name="folio_Tarjeta" id="folio_Tarjeta" class="form-control" placeholder="Folio de Tarjeta" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Fecha de Vencimiento: </label>
                    <input type="text" name="fech_Vencimineto" id="fech_Vencimiento" class="form-control" placeholder="Fecha de Vencimiento" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Numero de Seguridad: </label>
                    <input type="text" name="noSeguridad" id="noSeguridad" class="form-control" placeholder="Numero de Seguridad" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Compañia: </label>
                    <input type="text" name="compania" id="compania" class="form-control" placeholder="Compañia" required>
                </div>
                <button class="btn-success form-control" id="guardar">Guardar</button>
            </form>
            <?php
        }
        ?>
</main>
<script src="../../../repo/Public/js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="../../../repo/Public/js/verificacion.js"></script>
<script src="../../../repo/Public/js/contrasenia.js"></script>
</body>
</html>