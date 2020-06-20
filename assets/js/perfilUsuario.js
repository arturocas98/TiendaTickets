$(document).ready(function(){


    rellenarDatosPersonales(usuario);

    $("#formularioDatosPersonales").on('submit', function(e){
        $("#cedula").attr("disabled",true);
        $("#nombres").attr("disabled",true);
        $("#apellidos").attr("disabled",true);
        $("#correo").attr("disabled",true);
        $("#telefono").attr("disabled",true);
        $("#direccion").attr("disabled",true);
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'guardarPerfilDatosPersonales.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(resp){
                alert("Guardado Exitosamente.");
            }
        });
        return false;
    });



function rellenarDatosPersonales(user){
    //alert(user);
    $.ajax({
        data: { user },
        url: 'recibirDatosPersonales.php',
        type: 'POST',
        success: function(resp){
            
            let users = JSON.parse(resp);
                    
            users.forEach(usr => {
                console.log(usr.cedula);
                /*console.log(art.nombre);*/
                $("#cedula").val(usr.cedula);  
                $("#nombres").val(usr.nombres);
                $("#apellidos").val(usr.apellidos);
                $("#correo").val(usr.correo);
                $("#telefono").val(usr.telefono);
                $("#direccion").val(usr.direccion);
                $("#nombreU").val(usr.usuario);
                $("#contraU").val(usr.clave);
                if(usr.archivo != null)
                    $("#foto_usuario").attr("src", "../../assets/img/"+usr.archivo);
                else 
                    $("#foto_usuario").attr("src", "../../assets/img/usuario.png");
            });                
        }
    });
}
    $("#bt_actualizar").click(function(event) {
        $("#cedula").attr("disabled",false);
        $("#nombres").attr("disabled",false);
        $("#apellidos").attr("disabled",false);
        $("#correo").attr("disabled",false);
        $("#telefono").attr("disabled",false);
        $("#direccion").attr("disabled",false);

            
  
    });
    
    $("#bt_actualizar").dblclick(function(event) {
        $("#cedula").attr("disabled",true);
        $("#nombres").attr("disabled",true);
        $("#apellidos").attr("disabled",true);
        $("#correo").attr("disabled",true);
        $("#telefono").attr("disabled",true);
        $("#direccion").attr("disabled",true);
    });  

    $("#bt_actualizar2").click(function(event) {
        $("#nombreU").attr("disabled",false);
    });

    $("#bt_actualizar2").dblclick(function(event) {
        $("#nombreU").attr("disabled",true);
    });

/*
    $("#btnGuardar").click(function(){
        var parametros = $("#formularioDatosPersonales").serialize();
        //alert(parametros);
        $.ajax({
            data: parametros,
            url: 'guardarPerfilDatosPersonales.php',
            type: 'POST',
            success: function(resp){
                alert(resp);
                if(resp){
                    alert("Datos Ingresados con exito");
                }else{
                    alert("Problemas con el servidor");
                }
            }
        });
        return false;
    }); */

    $("#btnGuardar2").click(function(){
        var parametros = $("#formularioCuenta").serialize();
        $("#contraCambiar").val('');
        $("#contraConfirmar").val('');
        //alert(parametros);
        $.ajax({
            data: parametros,
            url: 'guardarDatosCuenta.php',
            type: 'POST',
            success: function(resp){
                //alert(resp);
                if(resp){
                    alert("Datos Ingresados con exito");
                }else{
                    alert("Problemas con el servidor");
                }
            }
        });
        return false;
    }); 
       
});