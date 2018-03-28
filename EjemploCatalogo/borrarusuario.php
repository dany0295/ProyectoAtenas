<!DOCTYPE html>
<html>
    <head>
        <title>Catálogo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
    </head>
       <?php
       include_once 'conexion.php';
       include_once 'seguro.php';
       if($_SESSION["admin"] == 'sipi'){
       ?>
          <?php
if(isset($_POST['enviar']))
    {
    if($_POST['producto'] == '') 
        {
        echo "<script languaje='javascript'>
              alert('El campo no pueden ir vacio');
              </script>";
        }
        else 
            {
            $producto = $_POST['producto'];
            $producto = preg_replace('[\s+]','', $producto);
          $sql = "delete from usuarios where usuario = '$producto'";
          mysql_query($sql);
              if (mysql_query($sql) == true){
                  echo "<script languaje='javascript'>
                          alert('Usuario borrado correctamente');
                          </script>";
              }
            else{
                echo "<script languaje='javascript'>
                          alert('Este usuario no existe');
                          </script>";
            }
            }
       }
          ?>
    <body onload="javascript:document.usuarioeliminar.producto.focus ();">
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
        form.busqueda input[type="text"]{
                 border-radius: 4px;
                 padding: 3px;
                 width: 145px;
              }
        form.busqueda input[type="submit"]{
                  float: right;
                  border-radius: 4px;
                  font-family: Arial, Helvetica, sans-serif;
                  font-size: 16px;
              } 
</style> 
           <nav>
        <menu> <a href="index.html"><span>Inicio</span></a></menu>
        <menu> <a href="ingresarproductos.php"><span>Ingresar productos</span></a></menu>
        <menu> <a href="borrarregistro.php"><span>Borrar productos</span></a></menu>
        <menu> <a href="registrarusuarios.php"><span>Agregar usuarios</span></a></menu>
        <menu> <a title="Cerra Sesión" href="logout.php">Cerrar sesión</a></menu>
        <aside> 
            <FORM class="busqueda" METHOD="POST" ACTION="buscarproducto.php">
                       <label>Buscar producto:</label><input type="text" name="producto">
                   <input type="submit" name="enviar" value="Buscar">
                   </FORM>
         </aside>    
    </nav>
    <h1>Ingrese el usuario que desea eliminar</h1>
        <FORM NAME="usuarioeliminar" CLASS="busqueda" METHOD="POST" ACTION="borrarusuario.php">
            <input type="text" name="producto">
            <input type="submit" name="enviar" value="Buscar">
        </FORM>  
</body>
        <?php } else{
          header("location:login.php");
        }
        ?>
</html>