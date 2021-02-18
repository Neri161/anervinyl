<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;


class Admin extends Conexion
{
    public $correo;
    public $contrasenia;
    //hola
    function __construct()
    {
        parent::__construct();
    }
    static function vereficarAdmin($correo)
    {
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT * FROM administrador WHERE nombre=?");
        $pre->bind_param("s", $correo);
        $pre->execute();
        $resultado = $pre->get_result();
        return $resultado->fetch_object();
    }
    static function Proveedorall()
    {
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT * FROM proveedor");
        $pre->execute();
        $resultado = $pre->get_result();
        while ($y=mysqli_fetch_assoc($resultado)){
            $t[]=$y;
        }
        return $t;
    }
    static function Categoriaall()
    {
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT * FROM categorias");
        $pre->execute();
        $resultado = $pre->get_result();
        while ($y=mysqli_fetch_assoc($resultado)){
            $t[]=$y;
        }
        return $t;
    }
    static function Artistaall()
    {
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT * FROM artista");
        $pre->execute();
        $resultado = $pre->get_result();
        while ($y=mysqli_fetch_assoc($resultado)){
            $t[]=$y;
        }
        return $t;
    }
}