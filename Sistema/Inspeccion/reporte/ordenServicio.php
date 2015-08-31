<?php

require_once("dompdf/dompdf_config.inc.php");

$codigoHTML = '<html>
    <head>          
    </head>
    <body>
        <style>
            html {
                margin: 0;
            }
            body {
                font-family: "Times New Roman", serif;
                margin: 10mm 8mm 2mm 8mm;
            }
            
            td.check{
               border: #000 1px solid;
               
            }
            
            p.bordes{
                border: #000 1px solid;
            }

            
        </style>
        <table>
            <tbody>
                <tr>
                    <td rowspan="2"><img src="../images/photo.jpg"></td>
                    <td colspan="3" style="font-weight: bold;">EVALUACION PRELIMINAR EN EL SITIO PARA EJECUCION DE LA INSPECCION</td>
                </tr>
                <tr>
                    <td align="center">FECHA: 2014-03-01</td>
                    <td align="center">VERSION:2 </td>
                    <td align="center">O/PS/R/01-4</td>
                </tr>
                 <tr>
                    <td colspan="4"><br></td>
                    
                </tr>
                <tr>
                    <td colspan="2">FECHA: ' . $_POST["fechar"] . '</td>                    
                    <td colspan="2" align="right">ORDEN SERVICIO No: ' . $_POST["orden"] . '</td>                
                </tr>
                
            </tbody>
        </table>

               <table  border="0" cellpadding="1">
            <thead>
                <tr>
                    <th colspan="2" align="left" ><br></th>
                    
                </tr>
                <tr>
                    <th colspan="2" align="left" >INFORMACION DEL INSPECTOR:</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th colspan="2" align="left" ><br></th>
                    
                </tr>
                <tr>
                    <td width="350px" >NOMBRE: &nbsp;&nbsp;'. $_POST["infnombre"] .'</td>
                    <td width="350px">EPS :&nbsp;&nbsp;'. $_POST["infeps"] .' &nbsp;&nbsp;ARP:&nbsp;&nbsp;'. $_POST["infarp"] .'</td>
                </tr>
                <tr>
                    <td>No CEDULA :&nbsp;&nbsp;'. $_POST["infced"] .'</td>
                    <td>TIPO DE SANGRE:&nbsp;&nbsp;'. $_POST["infsangre"] .'</td>
                </tr>
                <tr>
                    <td>No MATRICULA <br>PROFESIONAL :&nbsp;&nbsp;'. $_POST["infmatri"] .'</td>
                    <td>EN CASO DE EMERGENCIA <br>COMUNICARSE CON: &nbsp;&nbsp;'. $_POST["infcaso"] .'</td>
                </tr>
                <tr>
                    <td>No TELEFONICO:&nbsp;&nbsp;' . $_POST["inftel"] .'</td>
                    <td>NOMBRE :&nbsp;&nbsp;'. $_POST["infnombre2"] .'</td>
                </tr>
                <tr>
                    <td>DIRECCION:&nbsp;&nbsp;'. $_POST["infdir"] .'</td>
                    <td>DIRECCION:&nbsp;&nbsp;'. $_POST["infdir2"] .'</td>
                </tr>
                <tr>
                    <td>E-MAIL:&nbsp;&nbsp;'. $_POST["infemail"] .'</td>
                    <td>No TELEFONICO:&nbsp;&nbsp;'. $_POST["inftel2"] .'</td>
                </tr>
                
            </tbody>
        </table>        

               
                                       
                <br>
            	<hr color="blue" size=3>
                <p><b>INFORMACION DE LA OBRA:</b></p>
                
                <table border="0" >
                    <tbody>
                        <tr >
                            <td width="350px align="left" class="negrita">NOMBRE :&nbsp;&nbsp;'. $_POST["nombre3"] .'</td>
                            <td width="350px align="left">&nbsp;</td>
                        </tr>
                        <tr >
                            <td>DIRECCION:&nbsp;&nbsp;'. $_POST["cedula3"] .'</td>
                            <td align="left">&nbsp;</td>
                            
                        </tr>
                        <tr >
                            <td>NOMBRE  PROPIETARIO :&nbsp;&nbsp;'. $_POST["nomp3"] .'</td>
                            <td>No TELEFONICO:&nbsp;&nbsp;'. $_POST["tel3"] .'</td>
                        </tr>
                        <tr >
                            <td>NOMBRE CONTACTO :&nbsp;&nbsp;'. $_POST["nom3c"] .'</td>
                            <td>No TELEFONICO:&nbsp;&nbsp;'. $_POST["tel4"] .'</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="bordes">ALCANCE:'. $_POST["alcance"] .' <br></p>
                <br>
                <hr color="blue" size=3></p>
                <p>TIEMPO DE EJECUCION DE LA INSPECCION</p>
                <p>Tiempo mínimo de inspección en el sitio de la instalación domiciliaria o similar:   40 minutos.</p>
                <p>TIEMPO TOTAL DE EJECUCION DE LA INSPECCION: '. $_POST["min"] .' min </p>

            
            
                <p>&nbsp;</p>
                <p class="bordes">OTROS  -  OBSERVACIONES'. $_POST["o3"] .'<br></p>
                
                
           

            <div class="col-xs-12">
                <br>
                FIRMA GERENCIA : __________________________  &nbsp;&nbsp;FIRMA INSPECTOR:____________________________ <br>  
            </div>
            
    </body>
</html>';




$codigoHTML = utf8_decode($codigoHTML);
$dompdf = new DOMPDF();
$dompdf->set_paper("letter", "portrait");
$dompdf->load_html($codigoHTML);
ini_set("memory_limit", "128M");
$dompdf->render();
$dompdf->stream("INSPE" . $_POST["orden"] . ".pdf");
?>