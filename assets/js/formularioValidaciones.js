window.onload= function(){
	document.getElementById('email').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('email');
        
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(campo.value)) {
      valido.style.border = "2px solid green";
    } else {
      valido.style.border = "2px solid red";

    }
});
}

function validarLetras(e) { 
tecla = e.keyCode || e.which;
if(!tecla==8 || !/^[A-Za-z\s]/.test(String.fromCharCode(tecla))) return false;
}

function validarNumeros(e) { 
tecla = e.keyCode || e.which;
if(!tecla==8 || /^[A-Za-z\s]/.test(String.fromCharCode(tecla))) return false;
}




function validarDecimales(e, field) {

    key = e.keyCode ? e.keyCode : e.which;

    if (key === 8)

        return true;

    if (field.value !== "") {

        if ((field.value.indexOf(",")) > 0) {

            if (key > 47 && key < 58) {

                if (field.value === "")

                    return true;

                regexp = /[0-9]{1,10}[,][0-9]{1,3}$/;

                regexp = /[0-9]{2}$/;

                return !(regexp.test(field.value))

            }

        }

    }

    if (key > 47 && key < 58) {

        if (field.value === "")

            return true;

        regexp = /[0-9]{10}/;

        return !(regexp.test(field.value));

    }

    if (key === 44) {

        if (field.value === "")

            return false;

        regexp = /^[0-9]+$/;

        return regexp.test(field.value);

 

    }

 

    return false;

}

