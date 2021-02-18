<?php
require 'app/Models/Proveedor.php';
use Models\Proveedor;
class ProveedorController
{
    function login(){
        require "app/Views/proveedor/login.php";
    }
    function dologin(){
        require "app/Views/proveedor/inicio.php";
    }
    function logout(){
        session_start();
        session_destroy();
        header("location:../../../repo/index.php?controller=Proveedor&action=login");
    }
    function verificarRegistro(){
        $proveedor = new Proveedor();
        $proveedor->nombreProveedor=$_POST["nombre"];
        $proveedor->telefono=$_POST["telefono"];
        $proveedor->correo=$_POST["correo"];
        $proveedor->contraseña=password_hash($_POST["contrasenia"],PASSWORD_DEFAULT,['cost' => 5]);
        $proveedor->crear();
        header("location:../../../repo/index.php?controller=Admin&action=registroProveedor");
    }
    function verificarCredenciales(){
        if ((!isset($_POST["correo"])) || !isset($_POST["contrasenia"])){
            $estatus="Datos incorectos";
            require "app/Views/proveedor/login.php";
        }
        $correo=$_POST["correo"];
        $contrasenia=$_POST["contrasenia"];
        $verificar = Proveedor::vereficarProveedor($correo);
        var_dump($verificar);
        if ($verificar){
            if(password_verify($contrasenia,$verificar->contrasenia)){
                session_start();
                $_SESSION["idProveedor"]=$verificar->id_Proveedor;
                $_SESSION["nombre"]=$verificar->nombre_Proveedor;
                header("location:../../../repo/index.php?controller=Proveedor&action=dologin");
            }else{
                $Contrasenia="La contraseña es incorrecta";
                require "app/Views/proveedor/login.php";
            }
        }else{
            $estatus="Datos incorectos";
            require "app/Views/proveedor/login.php";
        }
    }
    function registrarProducto(){
        $tipos=Proveedor::Tiposall();
        $artista=Proveedor::Artistaall();
        $categoria=Proveedor::Categoriaall();
        $productos=Proveedor::Productosall($_GET["id"]);
        require "app/Views/proveedor/registroProducto.php";
    }

}