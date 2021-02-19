<?php
require 'app/Models/Envio.php';

use Models\Envio;

class EnvioController
{
    function comprar(){
        $compra = new Envio();
        $producto=$_POST["id"];
        $compra->idU=$_POST["idDireccion"];
        $compra->idProducto=$producto;
        $compra->estatus='enviado';
        $compra->crear();
        header("location:../../../repo/index.php?controller=Productos&action=stock&id=$producto");
    }
}