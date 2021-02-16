<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;

class Envio extends Conexion
{
    
    public $id_Producto;
    public $estatus;
    
    function __construct()
    {
        parent::__construct();
    }
}