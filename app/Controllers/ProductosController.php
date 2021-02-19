<?php
require 'app/Models/Producto.php';
use Models\Producto;

class ProductosController
{
    function verificarRegistro(){
        $productos = new Producto();
        $proveedor=$_GET["Proveedor"];
        $nombre=$_FILES['image']['name'];
        $tamanio=$_FILES['image']['size'];
        $imagenSubida=fopen($_FILES['image']['tmp_name'],'r');
        $binarioImagen=fread($imagenSubida,$tamanio);
        $productos->nombre=$_POST["nombre"];
        $productos->categoria=$_POST["categoria"];
        $productos->tipo=$_POST["tipo"];
        $productos->artista=$_POST["artista"];
        $productos->precio=$_POST["precio"];
        $productos->stock=$_POST["stock"];
        $productos->anio=$_POST["anio"];
        $productos->proveedor=$proveedor;
        $productos->imagen= $binarioImagen;
        $productos->tipoi=$_FILES['image']['type'];
        $productos->crear();
        header("location:../../../repo/index.php?controller=Proveedor&action=registrarProducto&id=$proveedor");
    }

}