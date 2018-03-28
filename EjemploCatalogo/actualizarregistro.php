<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
        <LINK REL="SHORTCUT ICON" HREF="imagenes/icono/natura.ico">
        <title>Modificar un registro</title>
    </head>
    <?php
    include_once 'seguro.php';
        if($_SESSION["admin"] == 'sipi'){
    ?>
    <body onload="javascript:document.modificar.producto.focus ();">
        <header id="botonera">
 <nav id="botonera-2">
        <menu> <a href="index.html"><span>Inicio</span></a></menu>
        <menu> <a href="ingresarproductos.php"><span>Ingresar Productos</span></a></menu>
        <menu> <a href="registrarusuarios.php"><span>Agregar Usuarios</span></a></menu>
        <menu> <a href="borrarusuario.php"><span>Borrar Usuarios</span></a></menu>
        <menu> <a title="Cerra Sesión" href="logout.php">Cerrar sesión</a></menu>
    </nav>
        <h1>Ingrese el código o nombre del producto que desea modificar</h1>
            <FORM NAME="modificar" class="busqueda" METHOD="POST" ACTION="mostrareingresardatosparactualizar.php">
                    <input type="search" name="producto">
                    <input type="submit" name="enviar" value="Buscar">
            </FORM>
    </body>
    <style>
        aside{
            float: right;
        }
        nav menu{
            list-style: none;
            margin: 0 10px 0 10px;
            padding: 0;
            position: relative;
            left: 50%;
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
            position: relative;
            right: 50%;
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
            position: relative;
            right: 50%;
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
        <?php } else{
          header("location:login.php");
        }
        ?>
</html>
