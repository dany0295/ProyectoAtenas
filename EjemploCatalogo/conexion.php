<!DOCTYPE html>
<html>
    <head>
        <title>Catálogo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
    </head>
       <body>
<?php
   //datos para la coneccion php
        define('DB_SERVER', 'localhost');
        define('DB_NAME', 'catalogo_de_productos');
        define('DB_USER', 'root');
        define('DB_PASS', '45525936gg');
        $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
        mysql_select_db(DB_NAME,$con);
?>
       </body>
       </html>