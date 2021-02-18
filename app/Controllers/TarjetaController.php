<?php
require 'app/Models/Tarjeta.php';
use Models\Tarjeta;

class TarjetaController
{
    function verificarRegistro(){
        function verificarRegistro(){
            $usario = new Usuario();
            $usario->nombre=$_POST["nombre"];
            $usario->apellidoPaterno=$_POST["paterno"];
            $usario->apellidoMaterno=$_POST["materno"];
            $usario->correo=$_POST["correo"];
            $usario->contrasenia=password_hash($_POST["contrasenia"],PASSWORD_DEFAULT,['cost' => 5]);
            $usario->foto=$binariosImagen;
            $usario->tipo='image/jpg';
            $usario->crear();
        }
    }
}