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
    function crear()
    {
        $pre = mysqli_prepare($this->conexion, "INSERT INTO artista (nombre_Artistico) VALUES(?)");
        $pre->bind_param("s", $this->nombre_Artistico);
        $pre->execute();

    }
}