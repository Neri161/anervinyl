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

    function __construct()
    {
        parent::__construct();
    }
    function crear()
    {
        $this -> fecha_registro = date("Y-m-d");
        $pre = mysqli_prepare($this->conexion, "INSERT INTO usuarios (nombre,apellido_paterno,apellido_materno, correo,contrasenia,fecha_registro) VALUES(?,?,?,?,?,?)");
        $pre->bind_param("ssssss", $this->nombre, $this->apellidoPaterno, $this->apellidoMaterno, $this->correo, $this->contrasenia, $this->fecha_registro);
        $pre->execute();
    }
    function findByEmail($email){
        $pre = mysqli_prepare($this->conexion,"SELECT * FROM usuarios WHERE correo=?");
        $pre->bind_param("s",$email);
        $pre->execute();
        $re = $pre->get_result();
        //echo json_encode($re);
        return $re->fetch_object(Usuario::class);
    }

}