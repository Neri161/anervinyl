<?php
if(!isset($_SESSION["idAdmin"]))
    session_start();
$varsesion='';
if(isset($_SESSION["idAdmin"]))
    $varsesion = $_SESSION["idAdmin"];
if($varsesion==null || $varsesion=''){
    require 'app/Views/admin/login.php';
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
    <title>Registro de Artista</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/inicio.css">
</head>
<body>
<!-- Navbar en la parte superior que se deliza lo largo de la pagina -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="../../../repo/index.php?controller=Admin&action=login">Aner Vinyl </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--Items, titulos -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!--Menu desplegable -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Acciones
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?controller=Admin&action=registroProveedor">Registrar Proveedor</a>
                    <a class="dropdown-item" href="index.php?controller=Admin&action=registroArtista">Registrar Artista</a>
                    <a class="dropdown-item" href="index.php?controller=Admin&action=registroCategoria">Registrar Categoria</a>
                </div>
            </li>
        </ul>
        <!--Busqueda -->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <!--Elementos de la derecha -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="true">
                    <?php
                    if(isset($_SESSION["nombre"])){
                        echo "Bienvenido ".$_SESSION["nombre"];
                    }
                    ?>
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../../../repo/index.php?controller=Admin&action=logout">Cerrar Sesion</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<main class="container">
    <div class="row registros">
        <div class="col-md-6">
            <form action="index.php?controller=Artista&action=verificarRegistro" method="post">
                <br>
                <h1 class="text-center">Registro Artista</h1>
                <div class="form-group">
                    <label for="nombre">Nombre Artistico: </label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Artistico" required>
                </div>
                <br>
                    <button class="btn-success form-control" id="guardar">Guardar</button>
            </form>
        </div>
        <div class="sidebar-datos col-md-6">
            <div class="container-fluid">
                <table class="table table-hover table-active" border="1">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($artista)){
                        foreach ($artista as $valor){
                            ?>
                            <tr>
                                <td><?php echo $valor["id_Artista"];?></td>
                                <td><?php echo $valor["nombre_Artistico"];?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<script src="../../../repo/Public/js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>