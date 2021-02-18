<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;

class Direcciones extends Conexion
{
    public $CP;
    public $calle;
    public $no_Interior;
    public $no_Exterior;
    public $telefono;
    public $referencia;
    public $id_Usuario;

    function __construct()
    {
        parent::__construct();
    }
}