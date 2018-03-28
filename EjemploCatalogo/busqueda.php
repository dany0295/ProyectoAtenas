<!DOCTYPE html>
<html>
    <head>
        <title>Catálogo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
        <LINK REL="SHORTCUT ICON" HREF="imagenes/icono/natura.ico">
    </head>
    <?php
    @session_start();
    if($_SESSION["autentica"] == "SIP" && $_SESSION["usuario"] == 'sipi' || $_SESSION["admin"] == 'sipi'){
    ?>
       <body onload="javascript:document.nombreproducto.producto.focus ();">
           <nav>
               <ul>
                   <li><a title="Inicio" href="index.html">Inicio</a></li>
                   <li><a title="Cerra Sesión" href="logout.php">Cerrar sesión</a></li>
               </ul>
           </nav>
            <h1>Ingrese el código o nombre del producto</h1>
            <FORM name="nombreproducto" METHOD="POST" ACTION="resultadodebusqueda.php">
                    <input type="text" name="producto">
                    <input type="submit" name="enviar" value="Buscar">
                    </FORM>  
    </body>
    <style type="text/css">
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
           <?php }
           else{
     header("location:login.php");
           }
?>
</html>