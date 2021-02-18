<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;

class Direcciones extends Conexion
{
    public $CP;
    public $calle;
    public $no_Interior;
    public $no_Exterior;
    public $telefono;
    public $referencia;
    public $id_Usuario;

    function __construct()
    {
        parent::__construct();
    }
    function crear()
    {
        $this -> fecha_registro = date("Y-m-d");
        $pre = mysqli_prepare($this->conexion, "INSERT INTO direcciones (CP,calle,no_Interior,no_Exterior,telefono,referencia,id_Usuario) VALUES(?,?,?,?,?,?,?)");
        $pre->bind_param("ssssssss", $this->CP, $this->calle, $this->no_Interior, $this->no_Exterior, $this->telefono, $this->referencia,$this->id_Usuario);
        $pre->execute();
    }
}