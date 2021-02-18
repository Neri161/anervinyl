<?php
if(!isset($_SESSION["idProveedor"]))
    session_start();
$varsesion='';
if(isset($_SESSION["idProveedor"]))
    $varsesion = $_SESSION["idProveedor"];
if($varsesion==null || $varsesion=''){
    require 'app/Views/proveedor/login.php';
    die();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../repo/Public/css/inicio.css">
</head>
<body>
<!-- Navbar en la parte superior que se deliza lo largo de la pagina -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Aner Vinyl </a>
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
                    <a class="dropdown-item" href="#">Registrar Artista</a>
                    <a class="dropdown-item" href="#">Elimar Usuario</a>
                    <a class="dropdown-item" href="#">Elimar Producto</a>
                    <a class="dropdown-item" href="#">Elimar Proveedor</a>
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
                    <a class="dropdown-item" href="../../../repo/index.php?controller=Admin&action=perfil">Perfil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../../../repo/index.php?controller=Admin&action=logout">Cerrar Sesion</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<main class="container-fluid">
    <div class="row registros">
        <div class="col-md-6" style="border: solid;" >
            <form action="index.php?controller=Productos&action=verificarRegistro&Proveedor=<?php echo $_SESSION["idProveedor"];?>" method="post" enctype="multipart/form-data">
                <h3 class="text-center">Registro de Productos</h3>
                <br>
                    <div class="form-group">
                        <label for="nombre">Nombre: </label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria: </label>
                        <select name="categoria" class="form-control" id="categoria">
                            <?php
                                if(isset($categoria)){
                                    foreach ($categoria as $valor){
                            ?>
                            <option value="<?php echo $valor["id_Categoria"]; ?>"><?php echo $valor["nombre"]; ?></option>
                            <?php
                                }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo: </label>
                        <select name="tipo" id="tipo" class="form-control">
                            <?php
                            if(isset($tipos)){
                            foreach ($tipos as $valor){
                            ?>
                            <option value="<?php echo $valor["id_Tipos"]; ?>" ><?php echo $valor["tipo"]; ?></option>
                                <?php
                            }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="artista">Artista: </label>
                        <select name="artista" class="form-control">
                            <?php
                            if(isset($artista)){
                            foreach ($artista as $valor){
                            ?>
                            <option value="<?php echo $valor["id_Artista"]; ?>"><?php echo $valor["nombre_Artistico"]; ?></option>
                            <?php
                            }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio: </label>
                        <input type="text" name="precio" id="precio" class="form-control" placeholder="Precio" required>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock: </label>
                        <input type="text" name="stock" id="stock" class="form-control" placeholder="Stock" required>
                    </div>
                    <div class="form-group">
                        <label for="anio">Año: </label>
                        <input type="text" name="anio" id="anio" class="form-control" placeholder="Anio" required>
                    </div>
                <div class="form-group">
                    <label for="foto">Foto del Producto</label>
                    <input type="file" class="form-control-file" id="foto" name="image">
                </div>
                <div class="form-group">
                    <button class="btn-success form-control" id="guardar">Guardar</button>
                </div>
            </form>
        </div>
        <div class="sidebar-datos col-md-6">
            <div class="container-fluid">
                <table class="table table-hover table-active" border="1">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>categoria</th>
                        <th>artista</th>
                        <th>Tipo</th>
                        <th>precio</th>
                        <th>stock</th>
                        <th>anio</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($productos)){
                        foreach ($productos as $valor){
                            ?>
                            <tr>
                                <td><?php echo $valor["id"];?></td>
                                <td><?php echo $valor["nombre"];?></td>
                                <td><?php echo $valor["categoria"];?></td>
                                <td><?php echo $valor["tipo"];?></td>
                                <td><?php echo $valor["artista"];?></td>
                                <td><?php echo $valor["precio"];?></td>
                                <td><?php echo $valor["stock"];?></td>
                                <td><?php echo $valor["anio"];?></td>
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
    </div>
</main>
<script src="../../../repo/Public/js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>