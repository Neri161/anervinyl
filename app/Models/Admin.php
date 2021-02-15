<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;


class Admin extends Conexion
{
    public $correo;
    public $contrasenia;
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
}