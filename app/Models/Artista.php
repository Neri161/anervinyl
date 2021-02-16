<?php
namespace Models;
require 'app/Models/Conexion.php';
use Models\Conexion;

class Artista extends Conexion
{
    public $nombre_Artistico;

    function __construct()
    {
        parent::__construct();
    }

}