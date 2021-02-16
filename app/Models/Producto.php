<?php
require 'app/Models/Conexion.php';
use Models\Conexion;
namespace Models;


class Producto extends Conexion
{
    public $id;
    public $nombre;
    public $categoria;
    public $tipo;
    public $artista;
    public $precio
    public $stock;
    public $anio;
    public $proveedor;
    public $imagen;
    function __construct()
    {
        parent::__construct();
    }
}