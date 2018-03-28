<!DOCTYPE html>
<?php
       include_once 'conexion.php';
       include_once 'seguro.php';
       if($_SESSION["admin"] == 'sipi'){
       ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <LINK REL="SHORTCUT ICON" HREF="imagenes/icono/natura.ico">
        <title>Registrar Usuarios</title>
    </head>
    <body onload="javascript:document.registro.usuario.focus ();"> 
<style>
    aside{
            float: right;
        }
        nav menu{
            list-style: none;
            margin: 0 10px 0 10px;
            padding: 0;
        }

        nav menu a{
            -webkit-border-radius: 5px;
            -o-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            border-radius: 5px;
            float: left;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            text-shadow: 0px 1px 0px #FFF;
        }
        nav menu a:hover{
            background-image: -webkit-gradient(linear, left top, left bottom, from(#FFF), to (#CCC));
            background-image: -moz-linear-gradient(top center, #FFF, #CCC);
            background-image: -o-linear-gradient(top, #FFF, #CCC);
            background-image: -ms-linear-gradient(top, #FFF, #CCC);
            -webkit-box-shadow: 1px -1px 0px #999;
            -ms-box-shadow: 1px -1px 0px #999;
            -moz-box-shadow: 1px -1px 0px #999;
            -o-box-shadow: 1px -1px 0px #999;
            box-shadow: 1px -1px 0px #999;
            border: 1px solid #E3E3E3;
        }

        nav menu:a{
            color: #999;
            display: block;
            padding: 10px;
            text-decoration: none;
            -webkit-transition: 0.4s linear all;
            -moz-transition: 0.4s linear all;
            -ms-transition: 0.4s linear all;
            -o-transition: 0.4s linear all;
            transition: 0.4s linear all;
        }

        nav menu a:hover{
            color:#000;
        }
form.registro div { 
margin-bottom: 15px; 
overflow: hidden; 
} 
form.registro div label { 
display: block; 
float: left; 
line-height: 25px; 
} 
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
.error{ 
color: red; 
font-weight: bold; 
margin: 10px; 
text-align: center; 
} 
</style> 
               <header id="botonera">
 <nav id="botonera-2">
        <menu> <a href="index.html"><span>Inicio</span></a></menu>
        <menu> <a href="ingresarproductos.php"><span>Registrar productos</span></a></menu>
        <menu> <a href="ingresarproductos.php"><span>Borrar productos</span></a></menu>
        <menu> <a href="borrarusuario.php"><span>Borrar usuarios</span></a></menu>
        <menu> <a title="Cerra Sesión" href="logout.php">Cerrar sesión</a></menu>
        <aside> 
                   <FORM METHOD="POST" ACTION="buscarproducto.php">
                       <label>Buscar producto:</label><input type="text" name="producto">
                   <input type="submit" name="enviar" value="Buscar">
                   </FORM>
         </aside>    
    </nav>
<br><h1>Ingrese los datos para el nuevo usuario</h1><br>
<form name="registro" action="" method="post" class="registro"> 
<div><label>Usuario:</label> 
<input type="text" name="usuario"></div> 
<div><label>Clave:</label> 
<input type="password" name="password"></div> 
<div><label>Repetir clave:</label> 
    <input type="password" name="repassword"></div> 
    <label>Administrador : </label><input type="checkbox" name="admin">
<div> 
<input type="submit" name="enviar" value="Registrar"></div> 
</form> 
<?php 
if(isset($_POST['enviar'])) 
{ 
if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '') 
{ 
echo "<script languaje='javascript'>
              alert('Los campos no pueden ir vacios');
              </script>"; 
} 
else 
{ 
$sql = 'SELECT * FROM usuarios'; 
$rec = mysql_query($sql); 
$verificar_usuario = 0;
$pass = md5($_POST['password']);
$repass = md5($_POST['repassword']);
$privilegio = "usuario";

if(isset($_POST['admin'])){
    
$admin = $_POST['admin'];

if($admin == "on"){
    $privilegio = "admin";
}
}

while($result = mysql_fetch_object($rec)) 
{ 
if($result->usuario == $_POST['usuario']) 
{ 
$verificar_usuario = 1; 
} 
}
if($verificar_usuario == 0) 
{ 
if($pass == $repass) 
{ 
$usuario = $_POST['usuario']; 
$sql = "INSERT INTO usuarios (usuario,password,privilegios) VALUES ('$usuario','$pass','$privilegio')"; 
mysql_query($sql); 

echo "<script languaje='javascript'>
              alert('Se ha registrado Exitosamente');
              </script>";
} 
else 
{ 
echo "<script languaje='javascript'>
              alert('Las claves no son iguales intente nuevamente');
              </script>"; 
} 
} 
else 
{ 
echo "<script languaje='javascript'>
              alert('Ya existe un usuario con el mismo nombre');
              </script>"; 
} 
} 
}
?> 
    </body>
                <?php } else{
          header("location:login.php");
        }
        ?>
</html>