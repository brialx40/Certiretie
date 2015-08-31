<?php

 //header('Content-Type: text/html; charset=ISO-8859-1');

header('Content-Type: text/html; charset=UTF-8');  
$DBVARS = array(
    'usuario' => 'root',
    'clave' => 'soporte',
    'host' => 'localhost',
    'dbname' => 'certiretbd'
);
mysql_connect('localhost', 'root', 'Soporte');
mysql_select_db('certiret_fliz');
 
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      
       <!-- <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> -->
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>BUSQUEDA DE DICTAMENES.</title>
        <meta name="description" content="Certi Retie">

        <!-- Mobile viewport optimized: h5bp.com/viewport -->
        <meta name="viewport" content="width=device-width">	
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>  	
        <script type="text/javascript" src="js/funciones.js"></script>
        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
        <style>

            html {			
                height: 100%;	 		
            }

            body {
                font-family: Helvetica,Arial, sans-serif;
            }

            /**********************************************************/
            .box_round {
                -webkit-border-radius: 12px; /* Safari 3-4, iOS 1-3.2, Android ≤1.6 */
                border-radius: 12px; /* Opera 10.5, IE9+, Safari 5, Chrome, Firefox 4+, iOS 4, Android 2.1+ */

                /* useful if you don't want a bg color from leaking outside the border: */
                -moz-background-clip: padding; -webkit-background-clip: padding-box; background-clip: padding-box;
            }			
            /**********************************************************/
            .clear { clear: both;}

            #contenedor { width: 940px; margin: 50px auto; overflow:hidden; position:relative; }


        </style>

    </head>
    <body>

        <div id='contenedor' class='box_round'>   			
            

            <form method='POST' accept-charset="UTF-8">
                <fieldset>
                    <legend>BUSCADOR DE DICTAMENES</legend>
                    <label>NRO DE DICTAMEN</label>
                    <input type="text" placeholder="" name='nrodictamen'>
                    <label>DIGITO DE VERIFICACION</label>
                    <input type="text" placeholder="" name='dv' class='span1'>
                    <button type="submit" class="btn">Buscar</button>
                </fieldset>
            </form>

            <hr>

            <?php
            
           
            if (isset($_POST) && !empty($_POST['nrodictamen']) && !empty($_POST['dv'])) {
                $sql = "SELECT * FROM dictamenes WHERE nrodictamen='" . $_POST['nrodictamen'] . "' and dv='" . $_POST['dv'] . "'";
                $rs = mysql_query($sql) or die(mysql_error());
                $n = mysql_num_rows($rs);
                if ($n > 0) {
                    $o = mysql_fetch_object($rs);
                    ?>
                    <p>Para mayor información favor comunicarse a direccion.tecnica@certiretie.com</p>
                    <table class='table'>
                        <tr>
                            <th style='width:240px;'>Nro Dictamen - DV</th>
                            <td><?php echo $o->nrodictamen . ' - ' . $o->dv; ?></td>
                            <td><input type="hidden" value="<?php echo $o->dv ?>" id="dv" name="dv"/></td>
                        </tr>							
                        <tr>
                            <th style='width:240px;'>Fecha de expedición</th>
                            <td><?php echo $o->fexpedicion; ?></td>
                        </tr>
                        <tr>
                            <th style='width:240px;'>Dirección</th>
                            <td><?php echo  utf8_encode($o->direccion); ?></td>
                        </tr>																															
                        <tr>
                            <th style='width:240px;'>Alcance</th>
                            <td><?php echo utf8_encode($o->alcance); ?></td>
                        </tr>
                        <tr>
                            <th style='width:240px;'>Aprobado</th>
                            <td><?php echo $o->aprobado; ?></td>
                        </tr>
                         <tr>
                            <th style='width:240px;'>Descargar </th>
                            <?php 
                            $file ="0". $_GET["ndictamen"] . ".pdf";
                            $adjunto = "C:/xampp/htdocs/files/" . $file;
                            $temp = "C:/xampp/htdocs/temp/" . $file;
                            $carpeta="C:/xampp/htdocs/files/";
                            $cartemp="C:/xampp/htdocs/temp/";
                            opendir($carpeta);
                            copy($adjunto,$temp);
                            ?>
                           <!-- <td><A HREF="C:/xampp/htdocs/temp/<?php echo "0".$o->nrodictamen. ".pdf"; ?>"></A></td>-->
                           <td><A HREF="<?php echo $temp ?>"></A></td>
                        </tr>
                        <tr>
                            <th style='width:240px;'>Correo para Envio</th>
                            <td><input name="email" type="text" id="email" ></td>
                        </tr>	
                        <tr>
                            <th style='width:240px;'>Archivo</th>
                            
                            <td colspan="2"><button type="button" class="btn btn-info" onclick="enviarMail()" id="enviar" enabled="enabled">Enviar Dictamen al Correo</button></td>
                        </tr>
                        
                         <th style='width:240px;'>cerrar</th>                         
                            <td colspan="2"><button type="button" class="btn btn-info"  id="enviar" onclick=" location.href='index.html' " enabled="enabled">Salir</button></td>
                        </tr>
                      
                    </table>

                    <div id="datos">

                    </div>

                    <?php
                } else {
                    echo '<p>No se encontró ningún resultado para los datos digitados. Favor verifique la información e intente de nuevo.</p>';
                    echo '<p>Para mayor información favor comunicarse a <b>direccion.tecnica@certiretie.com</b></p>';
                }
            }
            ?>

            <div style='clear:both'></div>

        </div>



    </body>  

</html>  	