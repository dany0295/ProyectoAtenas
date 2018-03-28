<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
        <LINK REL="SHORTCUT ICON" HREF="imagenes/icono/natura.ico">
        <title>Opciones de administrador</title>
    </head>
    <body>
        <?php
       include_once 'conexion.php';
       include_once 'seguro.php';
       if($_SESSION["admin"] == 'sipi'){
       ?>
        <br><label><h1>Opciones de Administrador</h1></label><br>
<header id="botonera">
 <nav id="botonera-2">
        <menu> <a href="index.html"><span>Inicio</span></a></menu>
        <menu><a title="Producto con detalles" href="busqueda.php">Ver producto detallado</a></li></menu>
        <menu> <a href="borrarregistro.php"><span>Borrar registro</span></a></menu>
        <menu> <a href="ingresarproductos.php"><span>Registrar productos</span></a></menu>
        <menu> <a href="registrarusuarios.php"><span>Agregar usuarios</span></a></menu>
        <menu> <a href="borrarusuario.php"><span>Borrar usuarios</span></a></menu>
        <menu> <a href="actualizarregistro.php"><span>Actualizar registro</span></a></menu>
        <menu> <a href="mostrarusuarios.php"><span>Mostrar usuarios registrados</span></a></menu>
        <menu> <a title="Cerra Sesión" href="logout.php">Cerrar sesión</a></menu>   
    </nav>
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

    </style>
</header>
</body>
            <?php } else{
          header("location:login.php");
        }
        ?>
</html>
