<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <LINK REL="SHORTCUT ICON" HREF="imagenes/icono/natura.ico">
        <title>Cerrar sesión</title>
    </head>
    <body>
        <?php
    session_start(); 
    session_destroy(); 
  
    header('location: index.html'); 
?>
    </body>
</html>
