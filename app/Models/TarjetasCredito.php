<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;

class TarjetasCredito extends Conexion
{
    public $folio_Tarjeta;
    public $fechVencimiento;
    public $noSeguridad;
    public $compania;
    public $id_Usuario;

    function __construct()
    {
        parent::__construct();
    }
}