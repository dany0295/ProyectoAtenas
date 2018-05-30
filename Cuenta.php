<!--
	Módulo de creación de Usuarios
	Martes, 27 de mayo del 2018
	02:35 PM
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
<link rel="stylesheet" type="text/css" href="text/estilo.css"> 

</head>
	<?php
		// Incluimos el archivo que valida si hay una sesión activa
		include_once "Seguridad/seguro.php";
		// Primero hacemos la consulta en la tabla de persona
		include_once "Seguridad/conexion.php";
		// Si en la sesión activa tiene privilegios de administrador puede ver el formulario
		if($_SESSION["PrivilegioUsuario"] == 1){
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
										<li><a href="#">Listado de cuentas</a></li>
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
				<br>
				<br>
				<br>
				<div class="form-group">
						<div class="container">
							<div class="row text-center">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-6 ">
										<h1 class="text-center">Cuentas registradas</h1>
										</div>
										<!-- Contenedor del ícono del Usuario -->
										<div class="col-xs-6 Icon">
											<!-- Icono de usuario -->
											<span class="glyphicon glyphicon-user"></span>
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
													<th>Codigo de cuenta</th>
													<th>Numero de cuenta</th>
													<th>Nombre de cuenta</th>
													<th>Tipo de cuenta</th>
													<th>Saldo disponible</th>
													<th>Banco</th>
												</tr>
											</thead>
											<!-- Cuerpo de la tabla -->
											<tbody>
												<!-- Contenido de la tabla -->
													<!-- Acá mostraremos los usuarios y seleccionaremos el que deseamos eliminar -->
													<?php				
														$VerCuentas = "SELECT * FROM cuenta";
														// Hacemos la consulta
														$resultado = $mysqli->query($VerCuentas);
															while ($row = mysqli_fetch_array($resultado)){
																// Obtenemos el nombre de usuario y privilegio de cada persona
																// Primero haremos la consulta
																$VerBanco = "SELECT * FROM banco WHERE idBanco='".$row['idBanco']."'";
																// Ejecutamos la consulta
																$ResultadoConsultaBanco = $mysqli->query($VerBanco);
																// Guardamos la consulta en un array
																$ResultadoConsulta = $ResultadoConsultaBanco->fetch_assoc();
																// Nombre del banco
																$NombreBanco = $ResultadoConsulta['NombreBanco'];
																?>
																<tr>
																<td><span id="idCuenta<?php echo $row['idCuenta'];?>"><?php echo $row['idCuenta'] ?></span></td>
																<td><span id="CodigoCuenta<?php echo $row['idCuenta'];?>"><?php echo $row['CodigoCuenta'] ?></span></td>
																<td><span id="NumeroCuenta<?php echo $row['idCuenta'];?>"><?php echo $row['NumeroCuenta'] ?></span></td>
																<td><span id="NombreCuenta<?php echo $row['idCuenta'];?>"><?php echo $row['NombreCuenta'] ?></span></td>
																<td><span id="TipoCuenta<?php echo $row['idCuenta'];?>"><?php echo $row['TipoCuenta'] ?></span></td>
																<td><span id="SaldoCuenta<?php echo $row['idCuenta'];?>"><?php echo $row['SaldoCuenta'] ?></span></td>
																<td><span id="NombreBanco<?php echo $row['idCuenta'];?>"><?php echo $NombreBanco ?></span></td>
																<td>
																	<!-- Edición -->
																	<div>
																		<div class="input-group input-group-lg">
																			<button type="button" class="btn btn-success EditarCuenta" value="<?php echo $row['idCuenta']; ?>"><span class="glyphicon glyphicon-edit"></span></button>
																		</div>
																	</div>
																</td>
																<td>
																	<!-- Eliminación -->
																	<div>
																		<div class="input-group input-group-lg">
																			<button type="button" class="btn btn-danger EliminarCuenta" value="<?php echo $row['idCuenta']; ?>"><span class="glyphicon glyphicon-minus"></span></button>
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
				</div>
				<!-- Edit Modal-->
					<div class="modal fade" id="frmEliminarCuenta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<center><h1 class="modal-title" id="myModalLabel">Eliminar usuario</h1></center>
								</div>
								<form method="post" action="Cuenta.php" id="myForm">
								<div class="modal-body">
									<p class="lead">¿Está seguro que desea eliminar la siguiente cuenta?</p>
									<div class="form-group input-group">
										<input type="text" name="idCuentaAEliminar" style="width:350px; visibility:hidden;" class="form-control" id="idCuentaAEliminar">
										<br>
										<label id="NombreCuenta"></label>
									</div>
								</div>
								<div class="modal-footer">
									<input type="submit" name="EliminarUsuario" class="btn btn-danger" value="Eliminar cuenta">
									<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				<!-- /.modal -->
				<?php
					// Código que recibe la información de eliminar una cuenta
					if (isset($_POST['EliminarUsuario'])) {
						// Guardamos el id en una variable
						$idCuentaEliminar = $_POST['idCuentaAEliminar'];
						// Preparamos la consulta
						$query = "DELETE FROM cuenta WHERE idCuenta=".$idCuentaEliminar.";";
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
														<div class="alert alert-warning">Cuenta eliminada</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
    						<?php
							// Recargamos la página
    						echo "<meta http-equiv=\"refresh\" content=\"0;URL=Cuenta.php\">"; 
    					}
					}
					// Termina código para eliminar una cuenta
					
					// Código para editar una cuenta, solo se podrá editar el nombre y el tipo de cuenta
					if (isset($_POST['EditarCuenta'])) {
						// Guardamos La información proveniente del formulario
						$idCuentaEditar = $_POST['idCuentaEditar'];
						$NombreCuentaEditar = $_POST['NombreCuentaEditar'];
						$TipoCuentaEditar = $_POST['TipoCuentaEditar'];
						
						// Preparamos las consultas
						$ConsultaEditarCuenta = "UPDATE cuenta
								  SET NombreCuenta = '" .$NombreCuentaEditar."',
									  TipoCuenta = '" .$TipoCuentaEditar."'
								  WHERE idCuenta=".$idCuentaEditar.";";
						
						// Ejecutamos la consulta para la tabla de cuenta
						if(!$resultado = $mysqli->query($ConsultaEditarCuenta)){
							echo "Error: La ejecución de la consulta falló debido a: \n";
							echo "Query: " . $ConsultaEditarCuenta . "\n";
							echo "Errno: " . $mysqli->errno . "\n";
							echo "Error: " . $mysqli->error . "\n";
							exit;
						}
						else{
							// Recargamos la página
    						echo "<meta http-equiv=\"refresh\" content=\"0;URL=Cuenta.php\">"; 
							?>
							<div class="form-group">
								<form name="Alerta">
									<div class="container">
										<div class="row text-center">
											<div class="container-fluid">
												<div class="row">
													<div class="col-xs-10 col-xs-offset-1">
														<div class="alert alert-success">Cuenta actualizada</div>
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
					<div class="modal fade" id="frmEditarCuena" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<center><h4 class="modal-title" id="myModalLabel">Editar usuario</h4></center>
								</div>
								<form method="post" action="Cuenta.php" id="frmEdit">
									<div class="modal-body">
									<div class="container-fluid">
											<div class="form-group input-group">
												<span class="input-group-addon" style="width:200px;">ID</span>
												<input type="text" style="width:350px;" class="form-control" name="idCuentaEditar" id="idCuentaEditar">
											</div>
											<div class="form-group input-group">
												<span class="input-group-addon" style="width:200px;">Código de cuenta</span>
												<input type="text" style="width:350px;" class="form-control" name="CodigoCuentaEditar" id="CodigoCuentaEditar" disabled>
											</div>
											<div class="form-group input-group">
												<span class="input-group-addon" style="width:200px;">Número de cuenta</span>
												<input type="text" style="width:350px;" class="form-control" name="NumeroCuentaEditar" id="NumeroCuentaEditar" disabled>
											</div>
											<div class="form-group input-group">
												<span class="input-group-addon" style="width:200px;">Nombre de la cuenta</span>
												<input type="text" style="width:350px;" class="form-control" name="NombreCuentaEditar" id="NombreCuentaEditar">
											</div>
											<div class="form-group input-group">
												<span class="input-group-addon" style="width:200px;">Tipo de Cuenta</span>
												<select class="form-control" style="width:350px;" name="TipoCuentaEditar" id="TipoCuentaEditar">
													<option value="" disabled selected>Tipo de Cuenta</option>
															<option value="Monetario">Monetario</option>
															<option value="Ahorro">Ahorro</option>
													</select>
											</div>
											<div class="form-group input-group">
												<span class="input-group-addon" style="width:200px;">Saldo disponible</span>
												<input type="tel" style="width:350px;" class="form-control" name="SaldoCuentaEditar" id="SaldoCuentaEditar" disabled>
											</div>
											<div class="form-group input-group">
												<span class="input-group-addon" style="width:200px;">Banco</span>
												<input type="text" style="width:350px;" class="form-control" name="BancoCuentaEditar" id="BancoCuentaEditar" disabled>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
										<input type="submit" name="EditarCuenta" class="btn btn-warning" value="Editar Cuenta">
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
