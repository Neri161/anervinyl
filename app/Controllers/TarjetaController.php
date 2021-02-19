<?php
require 'app/Models/Tarjeta.php';
use Models\Tarjeta;

class TarjetaController
{

    function verificarRegistro(){
        $tarjeta = new Tarjeta();
        $tarjeta->folio_Tarjeta=$_POST["folio_Tarjeta"];
        $tarjeta->fechVencimiento=$_POST["fech_Vencimineto"];
        $tarjeta->noSeguridad=$_POST["noSeguridad"];
        $tarjeta->compania=$_POST["compania"];
        $tarjeta->id_Usuario=$_GET["id"];
        $tarjeta->crear();

    }

}