<!DOCTYPE html>
<html>
    <head>
        <title>Catálogo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
        <LINK REL="SHORTCUT ICON" HREF="imagenes/icono/icono.ico">
    </head>
    <body>
            <?php
    @session_start();
    if($_SESSION["autentica"] == "SIP" && ($_SESSION["usuario"] == 'sipi' || $_SESSION["admin"] == 'sipi')){
    ?>
         <nav>
               <ul>
                   <li><a title="Inicio" href="index.html">Inicio</a></li>
                   <li><a title="Opciones de administrador" href="opcionesdeadmin.php">Opciones de administrador</a></li>
                   <li><a title="Cerra Sesión" href="logout.php">Cerrar sesión</a></li>
                   <aside>
                       <FORM METHOD="POST" ACTION="resultadodebusqueda.php">
                           Buscar producto:
                           <input type="text" name="producto">
                           <input type="submit" name="enviar" value="Buscar">
                       </FORM>
                   </aside>
               </ul>
           </nav>
        <br><form>
              <?php
include_once "conexion.php";
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
 
                echo "<table><tr>";
 
                $nombres_imagenes = explode("|", $result->imagenes);
                $cantidad = count($nombres_imagenes);
                $i = 0;
                          while ($i != $cantidad){
                              echo "<td>";
                                $carpeta = $result->nombre;
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
                ?>
            <FORM><h3>Descripción</h3>
               <?php
               $nombre_en_mayusculas = strtoupper($result->nombre);
               $codigo_en_mayusculas = strtoupper($result->codigo);
               $mensaje = "Estimados Señores: %0D%0A%0D%0ASírvase proporcionarnos una cotización para el siguiente producto: %0D%0A%0D%0A".$codigo_en_mayusculas.' | '.$nombre_en_mayusculas."%0D%0A%0D%0APara más detalles del producto por favor ingrese a la página: www.catalogodeproductos.net63.net %0D%0A%0D%0ASaludos,%0D%0A";
               $asunto = "COTIZACIÓN DE PRODUCTO";
                        echo "<table border = 1>
                                         <tr><td>Código de producto</td><td>Nombre del producto</td><td>Familia de poducto</td><td>U/M</td><td>Marca</td><td>Descripción</td><td>Especificaciones</td></tr>
                                         <td>$codigo_en_mayusculas</td><td>$nombre_en_mayusculas</td><td>$result->familia</td><td>$result->unidadomedida</td><td>$result->marca</td><td>$result->descripcion</td><td>$result->especificaciones</td></tr>
                              </table>";
                        
               echo "<br><h3>Proveedores sugeridos</h3>
               <table border='1'>
                <tr>
                    <td></td><td>Nombre o razón social</td><td>Nombre del contacto</td><td>Teléfono</td><td>Correo</td>
                </tr>
                <tr><td>Proveedor 1:</td><td>$result->provNombre1</td><td>$result->provContacto1</td><td>$result->provTelefono1</td><td><a href='mailto:$result->provCorreo1?subject=$asunto&body=$mensaje'>$result->provCorreo1</a></td></tr>
                <tr><td>Proveedor 2:</td><td>$result->provNombre2</td><td>$result->provContacto2</td><td>$result->provTelefono2</td><td><a href='mailto:$result->provCorreo2?subject=$asunto&body=$mensaje'>$result->provCorreo2</a></td></tr>
                <tr><td>Proveedor 3:</td><td>$result->provNombre3</td><td>$result->provContacto3</td><td>$result->provTelefono3</td><td><a href='mailto:$result->provCorreo3?subject=$asunto&body=$mensaje'>$result->provCorreo3</a></td></tr>
                <tr><td>Porveedor 4:</td><td>$result->provNombre4</td><td>$result->provContacto4</td><td>$result->provTelefono4</td><td><a href='mailto:$result->provCorreo4?subject=$asunto&body=$mensaje'>$result->provCorreo4</a></td></tr>
                <tr><td>Proveedor 5:</td><td>$result->provNombre5</td><td>$result->provContacto5</td><td>$result->provTelefono5</td><td><a href='mailto:$result->provCorreo5?subject=$asunto&body=$mensaje'>$result->provCorreo5</a></td></tr>
            </table>";
               echo "<br><h3>Observaciones<h3><table border='1'><tr><td colspan='5'><textarea cols='50' rows='5' disabled='disabled'>$result->observaciones</textarea></td></tr></table>";
                        break;
                    }
                }
    }
   }
 
?></form>
           <style>
               .sesion{
                   float: right;
               }
               aside{
                   float: right;
               }
               body h3{
                   alignment-adjust: middle;
               }
               form{
                   width: auto;
               }
               h3{
                   text-align: center;
               }
               
               form.busqueda{
                   width: 225px;
                   height: auto;
                   float: right;
               }
               table{
                   font-size: 12px;
               }
           </style>
                      <?php 
                      if ($result == false){
                    echo "<script languaje='javascript'>
                          alert('Este producto no existe');
                          history.back();
                          </script>";
                      }
    }
           else{
     header("location:login.php");
           }
?>
</body>
</html>