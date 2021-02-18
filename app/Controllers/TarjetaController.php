<?php
require 'app/Models/TarjetasCredito.php';
use Models\TarjetasCredito;

class TarjetaController
{
    function crear()
    {
        $this -> fecha_registro = date("Y-m-d");
        $pre = mysqli_prepare($this->conexion, "INSERT INTO tarjetas_credito (folio_tarjeta,fechVencimiento,noSeguridad, compania,id_Usuario,) VALUES(?,?,?,?,?)");
        $pre->bind_param("ssssssss", $this->folio_Tarjeta, $this->fechVencimiento, $this->noSeguridad,$this->compania,$this->id_Usuario);
        $pre->execute();
    }
}