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
        $correo=&$_POST["correo"];
        $verificar = Usuario::verificarCorreo($correo);
        if($verificar==null){
            $usario = new Usuario();
            $usario->nombre=$_POST["nombre"];
            $usario->apellidoPaterno=$_POST["paterno"];
            $usario->apellidoMaterno=$_POST["materno"];
            $usario->correo=$_POST["correo"];
            $usario->contrasenia=password_hash($_POST["contrasenia"],PASSWORD_DEFAULT,['cost' => 5]);
            $usario->crear();
            header("location:../../../repo/index.php?controller=Usuario&action=login");
        }else{
            $usuarioNoExiste="El correo electronico ya existe";
            require "app/Views/registro.php";
        }
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
        if ($verificar){
            if (password_verify($contrasenia,$verificar->contrasenia)){
                session_start();
                $_SESSION["nombre"]=$verificar->nombre;
                $nombre=$verificar->nombre;
                require 'app/Views/inicio.php';
            }else{
                $Contrasenia="La contraseña es incorrecta";
                require "app/Views/login.php";
            }
        }else{
                $estatus="Datos incorectos";
                require "app/Views/login.php";
        }

    }

}