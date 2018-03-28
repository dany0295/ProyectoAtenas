<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
        <LINK REL="SHORTCUT ICON" HREF="imagenes/icono/natura.ico">
        <title>Borrar Registros</title>
    </head>
         <?php
       include_once 'conexion.php';
       include_once 'seguro.php';
               if($_SESSION["admin"] == 'sipi'){
    ?>
    <body onload="javascript:document.eliminar.producto.focus ();">
        
        <nav id="botonera-2">
        <menu> <a href="index.html"><span>Inicio</span></a></menu>
        <menu> <a href="ingresarproductos.php"><span>Registrar productos</span></a></menu>
        <menu> <a href="registrarusuarios.php"><span>Agregar usuarios</span></a></menu>
        <menu> <a href="borrarusuario.php"><span>Borrar usuarios</span></a></menu>
        <menu> <a title="Cerra Sesión" href="logout.php">Cerrar sesión</a></menu>
        <aside> 
            <FORM METHOD="POST" ACTION="buscarproducto.php"> 
                       <label>Buscar producto:</label><input type="text" name="producto">
                   <input type="submit" name="enviar" value="Buscar">
                   </FORM>
         </aside>    
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
        form input[type="text"]{
                 border-radius: 4px;
                 padding: 3px;
                 width: 145px;
              }
              form input[type="submit"]{
                  float: right;
                  border-radius: 4px;
                  font-family: Arial, Helvetica, sans-serif;
                  font-size: 16px;
              }
    </style>
        
        <h1>Ingrese el código o nombre del producto que desea eliminar</h1>
        <FORM NAME="eliminar" METHOD="POST" ACTION="eliminar.php">
            <input type="text" name="producto">
            <input type="submit" name="enviar" value="Buscar">
        </FORM>        
    </body>
            <?php } else{
          header("location:login.php");
        }
        ?>
</html>
