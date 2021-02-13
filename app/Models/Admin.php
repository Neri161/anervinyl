<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;
namespace Models;


class Admin extends Conexion
{
    public $correo;
    public $contrasenia;
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