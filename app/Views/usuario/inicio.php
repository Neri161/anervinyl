<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br>
    <header>
        <!-- Navbar en la parte superior que se deliza lo largo de la pagina -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="container-fuid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toogle collapsed" data-toogle="collapse" data-target="#navbar-1">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand"> Aner Vinyl </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-1">
                    <ul class="nav navbar-nav">
                        <!--Items, titulos -->
                        <li><a href="">Item 1</a></li>
                        <li class="active"><a href="">Item 2</a></li>
                        <!--Menu desplegable -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toogle="dropdown" role="button">
                                Dropdown <span class="caret" ></span >
                            </a>

                            <ul class="dropdown-menu">
                                <li> <a href="#">Item #1</a></li>
                                <li> <a href="#">Item #2</a></li>
                                <li class="divider"> </li>
                                <li> <a href="#">Item #4</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!--Busqueda -->
                    <form action="" class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Buscar">
                        </div>
                    </form>
                    <!--Elementos de la derecha -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="">Item 1</a></li>
                        <li class="active"><a href="">Item 2</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php
                                if(isset($_SESSION["nombre"])){
                                    echo $_SESSION["nombre"];
                                }
                                ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

</div>


    <?php
        if(isset($_SESSION["nombre"])){
            echo $_SESSION["nombre"];
        }
    ?>
<script src="../../../repo/Public/js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>