<?php
require 'app/Models/Artista.php';
use Models\Artista;

class ArtistaController
{
    function verificarRegistro(){
        $artista = new Artista();
        $artista->nombre_Artistico=$_POST["nombre"];
        $artista->crear();
        header("location:../../../repo/index.php?controller=Admin&action=registroArtista");
    }

}