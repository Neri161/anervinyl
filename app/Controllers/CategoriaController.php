<?php
require 'app/Models/Categoria.php';
use Models\Categoria;

class CategoriaController
{
     public function __construct()
     {
     }
    function verificarRegistro(){
        $categoria = new Categoria();
        $categoria->Nombre=$_POST["nombre"];
        $categoria->crear();
        header("location:../../../repo/index.php?controller=Admin&action=registroCategoria");
    }
}