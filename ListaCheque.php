<!--
	Módulo de creación de Usuarios
	Miércoles, 16 de mayo del 2018
	11:20 PM
	Gemis Daniel Guevara Villeda
	UMG - Morales Izabal
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Atenas, S. A.</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- se vincula al hoja de estilo para definir el aspecto del formulario de login -->
<link rel="stylesheet" type="text/css" href="text/estilo.css"> 

</head>
	<?php
		//include_once 'Seguridad/conexion.php';
		// Incluimos el archivo que valida si hay una sesión activa
		include_once "Seguridad/seguro.php";
		// Si en la sesión activa tiene privilegios de administrador puede ver el formulario
		if($_SESSION["PrivilegioUsuario"] == 1){
		?>
			<body>
				<nav class="navbar navbar-default">
				  <div class="container-fluid"> 
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
					  <a class="navbar-brand" href="principal.php">Administración</a></div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="defaultNavbar1">
					  <ul class="nav navbar-nav">
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bancos<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="CrearBanco.php">Crear banco</a></li>
								<li><a href="Banco.php">Lista de bancos</a></li>
							</ul>
						</li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cuentas<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="CrearCuenta.php">Crear cuenta</a></li>
							<li><a href="Cuenta.php">Listado de cuentas</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Chequeras<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="CrearChequera.php">Crear chequera</a></li>
							<li><a href="Chequera.php">Lista de chequeras</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cheques<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="Crearcheque.php">Crear cheque</a></li>
							<li><a href="Cheque.php">Lista de cheques</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Proveedores<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="CrearProveedor.php">Crear Proveedor</a></li>
							<li><a href="Proveedor.php">Lista de Proveedores</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Liberación de Cheques<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="LiberarCheque.php">Liberar un cheque</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Impresión de Cheques<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Lista de cheques en cola</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reportes<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gestión de Usuarios<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="CrearUsuario.php">Crear usuario</a></li>
							<li><a href="Usuario.php">Lista de Usuarios</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cerrar Sesión<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="Seguridad/logout.php">Cerrar Sesión</a></li>
						  </ul>
						</li>
					  </ul>
				</div>
					<!-- /.navbar-collapse --> 
				  </div>
				  <!-- /.container-fluid --> 
				</nav>

				<div class="container">
				  <div class="row text-center">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-6 col-xs-offset-3">
							<h1 class="text-center">Lista de cheques</h1>
							</div>
						</div>
					<div class="row">
						<div class="col-xs-7 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon5"><p>Tipo Banco</p></span>
								<input type="text" class="form-control" name="TipoBanco" placeholder="Seleccione el Banco" id="TipoBanco" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<p>Numero</p>
						
						<br>
						
				<!-- Lugar y fecha -->
					<div class="row">
						<div class="col-xs-7 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><p>Lugar y Fecha</p></span>
								<input type="text" class="form-control" name="LugarFecha" placeholder="Lugar y Fecha" id="NLugarFecha" aria-describedby="sizing-addon1" required>
							<br>
							</div>
						</div>
						
						<div class="row">
						<div class="col-xs-3 col-xs-offset+1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><p>Monto</p></span>
								<input type="text" class="form-control" name="Monto" placeholder="Monto" id="Monto" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					
					
								<!-- Pago a la orden -->
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><p>Pagar a la Orden de:</p></span>
								<input type="text" class="form-control" name="Pago" placeholder="Pagar a la orden de:" id="Pago" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					
					<!-- Registrar -->
					<div class="row">
						<div class="col-xs-12 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<div clss="btn-group">
									<button type="button" class="btn btn-primary">Registrar</button>
									<button type="button" class="btn btn-danger">Cancelar</button>
								</div>
							</div>
						</div>
					</div>
					<br>
				</div>
				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
				<script src="js/jquery-1.11.3.min.js"></script>

				<!-- Include all compiled plugins (below), or include individual files as needed --> 
				<script src="js/bootstrap.js"></script>
				<!-- Pie de página, se utilizará el mismo para todos. -->
				<footer>
					<hr>
					<div class="row">
						<div class="text-center col-md-6 col-md-offset-3">
							<h4>Atenas S. A.</h4>
							<p>Copyright &copy; 2018 &middot; All Rights Reserved &middot; <a href="http://www.umg.edu.gt/" >www.umg.edu.gt</a></p>
						</div>
					</div>
					<hr>
				</footer> 
			</body>
	<?php
		// De lo contrario lo redirigimos al inicio de sesión
			} 
			else{
				echo "usuario no valido";
				header("location:index.php");
			}
		?>
</html>
