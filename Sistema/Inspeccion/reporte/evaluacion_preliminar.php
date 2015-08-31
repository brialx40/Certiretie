<?php

require_once("dompdf/dompdf_config.inc.php");
$r1="<img src='../images/nocheck.png'/>";
$r2="<img src='../images/nocheck.png'/>";
$r3="<img src='../images/nocheck.png'/>";
$r4="<img src='../images/nocheck.png'/>";
$r5="<img src='../images/nocheck.png'/>";
$r6="<img src='../images/nocheck.png'/>";
$r7="<img src='../images/nocheck.png'/>";
$r8="<img src='../images/nocheck.png'/>";
$r9="<img src='../images/nocheck.png'/>";
$p1="<img src='../images/nocheck.png'/>";
$p2="<img src='../images/nocheck.png'/>";
$p3="<img src='../images/nocheck.png'/>";
$p4="<img src='../images/nocheck.png'/>";
$p5="<img src='../images/nocheck.png'/>";
$p6="<img src='../images/nocheck.png'/>";
$p7="<img src='../images/nocheck.png'/>";
$p8="<img src='../images/nocheck.png'/>";
$p9="<img src='../images/nocheck.png'/>";
if(isset($_POST["r1"])){ $r1="<img src='../images/check.png'/>";}
if(isset($_POST["p1"])){ $p1="<img src='../images/check.png'/>";}
if(isset($_POST["r2"])){ $r2="<img src='../images/check.png'/>";}
if(isset($_POST["p2"])){ $p2="<img src='../images/check.png'/>";}
if(isset($_POST["r3"])){ $r3="<img src='../images/check.png'/>";}
if(isset($_POST["p3"])){ $p3="<img src='../images/check.png'/>";}
if(isset($_POST["r4"])){ $r4="<img src='../images/check.png'/>";}
if(isset($_POST["p4"])){ $p4="<img src='../images/check.png'/>";}
if(isset($_POST["r5"])){ $r5="<img src='../images/check.png'/>";}
if(isset($_POST["p5"])){ $p5="<img src='../images/check.png'/>";}
if(isset($_POST["r6"])){ $r6="<img src='../images/check.png'/>";}
if(isset($_POST["p6"])){ $p6="<img src='../images/check.png'/>";}
if(isset($_POST["r7"])){ $r7="<img src='../images/check.png'/>";}
if(isset($_POST["p7"])){ $p7="<img src='../images/check.png'/>";}
if(isset($_POST["r8"])){ $r8="<img src='../images/check.png'/>";}
if(isset($_POST["p8"])){ $p8="<img src='../images/check.png'/>";}
if(isset($_POST["r9"])){ $r9="<img src='../images/check.png'/>";}
if(isset($_POST["p9"])){ $p9="<img src='../images/check.png'/>";}

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
                    <td align="center"><p>FECHA:2014-10-07</td>
                    <td align="center">VERSION:3</td>
                    <td align="center">O/PS/R/01-21</td>
                </tr>
                 <tr>
                    <td colspan="4"><br></td>
                    
                </tr>
                <tr>
                    <td colspan="2">FECHA: ' . $_POST["fechar"] . '</td>                    
                    <td colspan="2" align="right">ORDEN SERVICIO No: ' . $_POST["orden"] . '</td>                
                </tr>
                <tr>
                    <td colspan="4" >LUGAR DE LA INSPECCION: ' . $_POST["lugar"] . '</td>
                </tr>
            </tbody>
            </table>
            <br>
        <table border="1" class=" tam-tabla" >
                    <thead>
                        <tr>
                            <td class="negrita">Num. </td>
                            <td class="negrita">Condiciones seguras y medioambientales en el sitio de inspección:</td>     
                            <td>CUMPLE</td>          
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr >
                            <td>1</td>
                            <td>Los equipos utilizados en la inspección son adecuados para el nivel de tensión</td>     
                            <td class="centrado">' . $_POST["g1"] . '</td>                  
                        </tr>
                        <tr >
                            <td>2</td>
                            <td>Se tiene puesto el equipo de protección individual.</td> 
                            <td class="centrado">' . $_POST["g2"] . '</td>                   
                        </tr>
                        <tr >
                            <td>3</td>
                            <td>Se ha despojado de todos los objetos metálicos. </td>    
                            <td class="centrado">' . $_POST["g3"] . '</td>                   
                        </tr>
                        <tr >
                            <td>4</td>
                            <td>Se efectúa una inspección de los guantes.</td>     
                            <td class="centrado">' . $_POST["g4"] . '</td>                  
                        </tr>
                        <tr >
                            <td>5</td>
                            <td>El inspector se encuentra en perfectas condiciones técnicas, físicas y síquicas para el desempeño de la labor encomendada. </td>     
                            <td class="centrado">' . $_POST["g5"] . '</td>                   
                        </tr>
                        <tr >
                            <td>6</td>
                            <td>No se deben realizar pruebas o mediciones directas a sistemas energizados por encima de 1000 voltios. </td>     
                            <td class="centrado">' . $_POST["g6"] . '</td>                  
                        </tr>
                        <tr >
                            <td>7</td>
                            <td>Se conoce el manejo adecuado de equipos y herramientas</td>     
                            <td class="centrado">' . $_POST["g7"] . '</td>                   
                        </tr>
                        <tr >
                            <td>8</td>
                            <td>Se tiene conocimiento sobre los protocolos de trabajos seguros. </td>     
                            <td class="centrado">' . $_POST["g8"] . '</td>                   
                        </tr>
                        <tr >
                            <td>9</td>
                            <td>Una vez destapada la caja de inspección o subestación de sótano, el personal debe permanecer por fuera de ella, por lo menos durante 10 minutos, mientras las condiciones de ventilación son las adecuadas para iniciar el trabajo.</td>  
                            <td class="centrado">' . $_POST["g9"] . '</td>                 
                        </tr>
                        <tr >
                            <td>10</td>
                            <td>Se verifica que los espacios de trabajo tengan las dimensiones adecuadas y no presenten obstáculos que pongan en riesgo al inspector </td>     
                            <td class="centrado">' . $_POST["g10"] . '</td>                  
                        </tr>
                        <tr >
                            <td>11</td>
                            <td>Se tiene autorización escrita o grabada para hacer el trabajo</td>     
                            <td class="centrado">' . $_POST["g11"] . '</td>                   
                        </tr>
                        <tr >
                            <td>12</td>
                            <td>Se encuentra informado el Director técnico o supervisor de la fecha y  lugar de la inspección</td>     
                            <td class="centrado">' . $_POST["g12"] . '</td>                   
                        </tr>
                        <tr >
                            <td>13</td>
                            <td>Tuvo instrucciones sobre condiciones especiales de trabajo</td>     
                            <td class="centrado">' . $_POST["g13"] . '</td>                   
                        </tr>
                        <tr >
                            <td>14</td>
                            <td>Dispone de identificación adecuada para información en caso de accidente</td>     
                            <td class="centrado">' . $_POST["g14"] . '</td>                        
                        </tr>
                        <tr >
                            <td>15</td>
                            <td>Se conoce y aplica las normas de seguridad en obras energizadas</td>     
                            <td class="centrado">' . $_POST["g15"] . '</td>                    
                        </tr>
                        <tr >
                            <td>16</td>
                            <td>Se tiene un medio de comunicaciones</td>     
                            <td class="centrado">' . $_POST["g16"] . '</td>                    
                        </tr>
                        <tr >
                            <td>17</td>
                            <td>Identifica y conoce los factores de riesgo y conoce los medios para proteger su integridad</td>     
                            <td class="centrado">' . $_POST["g17"] . '</td>                   
                        </tr>
                    </tbody>
                </table> 
                
<br>

                <table border="1" class="f tam-tabla" >
                    <thead>
                        <tr >
                            <th colspan="2" class="negrita">PELIGRO (Fuente o Situación)</th>

                            <th colspan="2" class="negrita">CONSECUENCIAS</th>

                        </tr>
                    </thead>
                    <tbody align="justify">
                        <tr >
                            <td>Riesgo Vial. Conducir con exceso de velocidad</td>
                            <td class="centrado">'.$r1.' </td>     
                            <td>Accidentes de transito, Fracturas laceraciones y fatalidades. Desplazamientos y/o Fracturas</td>
                            <td class="centrado">'.$p1.' </td>                   
                        </tr>
                        <tr >
                            <td>Exposicion altos niveles de ruido por la operación y/o equipos  </td>
                           <td class="centrado">'.$r2.' </td>    
                            <td>Disminucion o perdida de la audicion, cansancio, cefalea, estrés, dolor de cabeza irritabilidad </td>
                            <td class="centrado">'.$p2.' </td>                     
                        </tr>
                        <tr >
                            <td>Riesgo locativo. Terrenos irregulares. Caídas de Objetos.</td>
                           <td class="centrado">'.$r3.' </td>       
                            <td>Caidas, golpes, fracturas, luxaciones, confusiones</td>
                            <td class="centrado">'.$p3.' </td>                      
                        </tr>
                        <tr >
                            <td>Riesgo electrico: Presencia de corriente mayor 25 mA, por el sistema puesta a tierra</td>
                            <td class="centrado">'.$r4.' </td>       
                            <td>Electrocución, quemaduras</td>
                            <td class="centrado">'.$p4.' </td>                      
                        </tr>
                        <tr >
                            <td>Riesgo Operacional: Entrega de elementos energizados</td>
                            <td class="centrado">'.$r5.' </td>      
                            <td>Electrocucion, quemaduras</td>
                            <td class="centrado">'.$p5.' </td>                      
                        </tr>
                        <tr >
                            <td>Presión por parte del cliente en cuanto al resultado de la Inspección. Riesgo de Orden Público.</td>
                            <td class="centrado">'.$r6.' </td>     
                            <td>Disminucion o perdida de la capacidad de trabajo, cansancio, cefalea, estrés, dolor de cabeza,  irritabilidad</td>
                            <td class="centrado">'.$p6.' </td>                      
                        </tr>
                        <tr >
                            <td>Picadura de mosquitos, de culebra, abejas etc…</td>
                            <td class="centrado">'.$r7.' </td>      
                            <td>Disminucion o perdida de la capacidad de trabajo, cansancio, cefalea, estrés, dolor de cabeza,  irritabilidad</td>
                            <td class="centrado">'.$p7.' </td>                      
                        </tr>
                        <tr >
                            <td>Exposición a rayos ultravioletas (sol y lámparas fluorescentes)</td>
                            <td class="centrado">'.$r8.' </td>      
                            <td>Quemaduras</td>
                            <td class="centrado">'.$p8.' </td>                   
                        </tr>
                        <tr >
                            <td>Por aspiración o contaminación de gases</td>
                            <td class="centrado">'.$r9.' </td>       
                            <td>Asfixia mecánica, Intoxicación  </td>
                            <td class="centrado">'.$p9.' </td>                      
                        </tr>
                    </tbody>
                </table>
                <br>
                 <br>
                <p class="negrita">Si falta algún SI, el trabajo NO debe realizarse, hasta efectuarse la correspondiente corrección <br><br>Disposición de los elementos de protección personal:</p>
                <br>
                
                <table border="0" class="f tam-tabla" >
                    <thead>
                        <tr >
                            <th></th>

                            <th colspan="2" class="negrita">APLICA</th>

                        </tr>
                    </thead>
                    <tbody align="justify">
                       
                        <tr >
                            <td>Casco dieléctrico</td>
                            <td class="centrado">' . $_POST["e1"] . '</td>                   
                        </tr>
                        <tr >
                            <td>Barbuquejo</td>
                           <td class="centrado">' . $_POST["e2"] . '</td>                  
                        </tr>
                        <tr >
                            <td>Botas dieléctricas</td>
                            <td class="centrado">' . $_POST["e3"] . '</td>                   
                        </tr>
                        <tr >
                            <td>Guantes</td>
                            <td class="centrado">' . $_POST["e4"] . '</td>                   
                        </tr>
                        <tr >
                            <td>Tapa oídos</td>
                            <td class="centrado">' . $_POST["e5"] . '</td>                   
                        </tr>
                        <tr >
                            <td>Tapa boca</td>
                            <td class="centrado">' . $_POST["e6"] . '</td>                   
                        </tr>
                        <tr >
                            <td>Gafas</td>
                            <td class="centrado">' . $_POST["e7"] . '</td>                   
                        </tr>
                    </tbody>
                </table> 
                <br>
                <p class="bordes">OTROS  -  OBSERVACIONES: ' . $_POST["o1"] .'<br><br></p>
                
                 <br>
                FIRMA INSPECTOR: _______________________________
                <br> 
            
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