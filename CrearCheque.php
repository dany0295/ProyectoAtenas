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
<link rel="stylesheet" type="text/css" href="text/estilo.css"> 

</head>
	<?php
		//include_once 'Seguridad/conexion.php';
		// Incluimos el archivo que valida si hay una sesión activa
		include_once "Seguridad/seguro.php";
		// Incluimos el archivo para la conexión
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
										<li><a href="#">Crear cheque</a></li>
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
				<div class="form-group">
					<form name="CrearCheque" action="CrearCheque.php" method="post">
						<div class="container">
							<div class="row text-center">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-6 col-xs-offset-3">
										<h2 class="text-center">Creación de cheque</h2>
										<br>
										</div>
									</div>
									<!-- Codigo del Cheque -->
									<div class="row">
										<!--Seleccionar Banco-->
										<div class="col-xs-5 col-xs-offset-1">
											<div class="input-group input-group-lg">
												<!--<span class="input-group-addon" id="sizing-addon5">Banco</span> -->
												<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-piggy-bank"></i></span>
												<!--<span class="glyphicons glyphicons-bank"></span>
												
												<!-- Tipo de Banco -->
												<select class="form-control" name="ChequeraCuenta" id="ChequeraCuenta">
													<option value="" disabled selected>Seleccione Chequera</option>
													<!-- Contenido de la tabla -->
														<!-- Acá mostraremos los bancos y seleccionaremos el que deseamos eliminar -->
														<?php							
															$VerChequera = "SELECT * FROM chequera";
															// Hacemos la consulta
															$resultado = $mysqli->query($VerChequera);			
																while ($row = mysqli_fetch_array($resultado)){
																	?>
																	<option value="<?php echo $row['idChequera'];?>"><?php echo $row['NombreChequera'] ?></option>
														<?php
																}
														?>
												</select>	
											</div>
										</div>
										<!-- Numero del Cheque -->
										<div class="col-xs-5 col-xs-offset+1">
											<div class="input-group input-group-lg">
												<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
												<input type="text" class="form-control" name="NumeroCheque" placeholder="No. de cheque" id="NumeroCheque" aria-describedby="sizing-addon1" required>
											</div>
										</div>
									</div>
								</br>
								<div class="row">
									<!-- Pago a la orden -->
									<div class="col-xs-6 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<!--<span class="input-group-addon" id="sizing-addon1">Pagar a la Orden de:</span>-->
											<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
											<!--<input type="text" class="form-control" name="Pago" placeholder="Pagar a la orden de:" id="Pago" aria-describedby="sizing-addon1" required>-->
												<!-- Tipo de Proveedor -->
											<select class="form-control" name="ProveedorCuenta" id="ProveedorCuenta">
											<option value="" disabled selected>Seleccione proveedor</option>
												<!-- Contenido de la tabla -->
												<!-- Acá mostraremos los proveedores -->
											<?php							
												$VerProveedor = "SELECT * FROM proveedor";
												// Hacemos la consulta
												$resultado1 = $mysqli->query($VerProveedor);			
												while ($row = mysqli_fetch_array($resultado1)){
														?>
																<option value="<?php echo $row['idProveedor'];?>"><?php echo $row['NombreProveedor'] ?></option>
													<?php
															}
													?>	
											</select>		
										</div>
									</div>
									<!-- Button trigger modal -->
									<div class="col-xs-1">
										<div class="input-group input-group-lg">
											<button type="button" class="btn btn-success btn-lg AgrearProveedor" value="" data-toggle="modal" data-target="#ModalAgregarProveedor">+</button>
										</div>
									</div>
									<!-- Monto -->
									<div class="col-xs-3 col-xs-offset+1">
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="sizing-addon1">QTZ</span>
											<!--<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-usd"></i></span>-->
											<input type="money_format" class="form-control" name="MontoCheque" placeholder="Monto" id="MontoCheque" aria-describedby="sizing-addon1" required>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<!-- Lugar -->
									<div class="col-xs-6 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-home"></i></span>
											<input type="text" class="form-control" name="LugarCheque" placeholder="Lugar" id="LugarCheque" aria-describedby="sizing-addon1" required>
										</div>
									</div>
									<!-- Fecha --> 
									<div class="col-xs-4 col-xs-offset+1">
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-calendar"></i></span>
											<input type="date" class="form-control" name="FechaCheque" placeholder="Fecha" id="FechaCheque" aria-describedby="sizing-addon1" required>
										</div>
									</div>
								</div>
								</br>
								<div class="row">
									<!-- Comentarios -->
									<div class="col-xs-10 col-xs-offset+1 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-comment"></i></span>
											<input type="text" class="form-control" name="ComentarioCheque" placeholder="Descripcion" id="ComentarioCheque" aria-describedby="sizing-addon1" required>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<!-- Registrar -->
									<div class="col-xs-12 col-xs-offset-1">
										<div class="input-group input-group-lg">
											<div clss="btn-group">
												<button type="submit" class="btn btn-primary" id="CrearCheque" name="enviar">Registrar</button>
												<button type="button" class="btn btn-danger">Cancelar</button>
											</div>
										</div>
									</div>
								</div>
								<br>
								</div>
							</div>
						</div>
					</form>
				</div>
				
				<!-- Modal para crear proveedor -->
				<div class="modal fade slide left" id="ModalAgregarProveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

						</button>
						<h1 class="modal-title" id="myModalLabel">Crear nuevo proveedor</h1>

					  </div>
					  <div class="modal-body">
						<p class="lead">Ingrese los datos</p>
						<form method="post" id="myForm">
						  <div class="form-group">
							<label for="name">Codigo del proveedor</label>
							<input type="text" name="CodigoProveedor" id="CodigoProveedor" class="form-control" placeholder="Codigo de proveedor" value="" required/>
						  </div>
						  <div class="form-group">
							<label for="email">Nombre del proveedor</label>
							<input type="text" name="NombreProveedor" id="NombreProveedor" class="form-control" placeholder="Nombre del proveedor" value="" required/>
						  </div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
						<input type="submit" name="AgregarProveedor" class="btn btn-success" value="Registrar proveedor">
					  </div>
					</form>
					</div>
				  </div>
				</div>
				
				<?php
				// Registramos un cheque
				if (isset($_POST['enviar'])) {
					// Obtenemos los valores de todos los campos y los almacenamos en variables
					$NumeroCheque=$_POST['NumeroCheque'];
					$LugarCheque=$_POST['LugarCheque'];
					$FechaCheque=$_POST['FechaCheque'];
					$ProveedorCuenta=$_POST['ProveedorCuenta'];
					$ComentarioCheque=$_POST['ComentarioCheque'];
					$MontoCheque=$_POST['MontoCheque'];
					$ChequeraCuenta=$_POST['ChequeraCuenta'];
					
					// Creamos la consulta para la insersión de los datos
					$Consulta = "INSERT INTO cheque(CodigoCheque, NumeroCheque, LugarCheque, FechaCheque, idProveedor, ComentarioCheque, MontoCheque, idChequera ) 
					Values('".$NumeroCheque."', ".$NumeroCheque.", '".$LugarCheque."', '".$FechaCheque."', ".$ProveedorCuenta.", '".$ComentarioCheque."', ".$MontoCheque.", ".$ChequeraCuenta.");";
						
					if(!$resultado = $mysqli->query($Consulta)){
						echo "Error: La ejecución de la consulta falló debido a: \n";
						echo "Query: " . $Consulta . "\n";
						echo "Error: " . $mysqli->errno . "\n";
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
													<div class="alert alert-success">Cheque registrado</div>
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
				// Termina el registro de proveedor
				if (isset($_POST['AgregarProveedor'])) {
						// Obtenemos los valores de todos los campos y los almacenamos en variables
						$CodigoProveedor=$_POST['CodigoProveedor'];
						$NombreProveedor=$_POST['NombreProveedor'];
						
						// Creamos la consulta para la insersión de los datos
						$Consulta = "INSERT INTO proveedor(CodigoProveedor, NombreProveedor) 
													Values('".$CodigoProveedor."', '".$NombreProveedor."');";
							
						if(!$resultado = $mysqli->query($Consulta)){
							echo "Error: La ejecución de la consulta falló debido a: \n";
							echo "Query: " . $Consulta . "\n";
							echo "Error: " . $mysqli->errno . "\n";
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
														<div class="alert alert-success">Provedor registrado</div>
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
