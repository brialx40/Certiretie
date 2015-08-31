<?php

require_once("dompdf/dompdf_config.inc.php");



$codigoHTML='<html>
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
                    <td rowspan="2">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td colspan="3" style="font-weight: bold;">RESULTADO DE MEDICIONES Y PRUEBAS FUNCIONALES</td>
                </tr>
                <tr>
                    <td align="center">FECHA: 2014-06-20</td>
                    <td align="center">VERSION:0</td>
                    <td align="center">O/PS/R/01-23</td>
                </tr>
                <tr>
                    <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">DIRECCION: ' . $_POST["direccion"] . '</td>                    
                    <td colspan="2" align="right">ORDEN SERVICIO No: ' . $_POST["orden"] . '</td>                    
                </tr>
                <tr>
                    <td colspan="4" >ALCANCE: ' . $_POST["alcance"] . '</td>
                </tr>
            </tbody>
        </table>

	<!-- inicio preguntas-->
        
           <table border="1" class="tam-tabla">
             <thead>
                <tr>
                    <th rowspan="2">ITEM</th>
                    <th rowspan="2">ELEMENTO</th>
                    <th rowspan="2">PRUEBA</th>
                    <th rowspan="2">EQUIPO</th>
                    <th rowspan="2">UNIDAD</th>
                    <th colspan="2">CIRCUITO ENERGIZA</th>
                    <th rowspan="2">OPCIÓN</th>                        
                    <th rowspan="2">OBSERVACIONES</th>       
                </tr>
                <tr>
                    <th>SI</th>
                    <th>NO</th>
                    
                </tr>
            </thead>
            <tbody align="justify">
                <tr>
                    <td class="fondoTablaVerde negrita" colspan="12">A. PRUEBAS FUNCIONALES</td>
                    
                </tr>
                <tr>
                    <td rowspan="2">1</td>
                    <td rowspan="2">Interruptor</td>     
                    <td>En ON marca continuidad</td>
                    <td rowspan="2">OHMIMETRO</td>
                    <td rowspan="2">OHM</td>
                    <td rowspan="2" align="center">X</td>     
                    <td rowspan="2" align="center">X</td>
                    <td rowspan="2" align="center">'.$_POST["g11"].'</td>     
                    <td  rowspan="2" align="center">'.$_POST["g1"].'</td>
                </tr>
                <tr><td>En OFF marca abierto</td></tr>
                <tr>
                    <td>2</td>
                    <td>Encendido de luminarias y/o otros equipos</td>     
                    <td>Encendido y apagado de lámparas y otros equipos</td>
                    <td>INSPECCION VISUAL</td>
                    <td align="center"></td>
                    <td>X</td>     
                    <td align="center"></td>
                    <td align="center">'.$_POST["g21"].'</td>     
                    <td align="center">'.$_POST["g2"].'</td>
                </tr>
                <tr>
                    <td rowspan="2">3</td>
                    <td rowspan="2">Toma GFCI</td>     
                    <td>Verificación funcionamiento luz piloto</td>
                    <td>INSPECCION VISUAL</td>
                    <td>N.A.</td>
                    <td>X</td>     
                    <td align="center"></td>
                    <td align="center">'.$_POST["g311"].'</td>     
                    <td align="center">'.$_POST["g31"].'</td>
                </tr>
                <tr>
                    <td>Conexión equipotencial del punto de tierra con la tierra del TG, Subestación, Malla o General que se disponga </td>
                    <td>OHMIMETRO</td>
                    <td>OHM</td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g321"].'</td>     
                    <td align="center">'.$_POST["g32"].'</td>
                </tr>
                <tr>
                    <td rowspan="2">4</td>
                    <td rowspan="2">Tomas</td>     
                    <td>Voltaje de salida</td>
                    <td>VOLTIMETRO</td>
                    <td>VOLTIOS</td>
                    <td>X</td>     
                    <td align="center"></td>
                    <td align="center">'.$_POST["g411"].'</td>     
                    <td align="center">'.$_POST["g41"].'</td>
                </tr>
                <tr>
                       
                    <td>Conexión equipotencial del punto de tierra con la tierra del TG, Subestación, Malla o General que se disponga</td>
                    <td>OHMIMETRO</td>
                    <td>OHM</td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g421"].'</td>     
                    <td align="center">'.$_POST["g42"].'</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Monitor  de aislamiento Hospitalarias</td>     
                    <td>Prueba alarma circuitos de emergencia</td>
                    <td>INSPECCION VISUAL Y AUDITIVA</td>
                    <td>N.A.</td>
                    <td>X</td>     
                    <td align="center"></td>
                    <td align="center">'.$_POST["g51"].'</td>     
                    <td align="center">'.$_POST["g5"].'</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Transformador de aislamiento piscinas</td>     
                    <td>Voltaje de salida</td>
                    <td>VOLTIMETRO</td>
                    <td>VOLTIOS</td>
                    <td>X</td>     
                    <td align="center"></td>
                    <td align="center">'.$_POST["g611"].'</td>     
                    <td align="center">'.$_POST["g61"].'</td>
                </tr>
                <tr>
                    <td >6</td>
                    <td ></td> 
                    <td>Continuidad eléctrica entre las fases antes y despues del transformador de aislamiento </td>
                    <td>OHMIMETRO</td>
                    <td>OHM</td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g621"].'</td>     
                    <td align="center">'.$_POST["g62"].'</td>
                </tr>
                <tr>
                    <td rowspan="10">7</td>
                    <td rowspan="10">Celdas y Tableros</td>     
                    <td>Verificar ajuste de las uniones mecánicas, eléctricas y de anclaje.</td>
                    <td>E.P.P.</td>
                    <td>N.A.</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g711"].'</td>     
                    <td align="center">'.$_POST["g71"].'</td>
                </tr>
                <tr>
                       
                    <td>Verificar los enclavamientos mecánicos de los equipos del tablero.</td>
                    <td>E.P.P.</td>
                    <td>N.A.</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g721"].'</td>     
                    <td align="center">'.$_POST["g72"].'</td>
                </tr>
                <tr>
                       
                    <td>Conexión a tierra de las puertas.</td>
                    <td>OHMIMETRO</td>
                    <td>OHM</td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g731"].'</td>     
                    <td align="center">'.$_POST["g73"].'</td>
                </tr>
                <tr>
                       
                    <td>Conexión equipotencial del punto de tierra con la tierra del TG, Subestación, Malla o General que se disponga</td>
                    <td>OHMIMETRO</td>
                    <td>OHM</td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g741"].'</td>     
                    <td align="center">'.$_POST["g74"].'</td>
                </tr>
                <tr>
                       
                    <td>Verificar cierre del tablero</td>
                    <td>E.P.P.</td>
                    <td>N.A.</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g751"].'</td>     
                    <td align="center">'.$_POST["g75"].'</td>
                </tr>
                <tr>
                       
                    <td>Medir equipotencialidad entre partes conductoras del tablero.</td>
                    <td>OHMIMETRO</td>
                    <td>OHM</td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g761"].'</td>     
                    <td align="center">'.$_POST["g76"].'</td>
                </tr>
                <tr>
                       
                    <td>Funcionalidad de las rejillas de ventilación, las tapas laterales y las puertas.</td>
                    <td>E.P.P.</td>
                    <td>N.A.</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g771"].'</td>     
                    <td align="center">'.$_POST["g77"].'</td>
                </tr>
                <tr>
                       
                    <td>Verificar los ajustes mecánicos y enclavamiento de los equipos del tablero y del tablero en general</td>
                    <td>E.P.P.</td>
                    <td>N.A.</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g781"].'</td>     
                    <td align="center">'.$_POST["g78"].'</td>
                </tr>
                <tr>
                       
                    <td>Realizar las pruebas de aislamiento: Las mediciones deben ser realizadas usando un megómetro a una tensión de por lo menos 500 Vcc. El valor de la resistencia de aislamiento debe ser no menor de 1000 <img src="../images/ohm.png"/>/V.</td>
                    <td>OHMIMETRO</td>
                    <td>OHM</td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g791"].'</td>     
                    <td align="center">'.$_POST["g79"].'</td>
                </tr>
                <tr>
                       
                    <td>Todas las puertas de los equipos deben abrir a 90 grados</td>
                    <td>E.P.P.</td>
                    <td>N.A.</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g7101"].'</td>     
                    <td align="center">'.$_POST["g710"].'</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Iluminación de Emergencia</td>     
                    <td>Encendido en ausencia de tension normal</td> 
                    <td>INSPECCION VISUAL</td>
                    <td>N.A.</td>
                    <td>X</td>
                    <td>X</td>
                    <td align="center">'.$_POST["g81"].'</td>     
                    <td align="center">'.$_POST["g8"].'</td>
                </tr>
                <tr>
                    <td rowspan="3">9</td>
                    <td rowspan="3">Puerta Cortafuego</td>     
                    <td>Apertura antipánico</td>
                    <td>N.A.</td>
                    <td>N.A.</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g9111"].'</td>     
                    <td align="center">'.$_POST["g91"].'</td>
                </tr>
                  <tr>
                    <td>Puerta abre hacia afuera</td>
                    <td>N.A.</td>
                    <td>N.A.</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g921"].'</td>     
                    <td align="center">'.$_POST["g92"].'</td>
                </tr>
                <tr>
                    <td>Encerramiento plenamente hermético de compuertas, empaques intumescentes de la puerta, sellos de ductos o cárcamos de entrada o salidas de cables</td>
                    <td>INSPECCION VISUAL</td>
                    <td>N.A.</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g931"].'</td>     
                    <td align="center">'.$_POST["g93"].'</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Dampers</td>     
                    <td>Cierre hermetico al accionar fusible mecánico</td>
                    <td>INSPECCION VISUAL</td>
                    <td>N.A.</td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g101"].'</td>     
                    <td align="center">'.$_POST["g10"].'</td>
                </tr>
                <tr>
                    <td rowspan="3">11</td>
                    <td rowspan="3">Cajas de paso y/o lugares de ejecución de empalmes</td>     
                    <td>Verificar ajuste de las uniones mecánicas</td>
                    <td>INSPECCION VISUAL</td>
                    <td>N.A.</td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g1111"].'</td>     
                    <td align="center">'.$_POST["g111"].'</td>
                </tr>
                <tr>
                       
                    <td>Verificar aislamiento de la conexión</td>
                    <td>INSPECCION VISUAL</td>
                    <td>N.A.</td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g1121"].'</td>     
                    <td align="center">'.$_POST["g112"].'</td>
                </tr>
                <tr>
                    <td>Verificar continuidad eléctrica de los conductores</td>
                    <td>OHMIMETRO</td>
                    <td>OHM</td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g1131"].'</td>     
                    <td align="center">'.$_POST["g113"].'</td>
                    
                </tr>
                <tr>
                    <td rowspan="3">12</td>
                    <td rowspan="3">Bandejas portacables</td>     
                    <td>Verificar soporte mecánico, estabilidad y ajuste apoyos</td>
                    <td>INSPECCION VISUAL</td>
                    <td>N.A.</td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g1211"].'</td>     
                    <td align="center">'.$_POST["g121"].'</td>
                     </tr>
                <tr>
                       
                    <td>Verificar continuidad eléctrica de la bandeja</td>
                    <td>INSPECCION VISUAL</td>
                    <td>N.A.</td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g1221"].'</td>     
                    <td align="center">'.$_POST["g122"].'</td> </tr>
                <tr>
                    <td>Conexión equipotencial del punto de tierra con la tierra del TG, Subestación, Malla o General que se disponga</td>
                    <td>OHMIMETRO</td>
                    <td>OHM</td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g1231"].'</td>     
                    <td align="center">'.$_POST["g123"].'</td> </tr>
                <tr>
                    <td>13</td>
                    <td>Canalizaciones</td>     
                    <td>Las partes de canalizaciones que estén expuestas o a la vista, deben marcarse en franjas de color naranja de al menos 10 cm de anchas para distinguirlas de otros usos. </td>
                    <td>INSPECCION VISUAL</td>
                    <td>N.A.</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g131"].'</td>     
                    <td align="center">'.$_POST["g13"].'</td> </tr>
                <tr>
                    <td class="fondoTablaVerde negrita" colspan="12">A. MEDICIONES </td>
                    
                </tr>
                <tr>
                    <td>14</td>
                    <td colspan="2">Resistencia de puesta a tierra</td>     
                    <td>OHMIMETRO</td>
                    <td><img src="../images/ohm.png"/></td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g141"].'</td>     
                    <td align="center">'.$_POST["g14"].'</td> </tr>
                <tr>
                    <td>15</td>
                    <td colspan="2">Corriente del sistema de Tiera</td>     
                    <td>AMPERIMETRO</td>
                    <td>AMPERIOS</td>
                    <td>X</td>
                    <td align="center"></td>     
                    <td align="center">'.$_POST["g151"].'</td>     
                    <td align="center">'.$_POST["g15"].'</td> </tr>
                <tr>                    
                    <td>16</td>     
                    <td colspan="2">Equipotencialidad y continuidad en conductores de puesta a tierra</td>
                    <td>OHMIMETRO</td>
                    <td><img src="../images/ohm.png"/></td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g161"].'</td>     
                    <td align="center">'.$_POST["g16"].'</td> </tr>
                <tr>
                    <td>17</td>
                    <td colspan="2">Distancias de seguridad para puntos energizados. ESPACIOS DE TRABAJO</td>
                    <td>METRO</td>
                    <td>m</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g171"].'</td>     
                    <td align="center">'.$_POST["g17"].'</td> </tr>
                <tr>
                    
                    <td>18</td>     
                    <td colspan="2">MENOS DE 150 V = <br>
                     VERTICAL = no debe ser inferior a 1,9 m de altura (medidos verticalmente desde el piso o plataforma) o la altura del equipo cuando este sea más alto </td>
                    <td>METRO</td>
                    <td>m</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g181"].'</td>     
                    <td align="center">'.$_POST["g18"].'</td> </tr>
                <tr>
                    
                    <td>19</td>     
                    <td colspan="2">HORIZONTAL =  0,75 m de ancho o el ancho del equipo si este es mayor.</td>
                    <td>METRO</td>
                    <td>m</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g191"].'</td>     
                    <td align="center">'.$_POST["g19"].'</td> </tr>
                <tr>
                    
                    <td>20</td>     
                    <td colspan="2">FRENTE AL EQUIPO:  La profundidad del espacio de trabajo frente al equipo no debe ser inferior a 0,9 m. </td>
                    <td>METRO</td>
                    <td>m</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g201"].'</td>     
                    <td align="center">'.$_POST["g20"].'</td> </tr>
                <tr>
                    
                    <td>21</td>     
                    <td colspan="2">ENTRE 2500 V y 9000 V =<br> 
                    VERTICAL no debe ser inferior a 1,9 m de altura (medidos verticalmente desde el piso o plataforma)  o la altura del equipo cuando este sea más alto </td>
                    <td>METRO</td>
                    <td>m</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g211"].'</td>     
                    <td align="center">'.$_POST["g21"].'</td> </tr>
                <tr>
                    
                    <td>22</td>     
                    <td colspan="2">HORIZONTAL: 0,9 m de ancho o el ancho del equipo si este es mayor. </td>
                    <td>METRO</td>
                    <td>m</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g221"].'</td>     
                    <td align="center">'.$_POST["g22"].'</td> </tr>
                <tr>
                    
                    <td>23</td>     
                    <td colspan="2">FRENTE AL EQUIPO : la profundidad del espacio de trabajo no debe ser inferior a 1,5 m. </td>
                    <td>METRO</td>
                    <td>m</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g231"].'</td>     
                    <td align="center">'.$_POST["g23"].'</td> </tr>
                <tr>
                    
                    <td>24</td>     
                    <td colspan="2">Distancias de seguridad de las construcciones a  Redes energizadas</td>
                    <td>METRO</td>
                    <td>m</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g241"].'</td>     
                    <td align="center">'.$_POST["g24"].'</td> </tr>
                <tr>
                    
                    <td>25</td>     
                    <td colspan="2">ZONAS DE SERVIDUMBRE</td>
                    <td>METRO</td>
                    <td>m</td>
                    <td>X</td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g251"].'</td>     
                    <td align="center">'.$_POST["g25"].'</td></tr>
                <tr>
                    
                    <td>26</td>     
                    <td colspan="2">Resistencia de aislamiento</td>
                    <td>MEGGER</td>
                    <td>M<img src="../images/ohm.png"/></td>
                    <td align="center"></td>     
                    <td>X</td>
                    <td align="center">'.$_POST["g261"].'</td>     
                    <td align="center">'.$_POST["g26"].'</td> </tr>
                <tr>
                    
                    <td>27</td>     
                    <td colspan="2">Niveles de iluminación</td>
                    <td>LUXOMETRO</td>
                    <td>LUX</td>
                    <td>X</td>     
                    <td align="center"></td>
                    <td align="center">'.$_POST["g271"].'</td>     
                    <td align="center">'.$_POST["g27"].'</td> </tr>
                <tr>
                    
                    <td>28</td>     
                    <td colspan="2">Campo eléctrico y magnético.</td>
                    <td>MCEM</td>
                    <td>KV/m, gauss</td>     
                    <td>X</td>
                    <td></td>
                    <td align="center">'.$_POST["g281"].'</td>     
                    <td align="center">'.$_POST["g28"].'</td> </tr>
                
		</tbody>
        </table> 
       
        
       
        INSPECTOR:
        <br>
        FIRMA INSPECTOR: _______________________________
        <br>  
       </body></html>';




$codigoHTML=utf8_decode($codigoHTML);
$dompdf = new DOMPDF();
$dompdf->set_paper("letter", "landscape");
$dompdf->load_html($codigoHTML);
ini_set("memory_limit", "128M");
$dompdf->render();
$dompdf->stream("DECLA" . $_POST["orden"] . ".pdf");
?>