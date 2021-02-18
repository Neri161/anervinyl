<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;

class Proveedor extends Conexion
{
    public $nombreProveedor;
    public $correo;
    public $contraseña;
    public $telefono;
    public $fecha_registro;
    function __construct()
    {
        parent::__construct();
    }
    function crear()
    {
        $pre = mysqli_prepare($this->conexion, "INSERT INTO proveedor (nombre_Proveedor,correo,contrasenia,telefono) VALUES(?,?,?,?)");
        $pre->bind_param("ssss", $this->nombreProveedor, $this->correo, $this->contraseña, $this->telefono);
        $pre->execute();
    }
    static function vereficarProveedor($correo)
    {
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT * FROM proveedor WHERE correo=?");
        $pre->bind_param("s", $correo);
        $pre->execute();
        $resultado = $pre->get_result();
        return $resultado->fetch_object();
    }
}