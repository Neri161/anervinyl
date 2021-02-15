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

}