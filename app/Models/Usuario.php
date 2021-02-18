<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;

class Usuario extends Conexion
{
    public $nombre;
    public $apellidoPaterno;
    public $apellidoMaterno;
    public $correo;
    public $contrasenia;
    public $fecha_registro;
    public $foto;
    public $tipo;
    function __construct()
    {
        parent::__construct();
    }
    function crear()
    {
        $this -> fecha_registro = date("Y-m-d");
        $pre = mysqli_prepare($this->conexion, "INSERT INTO usuarios (nombre,apellido_paterno,apellido_materno, correo,contrasenia,fecha_registro,foto,tipo) VALUES(?,?,?,?,?,?,?,?)");
        $pre->bind_param("ssssssss", $this->nombre, $this->apellidoPaterno, $this->apellidoMaterno, $this->correo, $this->contrasenia, $this->fecha_registro,$this->foto,$this->tipo);
        $pre->execute();
    }
    static function vereficarUsuario($correo)
    {
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT * FROM usuarios WHERE correo=?");
        $pre->bind_param("s", $correo);
        $pre->execute();
        $resultado = $pre->get_result();
        return $resultado->fetch_object();
    }
    static function verificarCorreo($correo){
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT correo FROM usuarios WHERE correo=?");
        $pre->bind_param("s", $correo);
        $pre->execute();
        $resultado = $pre->get_result();
        return $resultado->fetch_object();
    }
    static function verificarDireccion($id){
        $conexion = new Conexion();
        $pre = mysqli_prepare($conexion->conexion,"SELECT * FROM direcciones WHERE id_usuario=?");
        $pre->bind_param("s", $id);
        $pre->execute();
        $resultado = $pre->get_result();
        return $resultado->fetch_object();
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