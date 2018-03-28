<!DOCTYPE html>
<html>
    <head>
        <title>Catálogo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
        <LINK REL="SHORTCUT ICON" HREF="imagenes/icono/natura.ico">
    </head>
       <body>
           <?php
           include_once 'seguro.php';
           include_once 'conexion.php';
           
           if($_SESSION["admin"] == 'sipi'){
               // DATOS DEL PRODUCTO
           $codigo = strtolower($_POST['num1']);
           $nombre = strtolower($_POST['num2']);
           $familia = ($_POST['num3']);
           $unidadomedida = ($_POST['num4']);
           $marca = ($_POST['num5']);
           $descripcion = ($_POST['num6']);
           $especificaciones = ($_POST['num7']);
           // PROVEEDORES SUGERIDOS DEL PRODUCTO
           {
               // Nombre
               $proveedornombre1 = $_POST['proveedornombre1'];
               $proveedornombre2 = $_POST['proveedornombre2'];
               $proveedornombre3 = $_POST['proveedornombre3'];
               $proveedornombre4 = $_POST['proveedornombre4'];
               $proveedornombre5 = $_POST['proveedornombre5'];
               $proveedorcontacto1 = $_POST['proveedorcontacto1'];
               $proveedorcontacto2 = $_POST['proveedorcontacto2'];
               $proveedorcontacto3 = $_POST['proveedorcontacto3'];
               $proveedorcontacto4 = $_POST['proveedorcontacto4'];
               $proveedorcontacto5 = $_POST['proveedorcontacto5'];
               $proveedortelefono1 = $_POST['proveedortelefono1'];
               $proveedortelefono2 = $_POST['proveedortelefono2'];
               $proveedortelefono3 = $_POST['proveedortelefono3'];
               $proveedortelefono4 = $_POST['proveedortelefono4'];
               $proveedortelefono5 = $_POST['proveedortelefono5'];
               $proveedorcorreo1 = $_POST['proveedorcorreo1'];
               $proveedorcorreo2 = $_POST['proveedorcorreo2'];
               $proveedorcorreo3 = $_POST['proveedorcorreo3'];
               $proveedorcorreo4 = $_POST['proveedorcorreo4'];
               $proveedorcorreo5 = $_POST['proveedorcorreo5'];
               $observaciones = $_POST['observaciones'];
           }
           
           $caracteres_no_permitidos = array(' ','°', '"', '!', '@', '#', '$', '%', '^', '&', '*', ':', '\'', '/', '\\', ':', '*', '?', '>', '<', '.', '|');
           $a = array('[áàâãªÁÀÂÃ]', '[éèêÉÈÊ]', '[íìîÍÌÎ]', '[óòôõºÓÒÔÕ]', '[úùûÚÙÛ]', '[ñÑ]', ' ');
           $b = array('a', 'e', 'i', 'o', 'u', 'n', '_');
           $nombre_en_carpeta = str_replace($caracteres_no_permitidos, "_", $reemplazo = strtolower($_POST['num2']));
           $nombre_en_carpeta = str_ireplace($a, $b, $nombre_en_carpeta);
           $directorio = "imagenes/" . $nombre_en_carpeta . "/";
           
           $array_nombre_imagenes = array();

           if ($codigo == '' || $nombre == '') {
               echo "<script languaje='javascript'>
              alert('Los campos no pueden ir vacios');
              history.back();
              </script>";
           }

           if (isset($_FILES["imagenes"])) {
               $tot = count($_FILES["imagenes"]["name"]);
               for ($i = 0; $i < $tot; $i++) {

                   if (!file_exists($directorio)) {
                       mkdir($directorio);
                   }

                   if (file_exists($directorio) && is_writable($directorio)) {

                       $extencion = explode('.', $_FILES["imagenes"]["name"][$i]);
                       $ultimo = count($extencion);
                       $tipo = strtolower($extencion[$ultimo - 1]);
                       $nombre_archivo = "$nombre_en_carpeta$i.$tipo";

                       $ubicacion_original = $_FILES["imagenes"]["tmp_name"][$i];
                       $array_nombre_imagenes[] = $nombre_archivo;
                       if (!move_uploaded_file($ubicacion_original, "$directorio$nombre_archivo")) {
                           echo "<h3>No se puede subir la imagen<h3>";
                       }
                   }
               }

        $nombre_archivoimagenes = implode('|', $array_nombre_imagenes);
$sql = "INSERT INTO listado_de_productos (codigo, nombre, familia, unidadomedida, marca, descripcion, especificaciones, imagenes, 
                                                     provNombre1, provNombre2, provNombre3, provNombre4, provNombre5,
                                                     provContacto1, provContacto2, provContacto3, provContacto4, provContacto5,
                                                     provTelefono1, provTelefono2, provTelefono3, provTelefono4, provTelefono5,
                                                     provCorreo1, provCorreo2, provCorreo3, provCorreo4, provCorreo5,observaciones) VALUES
                                                     ('$codigo', '$nombre', '$familia', '$unidadomedida', '$marca', '$descripcion', '$especificaciones', '$nombre_archivoimagenes', 
                                                       '$proveedornombre1', '$proveedornombre2','$proveedornombre3', '$proveedornombre4', '$proveedornombre5',
                                                         '$proveedorcontacto1', '$proveedorcontacto2', '$proveedorcontacto3', '$proveedorcontacto4', '$proveedorcontacto5',
                                                             '$proveedortelefono1', '$proveedortelefono2','$proveedortelefono3', '$proveedortelefono4', '$proveedortelefono5',
                                                                 '$proveedorcorreo1', '$proveedorcorreo2', '$proveedorcorreo3', '$proveedorcorreo4', '$proveedorcorreo5','$observaciones')";
mysql_query($sql);


header("location: ingresarproductos.php");
           }
?>
       </body>
                   <?php } else{
          header("location:login.php");
        }
        ?>
</html>