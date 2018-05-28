<!--
	Módulo de creación de Cuentas
	Viernes, 19 de abril el 2018
	12:51 PM
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
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cuentas<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Crear cuenta</a></li>
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
					<form name="CrearCuenta" action="CrearCuenta.php" method="post">
						<div class="container">
						  <div class="row text-center">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-6 col-xs-offset-3">
									<h1 class="text-center">Registro de cuenta</h1>
									</div>
								</div>
								<!-- Contenedor del ícono -->
								<div class="Icon">
									<!-- Icono de Dolar -->
									<span class="glyphicon glyphicon-piggy-bank"></span>
								</div>
							<!-- Codigo de cuenta -->
							<div class="row">
								<div class="col-xs-10 col-xs-offset-1">
									<div class="input-group input-group-lg">
										<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
										<input type="text" class="form-control" name="CodigoCuenta" placeholder="Codigo de cuenta" id="CodigoCuenta" aria-describedby="sizing-addon1" required>
									</div>
								</div>
							</div>
							<br>
							<!-- Tipo de Cuenta -->
							<div class="row">
								<div class="col-xs-10 col-xs-offset-1">
									<div class="input-group input-group-lg">
										<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-home"></i></span>
										<select class="form-control" name="BancoCuenta" id="BancoCuenta">
										<option value="" disabled selected>Banco</option>
											<!-- Contenido de la tabla -->
												<!-- Acá mostraremos los bancos y seleccionaremos el que deseamos eliminar -->
												<?php							
													$VerBanco = "SELECT * FROM banco";
													// Hacemos la consulta
													$resultado = $mysqli->query($VerBanco);			
														while ($row = mysqli_fetch_array($resultado)){
															?>
															<option value="<?php echo $row['idBanco'];?>"><?php echo $row['NombreBanco'] ?></option>
												<?php
														}
												?>
										</select>
									</div>
								</div>
							</div>
							<br>
							<!-- Número de cuenta -->
							<div class="row">
								<div class="col-xs-10 col-xs-offset-1">
									<div class="input-group input-group-lg">
										<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-usd"></i></span>
										<input type="text" class="form-control" name="NumeroCuenta" placeholder="Número de cuenta" id="NumeroCuenta" aria-describedby="sizing-addon1" required>
									</div>
								</div>
							</div>
							<br>
							<!-- Nombre de la cuenta -->
							<div class="row">
								<div class="col-xs-10 col-xs-offset-1">
									<div class="input-group input-group-lg">
										<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
										<input type="text" class="form-control" name="NombreCuenta" placeholder="Nombre de la cuenta" id="NombreCuenta" aria-describedby="sizing-addon1" required>
									</div>
								</div>
							</div>
							<br>
							<!-- Tipo de Cuenta -->
							<div class="row">
								<div class="col-xs-10 col-xs-offset-1">
									<div class="input-group input-group-lg">
										<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
										<select class="form-control" name="TipoCuenta" id="TipoCuenta">
										<option value="" disabled selected>Seleccione el tipo de cuenta</option>
											<option value="Monetario">Monetario</option>
											<option value="Ahorro">Ahorro</option>
										</select>
									</div>
								</div>
							</div>
							<br>
							<!-- Monto de la cuenta -->
							<div class="row">
								<div class="col-xs-10 col-xs-offset-1">
									<div class="input-group input-group-lg">
										<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
										<input type="number" min="0.00" max="10000000.00" step="0.01" class="form-control" name="SaldoCuenta" placeholder="Saldo" id="SaldoCuenta" aria-describedby="sizing-addon1" required>
									</div>
								</div>
							</div>
							<br>
							<!-- Resgistrar -->
							<div class="row">
								<div class="col-xs-12 col-xs-offset-1">
									<div class="input-group input-group-lg">
										<div clss="btn-group">
											<input type="submit" name="CrearCuenta" class="btn btn-success" value="Crear cuenta">
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
				
				<!-- Registramos la cuenta -->
				<?php
					if (isset($_POST['CrearCuenta'])) {
						// Obtenemos los valores de todos los campos y los almacenamos en variables
						$CodigoCuenta=$_POST['CodigoCuenta'];
						$BancoCuenta=$_POST['BancoCuenta'];
						$NumeroCuenta=$_POST['NumeroCuenta'];
						$NombreCuenta=$_POST['NombreCuenta'];
						$TipoCuenta=$_POST['TipoCuenta'];
						$SaldoCuenta=$_POST['SaldoCuenta'];
						
						$InsertarCuenta = "INSERT INTO cuenta (CodigoCuenta, NumeroCuenta, NombreCuenta, TipoCuenta, SaldoCuenta, idBanco)
														VALUES('".$CodigoCuenta."', '".$NumeroCuenta."', '".$NombreCuenta."', '".
																$TipoCuenta."', '".$SaldoCuenta."', '".$BancoCuenta."');";
																
						if(!$resultado = $mysqli->query($InsertarCuenta)){
							echo "Error: La ejecución de la consulta falló debido a: \n";
							echo "Query: " . $InsertarCuenta . "\n";
							echo "Error: " . $mysqli->errno . "\n";
							exit;
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