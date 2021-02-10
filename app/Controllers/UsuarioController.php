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
    function verificarRegistro(){
        $usario = new Usuario();
        $usario->nombre=$_POST["nombre"];
        $usario->apellidoPaterno=$_POST["paterno"];
        $usario->apellidoMaterno=$_POST["materno"];
        $usario->correo=$_POST["correo"];
        $usario->contrasenia=password_hash($_POST["contrasenia"],PASSWORD_DEFAULT,['cost' => 5]);
        $usario->crear();
        header("location:../../../repo/index.php?controller=Usuario&action=login");
    }
    function login(){
        require "app/Views/login.php";
    }
    function verificarCredenciales(){
        if ((!isset($_POST["correo"])) || !isset($_POST["contrasenia"])){
            echo "Datos incorrectos";
            return false;
        }
        $correo=$_POST["correo"];
        $contrasenia=$_POST["contrasenia"];
        $verificar = Usuario::vereficarUsuario($correo,$contrasenia);
        echo json_encode($verificar);
    }



}