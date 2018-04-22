<!--
	Módulo de creación de Bancos
	Jueves, 19 de abril el 2018
	11:35 PM
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
		if($_SESSION["PrivilegioUsuario"] == 'administrador'){
		?>
			<body>
				<nav class="navbar navbar-default">
				  <div class="container-fluid"> 
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
					  <a class="navbar-brand" href="#">Administración</a></div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="defaultNavbar1">
					  <ul class="nav navbar-nav">
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bancos<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Crear banco</a></li>
								<li><a href="#">Eliminar banco</a></li>
								<li><a href="#">Editar banco</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Chequeras<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Crear chequera</a></li>
							<li><a href="#">Mantenimiento de chequeras</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administración de Niveles<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						  </ul>
						</li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cuentas<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Cuentas</a></li>
							<li><a href="#">Mantenimiento de Cuentas</a></li>
						  </ul>
						</li>
						
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Liberación de Cheques<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Liberar un cheque</a></li>
							<li><a href="#">Cheques en cola</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Impresión de Cheques<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Ceques en cola</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reportes<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gestión de Usuarios<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="CrearUsuario.php">Crear usuario</a></li>
							<li><a href="#">Eliminar Usuario</a></li>
							<li><a href="#">Editar usuario</a></li>
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
							<h1 class="text-center">Registro de banco</h1>
							</div>
						</div>
						<!-- Contenedor del ícono -->
						
							<div class="Icon">
								<!-- Icono de home -->
								<span class="glyphicon glyphicon-home"></span>
							</div>
						
					<!-- Nombre del banco -->
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-home"></i></span>
								<input type="text" class="form-control" name="NombreBanco" placeholder="Nombre" id="NombreBanco" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					<!-- Teléfono del usuario -->
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-earphone"></i></span>
								<input type="tel" class="form-control" name="TelefonoBanco" placeholder="Teléfono" id="TelefonoBanco" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					<!-- Dirección del usuario -->
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-home"></i></span>
								<input type="text" class="form-control" name="DireccionBanco" placeholder="Dirección" id="DireccionBanco" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					<!-- Resgistrar -->
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
