<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <LINK REL="SHORTCUT ICON" HREF="imagenes/icono/natura.ico">
        <title></title>
    </head>
    <body>
        <?php
			//Reanudamos la sesión
			@session_start();

			//Validamos si existe realmente una sesión activa o no
			if(($_SESSION["autentica"] != "SIP") && ($_SESSION["admin"] = 'nopi')){
			//Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión)
			header("Location: login.php");
			exit();
			}
		?>
    </body>
</html>
