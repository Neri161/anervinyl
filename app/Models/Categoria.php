<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;

class Categoria extends Conexion
{
    public $Nombre;
    function __construct()
    {
        parent::__construct();
    }
}