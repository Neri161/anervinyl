$(document).ready(function (){
    $("#guardar").click(function (){
        var nombre = $("#nombre").val();
        var apellidopaterno = $("#paterno").val();
        var apellidomaterno = $("#materno").val();
        var correo=$("#correo").val();
        var pass1=$("#contrasenia").val();
        var pass2=$("#contrasenia-2").val();

        if (nombre=="" || nombre==null){
            alert("Ingresa el Nombre");
            $("#nombre").focus();
            return false;
        }
        if (apellidopaterno=="" || apellidopaterno==null){
            alert("Ingresa el Apellido Paterno");
            $("#apellido-paterno").focus();
            return false;
        }
        if (apellidomaterno=="" || apellidomaterno==null){
            alert("Ingresa el Apellido Materno");
            $("#apellido-Materno").focus();
            return false;
        }
        if (direccion=="" || direccion==null){
            alert("Ingresa la Direccion");
            $("#direccion").focus();
            return false;
        }
        if (cp=="" || cp==null){
            alert("Ingresa el cp");
            $("#cp").focus();
            return false;
        }
        if (fecha=="" || fecha==null){
            alert("Ingresa la fecha");
            $("#fecha").focus();
            return false;
        }
        if (descripcion=="" || descripcion==null){
            alert("Ingresa la descripcion");
            $("#descripcion").focus();
            return false;
        }
        if (telefono=="" || telefono==null){
            alert("Ingresa el telefono");
            $("#tel").focus();
            return false;
        }
        if (correo=="" || correo==null){
            alert("Ingresa el correo");
            $("#correo").focus();
            return false;
        }
        if ((pass1=="" || pass1==null) && (pass2=="" || pass2==null)){
            alert("ingresa la contraseña");
            $("#password").focus();
            return false;
        }
        if (pass1 != pass2){
            alert("las contraseñas no son iguales");
            $("#password").focus();
            return false;
        }
    });
});