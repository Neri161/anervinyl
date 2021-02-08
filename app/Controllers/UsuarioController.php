<?php
require 'app/Models/Usuario.php';
use Models\Usuario;
class UsuarioController
{

    function __construct()
    {

    }

    function registro(){
        require "app/Views/registro.php";
    }
    function inicioSesion(){
        require "app/Views/inicio.php";
    }
    function verificarRegistro(){
        $usario = new Usuario();
        $usario->nombre=$_POST["nombre"];
        $usario->apellidoPaterno=$_POST["paterno"];
        $usario->apellidoMaterno=$_POST["materno"];
        $usario->correo=$_POST["correo"];
        $usario->contrasenia=$_POST["contrasenia"];
        $usario->crear();
       // require "app/Views/inicio.php";
    }

}