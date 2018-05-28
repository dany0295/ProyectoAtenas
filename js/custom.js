// Eliminación de usuario de la pantalla de usuarios
$(document).ready(function(){
	$(document).on('click', '.EliminarUsuario', function(){
		var id=$(this).val();
		var Nombres=$('#NombreUsuario'+id).text();
		var Apellidos=$('#ApellidoUsuario'+id).text();
		var Usuario=$('#idPersonaEliminar'+id).text();
	
		$('#frmEliminar').modal('show');
		document.querySelector('#NombresApellidos').innerText = Nombres + " " + Apellidos;
		$('#idAEliminar').val(Usuario);
	});
});

// Edición de usuario de la pantalla de usuario
$(document).ready(function(){
	$(document).on('click', '.EditarUsuario', function(){
		var id=$(this).val();
		var PersonaEliminar=$('#idPersonaEliminar'+id).text();
		var NombreUsuario=$('#NombreUsuario'+id).text();
		var ApellidoUsuario=$('#ApellidoUsuario'+id).text();
		var DireccionUsuario=$('#DireccionUsuario'+id).text();
		var DPIUsuario=$('#DPIUsuario'+id).text();
		var TelefonoUsuario=$('#TelefonoUsuario'+id).text();
		var FechaNacUsuario=$('#FechaNacUsuario'+id).text();
		var CorreoUsuario=$('#CorreoUsuario'+id).text();
		var PrivilegioUsuario=$('#PrivilegioUsuario'+id).text();
	
		$('#frmEditar').modal('show');
		$('#idEditar').val(PersonaEliminar);
		$('#NombreEditar').val(NombreUsuario);
		$('#ApellidoEditar').val(ApellidoUsuario);
		$('#DireccionEditar').val(DireccionUsuario);
		$('#DPIEditar').val(DPIUsuario);
		$('#TelefonoEditar').val(TelefonoUsuario);
		$('#FechaNacEditar').val(FechaNacUsuario);
		$('#CorreoEditar').val(CorreoUsuario);
		$('#PrivilegioEditar').val(PrivilegioUsuario);
	});
});

// Edición de números de cuenta de la pantalla de cuentas
$(document).ready(function(){
	$(document).on('click', '.EditarCuenta', function(){
		var id=$(this).val();
		var idCuenta=$('#idCuenta'+id).text();
		var CodigoCuenta=$('#CodigoCuenta'+id).text();
		var NumeroCuenta=$('#NumeroCuenta'+id).text();
		var NombreCuenta=$('#NombreCuenta'+id).text();
		var TipoCuenta=$('#TipoCuenta'+id).text();
		var SaldoCuenta=$('#SaldoCuenta'+id).text();
		var BancoCuenta=$('#NombreBanco'+id).text();
	
		$('#frmEditarCuena').modal('show');
		$('#idCuentaEditar').val(idCuenta);
		$('#CodigoCuentaEditar').val(CodigoCuenta);
		$('#NumeroCuentaEditar').val(NumeroCuenta);
		$('#NombreCuentaEditar').val(NombreCuenta);
		$('#TipoCuentaEditar').val(TipoCuenta);
		$('#SaldoCuentaEditar').val(SaldoCuenta);
		$('#BancoCuentaEditar').val(BancoCuenta);
	});
});

// Eliminación de cuenta de la pantalla de cuentas
$(document).ready(function(){
	$(document).on('click', '.EliminarCuenta', function(){
		var id=$(this).val();
		var NombreCuenta=$('#NombreCuenta'+id).text();
		var Usuario=$('#idCuenta'+id).text();
	
		$('#frmEliminarCuenta').modal('show');
		document.querySelector('#NombreCuenta').innerText = NombreCuenta;
		$('#idCuentaAEliminar').val(Usuario);
	});
});