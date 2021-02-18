<?php
require 'app/Models/Admin.php';
use Models\Admin;

class AdminController
{
    function login(){
        require "app/Views/admin/login.php";
    }
    function dologin(){
        require "app/Views/admin/inicio.php";
    }
    function logout(){
        session_start();
        session_destroy();
        header("location:../../../repo/index.php?controller=Admin&action=login");
    }
    function verificarCredenciales(){
        if ((!isset($_POST["correo"])) || !isset($_POST["contrasenia"])){
            echo "Datos incorrectos";
            return false;
        }
        $correo=$_POST["correo"];
        $contrasenia=$_POST["contrasenia"];
        $verificar = Admin::vereficarAdmin($correo);
        if ($verificar){
                session_start();
                $_SESSION["idAdmin"]=$verificar->id_Admin;
                $_SESSION["nombre"]=$verificar->nombre;
                $nombre=$verificar->nombre;
                header("location:../../../repo/index.php?controller=Admin&action=dologin");
        }else{
            $estatus="Datos incorectos";
            require "app/Views/admin/login.php";
        }
    }
    function registroProveedor(){
        $proveedor=Admin::Proveedorall();
        require 'app/Views/admin/registroProveedor.php';
    }
    function registroCategoria(){
        $categoria=Admin::Categoriaall();
        require 'app/Views/admin/RegistrarCategoria.php';
    }
    function registroArtista(){
        $artista=Admin::Artistaall();
        require 'app/Views/admin/RegistroArtista.php';
    }
}