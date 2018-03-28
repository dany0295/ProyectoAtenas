<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
        <LINK REL="SHORTCUT ICON" HREF="imagenes/icono/natura.ico">
        <title>Login</title>
    </head>
    <body onload="javascript:document.login.usuario.focus ();">
           <nav>
               <ul>
                   <li><a title="Inicio" href="index.html">Inicio</a></li>
               </ul>
           </nav>
                   <style>
              form.registro div input[type="text"], form.registro div input[type="password"]{
                 float: right;
                 border-radius: 4px;
                 padding: 3px;
              }
              form.registro div input[type="submit"]{
                  float: bottom;
                  border-radius: 4px;
                  font-family: Arial, Helvetica, sans-serif;
                  font-size: 16px;
              }
           </style>
           <h1>Ingrese su nombre de usuario y contraseña</h1>
<form name="login" action="login.php" method="post" class="registro"> 
<div><label>Usuario:</label><input type="text" name="usuario"></div><br>
<div><label>Clave:</label><input type="password" name="password"></div><br>
<div><input type="submit" name="enviar" value="Ingresar"></div> 
</form> 

 <?php
        include_once "conexion.php";
	
        if (isset($_POST['enviar'])) {
    if ($_POST['usuario'] == '' or $_POST['password'] == '') {
        echo "<script languaje='javascript'>
              alert('Los campos no pueden ir vacios');
              </script>";
    } else {
        $sql = 'SELECT * FROM usuarios';
        $rec = mysql_query($sql);
        $password = md5($_POST['password']);

        while ($result = mysql_fetch_object($rec)) {
            if ($result->usuario == $_POST['usuario']) {
                if($result->password == $password){
                    if($result->privilegios == 'admin'){
                    session_start();
                    $_SESSION['autentica'] = 'SIP';
                    $_SESSION['usuario'] = "$result->usuario";
                    $_SESSION['admin'] = 'sipi';
                    header("location: opcionesdeadmin.php");
                }
                else if($result->privilegios == 'usuario'){
                session_start();
                    $_SESSION['autentica'] = 'SIP';
                    $_SESSION['usuario'] = "$result->usuario";
                    $_SESSION['admin'] = 'nopi';
                    $_SESSION['usuario'] = 'sipi';
                    header("location: busqueda.php");
                }
                }
                else{
                    echo "<script languaje='javascript'>
                          alert('Contraseña inválida');
                          </script>";
                    break;
                }
                }
            /* else{
                 echo "<script languaje='javascript'>
                      alert('Los campos no pueden ir vacios');
                      </script>"; 
            }*/
            }
        }
    }
?> 
    </body>
</html>
