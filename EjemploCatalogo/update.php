<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           include_once 'seguro.php';
           include_once 'conexion.php';
           
           if($_SESSION["admin"] == 'sipi'){
           // DATOS DEL PRODUCTO
           $productoacambiar = $_POST['productoacambiar'];
           $codigo = strtolower($_POST['num1']);
           $carpeta = eregi_replace(" ", "_", $carpeta);
           $carpeta = ltrim($carpeta, "_");
           $carpeta = rtrim($carpeta, "_");
           $nombre = strtolower($_POST['nombreproducto']);
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
           if ($codigo == '' || $nombre == '') {
              echo "<script languaje='javascript'>
              alert('Los campos no pueden ir vacios');
              history.back();
              </script>";
           }
           else{
               $sql = "UPDATE listado_de_productos SET codigo = '$codigo', nombre = '$nombre', familia = '$familia', unidadomedida = '$unidadomedida', marca = '$marca', descripcion = '$descripcion', especificaciones = '$especificaciones',
                                                                   provNombre1 = '$proveedornombre1', provNombre2 = '$proveedornombre2', provNombre3 = '$proveedornombre3', provNombre4 = '$proveedornombre4', provNombre5 = '$proveedornombre5',
                                                                   provContacto1 = '$proveedorcontacto1', provContacto2 = '$proveedorcontacto2', provContacto3 = '$proveedorcontacto3', provContacto4 = '$proveedorcontacto5', provContacto5 = '$proveedorcontacto5',
                                                                   provTelefono1 = '$proveedortelefono1', provTelefono2 = '$proveedortelefono2', provTelefono3 = '$proveedortelefono3', provTelefono4 = '$proveedortelefono1', provTelefono5 = '$proveedortelefono5',
                                                                   provCorreo1 = '$proveedorcorreo1', provCorreo2 = '$proveedorcorreo2', provCorreo3 = '$proveedorcorreo3', provCorreo4 = '$proveedorcorreo4', provCorreo5 = '$proveedorcorreo5', observaciones = '$observaciones' WHERE idproducto = '$productoacambiar'";
               mysql_query($sql);
                    
               if (!mysql_query($sql)){
                   Echo "Error";
                   
               }
                    else if(mysql_query($sql)){
                  header("location: actualizarregistro.php");
                    }
           }
?>
    </body>
                <?php } else{
          header("location:login.php");
        }
        ?>
</html>
