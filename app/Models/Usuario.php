<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;
class Usuario extends Conexion
{
    public $id;
    public $nombre;
    public $apellidoPaterno;
    public $apellidoMaterno;
    public $correo;
    public $fechaNacimiento;
    public $contrasenia;
    public $fecha_registro;
    public $telefono;
    function __construct()
    {
        parent::__construct();
    }
    function crear()
    {
        $this -> fecha_registro = date("Y-m-d");
        $pre = mysqli_prepare($this->conexion, "INSERT INTO usuarios (nombre,apellido_paterno,apellido_materno, cp, correo,fecha_nacimiento,telefono,fecha_registro) VALUES(?,?,?,?,?,?,?,?)");
        $pre->bind_param("ssssssss", $this->nombre, $this->apellidoPaterno, $this->apellidoMaterno, $this->correo, $this->fechaNacimiento, $this->contrasenia, $this->telefono,$this->fecha_registro);
        $pre->execute();
    }

}