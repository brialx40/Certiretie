<?php
$servidor = "localhost";
$usuario = "root";
$constrasena = "Soporte";
$bd = "certiretbd";

$conexion = @mysql_connect($servidor, $usuario, $constrasena);

if (!$conexion) {
    echo "<script type='text/javascript'>
                alert('FALLO LA CONEXION');
                window.location='index.php'
                </script>";
}

mysql_select_db($bd, $conexion) or die(mysql_error($conexion));
session_start( );
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Certiretie.Ltda</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2  
         <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        -->
        <link href="../css/teme2/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" />

        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="../css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="../css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="../css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="../css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="../css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->

        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <a class="logo" href="http://certiretie.com" style=" background-image: url('../img/logo.png'); " ></a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="collapse navbar-collapse navbar-ex1-collapse" align="center" style="padding-top: -1px;">
                   <h1><strong>INSPECCIONES EL&Eacute;CTRICAS RETIE Y RETILAP</strong></h1>         
                </div><!-- /.navbar-collapse -->
            </nav>
        </header>
        <br/>

        <div class="col-md-2"></div>
        <!-- Buscar Section -->
        <div id='contenedor' class='box_round col-md-8'>
        <center>            
            <form method='POST' accept-charset="UTF-8">
                <fieldset>
                    <legend><strong>BUSCADOR DE DICTAMENES</strong></legend>
                    <label>NRO DE DICTAMEN</label>
                    <input type="number" placeholder="" name='nrodictamen' required/ >&nbsp;
                    <label>DIGITO DE VERIFICACION</label>
                    <input type="number" placeholder="" name='dv' id="dv" class='span1' required/ >&nbsp;
                    <button type="submit" class="btn btn-info">Buscar</button>&nbsp;

                    <a href="http://certiretie.com"><button type="button" class="btn btn-info" >Salir</button></a>
                    
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
                            <td><?php echo utf8_encode($o->direccion); ?></td>
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
                          <!--<td><input name="condiciones" type="checkbox"></td> -->

                            <?php 

                            $file ="0". $o->nrodictamen . ".pdf";
                            $adjunto = "C:/xampp/htdocs/files/" . $file;
                            $temp = "C:/xampp/htdocs/pagina/temp/" . $file;
                            $carpeta="C:/xampp/htdocs/files/";
                            $carptem="C:/xampp/htdocs/temp/";
                            
                            copy($adjunto,$temp);
                            
                            opendir($carpeta);
                           
                            ?>
                            <td><a target="_blank" href="http://certiretie.com/temp/<?php echo "0".$o->nrodictamen. ".pdf"; ?>"><b> DICTAMEN </b> </a></td>
                           

                           
                        </tr>
                       
                    </table>

                    
                    

                    

                    <!-- Data Section -->
                    <div id="datos">

                    </div>
                    <!-- End Data Section -->
                    <!--  if ($borrar!=""){
                         opendir($carptem);
                    unlink($carptem."0".$file);
                    }
                   -->
                   
                    <?php
                   
                } else {
                    echo '<p>No se encontro ningun resultado para los datos digitados. Favor verifique la informacion e intente de nuevo.</p>';
                    echo '<p>Para mayor informacion favor comunicarse a <b>direccion.tecnica@certiretie.com</b></p>';
                }
            }
            ?>
            <div style='clear:both'></div>
        </center>
        </div>
        <!-- End Buscar Section -->
        <div class="col-md-2"></div>



    </body>  
 <script src="../js/funciones.js"></script>
 <script src="../js/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="../js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
</html>  	