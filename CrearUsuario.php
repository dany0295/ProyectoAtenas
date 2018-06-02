<!--
	Módulo de creación de Usuarios
	Martes, 17 de abril el 2018
	11:30 PM
	Gemis Daniel Guevara Villeda
	UMG - Morales Izabal
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="imagenes/IconoAtenas.ico">
<title>Atenas, S. A.</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- se vincula al hoja de estilo para definir el aspecto del formulario de login -->
<link rel="stylesheet" type="text/css" href="css/estilo.css"> 

</head>
	<?php
		//include_once 'Seguridad/conexion.php';
		// Incluimos el archivo que valida si hay una sesión activa
		include_once "Seguridad/seguro.php";
		// Primero hacemos la consulta en la tabla de persona
		include_once "Seguridad/conexion.php";	
		// Si en la sesión activa tiene privilegios de administrador puede ver el formulario
		if($_SESSION["PrivilegioUsuario"] == 1){
			// Guardamos el nombre del usuario en una variable
			$NombreUsuario =$_SESSION["NombreUsuario"];
		?>
			<body>
				<nav class="navbar navbar-default">
				  <div class="container-fluid"> 
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
					  <a class="navbar-brand" href="principal.php"><img src="imagenes/logo.png" class="img-circle" width="30" height="30"></a></div>
					<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="defaultNavbar1">
							<ul class="nav navbar-nav">
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bancos<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="CrearBanco.php">Crear banco</a></li>
										<li><a href="Banco.php">Lista de bancos</a></li>	
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cuentas<span class="caret"></span></a>
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
										<li><a href="ImpresionCheque.php">Impresión de cheques</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gestión de Usuarios<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">Crear usuario</a></li>
										<li><a href="Usuario.php">Lista de Usuarios</a></li>
									</ul>
								</li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li class="dropdown">
										<!-- Acá mostramos el nombre del usuario -->
										<a href="#" class="dropdown-toggle negrita" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $NombreUsuario; ?></a>
										<!-- <span class="caret"></span> Agrega un indicador de flecha abajo -->
										<ul class="dropdown-menu">
											<li><a href="#"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>Perfil</a></li>
											<!--<li><a href="#"><i class="fa fa-cog" aria-hidden="true">&nbsp;</i>Cuenta</a></li>
											<li><a href="#"><i class="fa fa-question-circle" aria-hidden="true">&nbsp;</i>Soporte</a></li>-->
											<li role="separator" class="divider"></li>
											<li><a href="Seguridad/logout.php"><i class="fa fa-sign-out" aria-hidden="true">&nbsp;</i>Cerrar Sesión</a></li>
										</ul>
								</ul>
							</ul>
						</div>
						<!-- /.navbar-collapse --> 
					</div>
				  <!-- /.container-fluid --> 
				</nav>

				<div class="form-group">
					<form name="CrearUsuario" action="CrearUsuario.php" method="post">
						<div class="container">
							<div class="row text-center">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-6 col-xs-offset-3">
										<h1 class="text-center">Creación de usuario</h1>
										</div>
									</div>
									<!-- Contenedor del ícono del Usuario -->
									
										<div class="Icon">
											<!-- Icono de usuario -->
											<span class="glyphicon glyphicon-user"></span>
										</div>
									<!-- Nombre del usuario -->
									<div class="row">
										<div class="col-xs-5 col-xs-offset-1">
											<div class="input-group input-group-lg">
												<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
												<input type="text" class="form-control" name="NombreUsuario" placeholder="Nombre" id="NombreUsuario" aria-describedby="sizing-addon1" required>
											</div>
										</div>
										<!-- Nombre de inicio de sesión del usuario -->
										<div class="col-xs-5">
											<div class="input-group input-group-lg">
												<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
												<input type="text" class="form-control" name="NombreInicioSesionUsuario" placeholder="Nombre de inicio de sesión" id="NombreInicioSesionUsuario" aria-describedby="sizing-addon1" required>
											</div>
										</div>
									</div>
									<br>
									<!-- Apellido del usuario -->
									<div class="row">
										<div class="col-xs-5 col-xs-offset-1">
											<div class="input-group input-group-lg">
												<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
												<input type="text" class="form-control" name="ApellidoUsuario" placeholder="Apellido" id="ApellidoUsuario" aria-describedby="sizing-addon1" required>
											</div>
										</div>
										<!-- Contraseña del usuario -->
										<div class="col-xs-5">
											<div class="input-group input-group-lg">
												<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
												<input type="password" class="form-control" name="PasswordUsuario" placeholder="Contraseña" id="PasswordUsuario" aria-describedby="sizing-addon1" required>
											</div>
										</div>
									</div>
									<br>
									<!-- Teléfono del usuario -->
									<div class="row">
										<div class="col-xs-5 col-xs-offset-1">
											<div class="input-group input-group-lg">
												<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-earphone"></i></span>
												<input type="tel" class="form-control" name="TelefonoUsuario" placeholder="Teléfono" id="TelefonoUsuario" aria-describedby="sizing-addon1" required>
											</div>
										</div>
									<!-- Repetición de contraseña del usuario -->
										<div class="col-xs-5">
											<div class="input-group input-group-lg">
												<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
												<input type="password" class="form-control" name="RePasswordUsuario" placeholder="Ingrese nuevamente la contraseña" id="RePasswordUsuario" aria-describedby="sizing-addon1" required>
											</div>
										</div>
									</div>
									<br>
									<!-- Dirección del usuario -->
									<div class="row">
										<div class="col-xs-5 col-xs-offset-1">
											<div class="input-group input-group-lg">
												<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-home"></i></span>
												<input type="text" class="form-control" name="DireccionUsuario" placeholder="Dirección" id="DireccionUsuario" aria-describedby="sizing-addon1" required>
											</div>
										</div>
										<!-- Puesto del usuario -->
										<div class="row">
											<div class="col-xs-4">
												<div class="input-group input-group-lg">
													<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
													<select class="form-control" name="PuestoUsuario" id="PuestoUsuario">
													<option value="" disabled selected>Puesto</option>
														<!-- Contenido de la tabla -->
														<!-- Acá mostraremos los puestos que existen en la base de datos -->
														<?php							
															$VerPuestos = "SELECT * FROM puesto";
															// Hacemos la consulta
															$resultado = $mysqli->query($VerPuestos);			
																while ($row = mysqli_fetch_array($resultado)){
																	?>
																	<option value="<?php echo $row['idPuesto'];?>"><?php echo $row['NombrePuesto'] ?></option>
														<?php
																}
														?>
													</select>
												</div>
											</div>
										<!-- Button trigger modal -->
										<div class="col-xs-1">
											<div class="input-group input-group-lg">
												<button type="button" class="btn btn-success btn-lg AgregarPuesto" value="" data-toggle="modal" data-target="#ModalAgregarPuesto">+</button>
											</div>
										</div>
										</div>
									</div>
									<br> 
									<!-- Correo del usuario -->
									<div class="row">
										<div class="col-xs-5 col-xs-offset-1">
											<div class="input-group input-group-lg">
												<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
												<input type="email" class="form-control" name="CorreoUsuario" placeholder="Correo" id="CorreoUsuario" aria-describedby="sizing-addon1" required>
											</div>
										</div>
										<!-- Rol del usuario -->
										<div class="row">
											<div class="col-xs-4">
												<div class="input-group input-group-lg">
													<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
													<select class="form-control" name="RolUsuario" id="RolUsuario">
														<option value="" disabled selected>Selecciona el rol del usuario</option>
															<!-- Contenido de la tabla -->
															<!-- Acá mostraremos los roles que están en la base de datos -->
															<?php							
																$VerRoles = "SELECT * FROM rol";
																// Hacemos la consulta
																$resultado = $mysqli->query($VerRoles);			
																	while ($row = mysqli_fetch_array($resultado)){
																		?>
																		<option value="<?php echo $row['idRol'];?>"><?php echo $row['NombreRol'] ?></option>
															<?php
																	}
															?>
													</select>
												</div>
											</div>
											<!-- Button trigger modal -->
											<div class="col-xs-1">
												<div class="input-group input-group-lg">
													<button type="button" class="btn btn-success btn-lg AgregarRol" data-toggle="modal" data-target="#ModalAgregarRol">+</button>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-xs-4 col-xs-offset-1">
											<!-- Rango de cheques que creará el usuario -->
												<div class="input-group input-group-lg">
													<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
													<select class="form-control" name="RangoUsuario" id="RangoUsuario">
													<option value="" disabled selected>Selecciona el rango monetario con que podrá operar el usuario</option>
														<!-- Contenido de la tabla -->
														<!-- Acá mostraremos los rango que existen en la base de datos -->
														<?php							
															$VerRangos = "SELECT * FROM rango";
															// Hacemos la consulta
															$resultado = $mysqli->query($VerRangos);			
																while ($row = mysqli_fetch_array($resultado)){
																	?>
																	<option value="<?php echo $row['idRango'];?>"><?php echo $row['RangoMinimo']?> - <?php echo $row['RangoMaximo']?></option>
														<?php
																}
														?>
													</select>
												</div>
											</div>
											<!-- Button trigger modal -->
											<div class="col-xs-1">
												<div class="input-group input-group-lg">
													<button type="button" class="btn btn-success btn-lg AgregarRango" data-toggle="modal" data-target="#ModalAgregarRango">+</button>
												</div>
											</div>
									</div>
									<br>
									<!-- Registrar -->
									<div class="row">
										<div class="col-xs-12 col-xs-offset-1">
											<div class="input-group input-group-lg">
												<div clss="btn-group">
													<input type="submit" name="AgregarUsuario" class="btn btn-success" value="Crear usuario">
													<button type="button" class="btn btn-danger">Cancelar</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				
				<!-- Modal para crear puesto -->
				<div class="modal fade slide left" id="ModalAgregarPuesto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

						</button>
						<h1 class="modal-title" id="myModalLabel">Crear nuevo puesto</h1>

					  </div>
					  <div class="modal-body">
						<p class="lead">Ingrese los datos</p>
						<form method="post" id="myForm">
						  <div class="form-group">
							<label for="name">Codigo del puesto</label>
							<input type="text" name="CodigoPuesto" id="CodigoPuesto" class="form-control" placeholder="Codigo de puesto" value="" required/>
						  </div>
						  <div class="form-group">
							<label for="email">Nombre del puesto</label>
							<input type="text" name="NombreNuevoPuesto" id="NombreNuevoPuesto" class="form-control" placeholder="Nombre del puesto" value="" required/>
						  </div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
						<input type="submit" name="AgregarPuesto" class="btn btn-success" value="Registrar puesto">
					  </div>
					</form>
					</div>
				  </div>
				</div>
				
				<!-- Modal para crear Rol -->
				<div class="modal fade slide left" id="ModalAgregarRol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

						</button>
						<h1 class="modal-title" id="myModalLabel">Crear nuevo rol</h1>

					  </div>
					  <div class="modal-body">
						<p class="lead">Ingrese los datos</p>
						<form method="post" id="myForm">
						  <div class="form-group">
							<label for="name">Nombre del Rol</label>
							<input type="text" name="NombreRol" id="NombreRol" class="form-control" placeholder="Nombre del rol" value="" required/>
						  </div>
						  <div class="form-group">
							<label for="email">Permisos</label>
							<select class="form-control" name="PermisoRol" id="PermisoRol">
							<option value="" disabled selected>Selecciona permiso que tendrá este rol</option>
								<!-- Contenido de la tabla -->
								<!-- Acá mostraremos los permisos que existen en la base de datos -->
								<?php							
									$VerRangos = "SELECT * FROM permiso";
									// Hacemos la consulta
									$resultado = $mysqli->query($VerRangos);			
										while ($row = mysqli_fetch_array($resultado)){
											?>
											<option value="<?php echo $row['idPermiso'];?>"><?php echo $row['TipoPermiso']?></option>
								<?php
										}
								?>
							</select>
						  </div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
						<input type="submit" name="AgregarRol" class="btn btn-success" value="Registrar rol">
					  </div>
					</form>
					</div>
				  </div>
				</div>
				
				<!-- Modal para crear un nuevo rango -->
				<div class="modal fade slide left" id="ModalAgregarRango" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

						</button>
						<h1 class="modal-title" id="myModalLabel">Crear nuevo rango</h1>

					  </div>
					  <div class="modal-body">
						<p class="lead">Ingrese los datos</p>
						<form method="post" id="myForm">
						  <div class="form-group">
							<label for="email">Rango mínimo</label>
							<input type="number" name="RangoMinimo" id="RangoMinimo" class="form-control" placeholder="Rango minimo" value="" required/>
						  </div>
						  <div class="form-group">
							<label for="email">Rango máximo</label>
							<input type="number" name="RangoMaximo" id="RangoMaximo" class="form-control" placeholder="Rango maximo" value="" required/>
						  </div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
						<input type="submit" name="AgregarRango" class="btn btn-success" value="Registrar rango">
					  </div>
					</form>
					</div>
				  </div>
				</div>
				
				<!--  -->
				<?php
					// Código que recibe la información para agregar un nuevo Puesto
					if (isset($_POST['AgregarPuesto'])) {
						// Guardamos la información en variables
						$NombrePuesto = $_POST['NombreNuevoPuesto'];
						// Preparamos la consulta
						$query = "INSERT INTO puesto(NombrePuesto)
											  VALUES('".$NombrePuesto."');";
						// Ejecutamos la consulta
						if(!$resultado = $mysqli->query($query)){
    					echo "Error: La ejecución de la consulta falló debido a: \n";
    					echo "Query: " . $query . "\n";
    					echo "Errno: " . $mysqli->errno . "\n";
    					echo "Error: " . $mysqli->error . "\n";
    					exit;
						}
						else{
							?>
    						<div class="form-group">
								<form name="Alerta">
									<div class="container">
										<div class="row text-center">
											<div class="container-fluid">
												<div class="row">
													<div class="col-xs-10 col-xs-offset-1">
														<div class="alert alert-success">Puesto registrado</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<?php
							// Recargamos la página
    						echo "<meta http-equiv=\"refresh\" content=\"0;URL=CrearUsuario.php\">"; 
    					}
					}
					// Termina código para agregar puesto
					// Código que recibe la información para agregar un nuevo rol
					if (isset($_POST['AgregarRol'])) {
						// Guardamos la información en variables
						$NombreRol = $_POST['NombreRol'];
						$PermisoRol = $_POST['PermisoRol'];
						// Preparamos la consulta
						$query = "INSERT INTO rol(NombreRol, idPermiso)
											  VALUES('".$NombreRol."', ".$PermisoRol.");";
						// Ejecutamos la consulta
						if(!$resultado = $mysqli->query($query)){
    					echo "Error: La ejecución de la consulta falló debido a: \n";
    					echo "Query: " . $query . "\n";
    					echo "Errno: " . $mysqli->errno . "\n";
    					echo "Error: " . $mysqli->error . "\n";
    					exit;
						}
						else{
							?>
    						<div class="form-group">
								<form name="Alerta">
									<div class="container">
										<div class="row text-center">
											<div class="container-fluid">
												<div class="row">
													<div class="col-xs-10 col-xs-offset-1">
														<div class="alert alert-success">Rol registrado</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<?php
							// Recargamos la página
    						echo "<meta http-equiv=\"refresh\" content=\"0;URL=CrearUsuario.php\">"; 
    					}
					}
					// Termina código para agregar rol
					// Código que recibe la información para agregar un nuevo rango
					if (isset($_POST['AgregarRango'])) {
						// Guardamos la información en variables
						$RangoMinimo = $_POST['RangoMinimo'];
						$RangoMaximo = $_POST['RangoMaximo'];
						// Preparamos la consulta
						$query = "INSERT INTO Rango(CodigoRango, RangoMinimo, RangoMaximo)
											  VALUES('".$RangoMinimo."', '".$RangoMaximo."');";
						// Ejecutamos la consulta
						if(!$resultado = $mysqli->query($query)){
    					echo "Error: La ejecución de la consulta falló debido a: \n";
    					echo "Query: " . $query . "\n";
    					echo "Errno: " . $mysqli->errno . "\n";
    					echo "Error: " . $mysqli->error . "\n";
    					exit;
						}
						else{
							?>
    						<div class="form-group">
								<form name="Alerta">
									<div class="container">
										<div class="row text-center">
											<div class="container-fluid">
												<div class="row">
													<div class="col-xs-10 col-xs-offset-1">
														<div class="alert alert-success">Rango registrado</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<?php
							// Recargamos la página
    						echo "<meta http-equiv=\"refresh\" content=\"0;URL=CrearUsuario.php\">"; 
    					}
					}
					// Código que recibe la información del usuario y la agrega a la tabla de usuarios
					if (isset($_POST['AgregarUsuario'])) {
						// Guardamos la información en variables
						$NombreUsuario=$_POST['NombreUsuario'];
						$NombreInicioSesionUsuario=$_POST['NombreInicioSesionUsuario'];
						$ApellidoUsuario=$_POST['ApellidoUsuario'];
						$PasswordUsuario=$_POST['PasswordUsuario'];
						$TelefonoUsuario=$_POST['TelefonoUsuario'];
						$RePasswordUsuario=$_POST['RePasswordUsuario'];
						$DireccionUsuario=$_POST['DireccionUsuario'];
						$PuestoUsuario=$_POST['PuestoUsuario'];
						$CorreoUsuario=$_POST['CorreoUsuario'];
						$RolUsuario=$_POST['RolUsuario'];
						$RangoUsuario=$_POST['RangoUsuario'];
						
						if($PasswordUsuario != $RePasswordUsuario){
							?>
							<div class="form-group">
								<form name="Alerta">
									<div class="container">
										<div class="row text-center">
											<div class="container-fluid">
												<div class="row">
													<div class="col-xs-10 col-xs-offset-1">
														<div class="alert alert-warning">Las contraseñas no coinciden</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<?php
						}
						else{
							$ContraseniaEncriptada = md5($PasswordUsuario);
							// Preparamos la consulta
							$query = "INSERT INTO Usuario (NombreUsuario, ApellidoUsuario, TelefonoUsuario,
														   DireccionUsuario, CorreoUsuario, NombreInicioSesionUsuario,
														   ContraseniaUsuario, idPuesto, idRol, idRango)
												  VALUES('".$NombreUsuario."', '".$ApellidoUsuario."', '".$TelefonoUsuario."', '"
														   .$DireccionUsuario."', '".$CorreoUsuario."', '".$NombreInicioSesionUsuario."', '"
														   .$ContraseniaEncriptada."', ".$PuestoUsuario.", ".$RolUsuario.", ".$RangoUsuario.");";
							// Ejecutamos la consulta
							if(!$resultado = $mysqli->query($query)){
							echo "Error: La ejecución de la consulta falló debido a: \n";
							echo "Query: " . $query . "\n";
							echo "Errno: " . $mysqli->errno . "\n";
							echo "Error: " . $mysqli->error . "\n";
							exit;
							}
							else{
								?>
								<div class="form-group">
								<form name="Alerta">
									<div class="container">
										<div class="row text-center">
											<div class="container-fluid">
												<div class="row">
													<div class="col-xs-10 col-xs-offset-1">
														<div class="alert alert-warning">Usuario registrado</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
								<?php
								// Recargamos la página
								echo "<meta http-equiv=\"refresh\" content=\"0;URL=CrearUsuario.php\">"; 
							}
						}
					}
				?> 
				
				<!-- Modal para crear Grupo al que pertenece -->
				<div class="modal fade slide left" id="ModalCrearGrupo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

						</button>
						<h1 class="modal-title" id="myModalLabel">Crear nuevo grupo</h1>

					  </div>
					  <div class="modal-body">
						<p class="lead">Ingrese los datos</p>
						<form method="post" id="myForm">
						  <div class="form-group">
							<label for="email">Nombre del grupo</label>
							<input type="text" name="NombreNuevoGrupo" id="NombreNuevoGrupo" class="form-control" placeholder="Nombre del grupo" value="" required/>
						  </div>
						  <div class="form-group">
							<label for="email">Rango del grupo</label>
							<input type="text" name="RangoNuevoGrupo" id="RangoNuevoGrupo" class="form-control" placeholder="Rango del grupo" value="" required/>
						  </div>
						  <div class="form-group">
							<label for="email">Puesto del grupo</label>
							<input type="text" name="PuestoNuevoGrupo" id="PuestoNuevoGrupo" class="form-control" placeholder="Puesto del grupo" value="" required/>
						  </div>
						  <input type="submit" name="GuardarGrupo" class="btn btn-success btn-lg" value="Crear">
						</form>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					  </div>
					</div>
				  </div>
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
							<h4>Atenas, S. A.</h4>
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
