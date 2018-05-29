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

// Mostramos la pantalla modal para agregar puesto
$(document).ready(function(){
	$(document).on('click', '.AgregarPuesto', function(){
		$('#ModalAgregarPuesto').modal('show');
	});
});

// Mostramos la pantalla modal para agregar rol
$(document).ready(function(){
	$(document).on('click', '.AgregarRol', function(){
		$('#ModalAgregarRol').modal('show');
	});
});

// Mostramos la pantalla modal para agregar Rango
$(document).ready(function(){
	$(document).on('click', '.AgregarRango', function(){
		$('#ModalAgregarRango').modal('show');
	});
});

// Edición de números de banco de la pantalla de bancos
$(document).ready(function(){
	$(document).on('click', '.EditarBanco', function(){
		var id=$(this).val();
		var idBanco=$('#idBanco'+id).text();
		var CodigoBanco=$('#CodigoBanco'+id).text();
		var NombreBanco=$('#NombreBanco'+id).text();
		var DireccionBanco=$('#DireccionBanco'+id).text();
		var CorreoBanco=$('#CorreoBanco'+id).text();
		var SitioWebBanco=$('#SitioWebBanco'+id).text();
		var TelefonoBanco=$('#TelefonoBanco'+id).text();
	
		$('#frmEditarBanco').modal('show');
		$('#idBancoEditar').val(idBanco);
		$('#CodigoBancoEditar').val(CodigoBanco);
		$('#NombreBancoEditar').val(NombreBanco);
		$('#DireccionBancoEditar').val(DireccionBanco);
		$('#CorreoBancoEditar').val(CorreoBanco);
		$('#SitioWebBancoEditar').val(SitioWebBanco);
		$('#TelefonoBancoEditar').val(TelefonoBanco);
	});
});

// Eliminación de banco de la pantalla de bancos
$(document).ready(function(){
	$(document).on('click', '.EliminarBanco', function(){
		var id=$(this).val();
		var NombreBanco=$('#NombreBanco'+id).text();
		var Usuario=$('#idBanco'+id).text();
	
		$('#frmEliminarBanco').modal('show');
		document.querySelector('#NombreBanco').innerText = NombreBanco;
		$('#idBancoAEliminar').val(Usuario);
	});
});

// Edición de números de chequera de la pantalla de chequeras
$(document).ready(function(){
	$(document).on('click', '.EditarChequera', function(){
		var id=$(this).val();
		var idChequera=$('#idChequera'+id).text();
		var CodigoChequera=$('#CodigoChequera'+id).text();
		var NombreChequera=$('#NombreChequera'+id).text();
		var RangoMinimoChequera=$('#RangoMiminoChequera'+id).text();
		var RangoMaximoChequera=$('#RangoMaximoChequera'+id).text();
	
		$('#frmEditarChequera').modal('show');
		$('#idChequeraEditar').val(idChequera);
		$('#CodigoChequeraEditar').val(CodigoChequera);
		$('#NombreChequeraEditar').val(NombreChequera);
		$('#RangoMinimoChequeraEditar').val(RangoMinimoChequera);
		$('#RangoMaximochequeraEditar').val(RangoMaximoChequera);
	});
});

// Eliminación de cuenta de la pantalla de cuentas
$(document).ready(function(){
	$(document).on('click', '.EliminarChequera', function(){
		var id=$(this).val();
		var NombreChequera=$('#NombreChequera'+id).text();
		var Usuario=$('#idChequera'+id).text();
	
		$('#frmEliminarChequera').modal('show');
		document.querySelector('#NombreChequera').innerText = NombreChequera;
		$('#idChequeraAEliminar').val(Usuario);
	});
});