
<!DOCTYPE html>
<html>
    <head>
        <title>Busqueda de producto</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
        <LINK REL="SHORTCUT ICON" HREF="imagenes/icono/natura.ico">
    </head>
    <body>
         <nav>
               <ul>
                   <li><a title="Ingresar Productos" href="login.php">Ingresar productos</a></li>
                   <li><a title="Opciones del Administrador" href="login.php">Opciones de administrador</a></li>
                   <aside>
                       <FORM class="busqueda" METHOD="POST" ACTION="buscarproducto.php">
                           <input type="text" name="producto">
                           <input type="submit" name="enviar" value="Buscar">
                       </FORM>
                   </aside>
               </ul>
           </nav><br>
           <h1>Bienvenido</h1>
            <h4>Ingrese el código o nombre del producto</h4>
            <FORM METHOD="POST" ACTION="consultar.php">
                    <input type="text" name="producto">
                    <input type="submit" name="enviar" value="Buscar">
            </form>
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
               img{
                   width: 100px;
                   width: 100px;
               }
               form.busqueda{
                   width: 225px;
                   height: auto;
                   float: right;
               }
               form{
                   margin: 0 auto;
               }
               table{
                   font-size: 12px;
               }
           </style>
</body>
</html>