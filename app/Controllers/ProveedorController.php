<?php
require 'app/Models/Proveedor.php';
use Models\Proveedor;
class ProveedorController
{
    function login(){
        require "app/Views/proveedor/login.php";
    }
    function dologin(){
        header("location:../../../repo/index.php?controller=Proveedor&action=login");
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
        require "app/Views/admin/registroProveedor.php";
    }
    function verificarCredenciales(){
        if ((!isset($_POST["correo"])) || !isset($_POST["contrasenia"])){
            echo "Datos incorrectos";
            return false;
        }
        $correo=$_POST["correo"];
        $contrasenia=$_POST["contrasenia"];
        $verificar = Proveedor::vereficarProveedor($correo);
        if ($verificar){
            session_start();
            $_SESSION["idProveedor"]=$verificar->id_proveedor;
            $_SESSION["nombre"]=$verificar->nombre_proveedor;
            header("location:../../../repo/index.php?controller=Proveedor&action=dologin");
        }else{
            $estatus="Datos incorectos";
            require "app/Views/admin/login.php";
        }
    }
}