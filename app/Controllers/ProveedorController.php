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
        echo var_dump($proveedor);
    }
}