<!DOCTYPE html>
<html>
    <head>
        <title>Registro de productos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
        <LINK REL="SHORTCUT ICON" HREF="imagenes/icono/natura.ico">
    </head>
     <?php
       include_once 'conexion.php';
       include_once 'seguro.php';
       if($_SESSION["admin"] == 'sipi'){
       ?>
    <body onload="javascript:document.datos.num1.focus ();">
        <header id="botonera">
 <nav id="botonera-2">
     <menu> <a href="index.html"><span>Inicio</span></a></menu>
     <menu> <a href="borrarregistro.php"><span>Borrar registro</span></a></menu>
        <menu> <a href="registrarusuarios.php"><span>Agregar usuarios</span></a></menu>
        <menu> <a href="borrarusuario.php"><span>Borrar usuarios</span></a></menu>
        <menu> <a title="Cerra Sesión" href="logout.php">Cerrar sesión</a></menu>
    </nav>
    <style>
        aside{
            float: right;
        }
        nav menu{
            list-style: none;
            margin: 0 10px 0 10px;
            padding: 0;
        }

        nav menu a{
            -webkit-border-radius: 5px;
            -o-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            border-radius: 5px;
            float: left;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            text-shadow: 0px 1px 0px #FFF;
        }
        nav menu a:hover{
            background-image: -webkit-gradient(linear, left top, left bottom, from(#FFF), to (#CCC));
            background-image: -moz-linear-gradient(top center, #FFF, #CCC);
            background-image: -o-linear-gradient(top, #FFF, #CCC);
            background-image: -ms-linear-gradient(top, #FFF, #CCC);
            -webkit-box-shadow: 1px -1px 0px #999;
            -ms-box-shadow: 1px -1px 0px #999;
            -moz-box-shadow: 1px -1px 0px #999;
            -o-box-shadow: 1px -1px 0px #999;
            box-shadow: 1px -1px 0px #999;
            border: 1px solid #E3E3E3;
        }

        nav menu:a{
            color: #999;
            display: block;
            padding: 10px;
            text-decoration: none;
            -webkit-transition: 0.4s linear all;
            -moz-transition: 0.4s linear all;
            -ms-transition: 0.4s linear all;
            -o-transition: 0.4s linear all;
            transition: 0.4s linear all;
        }

        nav menu a:hover{
            color:#000;
        }

    </style>
        <div>
            <h1>Ingrese los datos para el producto</h1>
        </div>
    <FORM name="datos" method="POST" class="datos" action="registrarproductos.php" enctype="multipart/form-data">
            <table>
                <tr><td>Código de producto</td><td>Nombre del producto</td><td>Familia de producto</td><td>U/M</td>
                    </tr>
                <tr><td><input type="text" name="num1"></td>
                    <td><input type="text" name="num2"></td>
                    <td><input type="text" name="num3"></td>
                    <td><input type="text" name="num4"></td>

                </tr>
                <tr>
                    <td>Marca</td><td>Descripción</td><td>Especificaciones</td><td>Imágenes</td>
                </tr>
                <tr>
                    <td><input type="text" name="num5"></td>
                    <td><textarea cols="20" rows="5" name="num6"></textarea></td>
                    <td><textarea cols="20" rows="5" name="num7"></textarea></td>
                    <td><div id="archivo"><input type="file" name="imagenes[]"></div>
                        <a href="#" onClick='addCampo();'>Subir otro archivo</a>
                    </td>
                </tr>
            </table>
            <br><h3>Proveedores sugeridos</h3><br>
            <table>
                <tr>
                    <td></td><td>Nombre o razon social</td><td>Nombre del contacto</td><td>Teléfono</td><td>Correo</td>
                </tr>
                <tr><td>Proveedor 1:</td><td><textarea cols="10" rows ="1" name ="proveedornombre1"></textarea></td><td><textarea cols="10" rows ="1" name ="proveedorcontacto1"></textarea></td><td><input type="number" name ="proveedortelefono1"></td><td><input type="email" name ="proveedorcorreo1"></td></tr>
                <tr><td>Proveedor 2:</td><td><textarea cols="10" rows ="1" name ="proveedornombre2"></textarea></td><td><textarea cols="10" rows ="1" name ="proveedorcontacto2"></textarea></td><td><input type="number" name ="proveedortelefono2"></td><td><input type="email" name ="proveedorcorreo2"></textarea></td></tr>
                <tr><td>Proveedor 3:</td><td><textarea cols="10" rows ="1" name ="proveedornombre3"></textarea></td><td><textarea cols="10" rows ="1" name ="proveedorcontacto3"></textarea></td><td><input type="number" name ="proveedortelefono3"></td><td><input type="email" name ="proveedorcorreo3"></textarea></td></tr>
                <tr><td>Porveedor 4:</td><td><textarea cols="10" rows ="1" name ="proveedornombre4"></textarea></td><td><textarea cols="10" rows ="1" name ="proveedorcontacto4"></textarea></td><td><input type="number" name ="proveedortelefono4"></td><td><input type="email" name ="proveedorcorreo4"></textarea></td></tr>
                <tr><td>Proveedor 5:</td><td><textarea cols="10" rows ="1" name ="proveedornombre5"></textarea></td><td><textarea cols="10" rows ="1" name ="proveedorcontacto5"></textarea></td><td><input type="number" name ="proveedortelefono5"></td><td><input type="email" name ="proveedorcorreo5"></textarea></td></tr>
                <tr><td>Observaciones:</td><td colspan="4"><textarea cols="50" rows="5" name="observaciones"></textarea></td></tr>
            </table>
                    <input type="submit" name="enviar" value="Registrar">
        </FORM>
        <style>
            form.datos{
                 width: auto;
} 
table{
    font-weight: bold;
    font-variant-position: super;
}
table input[type="text"],table input[type="file"]{
    padding: 3px;
    border-radius: 4px;
}
form input[type="submit"]{
    padding: 3px;
    border-radius: 4px;
    width: 150px;
    text-align: center;
    margin:0 auto;
}
        </style>
        <script type="text/javascript">
            var numero = 0;
            
            evento = function(evt){
                return(!evt) ? event:evt;
            }
            
            addCampo = function(){
                nDiv = document.createElement('div');
                
                nDiv.className = 'archivo';
                
                nDiv.id='file' + (++numero);
                
                nCampo = document.createElement('input');
                
                nCampo.name = 'imagenes[]';
                
                nCampo.type = 'file';
                
                a=document.createElement('a');
                
                a.name = nDiv.id;
                
                a.href = '#';
                
                a.onclick = elimCamp;
                
                a.innerHTML = 'Eliminar';
                
                nDiv.appendChild(nCampo);
                
                nDiv.appendChild(a);
                
                container = document.getElementById('archivo');
                container.appendChild(nDiv);
            }
                
                elimCamp = function (evt){
                    evt = evento(evt);
                    nCampo = rObj(evt);
                    div = document.getElementById(nCampo.name);
                    div.parentNode.removeChild(div);
                }
            rObj = function (evt){
                return evt.srcElement? evt.srcElement : evt.target;
            }
        </script>
    </body>
            <?php } else{
          header("location:login.php");
        }
        ?>
</html>