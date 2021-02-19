<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;

class Tarjeta extends Conexion
{
    public $folio_Tarjeta;
    public $fechVencimiento;
    public $noSeguridad;
    public $compania;
    public $id_Usuario;

    function __construct()
    {
        parent::__construct();
    }
    //insertar tarjetas
    function crear()
    {
        $pre = mysqli_prepare($this->conexion, "INSERT INTO tarjetas_credito (folio_tarjeta,fechVencimiento,noSeguridad,compania,id_Usuario) VALUES(?,?,?,?,?)");
        $pre->bind_param("sssss", $this->folio_Tarjeta, $this->fechVencimiento, $this->noSeguridad,$this->compania,$this->id_Usuario);
        $pre->execute();
    }
}