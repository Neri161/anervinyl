<?php
require 'app/Models/Direcciones.php';
use Models\Direcciones;

class DireccionesController
{
    function crear()
    {
        $this -> fecha_registro = date("Y-m-d");
        $pre = mysqli_prepare($this->conexion, "INSERT INTO direcciones (CP,calle,no_Interior,no_Exterior,telefono,referencia,id_Usuario) VALUES(?,?,?,?,?,?,?)");
        $pre->bind_param("ssssssss", $this->CP, $this->calle, $this->no_Interior, $this->no_Exterior, $this->telefono, $this->referencia,$this->id_Usuario);
        $pre->execute();
    }
}