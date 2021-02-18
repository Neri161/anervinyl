<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;

class Categoria extends Conexion
{
    public $Nombre;
    function __construct()
    {
        parent::__construct();
    }
    function crear()
    {
        $pre = mysqli_prepare($this->conexion, "INSERT INTO categorias (nombre) VALUES(?)");
        $pre->bind_param("s", $this->Nombre);
        $pre->execute();
    }
}