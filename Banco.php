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
		if($_SESSION["PrivilegioUsuario"] == 1){
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
								<li><a href="CrearBanco.php">Crear banco</a></li>
								<li><a href="#">Lista de bancos</a></li>
								
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
							<li><a href="Listacheque.php">Lista de cheques</a></li>
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
							<li><a href="Crearcuenta.php">Crear cuenta</a></li>
							<li><a href="Cuenta.php">Listado de cuentas</a></li>
						  </ul>
						</li>
						
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Liberación de Cheques<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="LiberarCheque.php">Liberar un cheque</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Impresión de Cheques<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="Listacheque.php">Lista de cheques en cola</a></li>
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
				
				<div class="form-group">
						<div class="container">
							<div class="row text-center">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-6 ">
										<h1 class="text-center">Bancos registrados</h1>
										</div>
										<!-- Contenedor del ícono del Usuario -->
										<div class="col-xs-6 Icon">
											<!-- Icono de usuario -->
											<span class="glyphicon glyphicon-home"></span>
										</div>
									</div>
									<br>
									<div class="table-responsive">          
										<table class="table">
											<!-- Título -->
											<thead>
												<!-- Contenido -->
												<tr>
													<th>#</th>
													<th>Nombre</th>
													<th>Apellido</th>
													<th>Dirección</th>
													<th>No. de DPI</th>
													<th>No. de teléfono</th>
													<th>Fecha de Nacimiento</th>
													<th>Correo</th>
													<th>Nombre de inicio de sesión</th>
													<th>Privilegio</th>
												</tr>
											</thead>
											<!-- Cuerpo de la tabla -->
											<tbody>
												<!-- Contenido de la tabla -->
													<!-- Acá mostraremos los usuarios y seleccionaremos el que deseamos eliminar -->
													<?php
														// Primero hacemos la consulta en la tabla de persona
														include_once "Seguridad/conexion.php";								
														$VerPersonas = "SELECT * FROM persona";
														// Hacemos la consulta
														$resultado = $mysqli->query($VerPersonas);
															while ($row = mysqli_fetch_array($resultado)){
																// Obtenemos el nombre de usuario y privilegio de cada persona
																// Primero haremos la consulta
																$VerUsuario = "SELECT * FROM usuario WHERE idPersona='".$row['idPersona']."'";
																// Ejecutamos la consulta
																$ResultadoConsultaUsuario = $mysqli->query($VerUsuario);
																// Guardamos la consulta en un array
																$ResultadoConsulta = $ResultadoConsultaUsuario->fetch_assoc();
																// Nombre de usuario
																$NombreDeUsuario = $ResultadoConsulta['NombreUsuario'];
																// Privilegio de usuario
																$PrivilegioDeUsuario = $ResultadoConsulta['PrivilegioUsuario'];
																?>
																<tr>
																<td><span id="idPersonaEliminar<?php echo $row['idPersona'];?>"><?php echo $row['idPersona'] ?></span></td>
																<td><span id="NombreUsuario<?php echo $row['idPersona'];?>"><?php echo $row['NombrePersona'] ?></span></td>
																<td><span id="ApellidoUsuario<?php echo $row['idPersona'];?>"><?php echo $row['ApellidoPersona'] ?></span></td>
																<td><span id="DireccionUsuario<?php echo $row['idPersona'];?>"><?php echo $row['DireccionPersona'] ?></span></td>
																<td><span id="DPIUsuario<?php echo $row['idPersona'];?>"><?php echo $row['DPIPersona'] ?></span></td>
																<td><span id="TelefonoUsuario<?php echo $row['idPersona'];?>"><?php echo $row['TelefonoPersona'] ?></span></td>
																<td><span id="FechaNacUsuario<?php echo $row['idPersona'];?>"><?php echo $row['FechaNacPersona'] ?></span></td>
																<td><span id="CorreoUsuario<?php echo $row['idPersona'];?>"><?php echo $row['CorreoPersona'] ?></span></td>
																<td><?php echo $NombreDeUsuario ?></td>
																<td><span id="PrivilegioUsuario<?php echo $row['idPersona'];?>"><?php echo $PrivilegioDeUsuario ?></span></td>
																<td>
																	<!-- Edición -->
																	<div>
																		<div class="input-group input-group-lg">
																			<button type="button" class="btn btn-success EditarUsuario" value="<?php echo $row['idPersona']; ?>"><span class="glyphicon glyphicon-edit"></span></button>
																		</div>
																	</div>
																</td>
																<td>
																	<!-- Eliminación -->
																	<div>
																		<div class="input-group input-group-lg">
																			<button type="button" class="btn btn-danger EliminarUsuario" value="<?php echo $row['idPersona']; ?>"><span class="glyphicon glyphicon-minus"></span></button>
																		</div>
																	</div>
																</td>
																</tr>
													<?php
															}
													?>
				
				<?php
					include_once "Seguridad/conexion.php";
					if (isset($_POST['enviar'])) {
						// Obtenemos los valores de todos los campos y los almacenamos en variables
						$CodigoBanco=$_POST['CodigoBanco'];
						$NombreBanco=$_POST['NombreBanco'];
						$DireccionBanco=$_POST['DireccionBanco'];
						$CorreoBanco=$_POST['CorreoBanco'];
						$SitioWebBanco=$_POST['SitioWebBanco'];
						$TelefonoBanco=$_POST['TelefonoBanco'];
						
						// Creamos la consulta para la insersión de los datos
						$Consulta = "INSERT INTO Banco(CodigoBanco, NombreBanco, DireccionBanco, CorreoBanco, SitioWebBanco, TelefonoBanco) 
						Values('".$CodigoBanco."','".$NombreBanco."', '".$DireccionBanco."', '".$CorreoBanco."', '".$SitioWebBanco."', '".$TelefonoBanco."');";
							
						if(!$resultado = $mysqli->query($Consulta)){
							echo "Error: La ejecución de la consulta falló debido a: \n";
							echo "Query: " . $Consulta . "\n";
							echo "Error: " . $mysqli->errno . "\n";
							exit;
						}
						else{
						?>
						<div class="alert alert-success">Banco registrado</div>
						<?php
						}
					}
				?>
				
				
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
