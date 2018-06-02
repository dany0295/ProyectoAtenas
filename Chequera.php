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
										<li><a href="#">Lista de chequeras</a></li>
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
										<h1 class="text-center">Chequeras registradas</h1>
										</div>
										<!-- Contenedor del ícono del Usuario -->
										<div class="col-xs-6  Icon">
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
													<th>Nombre </th>
													<th>Rango Minimo </th>
													<th>Rango Maximo </th>
													<th>Cuenta </th>
												</tr>
											</thead>
											<!-- Cuerpo de la tabla -->
											<tbody>
												<!-- Contenido de la tabla -->
													<!-- Acá mostraremos los usuarios y seleccionaremos el que deseamos eliminar -->
													<?php
														// Primero hacemos la consulta en la tabla de Chequera
														include_once "Seguridad/conexion.php";														
														$VerChequeras = "SELECT * FROM Chequera";
														// Hacemos la consulta
														$resultado = $mysqli->query($VerChequeras);
															while ($row = mysqli_fetch_array($resultado)){
																// Obtenemos el nombre de usuario y privilegio de cada persona
																// Primero haremos la consulta
																$VerCuenta = "SELECT * FROM Cuenta WHERE idCuenta='".$row['idCuenta']."'";
																// Ejecutamos la consulta
																$ResultadoConsultaCuenta = $mysqli->query($VerCuenta);
																// Guardamos la consulta en un array
																$ResultadoConsulta = $ResultadoConsultaCuenta->fetch_assoc();
																// Nombre del banco
																$NombreCuenta = $ResultadoConsulta['NombreCuenta'];
																?>
																<tr>
																<td><span id="idChequera<?php echo $row['idChequera'];?>"><?php echo $row['idChequera'] ?></span></td>
																<td><span id="NombreChequera<?php echo $row['idChequera'];?>"><?php echo $row['NombreChequera'] ?></span></td>
																<td><span id="RangoMinimoChequera<?php echo $row['idChequera'];?>"><?php echo $row['RangoMinimoChequera'] ?></span></td>
																<td><span id="RangoMaximoChequera<?php echo $row['idChequera'];?>"><?php echo $row['RangoMaximoChequera'] ?></span></td>
																<td>
																	<!-- Edición -->
																	<div>
																		<div class="input-group input-group-lg">
																			<button type="button" class="btn btn-success EditarChequera" value="<?php echo $row['idChequera']; ?>"><span class="glyphicon glyphicon-edit"></span></button>
																		</div>
																	</div>
																</td>
																<td>
																	<!-- Eliminación -->
																	<div>
																		<div class="input-group input-group-lg">
																			<button type="button" class="btn btn-danger EliminarChequera" value="<?php echo $row['idChequera']; ?>"><span class="glyphicon glyphicon-minus"></span></button>
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
				<div class="modal fade" id="frmEliminarChequera" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<center><h1 class="modal-title" id="myModalLabel">Eliminar usuario</h1></center>
							</div>
							<form method="post" action="Chequera.php" id="myForm">
							<div class="modal-body">
								<p class="lead">¿Está seguro que desea eliminar la siguiente chequera?</p>
								<div class="form-group input-group">
									<input type="text" name="idChequeraAEliminar" style="width:350px; visibility:hidden;" class="form-control" id="idChequeraAEliminar">
									<br>
									<label id="NombreChequera"></label>
								</div>
							</div>
							<div class="modal-footer">
								<input type="submit" name="EliminarChequera" class="btn btn-danger" value="Eliminar chequera">
								<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
							</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /.modal -->
				<?php
					// Código que recibe la información de eliminar una cuenta
					if (isset($_POST['EliminarChequera'])) {
						// Guardamos el id en una variable
						$idChequeraEliminar = $_POST['idChequeraAEliminar'];
						// Preparamos la consulta
						$query = "DELETE FROM chequera WHERE idChequera=".$idChequeraEliminar.";";
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
														<div class="alert alert-warning">Chequera eliminada</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
    						<?php
							// Recargamos la página
    						echo "<meta http-equiv=\"refresh\" content=\"0;URL=Chequera.php\">"; 
    					}
					}
					// Termina código para eliminar una cuenta
					
					// Código para editar una cuenta, solo se podrá editar el nombre y el tipo de cuenta
					if (isset($_POST['EditarChequera'])) {
						// Guardamos La información proveniente del formulario
						$idChequeraEditar = $_POST['idChequeraEditar'];
						$NombreChequeraEditar = $_POST['NombreChequeraEditar'];
						$RangoMinimoChequeraEditar = $_POST['RangoMinimoChequera'];
						$RangoMaximoChequeraEditar = $_POST['RangoMaximoChequera'];
						
						// Preparamos las consultas
						$ConsultaEditarChequera = "UPDATE chequera
								  SET NombreChequera = '" .$NombreChequeraEditar."',
									  RangoMinimoChequera = '" .$RangoMinimoChequeraEditar."',
									  RangoMaximoChequera = '" .$RangoMaximoChequeraEditar."',			  
									 WHERE idChequera=".$idChequeraEditar.";";
						
						// Ejecutamos la consulta para la tabla de cuenta
						if(!$resultado = $mysqli->query($ConsultaEditarChequera)){
							echo "Error: La ejecución de la consulta falló debido a: \n";
							echo "Query: " . $ConsultaEditarCuenta . "\n";
							echo "Errno: " . $mysqli->errno . "\n";
							echo "Error: " . $mysqli->error . "\n";
							exit;
						}
						else{
							// Recargamos la página
    						echo "<meta http-equiv=\"refresh\" content=\"0;URL=Chequera.php\">"; 
							?>
							<div class="form-group">
								<form name="Alerta">
									<div class="container">
										<div class="row text-center">
											<div class="container-fluid">
												<div class="row">
													<div class="col-xs-10 col-xs-offset-1">
														<div class="alert alert-success">Chequera actualizada</div>
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
				<div class="modal fade" id="frmEditarchequera" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<center><h4 class="modal-title" id="myModalLabel">Editar chequera</h4></center>
							</div>
							<form method="post" action="Chequera.php" id="frmEdit">
								<div class="modal-body">
								<div class="container-fluid">
										<div class="form-group input-group">
											<span class="input-group-addon" style="width:200px;">ID</span>
											<input type="text" style="width:350px;" class="form-control" name="idChequeraEditar" id="idChequeraEditar">
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon" style="width:200px;">Nombre de chequera</span>
											<input type="text" style="width:350px;" class="form-control" name="NombreChequeraEditar" id="NombreChequeraEditar" disabled>
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon" style="width:200px;">Rango minimo de chequera</span>
											<input type="text" style="width:350px;" class="form-control" name="RangoMinimoChequera" id="RangoMinimoChequera">
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon" style="width:200px;">Rango maximo de chequera</span>
											<input type="text" style="width:350px;" class="form-control" name="RangoMaximoChequera" id="RangoMaximoChequera">
										</div>
								</div>
								</div>
										<div class="modal-footer">
									<button type="button" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
									<input type="submit" name="EditarChequera" class="btn btn-warning" value="Editar Chequera">
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
