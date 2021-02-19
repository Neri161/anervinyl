<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;

class Producto extends Conexion
{
    public $nombre;
    public $categoria;
    public $tipo;
    public $artista;
    public $precio;
    public $stock;
    public $anio;
    public $proveedor;
    public $imagen;
    public $tipoi;
    function __construct()
    {
        parent::__construct();
    }
    //insertar producto
    function crear()
    {
        $this -> fecha_registro = date("Y-m-d");
        $pre = mysqli_prepare($this->conexion, "INSERT INTO productos (nombre,categoria,tipo,artista,precio,stock,anio,Proveedor,imagen,tipoi) VALUES(?,?,?,?,?,?,?,?,?,?)");
        $pre->bind_param("ssssssssss", $this->nombre, $this->categoria, $this->tipo, $this->artista, $this->precio, $this->stock,$this->anio,$this->proveedor,$this->imagen,$this->tipoi);
        $pre->execute();
    }
    //actualizar stock
    static function actualizarStock($id){
        $conexion = new  Conexion();
        $pre = mysqli_prepare($conexion->conexion, "UPDATE productos SET stock=stock-1 WHERE id=?");
        $pre->bind_param("s", $id);
        $pre->execute();
    }
}