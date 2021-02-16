<?php
require 'app/Models/Proveedor.php';
use Models\Usuario;
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
}