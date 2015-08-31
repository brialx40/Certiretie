
<?php
require_once("dompdf/dompdf_config.inc.php");

$propietario=$_POST["PROPIETARIO"];
$cc=$_POST["CC"];
$nombrep=$_POST["NOMBREP"];
$disenador=$_POST["DISENADOR"];
$tpdisenador=$_POST["TPDISENADOR"];
$predio=$_POST["PREDIO"];
$constuctor=$_POST["CONSTRUCTOR"];
$tpcons=$_POST["TPCONSTRUCTOR"];
$ciudad=$_POST["CIUDAD"];
$interventor=$_POST["INTERVENTOR"];
$tpinterventor=$_POST["TPINTERVENTOR"];

$usoesp="";
$especialtipo="";

if(isset($_POST["ESPECIALTIPO"])){ $especialtipo=$_POST["ESPECIALTIPO"];}
if(isset($_POST["USOESPECIAL"])){ $usoesp=$_POST["USOESPECIAL"];}

$obser="";
$obs="";

if(isset($_POST["obser"])){ $obser=$_POST["obser"];}
if(isset($_POST["obs"])){ $obs=$_POST["obs"];}

$resi="<img src='../images/nocheck.png'/>";
$comer="<img src='../images/nocheck.png'/>";
$indus="<img src='../images/nocheck.png'/>";

$obra1="<img src='../images/nocheck.png'/>";
$obra2="<img src='../images/nocheck.png'/>";
$obra3="<img src='../images/nocheck.png'/>";

if(isset($_POST["obra1"])){$obra1="<img src='../images/check.png'/>";}
if(isset($_POST["obra2"])){$obra2="<img src='../images/check.png'/>";}
if(isset($_POST["obra3"])){$obra3="<img src='../images/check.png'/>";}
if(isset($_POST["INDUSTRIAL"])){$indus="<img src='../images/check.png'/>";}
if(isset($_POST["COMERCIAL"])){$comer="<img src='../images/check.png'/>";}
if(isset($_POST["residencial"])){$resi="<img src='../images/check.png'/>";}

$area="<img src='../images/nocheck.png'/>";
$area1="";
if(isset($_POST["area"])){$area="<img src='../images/check.png'/>"; }
if(isset($_POST["area1"])){$area1=$_POST["area1"]; } 
    
$long='<img src="../images/nocheck.png">';
$long1="";    
if(isset($_POST["long"])){$long="<img src='../images/check.png'/>";}
if(isset($_POST["long1"])){$long11=$_POST["long1"]; } 

$area3="";
if(isset($_POST["area3"])){$area3=$_POST["area3"]; }

$area4="";
if(isset($_POST["area4"])){$area4=$_POST["area4"]; }




$capacitacion="<img src='../images/nocheck.png'/>";
$capacitacion2="<img src='../images/nocheck.png'/>";

if(isset($_POST["nec"])&&$_POST["nec"]=="SI"){
    $capacitacion2="<img src='../images/check.png'/>";
}else if(isset ($_POST["nec"])&&$_POST["nec"]=="NO"){
    $capacitacion="<img src='../images/nocheck.png'/>";
}



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
        <table class="tam-tabla">
            <tbody>
                <tr>
                    <td rowspan="2"><img src="../images/photo.jpg" /></td>
                    <td colspan="3" style="font-weight: bold;">DATOS GENERALES DE LA OBRA Y PLANEACION DE LA INSPECCIÓN</td>
                </tr>
                <tr>
                    <td align="center">FECHA: 2014-06-20</td>
                    <td align="center">VERSION: 3</td>
                    <td align="center">O/PS/R/01-2</td>
                </tr>
                <tr>
                    <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">FECHA: ' . $_POST["fechar"] . '</td>                    
                    <td colspan="2" align="right">ORDEN SERVICIO N°: ' . $_POST["orden"] . '</td>                    
                </tr>
                <tr>
                    <td colspan="4" >LUGAR DE LA INSPECCION: ' . $_POST["lugar"] . '</td>
                </tr>
            </tbody>
        </table>

        <br>

        <p><b>1.INFORMACIÓN GENERAL DE LA OBRA</b></p>
        <br>
        <table class=" tam-tabla"  border="1" width="100%">
            

            <tbody>
                
                <tr>
                    <td>
                        PROPIETARIO:   
                    </td>
                    <td>
                        '.$propietario.'   
                    </td>
                    <td>
                        C.C. O NIT    
                    </td>
                    <td>
                        '.$cc.'
                    </td>
                    <td>
                        NOMBRE DEL PROYECTO:   
                    </td>
                    <td>
                        '.$nombrep.'
                    </td>
                </tr>
                <tr>
                    <td>
                        DISEÑADOR: 
                    </td>

                    <td>
                        '.$disenador.'  
                    </td>
                    <td>
                        T.P.
                    </td>
                    <td>
                        '.$tpdisenador.'
                    </td>
                    <td>
                        DIRECCION DEL PREDIO:
                    </td>
                    <td>
                        '.$predio.'
                    </td>

                </tr>
                <tr>
                    <td>
                        CONSTRUCTOR:   
                    </td>
                    <td>
                        '.$constuctor.'   
                    </td>
                    <td>
                        T.P.
                    </td>
                    <td>
                        '.$tpcons.'
                    </td>
                    <td>
                        CIUDAD:
                    </td>
                    <td>
                        '.$ciudad.'
                    </td>
                </tr>
                <tr>
                    <td>
                        INTERVENTOR:    
                    </td>
                    <td>
                        '.$interventor.'   
                    </td>
                    <td>
                        T.P.
                    </td>
                    <td>
                        '.$tpinterventor.'
                    </td>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        &nbsp;     
                    </td>
                </tr>
                <tr>
                    
                    <td colspan="6" >
                        TIPO DE OBRA:  &nbsp;&nbsp;
                        RESIDENCIAL &nbsp;'.$obra1.'&nbsp;&nbsp;&nbsp;
                        COMERCIAL &nbsp;'.$obra2.'&nbsp;&nbsp;&nbsp;
                        INSDUSTRIAL &nbsp;'.$obra3.' &nbsp;&nbsp;&nbsp;
                        USO ESPECIAL: '.$usoesp.'

                    </td>
                </tr>
                <tr>
                    <td>AREA:&nbsp;&nbsp;
                        '.$area.'  
                        '.$area1.'  m2&nbsp;&nbsp;
                    </td>
                    <td colspan="2">
                    LONGITUD '.$long.' 
                        '.$long1.'  m&nbsp;&nbsp;
                    </td>
                    <td colspan="3">
                     
                        POTENCIA INSTALADA  
                        '.$area3.'  KVA&nbsp;&nbsp;&nbsp;&nbsp;
                        TENSION  
                        '.$area4.' V
                    </td>

                </tr>
               
            </tbody>
        </table>
        <br><br>
        <p><b>2. DETERMINACIÓN EXIGENCIA DE RETILAP (INDICAR SI LA INSTALACION TIENE ALGUNA DE LAS SIGUIENTES CARACTERISTICAS)</b></p>
        <br>
        <table border="1">
            <tbody>
                <tr>
                    <td colspan="2"></td>
                    <td>APLICA</td>  
                </tr>                    
                <tr>
                    <td>1.&nbsp;</td>
                    <td>Instalaciones de alumbrado público categorizadas en los niveles B y C del RETILAP (Mayor a 25 Luminarias o mayor a 1000m de Alumbrado Público)
                        610.2 del presente Anexo General.</td>
                    <td align="center">'.$_POST["p1"].'</td>                            
                </tr>
                <tr>
                    <td>2.&nbsp;</td>
                    <td>Instalaciones de iluminación donde en una misma área cerrada y cubierta se puedan concentrar simultáneamente más de 50 personas, tales como almacenes, centros comerciales, sitios de recreación, espectáculos públicos, centros de salud, hospitales, clínicas, hoteles, auditorios, bibliotecas, estaciones y terminales de transporte, centros de reclusión. </td>
                    <td align="center">'.$_POST["p2"].'</td>                            
                </tr>
                <tr>
                    <td>3.&nbsp;</td>
                    <td>Centros de enseñanza, salones de clase y laboratorios.</td>
                    <td align="center">'.$_POST["p3"].'</td>
                </tr>
                <tr>
                    <td>4.&nbsp;</td>
                    <td> Los sitios de esparcimiento tales como bares, discotecas, casinos donde se puedan concentrar más de 50 personas deben certificar plenamente los sistemas de alumbrado de emergencia, así como las condiciones de seguridad de las instalaciones de iluminación.</td>
                    <td align="center">'.$_POST["p4"].'</td>
                </tr>
                <tr>
                    <td>5.&nbsp;</td>
                    <td>Edificaciones residenciales o similares objeto de una misma licencia o permiso de construcción donde se puedan concentrar más de 100 personas. En este caso la escogencia de las áreas a inspeccionar se podrá hacer usando las técnicas de muestreo recomendadas en procesos de certificación. La certificación será del conjunto o edificación</td>
                    <td align="center">'.$_POST["p5"].'</td>
                </tr>
                <tr>
                    <td>6.&nbsp;</td>
                    <td> Viviendas individuales y comercios de áreas construidas mayores a 500 m2</td>
                    <td align="center">'.$_POST["p6"].'</td>
                </tr>
                <tr>
                    <td>7.&nbsp;</td>
                    <td>Sistemas de iluminación de fachadas y monumentos y demás sitios de interés público.</td>
                    <td align="center">'.$_POST["p7"].'</td>
                </tr>
                <tr>
                    <td>8.&nbsp;</td>
                    <td>Industria y oficinas con más de 30 puestos de trabajo o 500 m2 de área iluminada.</td>
                    <td align="center">'.$_POST["p8"].'</td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table>
            <thead>
                <tr>
                    <td colspan="3"><b>3. DOCUMENTACION:</b></td> 
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td colspan="2"></td>
                    <td>APLICA</td>                        
                </tr>                        
                <tr>
                    <td>1.1</td>
                    <td>PLANOS</td>
                    <td align="center">'.$_POST["p11"].'</td>
                </tr>
                <tr>
                    <td>1.2</td>
                    <td>MEMORIAS DE CALCULO</td>
                    <td align="center">'.$_POST["p12"].'</td>
                </tr>
                <tr>
                    <td>1.3</td>
                    <td>CERTIFICADOS DE LOS PRODUCTOS</td>
                    <td align="center">'.$_POST["p13"].'</td>
                </tr>
                <tr>
                    <td>1.4</td>
                    <td>MP DISEÑADOR</td>
                    <td align="center">'.$_POST["p14"].'</td>
                </tr>
                <tr>
                    <td>1.5</td>
                    <td>MP CONSTRUCTOR</td>
                    <td align="center">'.$_POST["p15"].'</td>
                </tr>
                <tr>
                    <td>1.6</td>
                    <td>MP INTERVENTOR</td>
                    <td align="center">'.$_POST["p16"].'</td>
                </tr>
                <tr>
                    <td>1.7</td>
                    <td>DECLARACION DEL CONSTRUCTOR</td>
                    <td align="center">'.$_POST["p17"].'</td>
                </tr>
                <tr>
                    <td>1.8</td>
                    <td>FORMATOS NECESARIOS PARA LLENAR EN OBRA:</td>
                    <td align="center">'.$_POST["p18"].'</td>
                </tr>
            </tbody>
        </table>
        <br>

        <table class="tam-tabla" border="1">
            <tbody>
                <tr>
                    <td colspan="2"></td>
                    <td>APLICA</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-1</td>
                    <td>Declaracion De Imparcialidad,Independencia,Conflictos De Interes Y Compromiso De Confidencialidad </td>
                    <td align="center">'.$_POST["r11"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-2</td>
                    <td>Planeacion De La Inspeccion</td>
                    <td align="center">'.$_POST["r12"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-3</td>
                    <td>Lista De Verificacion Documental Del Proyecto</td>
                    <td align="center">'.$_POST["r13"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-4</td>
                    <td>Orden De Servicio Para Inspector</td>
                    <td align="center">'.$_POST["r14"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-5</td>
                    <td>Lista De Revision Del Diseño</td>
                    <td align="center">'.$_POST["r15"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-6</td>
                    <td>Lista De Verificacion Para Instalaciones Electricas De Uso Final Instalaciones Basicas</td>
                    <td align="center">'.$_POST["r16"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-7</td>
                    <td>Lista De Verificacion Para Instalaciones Electricas De Uso Final(Asistencia Medica)</td>
                    <td align="center">'.$_POST["r17"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-8</td>
                    <td>Lista De Verificacion Para Instalaciones Electricas De Uso Final(Minas)</td>
                    <td align="center">'.$_POST["r18"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-9</td>
                    <td>Lista De Verificacion Para Instalaciones Electricas De Transformaciones(Subestaciones)</td>
                    <td align="center">'.$_POST["r19"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-10</td>
                    <td>Lista De Verificacion Para Instalaciones Electricas De Distribucion</td>
                    <td align="center">'.$_POST["r110"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-11</td>
                    <td>Lista De Verificacion Para Instalaciones Electricas (Sistema De Proteccion De Rayos)</td>
                    <td align="center">'.$_POST["r111"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-12</td>
                    <td>Lista De Verificacion Para Instalaciones Electricas (Clasificacion De Lugares Peligrosos)</td>
                    <td align="center">'.$_POST["r112"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-13</td>
                    <td>Lista De Verificacion Para Instalaciones Electricas (Provisionales)</td>
                    <td align="center">'.$_POST["r113"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-14</td>
                    <td>Lista De Verificacion De Los Certificados De Los Materiales</td>
                    <td align="center">'.$_POST["r114"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-15</td>
                    <td>Lista De Verificacion De Los Resultados De Mediciones En Campo</td>
                    <td align="center">'.$_POST["r115"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-16</td>
                    <td>Lista De Verificacion De Los Resultados De Iluminacion</td>
                    <td align="center">'.$_POST["r116"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-17</td>
                    <td>Lista De Verificacion Del Reporte De No Conformidades y Acta De Visita</td>
                    <td align="center">'.$_POST["r117"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-21</td>
                    <td>Lista De Verificacion De Evaluacion Preliminar Del Sitio Para La Inspeccion</td>
                    <td align="center">'.$_POST["r121"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-23</td>
                    <td>Lista De Verificacion De Pruebas Funcionales</td>
                    <td align="center">'.$_POST["r123"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-24</td>
                    <td>Lista De Verificacion Uso Final   (Alta Concentracion De Personas)</td>
                    <td align="center">'.$_POST["r124"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-25</td>
                    <td>Lista De Verificacion Uso Final  (Edificaciones Prefabricadas)</td>
                    <td align="center">'.$_POST["r125"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-26</td>
                    <td>Lista De Verificacion Uso Final   (Edificios Para Usos Agricolas Y Pecuarios)</td>
                    <td align="center">'.$_POST["r126"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-27</td>
                    <td>Lista De Verificacion Uso Final   (Viviendas Vomiles, Vehiculos Recreativos, Remolques Estacionados)</td>
                    <td align="center">'.$_POST["r127"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-28</td>
                    <td>Lista De Verificacion Uso Final  (Casas Flotantes Y Palafilicas)</td>
                    <td align="center">'.$_POST["r128"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-29</td>
                    <td>Lista De Verificacion Uso Final  (Equipos  Especiales)</td>
                    <td align="center">'.$_POST["r129"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-30</td>
                    <td>Lista De Verificacion Uso Final   (Piscinas, Fuentes E Instalaciones Similares)</td>
                    <td align="center">'.$_POST["r130"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-31</td>
                    <td>Lista De Verificacion Uso Final  (Sistemas Contra Incendio)</td>
                    <td align="center">'.$_POST["r131"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-32</td>
                    <td>Lista De Verificacion Uso Final  (Sistemas De Emergencia)</td>
                    <td align="center">'.$_POST["r132"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-33</td>
                    <td>Lista De Verificacion Uso Final  (Cerca Electrica)</td>
                    <td align="center">'.$_POST["r133"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-34</td>
                    <td>Lista De Verificacion Uso Final    (Bandeja Portacable)</td>
                    <td align="center">'.$_POST["r134"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-35</td>
                    <td>Lista De Verificacion Uso Final   (Blindobarras)</td>
                    <td align="center">'.$_POST["r135"].'</td>
                </tr>
                <tr>
                    <td>O/PS/R/01-36</td>
                    <td>Lista De Verificacion Uso Final    (Duchas)</td>
                    <td align="center">'.$_POST["r136"].'</td>
                </tr>
            </tbody>
        </table>
        <br>

        <table class="tam-tabla" >
            <thead>
                <tr>
                    <td colspan="3"><b>4. ALISTAR EQUIPOS</b></td>
                </tr>
            </thead>
            <tbody>                    
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td>APLICA</td>                            
                </tr>                        
                <tr>
                    <td>3.1.1</td>
                    <td>CAMARA FOTOGRAFICA</td>
                    <td align="center">'.$_POST["a311"].'</td>
                </tr>
                <tr>
                    <td>3.1.2</td>
                    <td>FLEXOMETRO</td>
                    <td align="center">'.$_POST["a312"].'</td>
                </tr>
                <tr>
                    <td>3.1.3</td>
                    <td>MEDIDOR DE CAMPO MAGNETICO</td>
                    <td align="center">'.$_POST["a313"].'</td>
                </tr>
                <tr>
                    <td>3.1.4</td>
                    <td>MEDIDOR DE CAMPO ELECTRICO</td>
                    <td align="center">'.$_POST["a314"].'</td>
                </tr>
                <tr>
                    <td>3.1.5</td>
                    <td>MEGOHMETRO</td>
                    <td align="center">'.$_POST["a315"].'</td>
                </tr>
                <tr>
                    <td>3.1.6</td>
                    <td>TELUROMETRO</td>
                    <td align="center">'.$_POST["a316"].'</td>
                </tr>
                <tr>
                    <td>3.1.7</td>
                    <td>LUXOMETRO</td>
                    <td align="center">'.$_POST["a317"].'</td>
                </tr>
                <tr>
                    <td>3.1.8</td>
                    <td>PINZA AMPERIMETRICA</td>
                    <td align="center">'.$_POST["a318"].'</td>
                </tr>
                <tr>
                    <td>3.1.9</td>
                    <td>VOLTIMETRO</td>
                    <td align="center">'.$_POST["a319"].'</td>
                </tr>
                <tr>
                    <td>3.1.10</td>
                    <td>OTRO: '.$_POST["av3110"].'</td>
                    <td align="center">'.$_POST["a3110"].'</td>
                </tr>
                <tr>
                    <td>3.1.11</td>
                    <td>OTRO: '.$_POST["av3111"].'</td>
                    <td align="center">'.$_POST["a3111"].'</td>
                </tr>                   
            </tbody>
        </table>
        <br><br>

        <table class="tam-tabla" >
            <tbody>
                <tr>
                    <td colspan="3"><b>ORDEN EN LA EJECUCIÓN DE LA INSPECCIÓN</b></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="3"><b>5. DISTRIBUCION:</b></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td align="center">APLICA</td>
                </tr>
                <tr>
                    <td>3.1</td>
                    <td>ESTRUCTURAS, APOYOS</td>
                    <td align="center">'.$_POST["d31"].'</td>
                </tr>
                <tr>
                    <td>3.2</td>
                    <td>CONDUCTORES</td>
                    <td align="center">'.$_POST["d32"].'</td>
                </tr>
                <tr>
                    <td>3.3</td>
                    <td>CAJAS DE INSPECCION</td>
                    <td align="center">'.$_POST["d33"].'</td>
                </tr>
                <tr>
                    <td>3.4</td>
                    <td>GABINETE</td>
                    <td align="center">'.$_POST["d34"].'</td>
                </tr>                    
            
                <tr>
                    <td colspan="3"><br><b>6. SUBESTACIONES:</b></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td align="center">APLICA</td>
                </tr>
                <tr>
                    <td>4.1</td>
                    <td>ACOMETIDA</td>
                    <td align="center">'.$_POST["s41"].'</td>
                </tr>
                <tr>
                    <td>4.2</td>
                    <td>CAJAS DE INSPECCION</td>
                    <td align="center">'.$_POST["s42"].'</td>
                </tr>
                <tr>
                    <td>4.3</td>
                    <td>TRANSFORMADOR</td>
                    <td align="center">'.$_POST["s43"].'</td>
                </tr>
                <tr>
                    <td>4.4</td>
                    <td>ENCERRAMIENTOS</td>
                    <td align="center">'.$_POST["s44"].'</td>
                </tr>
                <tr>
                    <td>4.5</td>
                    <td>EQUIPO DE MEDIDA</td>
                    <td align="center">'.$_POST["s45"].'</td>
                </tr>
                <tr>
                    <td>4.6</td>
                    <td>ALIMENTADOR EN BT</td>
                    <td align="center">'.$_POST["s46"].'</td>
                </tr>
            </tbody>
        </table>
        <br><br>

        <table class="tam-tabla" >
            <tbody>
                <tr>
                    <td></td>
                    <td align="center">APLICA</td>
                </tr>
                <tr>
                    <td><b>7. SISTEMA DE PROTECCION CONTRA RAYOS (SIPRA):</b></td>
                    <td align="center">'.$_POST["sp47"].'</td>
                </tr>
                <tr>
                    <td colspan="2">
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td><b>8. SISTEMA DE PUESTA A TIERRA (SPT):</b></td>
                    <td align="center">'.$_POST["spt48"].'</td>
                </tr>                                        
            </tbody>
        </table>
        <br>

        <table class="tam-tabla" width="100%">
            <tbody>
                <tr>
                    <td colspan="3"><b>9. TIPO DE INSTALACION USO FINAL:</b></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td align="center">APLICA</td>                       
                </tr>                   
                <tr>
                    <td align="center">'.$resi.'&nbsp;<b>RESIDENCIAL:</b></td>
                    <td>8.1 ACOMETIDA EN BT</td>
                    <td align="center">'.$_POST["res1"].'</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>8.2 CAJAS DE INSPECCION</td>
                    <td align="center">'.$_POST["res2"].'</td>
                </tr>
                <tr>
                    <td></td>
                    <td>8.3 GABINETE</td>
                    <td align="center">'.$_POST["res3"].'</td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>                        
                    <td align="center">'.$comer.'&nbsp;<b>COMERCIAL:</b></td>
                    <td>8.4 CIRCUITOS ALIMENTADORES</td>
                    <td align="center">'.$_POST["res4"].'</td>
                </tr>
                <tr>
                    <td align="center"></td>
                    <td>8.5 TABLEROS DE DISTRIBUCION</td>
                    <td align="center">'.$_POST["res5"].'</td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td align="center"></td>
                    <td>8.6 CIRCUITOS RAMALES</td>
                    <td align="center">'.$_POST["res6"].'</td>
                </tr>                    
                <tr>
                    <td align="center">'.$indus.'&nbsp;<b>INDUSTRIAL:</b></td>
                    <td>8.7 ILUMINACION</td>
                    <td align="center">'.$_POST["res7"].'</td>
                </tr>
                <tr>
                    <td align="center"></td>
                    <td>8.8 TOMACORRIENTES</td>
                    <td align="center">'.$_POST["res8"].'</td>
                </tr>
                <tr>
                    <td align="center"></td>
                    <td>8.9 CIRCUITOS RAMALES</td>
                    <td align="center">'.$_POST["res9"].'</td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>  
                <tr>
                    <td><b>ESPECIAL TIPO:</b></td>
                    <td colspan="2">'.$especialtipo.'</td>                        
                </tr>
            
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td align="center">APLICA</td>
                </tr> 
                <tr>
                    <td><b>OBSERVACIONES:</b></td>
                    <td>8.10 USO DE EQUIPOS</td>
                    <td align="center">'.$_POST["res10"].'</td>
                </tr>
                <tr>
                    <td rowspan="7"><p class="bordes">'.$obser.'</p><br><br></td>  
                    <td>&nbsp;&nbsp;* ACOMETIDA</td>
                    <td align="center">'.$_POST["ACOMETIDA"].'</td>
                </tr>
                <tr>

                    <td>&nbsp;&nbsp;* BOMBA CONTRA INCENDIO</td>
                    <td align="center">'.$_POST["BOMBA"].'</td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;* PLANTA DE EMERGENCIA</td>
                    <td align="center">'.$_POST["PLANTA"].'</td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;* ILUMINACION DE EMERGENCIA</td>
                    <td align="center">'.$_POST["ILUMINACION"].'</td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;* TRANSFERENCIA</td>
                    <td align="center">'.$_POST["TRANSFERENCIA"].'</td>
                </tr>
                <tr>
                    <td>8.12 AREAS CLASIFICADAS COMO PELIGROSAS</td>
                    <td align="center">'.$_POST["res12"].'</td>
                </tr>
                <tr>
                    <td>8.14 AREAS CLASIFICADAS COMO NO PELIGROSAS</td>
                    <td align="center">'.$_POST["res14"].'</td>
                </tr>
            </tbody>
        </table>
        <br>

        <table class="tam-tabla" >
            <tbody>
                <tr>
                    <td colspan="2"><b>NECESIDADES DE CAPACITACION</b></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">
                        Según las características de la obra a inspeccionar considero que (x):
                    </td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">'.$capacitacion.' &nbsp;No necesito capacitación técnica y documental referente a la obra.</td>                            
                </tr>
                <tr>
                    <td colspan="2">'.$capacitacion2.' &nbsp;Necesito capacitación en los siguientes temas:</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2"><b>OBSERVACIONES:</b></td>
                </tr>
                <tr>
                    <td colspan="2"><p class="bordes">'.$_POST["obs"].'</p></td>
                </tr>
            </tbody>
        </table>
        <br>
        <!-- preguntas-->


        <table class="tam-tabla" border="1">
            <tbody>
                <tr>
                    <td>Gerente:</td>
                    <td>Director Tecnico:</td>
                    <td>Inspector:</td>
                </tr>
                <tr><td colspan="3">&nbsp;</td></tr>
                <tr>
                    <td>Firma ____________________________</td>
                    <td>Firma ____________________________</td>
                    <td>Firma ____________________________</td>
                </tr>
            </tbody>
        </table>

    </body>';

      
$codigoHTML = utf8_decode($codigoHTML);
$dompdf = new DOMPDF();
$dompdf->set_paper("letter", "portrait");
$dompdf->load_html($codigoHTML);
ini_set("memory_limit", "254M");
$dompdf->render();
$dompdf->stream("DECLA" . $_POST["orden"] . ".pdf");

?>


