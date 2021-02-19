<?php
require 'app/Models/Direcciones.php';
use Models\Direcciones;

class DireccionController
{
    //verifica registro de direccion
    function verificarRegistro(){
        $direccion=new Direcciones();
        $direccion->CP=$_POST["CP"];
        $direccion->calle=$_POST["calle"];
        $direccion->no_Interior=$_POST["no_Interior"];
        $direccion->no_Exterior=$_POST["no_Exterior"];
        $direccion->telefono=$_POST["telefono"];
        $direccion->referencia=$_POST["referencia"];
        $direccion->id_Usuario=$_GET["id"];
        $direccion->crear();
        header("location:../../../repo/index.php?controller=Usuario&action=verificarDT");
    }
}