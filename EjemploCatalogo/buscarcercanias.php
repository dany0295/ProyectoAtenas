<!DOCTYPE html>
<html>
    <head>
        <title>Catálogo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
        <LINK REL="SHORTCUT ICON" HREF="imagenes/icono/natura.ico">
    </head>
    <body>
         <nav>
               <ul>
                   <li><a title="Inicio" href="index.html">Inicio</a></li>
                   <li><a title="Opciones del Administrador" href="login.php">Opciones de administrador</a></li>
               </ul>
         </nav>
        <br><h1>Ingrese producto a buscar</h1><br>
                       <FORM class="busqueda" METHOD="POST" ACTION="buscarcercanias.php">
                           <input type="text" name="producto">
                           <input type="submit" name="enviar" value="Buscar">
                       </FORM><br><br>
               <?php
               include_once "conexion.php";
               if (isset($_POST['enviar'])) {
    if ($_POST['producto'] == '') {
        echo "<script languaje='javascript'>
              alert('Los campos no pueden ir vacios');
              history.back();
              </script>";
    } else {
        $producto = strtolower($_POST['producto']);
        $producto = preg_replace('[\s+]','', $producto);
        $sql = "SELECT * FROM listado_de_productos WHERE (codigo LIKE '%$producto%') OR (nombre LIKE '%$producto%') ORDER BY nombre";
        $rec = mysql_query($sql);
        $mostrar_producto = false;
        
        while($result = mysql_fetch_object($rec)) 
                {
                $nombre_producto = strtolower($result->nombre);
                $nombre_producto = preg_replace('[\s+]','', $nombre_producto);
                if($result->codigo == $producto)
                    { 
                        $mostrar_producto = true;                    
                    }
                    else if ($nombre_producto == $producto)
                    {
                        $mostrar_producto = true;
                    }
                    if ($mostrar_producto == true){  
                $nombres_imagenes = explode("|", $result->imagenes);
                $cantidad = count($nombres_imagenes);
                $i = 0;
                          
                          
               $nombre_en_mayusculas = strtoupper($result->nombre);
               $codigo_en_mayusculas = strtoupper($result->codigo);
                        echo "<form><table border = 1>
                                         <div class='barraennegrita'><tr><td>Código de producto</td><td>Nombre del Producto</td><td>Familia del producto</td><td>U/M</td><td>Marca</td><td>Descripcion</td><td>Especificaciones</td></div><td rowspan='2' style = 'vertical-align:middle; text-align:center;'>";
                                         while ($i != $cantidad){
                                $carpeta = eregi_replace("/", " ", $result->nombre);
                                $carpeta = trim($carpeta, " ");
                                $carpeta = eregi_replace(" ", "_", $carpeta);
                   echo "<div class='imagenes'><img src='imagenes/$carpeta/$nombres_imagenes[$i]'></div>";
                                         $i++;
                                         }
                                   echo "</td></tr>
                                         <td>$codigo_en_mayusculas</td><td>$nombre_en_mayusculas</td><td>$result->familia</td><td>$result->unidadomedida</td><td>$result->marca</td><td>$result->descripcion</td><td>$result->especificaciones</td></tr>
                              </table><br></FORM>";
                
                    }        
                                         }
        
        if($mostrar_producto == false){
            echo "<h3>El producto que está buscando no existe o no ha escrito bien el nombre o código<h3>";
        }
        
    }
}
?>
           <style>
               body h3{
                   alignment-adjust: middle;
               }
               form{
                   width: auto;
               }
               img{
                   width: 100px;
                   width: 100px;
               }
               form.busqueda{
                   width: 225px;
                   height: auto;
               }
               table{
                   font-size: 12px;
                   background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%); /* FF3.6+ */
                   background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(100%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
                   background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* Chrome10+,Safari5.1+ */
                   background: -o-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* Opera 11.10+ */
                   background: -ms-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* IE10+ */
                   background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* W3C */
                   filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#00ffffff',GradientType=0 ); /* IE6-9 */

               }
               .imagenes{
                   width: 100px;
                   height: 100px;
               }
              form.busqueda input[type="text"]{
                 border-radius: 4px;
                 padding: 3px;
              }
              form.busqueda input[type="submit"]{
                  float: right;
                  border-radius: 4px;
                  font-family: Arial, Helvetica, sans-serif;
                  font-size: 16px;
              }
           </style>
</body>
</html>