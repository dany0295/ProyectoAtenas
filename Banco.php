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
										<li><a href="#">Lista de bancos</a></li>	
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
								</li>
							</ul>
						</div>
						<!-- /.navbar-collapse --> 
					</div>
				  <!-- /.container-fluid --> 
				</nav>
				<br>
				<br>
				<br>
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
										<table class="table table-striped">
											<!-- Título -->
											<thead>
												<!-- Contenido -->
												<tr>
													<th>#</th>
													<th>Codigo </th>
													<th>Nombre </th>
													<th>Dirección </th>
													<th>Correo </th>
													<th>Sitio Web </th>
													<th>Teléfono </th>
												</tr>
											</thead>
											<!-- Cuerpo de la tabla -->
											<tbody>
												<!-- Contenido de la tabla -->
													<!-- Acá mostraremos los bancos y seleccionaremos el que deseamos eliminar -->
													<?php
														// Primero hacemos la consulta en la tabla de banco
														include_once "Seguridad/conexion.php";								
														$VerBancos = "SELECT * FROM Banco";
														// Hacemos la consulta
														$resultado = $mysqli->query($VerBancos);
															while ($row = mysqli_fetch_array($resultado)){
																?>
																<tr>
																<td><span id="idBanco<?php echo $row['idBanco'];?>"><?php echo $row['idBanco'] ?></span></td>
																<td><span id="CodigoBanco<?php echo $row['idBanco'];?>"><?php echo $row['CodigoBanco'] ?></span></td>
																<td><span id="NombreBanco<?php echo $row['idBanco'];?>"><?php echo $row['NombreBanco'] ?></span></td>
																<td><span id="DireccionBanco<?php echo $row['idBanco'];?>"><?php echo $row['DireccionBanco'] ?></span></td>
																<td><span id="CorreoBanco<?php echo $row['idBanco'];?>"><?php echo $row['CorreoBanco'] ?></span></td>
																<td><span id="SitioWebBanco<?php echo $row['idBanco'];?>"><?php echo $row['SitioWebBanco'] ?></span></td>
																<td><span id="TelefonoBanco<?php echo $row['idBanco'];?>"><?php echo $row['TelefonoBanco'] ?></span></td>
																<td>
																	<!-- Edición -->
																	<div>
																		<div class="input-group input-group-lg">
																			<button type="button" class="btn btn-success EditarBanco" value="<?php echo $row['idBanco']; ?>"><span class="glyphicon glyphicon-edit"></span></button>
																		</div>
																	</div>
																</td>
																<td>
																	<!-- Eliminación -->
																	<div>
																		<div class="input-group input-group-lg">
																			<button type="button" class="btn btn-danger EliminarBanco" value="<?php echo $row['idBanco']; ?>"><span class="glyphicon glyphicon-minus"></span></button>
																		</div>
																	</div>
																</td>
																</tr>
													<?php
															}
													?>
											</tbody>
										</table>
									</div>								
								</div>
							</div>
						</div>
					</div>
	
				<!-- Edit Modal-->
					<div class="modal fade" id="frmEliminarBanco" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<center><h1 class="modal-title" id="myModalLabel">Eliminar banco</h1></center>
								</div>
								<form method="post" action="Banco.php" id="myForm">
								<div class="modal-body">
									<p class="lead">¿Está seguro que desea eliminar el siguiente banco?</p>
									<div class="form-group input-group">
										<input type="text" name="idBancoAEliminar" style="width:350px; visibility:hidden;" class="form-control" id="idBancoAEliminar">
										<br>
										<label id="NombreBanco"></label>
								</div>
								</div>
								<div class="modal-footer">
									<input type="submit" name="EliminarUsuario" class="btn btn-danger" value="Eliminar">
									<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				<!-- /.modal -->
				<?php
				// Código que recibe la información de eliminar banco
					if (isset($_POST['EliminarUsuario'])) {
						// Guardamos el id en una variable
						$idBancoEliminar = $_POST['idBancoAEliminar'];
						// Preparamos la consulta
						$query = "DELETE FROM banco WHERE idBanco=".$idBancoEliminar.";";
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
														<div class="alert alert-warning">Banco eliminado</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
    						<?php
							// Recargamos la página
    						echo "<meta http-equiv=\"refresh\" content=\"0;URL=Banco.php\">"; 
    					}
					}
				// Termina código para eliminar banco
					// Código para editar un banco
					if (isset($_POST['EditarBanco'])) {
						// Guardamos La información proveniente del formulario
						$idBancoEditar = $_POST['idBancoEditar'];
						$CodigoBancoEditar = $_POST['CodigoBancoEditar'];
						$NombreBancoEditar = $_POST['NombreBancoEditar'];
						$DireccionBancoEditar = $_POST['DireccionBancoEditar'];
						$CorreoBancoEditar = $_POST['CorreoBancoEditar'];
						$SitioWebBancoEditar = $_POST['SitioWebBancoEditar'];
						$TelefonoBancoEditar = $_POST['TelefonoBancoEditar'];
				// Preparamos las consultas
						$ConsultaEditarBanco = "UPDATE banco
								  SET CodigoBanco = '" .$CodigoBancoEditar."',
									  NombreBanco = '" .$NombreBancoEditar."',
									  DireccionBanco = '".$DireccionBancoEditar."',
									  CorreoBanco = '".$CorreoBancoEditar."',
									  SitioWebBanco = '".$SitioWebBancoEditar."',
									  TelefonoBanco = '".$TelefonoBancoEditar."'
									WHERE idBanco=".$idBancoEditar.";";
						
						// Ejecutamos la consulta para la tabla de persona
						if(!$resultado = $mysqli->query($ConsultaEditarBanco)){
							echo "Error: La ejecución de la consulta falló debido a: \n";
							echo "Query: " . $ConsultaEditarBanco . "\n";
							echo "Errno: " . $mysqli->errno . "\n";
							echo "Error: " . $mysqli->error . "\n";
							exit;
						}
						else{
							// Recargamos la página
    						echo "<meta http-equiv=\"refresh\" content=\"0;URL=Banco.php\">"; 
							?>
								<div class="form-group">
									<form name="Alerta">
										<div class="container">
											<div class="row text-center">
												<div class="container-fluid">
													<div class="row">
														<div class="col-xs-10 col-xs-offset-1">
															<div class="alert alert-success">Banco actualizado</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
    						<?php
    					}
					}
					// Termina código para editar una cuenta
				?>						
				<!-- Edit Modal-->
					<div class="modal fade" id="frmEditarBanco" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<center><h4 class="modal-title" id="myModalLabel">Editar banco</h4></center>
								</div>
								<form method="post" action="Banco.php" id="myForm">
									<div class="modal-body">
									<div class="container-fluid">
											<div class="form-group input-group">
												<span class="input-group-addon" style="width:150px;">ID</span>
												<input type="text" style="width:350px;" class="form-control" name="idBancoEditar" id="idBancoEditar">
											</div>
											<div class="form-group input-group">
												<span class="input-group-addon" style="width:150px;">Código de Banco</span>
												<input type="text" style="width:350px;" class="form-control" name="CodigoBancoEditar" id="CodigoBancoEditar">
											</div>
											<div class="form-group input-group">
												<span class="input-group-addon" style="width:150px;">Nombre de Banco</span>
												<input type="text" style="width:350px;" class="form-control" name="NombreBancoEditar" id="NombreBancoEditar">
											</div>
											<div class="form-group input-group">
												<span class="input-group-addon" style="width:150px;">Direccion del Banco</span>
												<input type="text" style="width:350px;" class="form-control" name="DireccionBancoEditar" id="DireccionBancoEditar">
											</div>
											<div class="form-group input-group">
												<span class="input-group-addon" style="width:150px;">Correo del Banco</span>
												<input type="text" style="width:350px;" class="form-control" name="CorreoBancoEditar" id="CorreoBancoEditar">
											</div>
											<div class="form-group input-group">
												<span class="input-group-addon" style="width:150px;">Sitio Web del Banco</span>
												<input type="text" style="width:350px;" class="form-control" name="SitioWebBancoEditar" id="SitioWebBancoEditar">
											</div>
											<div class="form-group input-group">
												<span class="input-group-addon" style="width:150px;">Telefono del Banco</span>
												<input type="tel" style="width:350px;" class="form-control" name="TelefonoBancoEditar" id="TelefonoBancoEditar">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
										<input type="submit" name="EditarBanco" class="btn btn-warning" value="Editar">
									</div>
								</form>
							</div>
						</div>
					</div>
				<!-- /.modal -->
				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="js/jquery-1.11.3.min.js"></script>

				<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src="js/bootstrap.js"></script>
				<!-- Incluimos el script que nos dará el nombre de la persona para mostrarlo en el modal -->
				<script src="js/custom.js"></script>
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
