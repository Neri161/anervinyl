<?php

namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;

class Producto extends Conexion
{
    public $id;
    public $nombre;
    public $categoria;
    public $tipo;
    public $artista;
    public $precio;
    public $stock;
    public $anio;
    public $proveedor;
    public $imagen;
    function __construct()
    {
        parent::__construct();
    }
       static function Productosall()
    {
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT * FROM productos");
        $pre->execute();
        $resultado = $pre->get_result();
        while ($y=mysqli_fetch_assoc($resultado)){
            $t[]=$y;
        }
        return $t;
    }
}