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

<!-- Librería javascript para las notificaciones -->
<script src="js/notify.js"></script>

</head>
	<?php
		//include_once 'Seguridad/conexion.php';
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
										<li><a href="#">Lista de Proveedores</a></li>
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
						<div class="row">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-6 ">
									<h1 class="text-center">Proveedores registrados</h1>
									</div>
									<!-- Contenedor del ícono del Usuario -->
									<div class="col-xs-6 Icon">
										<!-- Icono de usuario -->
										<span class="glyphicon glyphicon-shopping-cart"></span>
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
												<th>Codigo Proveedor </th>
												<th>Nombre Proveedor</th>
											</tr>
										</thead>
										<!-- Cuerpo de la tabla -->
										<tbody>
											<!-- Contenido de la tabla -->
											<!-- Acá mostraremos los bancos y seleccionaremos el que deseamos eliminar -->
											<?php
												// Primero hacemos la consulta en la tabla de Proveedores					
												$VerProveedores = "SELECT * FROM Proveedor";
												// Hacemos la consulta
												$resultado = $mysqli->query($VerProveedores);
													while ($row = mysqli_fetch_array($resultado)){
														?>
														<tr>
														<td><span id="idProveedor<?php echo $row['idProveedor'];?>"><?php echo $row['idProveedor'] ?></span></td>
														<td><span id="CodigoProveedor<?php echo $row['idProveedor'];?>"><?php echo $row['CodigoProveedor'] ?></span></td>
														<td><span id="NombreProveedor<?php echo $row['idProveedor'];?>"><?php echo $row['NombreProveedor'] ?></td>
														<td>	
															<!-- Edición -->
															<div>
																<div class="input-group input-group-lg">
																	<button type="button" class="btn btn-success EditarProveedor" value="<?php echo $row['idProveedor']; ?>"><span class="glyphicon glyphicon-edit"></span></button>
																</div>
															</div>
														</td>
														<td>
															<!-- Eliminación -->
															<div>
																<div class="input-group input-group-lg">
																	<button type="button" class="btn btn-danger EliminarProveedor" value="<?php echo $row['idProveedor']; ?>"><span class="glyphicon glyphicon-minus"></span></button>
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
				<div class="modal fade" id="ModalEliminarProveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<center><h1 class="modal-title" id="myModalLabel">Eliminar proveedor</h1></center>
							</div>
							<form method="post" action="Proveedor.php" id="myForm">
							<div class="modal-body">
								<p class="lead">¿Está seguro que desea eliminar el siguiente proveedor?</p>
								<div class="form-group input-group">
									<input type="text" name="idProveedorEliminar" style="width:350px; visibility:hidden;" class="form-control" id="idProveedorEliminar">
									<br>
									<label id="NombreProveedor"></label>
							</div>
							</div>
							<div class="modal-footer">
								<input type="submit" name="EliminarProveedor" class="btn btn-danger" value="Eliminar">
								<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
							</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /.modal -->
				<!-- Edit Modal-->
				<div class="modal fade" id="ModalEditarProveedor" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<center><h4 class="modal-title" id="myModalLabel">Editar proveedor</h4></center>
							</div>
							<form method="post" action="Proveedor.php" id="myForm">
								<div class="modal-body">
								<div class="container-fluid">
										<div class="form-group input-group">
											<span class="input-group-addon" style="width:150px;">ID</span>
											<input type="text" style="width:350px;" class="form-control" name="idProveedorEditar" id="idProveedorEditar">
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon" style="width:150px;">Código del proveedor</span>
											<input type="text" style="width:350px;" class="form-control" name="CodigoProveedorEditar" id="CodigoProveedorEditar">
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon" style="width:150px;">Nombre del proveedor</span>
											<input type="text" style="width:350px;" class="form-control" name="NombreProveedorEditar" id="NombreProveedorEditar">
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
									<input type="submit" name="EditarProveedor" class="btn btn-warning" value="Editar">
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /.modal -->
				
				<?php
				// Código que recibe la información de eliminar proveedor
				if (isset($_POST['EliminarProveedor'])) {
					// Guardamos el id en una variable
					$idProveedorEliminar = $_POST['idProveedorEliminar'];
					// Preparamos la consulta
					$query = "DELETE FROM proveedor WHERE idProveedor=".$idProveedorEliminar.";";
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
													<div class="alert alert-warning">Proveedor eliminado</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<?php
						// Recargamos la página
						echo "<meta http-equiv=\"refresh\" content=\"0;URL=Proveedor.php\">"; 
					}
				}
				// Código que recibe la información de editar proveedor
				if (isset($_POST['EditarProveedor'])) {
					// Guardamos el id en una variable
					$idProveedorEditar = $_POST['idProveedorEditar'];
					$CodigoProveedorEditar = $_POST['CodigoProveedorEditar'];
					$NombreProveedorEditar = $_POST['NombreProveedorEditar'];
					// Preparamos la consulta
					$query = "UPDATE proveedor
								  SET CodigoProveedor = '" .$CodigoProveedorEditar."',
									  NombreProveedor = '" .$NombreProveedorEditar."'
									WHERE idProveedor=".$idProveedorEditar.";";
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
													<div class="alert alert-warning">Proveedor actualizado</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<?php
						// Recargamos la página
						echo "<meta http-equiv=\"refresh\" content=\"0;URL=Proveedor.php\">"; 
					}
				}
				?>						
				
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
