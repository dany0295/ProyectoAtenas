<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
        <LINK REL="SHORTCUT ICON" HREF="imagenes/icono/natura.ico">
        <title>Actualizar registro</title>
    </head>
    <body onload="javascript:document.muestra.num3.focus ();"><?php
        include_once "conexion.php";
        include_once 'seguro.php';
        if($_SESSION["admin"] == 'sipi'){
            ?>
        <header id="botonera">
 <nav id="botonera-2">
        <menu> <a href="index.html"><span>Inicio</span></a></menu>
        <menu> <a href="ingresarproductos.php"><span>Ingresar productos</span></a></menu>
        <menu> <a href="registrarusuarios.php"><span>Agregar usuarios</span></a></menu>
        <menu> <a href="borrarusuario.php"><span>Borrar usuarios</span></a></menu>
        <menu> <a title="Cerra Sesión" href="logout.php">Cerrar sesión</a></menu>
    </nav>
        <style>
               form.muestra{
                   width: auto;
               }
               h3{
                   text-align: center;
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
            <h1>Ingrese los datos nuevos datos del producto</h1>
        <?php
if(isset($_POST['enviar']))
    { 
    if($_POST['producto'] == '') 
        {
        echo "<script languaje='javascript'>
              alert('Los campos no pueden ir vacios');
              history.back();
              </script>";
        }
        else 
            { 
            $mostrar_producto = false;
            $producto = strtolower($_POST['producto']);
            $producto = preg_replace('[\s+]','', $producto);
            $sql = 'SELECT * FROM listado_de_productos'; 
            $rec = mysql_query($sql); 
 
            while($result = mysql_fetch_object($rec)) 
                {
                $nombre_producto = strtolower($result->nombre);
                $nombre_producto = preg_replace('[\s+]','', $nombre_producto);
                $codigo = strtolower($result->codigo);
                $codigo = preg_replace('[\s+]','', $codigo);
                if($codigo == $producto)
                    { 
                        $mostrar_producto = true;                    
                    }
                    else if ($nombre_producto == $producto)
                    {
                        $mostrar_producto = true;
                    }
                    if ($mostrar_producto == true){ 
 
                echo "<form class='muestra'><table><tr>";
 
                $nombres_imagenes = explode("|", $result->imagenes);
                $cantidad = count($nombres_imagenes);
                $i = 0;
                          while ($i != $cantidad){
                              echo "<td>";
                                $carpeta = eregi_replace("/", " ", $result->nombre);
                                $caracteres_no_permitidos = array(' ','°', '"', '!', '@', '#', '$', '%', '^', '&', '*', ':', '\'', '/', '\\', ':', '*', '?', '>', '<', '.', '|');
                                $a = array('[áàâãªÁÀÂÃ]', '[éèêÉÈÊ]', '[íìîÍÌÎ]', '[óòôõºÓÒÔÕ]', '[úùûÚÙÛ]', '[ñÑ]', ' ');
                                $b = array('a', 'e', 'i', 'o', 'u', 'n', '_');
                                $carpeta = str_replace($caracteres_no_permitidos, "_", $carpeta);
                                $carpeta = str_ireplace($a, $b, $carpeta);
                                $carpeta = eregi_replace(" ", "_", $carpeta);
                                $carpeta = ltrim($carpeta, "_");
                                $carpeta = rtrim($carpeta, "_");
                   echo "<div class='imagenes'><img src='imagenes/$carpeta/$nombres_imagenes[$i]'></div>";
                                $i++;
                               echo "</td>";
                          }
                echo "</tr></table></form><br><br>";
                $codigo_en_mayusculas = strtoupper($result->codigo);
                ?>
            <FORM name="muestra" class="muestra" METHOD="POST" ACTION="update.php">
                   <input type="text" name="productoacambiar" value=" <?php echo "$result->idproducto"; ?>" style="visibility: hidden"> 
                   <input type="text" name="nombreproducto" value=" <?php echo "$result->nombre"; ?>" style="visibility: hidden"> 
                   <h3>Descripción</h3>
               <?php
               $nombre_en_mayusculas = strtoupper($result->nombre);
               
               ?>
                        <table>
                                         <tr><td>Código de producto</td><td>Nombre del producto</td><td>Familia de producto</td><td>U/M</td><td>Marca</td><td>Descripción</td><td>Especificaciones</td></tr>
                                         <td><input type="text" name="num1" value=" <?php echo "$codigo_en_mayusculas"; ?> "></td><td><input type="text" name="num2" disabled="disabled" value=" <?php echo "$nombre_en_mayusculas"; ?>"/></td><td><input type="text" name="num3" value=" <?php echo "$result->familia" ?> "/></td><td><input type="text" name="num4" value="<?php echo "$result->unidadomedida"; ?>"/></td><td><input type="text" name="num5" value=" <?php echo "$result->marca"; ?>"/></td><td><textarea cols='20' rows='5' name='num6'><?php echo "$result->descripcion"; ?></textarea></td><td><textarea cols='20' rows='5' name='num7'><?php echo "$result->especificaciones"; ?></textarea></td></tr>
                              </table>
                        
               <br><h3>Proveedores sugeridos</h3>
               <table>
                <tr>
                    <td></td><td>Nombre o razón social</td><td>Nombre del contacto</td><td>Teléfono</td><td>Correo</td>
                </tr>
                <tr><td>Proveedor 1:</td><td><textarea cols="10" rows ="1" name ="proveedornombre1"><?php echo"$result->provNombre1"; ?></textarea></td><td><textarea cols="10" rows ="1" name ="proveedorcontacto1"><?php echo"$result->provContacto1"; ?></textarea></td><td><input type="number" name ="proveedortelefono1" value=" <?php echo"$result->provNombre1"; ?>"></td><td><input type="email" name ="proveedorcorreo1" Value=" <?php echo "$result->provCorreo1"; ?>"></td></tr>
                <tr><td>Proveedor 2:</td><td><textarea cols="10" rows ="1" name ="proveedornombre2"><?php echo"$result->provNombre2"; ?></textarea></td><td><textarea cols="10" rows ="1" name ="proveedorcontacto2"><?php echo"$result->provContacto2"; ?></textarea></td><td><input type="number" name ="proveedortelefono2" value=" <?php echo"$result->provNombre2"; ?>"></td><td><input type="email" name ="proveedorcorreo2" Value=" <?php echo "$result->provCorreo2"; ?>"></td></tr>
                <tr><td>Proveedor 3:</td><td><textarea cols="10" rows ="1" name ="proveedornombre3"><?php echo"$result->provNombre3"; ?></textarea></td><td><textarea cols="10" rows ="1" name ="proveedorcontacto3"><?php echo"$result->provContacto3"; ?></textarea></td><td><input type="number" name ="proveedortelefono3" value=" <?php echo"$result->provNombre3"; ?>"></td><td><input type="email" name ="proveedorcorreo3" Value=" <?php echo "$result->provCorreo3"; ?>"></td></tr>
                <tr><td>Porveedor 4:</td><td><textarea cols="10" rows ="1" name ="proveedornombre4"><?php echo"$result->provNombre4"; ?></textarea></td><td><textarea cols="10" rows ="1" name ="proveedorcontacto4"><?php echo"$result->provContacto4"; ?></textarea></td><td><input type="number" name ="proveedortelefono4" value=" <?php echo"$result->provNombre4"; ?>"></td><td><input type="email" name ="proveedorcorreo4" Value=" <?php echo "$result->provCorreo4"; ?>"></td></tr>
                <tr><td>Proveedor 5:</td><td><textarea cols="10" rows ="1" name ="proveedornombre5" ><?php echo"$result->provNombre5"; ?></textarea></td><td><textarea cols="10" rows ="1" name ="proveedorcontacto5"><?php echo"$result->provContacto5"; ?></textarea></td><td><input type="number" name ="proveedortelefono5" value=" <?php echo"$result->provNombre5"; ?>"></td><td><input type="email" name ="proveedorcorreo5" Value=" <?php echo "$result->provCorreo5"; ?>"></td></tr>
                <tr><td>Observaciones:</td><td colspan="4"><textarea cols="50" rows="5" name="observaciones"><?php echo"$result->observaciones";?></textarea></td></tr>
            </table>
               <?php
               break;
                    }
                }
    }
   }
               if ($result == false){
                    echo "<script languaje='javascript'>
                          alert('Este producto no existe');
                          history.back();
                          </script>";
                }
                
?><input type="submit" Value="Actualizar" name="enviar"></FORM>
    </body>
            <?php } else{
          header("location:login.php");
        }
        ?>
</html>
