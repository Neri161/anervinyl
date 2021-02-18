<?php
require 'app/Models/Usuario.php';
use Models\Usuario;
class UsuarioController
{
    function __construct()
    {
    }
    function registro(){
        require "app/Views/usuario/registro.php";
    }
    function verificarRegistro(){
        $correo=&$_POST["correo"];
        $verificar = Usuario::verificarCorreo($correo);
        $image = '10160';
        $imageSubida=fopen('C:\xampp\htdocs\repo\Public\img\defecto.jpg','r');
        $binariosImagen=fread($imageSubida,$image);
        if($verificar==null){
            $usario = new Usuario();
            $usario->nombre=$_POST["nombre"];
            $usario->apellidoPaterno=$_POST["paterno"];
            $usario->apellidoMaterno=$_POST["materno"];
            $usario->correo=$_POST["correo"];
            $usario->contrasenia=password_hash($_POST["contrasenia"],PASSWORD_DEFAULT,['cost' => 5]);
            $usario->foto=$binariosImagen;
            $usario->tipo='image/jpg';
            $usario->crear();
            header("location:../../../repo/index.php?controller=Usuario&action=login");
        }else{
            $usuarioNoExiste="El usuario ya existe";
            require "app/Views/usuario/registro.php";
        }
    }
    function login(){
        require "app/Views/usuario/login.php";
    }
    function dologin(){
        $productos=Usuario::Productosall();
       require 'app/Views/usuario/inicio.php';
    }
    function logout(){
        session_start();
        session_destroy();
        header("location:../../../repo/index.php?controller=Usuario&action=login");
    }
    function verificarCredenciales(){
        if ((!isset($_POST["correo"])) || !isset($_POST["contrasenia"])){
            echo "Datos incorrectos";
            return false;
        }
        $correo=$_POST["correo"];
        $contrasenia=$_POST["contrasenia"];
        $verificar = Usuario::vereficarUsuario($correo);
        if ($verificar){
            if (password_verify($contrasenia,$verificar->contrasenia)){
                session_start();
                $_SESSION["idUsuario"]=$verificar->id_usuario;
                $_SESSION["nombre"]=$verificar->nombre;
                $_SESSION["apellidoPaterno"]=$verificar->apellido_paterno;
                $_SESSION["apellidoMaterno"]=$verificar->apellido_materno;
                $_SESSION["correo"]=$verificar->correo;
                $_SESSION["foto"]=$verificar->foto;
                $_SESSION["tipo"]=$verificar->tipo;
                $verificarDirecciones=Usuario::verificarDireccion($_SESSION["idUsuario"]);
                if($verificarDirecciones){
                    $_SESSION["idDireccion"]=$verificarDirecciones->id_Direccion;
                    $_SESSION["CP"]=$verificarDirecciones->CP;
                    $_SESSION["calle"]=$verificarDirecciones->calle;
                    $_SESSION["noInterior"]=$verificarDirecciones->no_Interior;
                    $_SESSION["noExterior"]=$verificarDirecciones->no_Exterior;
                    $_SESSION["telefono"]=$verificarDirecciones->telefono;
                    $_SESSION["referencia"]=$verificarDirecciones->referencia;
                }
                $verificarTarjeta=Usuario::verificarTarjeta($_SESSION["idUsuario"]);
                if($verificarTarjeta){
                    $_SESSION["folio_Tarjeta"]=$verificarTarjeta->folio_Tarjeta;
                    $_SESSION["fechVencimiento"]=$verificarTarjeta->fechVencimiento;
                    $_SESSION["noSeguridad"]=$verificarTarjeta->noSeguridad;
                    $_SESSION["compania"]=$verificarTarjeta->compania;
                }
                header("location:../../../repo/index.php?controller=Usuario&action=dologin");
            }else{
                $Contrasenia="La contraseña es incorrecta";
                require "app/Views/usuario/login.php";
            }
        }else{
                $estatus="Datos incorectos";
                require "app/Views/usuario/login.php";
        }
    }
    function perfil(){
        require "app/Views/usuario/perfil.php";
    }
    function registroDatos(){
        require "app/Views/usuario/DireccionTarjeta.php";
    }
}