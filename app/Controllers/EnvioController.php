<?php
require 'app/Models/Envio.php';

use Models\Envio;

class EnvioController
{
    function comprar(){
        $compra = new Envio();
        $compra->idU=$_POST["idusuario"];
        $compra->idProducto=$_POST["id"];
        $compra->estatus='enviado';
        var_dump($compra);
        $compra->crear();
    }
}