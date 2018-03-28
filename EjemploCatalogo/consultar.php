<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
        <title>Resultados</title>
    </head>
             <nav>
               <ul>
                   <li><a title="Inicio" href="index.html">Inicio</a></li>
                   <li><a title="Opciones del Administrador" href="login.php">Opciones de administrador</a></li>
                   <aside>
                       <FORM class ="busqueda" METHOD="POST" ACTION="consultar.php">
                           Buscar producto:
                           <input type="text" name="producto">
                           <input type="submit" name="enviar" value="Buscar">
                       </FORM>
                   </aside>
               </ul>
           </nav>
        <br>
    <body>
                 <?php
               include_once "conexion.php";
               if (isset($_POST['enviar'])) {
    if ($_POST['producto'] == '') {
        echo "<script languaje='javascript'>
              alert('Los campos no pueden ir vacios');
              history.back();
              </script>";
    } else {
        $verdadero = false;
        $producto = strtolower($_POST['producto']);
        $sql = "SELECT * FROM listado_de_productos WHERE (codigo LIKE '%$producto%') OR (nombre LIKE '%$producto%') ORDER BY nombre";
        $rec = mysql_query($sql);
        echo "<h3>Se muestran los resultados de busqueda de \"".$_POST['producto']."\"</h3>";
         
        while ($result = mysql_fetch_object($rec)) {
            $verdadero = true;
            $familia = $result->familia;
            $unidadomedida = $result->unidadomedida;
            $marca = $result->marca;
            $descripcion = $result->descripcion;
            $especificaciones = $result->especificaciones;
            {
                $nombres_imagenes = explode("|", $result->imagenes);
                $cantidad = count($nombres_imagenes);
                $i = 0;
                
                $nombre_en_mayusculas = strtoupper($result->nombre);
                $codigo_en_mayusculas = strtoupper($result->codigo);
                
                if($familia == "" || $unidadomedida == "" || $marca == "" || $descripcion == "" || $especificaciones == ""){
                    
                }
                
                echo "<br><table border = 1>
                                         <tr><td>Código de producto</td><td>Nombre del Producto</td><td>Familia de Producto</td><td>U/M</td><td>Marca</td><td>Descripcion</td><td>Especificaciones</td><td rowspan='8'>";
                while ($i != $cantidad) {
                    
                    $carpeta = eregi_replace("/", " ", $result->nombre);
                    $carpeta = eregi_replace(" ", "_", $carpeta);
                    echo "<img src='imagenes/$carpeta/$nombres_imagenes[$i]'>";
                    $i++;
                }
                
                echo "</td></tr><tr><td>".$codigo_en_mayusculas."</td><td>".$nombre_en_mayusculas."</td><td>" . $familia . "</td><td>" . $unidadomedida . "</td><td>" . $marca . "</td><td>" . $descripcion . "</td><td>" . $especificaciones . "</td></tr>
                      </table><br><table>
                      <tr><td></td><td>Nombre o Razon Social</td><td>Nombre del Contacto</td><td>Telefono</td><td>eMail</td></tr>
                      <tr><td>Proveedor 1:</td><td>$result->provNombre1</td><td>$result->provContacto1</td><td>$result->provTelefono1</td><td><a href='mailto:$result->provCorreo1'>$result->provCorreo1</a></td></tr>
                <tr><td>Proveedor 2:</td><td>$result->provNombre2</td><td>$result->provContacto2</td><td>$result->provTelefono2</td><td><a href='mailto:$result->provCorreo2'>$result->provCorreo2</a></td></tr>
                <tr><td>Proveedor 3:</td><td>$result->provNombre3</td><td>$result->provContacto3</td><td>$result->provTelefono3</td><td><a href='mailto:$result->provCorreo3'>$result->provCorreo3</a></td></tr>
                <tr><td>Porveedor 4:</td><td>$result->provNombre4</td><td>$result->provContacto4</td><td>$result->provTelefono4</td><td><a href='mailto:$result->provCorreo4'>$result->provCorreo4</a></td></tr>
                <tr><td>Proveedor 5:</td><td>$result->provNombre5</td><td>$result->provContacto5</td><td>$result->provTelefono5</td><td><a href='mailto:$result->provCorreo5'>$result->provCorreo5</a></td></tr>
                              </table>";
            }
        } 
        if ($verdadero != true){
            echo "<h3>El producto que está buscando no exite o no ha escrito bien el nombre</h3>";
        }
        
    }
}
?>
        <style>
            .busqueda{
                float: right;
            }
            table{
                font-size: 14px;
            }
            img{
                width: 100px;
                height: 100px;
            }
        </style>
    </body>
</html>
