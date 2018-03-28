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
    <body>
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
            $producto = $_POST['producto'];
            $sql = 'SELECT * FROM listado_de_productos'; 
            $rec = mysql_query($sql); 
            $mostrar_producto = false;

            while($result = mysql_fetch_object($rec)) 
                {
                $nombre_producto = strtolower($result->nombre);
                $producto_en_minusculas = strtolower($_POST['producto']);
                if($result->codigo == $producto_en_minusculas)
                    { 
                        $mostrar_producto = true;                    
                    }
                    else if ($nombre_producto == $producto)
                    {
                        $mostrar_producto = true;
                    }
                    
                    if ($mostrar_producto == true){
                        $carpeta = eregi_replace(" ", "_", $result->nombre);
                        $nombres_imagenes = explode("|", $result->imagenes);
                        
                        foreach ($nombres_imagenes as $imagen_para_borrar) {
                            unlink("imagenes/".$carpeta."/".$imagen_para_borrar);
                        }
                        rmdir("imagenes/".$carpeta);  
                     
                

          $sql = "delete from listado_de_productos where idproducto = '$result->idproducto'";
          mysql_query($sql);
          if (mysql_query($sql)){
              header('location: borrarregistro.php');
              break;
          }
          }
                    }
                }
            }
          ?>
</body>
            <?php } else{
          header("location:login.php");
        }
        ?>
</html>