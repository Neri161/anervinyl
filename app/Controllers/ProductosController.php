<?php
require 'app/Models/Producto.php';
use Models\Producto;

class ProductosController
{
    function verificarProducto(){
        $productos = new Productos();
        $productos->nombre=$_POST["nombre"];
        $productos->categoria=$_POST["categoria"];
        $productos->tipo=$_POST["tipo"];
        $productos->artista=$_POST["artista"];
        $productos->precio=$_POST["precio"];
        $productos->stock=$_POST["stock"];
        $productos->anio=$_POST["anio"];
        $productos->proveedor=$_POST["Proveedor"];
        $productos->imagen=$_POST["imagen"];
 
        $productos->crear();
        header("location:../../../repo/index.php?controller=Admin&action=registroProveedor");
    }
}