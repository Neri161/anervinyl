<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;

class Envio extends Conexion
{

    public $idU;
    public $idProducto;
    public $estatus;
    
    function __construct()
    {
        parent::__construct();
    }

    function crear()
    {
        $pre = mysqli_prepare($this->conexion, "INSERT INTO envio(id_UD,id_Producto,estatus) VALUES (?,?,?)");
        $pre->bind_param("sss", $this->idU, $this->idProducto, $this->estatus);
        $pre->execute();
        $pre->execute();
    }

}