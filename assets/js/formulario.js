//(function(){
	var formulario = document.getElementById('login'),
		usuario = formulario.usuario,
		password = formulario.password,
		password2 = formulario.password2,
		error = document.getElementById('error');

	function validarUsuario(e){
		if (usuario.value == '' || usuario.value == null){
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor ingresa un usuario</li>';
			

			e.preventDefault();
		} else {
			error.style.display = 'none';
		}
	}

	function validarPassword(e){
		if (password.value == '' || password.value == null){
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor ingresa una contraseña</li>';
			

			e.preventDefault();
		} else {
			error.style.display = 'none';
		}
	}

	function validarPassword2(e){
		if (password2.value == '' || password2.value == null){
			error.style.display = 'block';
			error.innerHTML += '<li>La contraseña ingresada no coincide </li>';

			e.preventDefault();
		} else {
			error.style.display = 'none';
		}
	}

	function validarTerminos(e){
		if (terminos.checked == false){
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor acepta los terminos y condiciones</li>';
			console.log('Por favor completa el terminos');

			e.preventDefault();
		} else {
			error.style.display = 'none';
		}
	}

	// Funcion encargada de validar todos los campos
	function validarForm(e){
		// Reiniciamos el error para que inicie sin mensaje.
		error.innerHTML = '';

		validarNombre(e);
		validarCorreo(e);
		validarSexo(e);
		validarTerminos(e);
	}

	formulario.addEventListener('submit', validarForm);
//}())