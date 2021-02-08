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
        require "app/Views/login.php";
    }
    function verificarRegistro(){
        $usario = new Usuario();
        $usario->nombre=$_POST["nombre"];
        $usario->apellidoPaterno=$_POST["paterno"];
        $usario->apellidoMaterno=$_POST["materno"];
        $usario->correo=$_POST["correo"];
        $usario->contrasenia=password_hash($_POST["contrasenia"],PASSWORD_DEFAULT,['cost' => 5]);
        $usario->crear();
        header("location:../../../repo/app/Views/login.php");
    }
    public function  dologin(){
        if (isset($_POST)){
            $usuario = usuario::findByEmail($_POST["correo"]);
            if ($usuario==null){
                $_SESSION["flash"]="Usuario incorrecto";
                header('location: /clase1?controller=Usuarios&action=login');
            }if(password_verify($_POST["password"],$usuario->password)){
                $_SESSION["usuario_id"]=$usuario->id;
                header('Location:/clase1?controller=Usuarios&action=index');
            }else{
                $_SESSION["flash"]="Contraseña incorrecta";
                header('location: /clase1?controller=Usuarios&action=login');
            }
        }
    }

}