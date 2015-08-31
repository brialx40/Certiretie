<div class="col-md-12 fondo-blanco"> 
    <!-- Task Widget -->

    <br><br>
            <!-- inicio encabezado -->
            <div id="encabezado"  class="col-xs-12">

                <div class="logop col-xs-3">
                    <a href="#"><img src="images/photo.jpg"></a>
                </div>
                <div class="titulo col-xs-9">
                    <h3 class="negrita">COMPROBACION DE NUMERALES PARA EXPEDIR EL 
                                      DICTAMEN DE CONFORMIDAD EN MINAS SUBTERRANEAS</h3>
                    <div class="col-xs-12">

                        <p>FECHA:2013-06-20					
                            &nbsp;&nbsp;	
                            VERSION:2 			
                            &nbsp;&nbsp;	
                            O/PS/R/01-8</p>
                        <p>
                        <p> TIPO DE INSEPECCION: ESPECIAL </P>
                       
                    </div>	
                </div>	
            </div>	


            <form action="reporte/evaluacion_preliminar.php" method="post">


            <!-- inicio  fecha-->
            <div id="fecha" class="col-xs-12">

                <div class="col-xs-4">
                    <br/>FECHA REVISION:&nbsp;<input type="text" class="" id="fechar" name="fechar" /> 
                </div>
                <div class="col-xs-3"></div>
                <div class="col-xs-5">
                    <br>ORDEN SERVICIO N°:
                    <input type="text" id="orden" name="orden" />
                </div>

                <div class="col-xs-12">
                    <br><br>TIPO DE INSPECCION: <br><input type="text" class="tam-tabla" id="lugar" name="lugar"/>
                </div>
            </div>
            <br>


            <!-- inicio preguntas-->
            <div id="preguntas" class="margen col-xs-11">
                <table border="1" class=" tam-tabla" >
                    <thead>
                        <tr>
                            <th rowspan="2">ITEM</th>
                            <th rowspan="2">DESCRIPCION</th>
                            <th colspan="2">APLICA</th>
                            <th rowspan="2">OBSERVACIONES</th>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td>NC</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>DISEÑO ELECTRICO</td> 
                            <th colspan="2"></th>
                            <th rowspan="1"></th>
                            
                        </tr>
                       
                        <tr >
                            <td></td>
                            <td>Planos, diagramas y esquemas. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.1"  name="g1.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.1"  name="g1.1"></td>  
                             <td class="centrado"><textarea   id="g1.1"   name="g1.1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>1</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-5 </td>     
                            <td class="centrado"><input type="radio" value="a" id="g1"  name="g1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1"  name="g1"></td>  
                             <td class="centrado"><textarea   id="g1"   name="g1"></textarea> </td>
                        </tr>

                        <tr >
                            <td></td>
                            <td>Análisis de riesgo de origen eléctrico. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g2"  name="g2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2"  name="g2"></td>  
                             <td class="centrado"><textarea   id="g2"   name="g2"></textarea> </td>
                        </tr>
                        <tr >
                            <td>2</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-5</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.1"  name="21.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.1"  name="g2.1"></td>  
                             <td class="centrado"><textarea   id="g2.1"   name="g2.1"></textarea> </td>
                        </tr>
                        
                           <tr >
                            <td></td>
                            <td>Especificaciones técnicas, memorias de calculo. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.1"  name="g3.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.1"  name="g3.1"></td>  
                             <td class="centrado"><textarea   id="g3.1"   name="g3.1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>3</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-5</td>     
                            <td class="centrado"><input type="radio" value="a" id="g3"  name="g3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3"  name="g3"></td>  
                             <td class="centrado"><textarea   id="g3"   name="g3"></textarea> </td>
                        </tr>
                        
                           <tr >
                            <td></td>
                            <td>Matriculas profesionales de personas calificadas. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g4.1"  name="g4.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4.1"  name="g4.1"></td>  
                             <td class="centrado"><textarea   id="g4.1"   name="g4.1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>4</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-2</td>     
                            <td class="centrado"><input type="radio" value="a" id="g4"  name="g4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4"  name="g4"></td>  
                             <td class="centrado"><textarea   id="g4"   name="g4"></textarea> </td>
                        </tr<!--diseño electrico fin-->
                        <tr>
                            <td></td>
                            <td>CAMPOS</td> 
                            <th colspan="2"></th>
                            <th rowspan="1"></th>
                            
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td> Valores de campos electromagnéticos.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g5.1"  name="g5.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g5.1"  name="g5.1"></td>  
                             <td class="centrado"><textarea   id="g5.1"   name="g5.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Verificación que los niveles de campo electromagnético no superen los valores establecidos en el artículo 14°. LLENAR FORMATO O/PS/R/01-15 </td>     
                            <td class="centrado"><input type="radio" value="a" id="g5"  name="g5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g5"  name="g5"></td>  
                             <td class="centrado"><textarea   id="g5"   name="g5"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>DISTANCIAS</td> 
                            <th colspan="2"></th>
                            <th rowspan="1"></th>
                            
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td> Distancias de seguridad.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g6.1"  name="g6.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6.1"  name="g6.1"></td>  
                             <td class="centrado"><textarea   id="g6.1"   name="g6.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-8 Numeral 1 ( 1.5 ) y 7 </td>     
                            <td class="centrado"><input type="radio" value="a" id="g6"  name="g6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6"  name="6"></td>  
                             <td class="centrado"><textarea   id="g6"   name="g6"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>ILUMINACION</td> 
                            <th colspan="2"></th>
                            <th rowspan="1"></th>
                            
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td>Iluminación que requiere dictamen de RETILAP. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g7.1"  name="g7.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7.1"  name="g7.1"></td>  
                             <td class="centrado"><textarea   id="g7.1"   name="g7.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Iluminación que requiere dictamen de RETILAP en el FORMATO O/PS/R/01-2 numeral 2 </td>     
                            <td class="centrado"><input type="radio" value="a" id="g7"  name="g7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7"  name="g7"></td>  
                             <td class="centrado"><textarea   id="g7"   name="g7"></textarea> </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td>PROTECCIONES</td> 
                            <th colspan="2"></th>
                            <th rowspan="1"></th>
                            
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td> Accesibilidad a todos los dispositivos de protección. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g8.1"  name="g8.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g8.1"  name="g8.1"></td>  
                             <td class="centrado"><textarea   id="g8.1"   name="g8.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-8 Numerales 1.5, 12.14</td>     
                            <td class="centrado"><input type="radio" value="a" id="g8"  name="g8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g8"  name="g8"></td>  
                             <td class="centrado"><textarea   id="g8"   name="g8"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Funcionamiento del corte automático de alimentación. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g9.1"  name="g9.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g9.1"  name="g9.1"></td>  
                             <td class="centrado"><textarea   id="g9.1"   name="g9.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-23</td>     
                            <td class="centrado"><input type="radio" value="a" id="g9"  name="g9"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g9"  name="g9"></td>  
                             <td class="centrado"><textarea   id="g9"   name="g9"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Selección de conductores.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g10.1"  name="g10.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10.1"  name="g10.1"></td>  
                             <td class="centrado"><textarea   id="g10.1"   name="g10.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-5</td>     
                            <td class="centrado"><input type="radio" value="a" id="g10"  name="g10"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10"  name="g10"></td>  
                             <td class="centrado"><textarea   id="g10"   name="g10"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Selección de dispositivos de protección contra sobrecorrientes. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g11.1"  name="g11.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g11.1"  name="g11.1"></td>  
                             <td class="centrado"><textarea   id="g11.1"   name="g11.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-5,  FORMATO O/PS/R/01-8 Numerales 1.5</td>     
                            <td class="centrado"><input type="radio" value="a" id="g11"  name="g11"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g11"  name="g11"></td>  
                             <td class="centrado"><textarea   id="g11"   name="g11"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Selección de dispositivos de protección contra sobretensiones.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g12.1"  name="g12.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g12.1"  name="g12.1"></td>  
                             <td class="centrado"><textarea   id="g12.1"   name="g12.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-5,  FORMATO O/PS/R/01-8 Numerales 1.5 </td>     
                            <td class="centrado"><input type="radio" value="a" id="g12"  name="g12"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g12"  name="g12"></td>  
                             <td class="centrado"><textarea   id="g12"   name="g12"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>PROTECCION CONTRA RAYOS</td> 
                            <th colspan="2"></th>
                            <th rowspan="1"></th>
                            
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td>Evaluación del nivel de riesgo.  </td>     
                            <td class="centrado"><input type="radio" value="a" id="g13.1"  name="g13.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g13.1"  name="g13.1"></td>  
                             <td class="centrado"><textarea   id="g13.1"   name="g13.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-5</td>     
                            <td class="centrado"><input type="radio" value="a" id="g13"  name="g13"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g13"  name="g13"></td>  
                             <td class="centrado"><textarea   id="g13"   name="g13"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Implementación de la protección.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g14.1"  name="g14.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g14.1"  name="g14.1"></td>  
                             <td class="centrado"><textarea   id="g14.1"   name="g14.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Si este numeral aplica llenar formato O/PS/R/01-11</td>     
                            <td class="centrado"><input type="radio" value="a" id="g14"  name="g14"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g14"  name="g14"></td>  
                             <td class="centrado"><textarea   id="g14"   name="g14"></textarea> </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td>SISTEMA DE PUESTA A TIERRA</td> 
                            <th colspan="2"></th>
                            <th rowspan="1"></th>
                            
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td>Continuidad de los conductores de tierra y conexiones equipotenciales.  </td>     
                            <td class="centrado"><input type="radio" value="a" id="g15.1"  name="g15.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g15.1"  name="g15.1"></td>  
                             <td class="centrado"><textarea   id="g15.1"   name="g15.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-23</td>     
                            <td class="centrado"><input type="radio" value="a" id="g15"  name="g15"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g15"  name="g15"></td>  
                             <td class="centrado"><textarea   id="g15"   name="g15"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Corrientes en el sistema de puesta a tierra.  </td>     
                            <td class="centrado"><input type="radio" value="a" id="g16.1"  name="g16.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g16.1"  name="g16.1"></td>  
                             <td class="centrado"><textarea   id="g16.1"   name="g16.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-23</td>     
                            <td class="centrado"><input type="radio" value="a" id="g16"  name="g16></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g16"  name="g16"></td>  
                             <td class="centrado"><textarea   id="g16"   name="g16"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Resistencia de puesta a tierra.  </td>     
                            <td class="centrado"><input type="radio" value="a" id="g17.1"  name="g17.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g17.1"  name="g17.1"></td>  
                             <td class="centrado"><textarea   id="g17.1"   name="g17.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-23</td>     
                            <td class="centrado"><input type="radio" value="a" id="g17"  name="g17"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g17"  name="g17"></td>  
                             <td class="centrado"><textarea   id="g17"   name="g17"></textarea> </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td>SEÑALIZACION</td> 
                            <th colspan="2"></th>
                            <th rowspan="1"></th>
                            
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td>Identificación de tableros y circuitos. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g18.1"  name="g18.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g18.1"  name="g18.1"></td>  
                             <td class="centrado"><textarea   id="g18.1"   name="g18.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-8 Numerales 1.5, 12.14</td>     
                            <td class="centrado"><input type="radio" value="a" id="g18"  name="g18"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g18"  name="g18"></td>  
                             <td class="centrado"><textarea   id="g18"   name="g18"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Identificación de canalizaciones. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g19.1"  name="g19.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g19.1"  name="g19.1"></td>  
                             <td class="centrado"><textarea   id="g19.1"   name="g19.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-8 Numeral 13</td>     
                            <td class="centrado"><input type="radio" value="a" id="g19"  name="g19"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g19"  name="g19"></td>  
                             <td class="centrado"><textarea   id="g19"   name="g19"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Identificación de conductores de fases, neutro y tierra.  </td>     
                            <td class="centrado"><input type="radio" value="a" id="g20.1"  name="g20.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g20.1"  name="g20.1"></td>  
                             <td class="centrado"><textarea   id="g20.1"   name="g20.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-8 Numeral 1.25</td>     
                            <td class="centrado"><input type="radio" value="a" id="g20"  name="g20"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g20"  name="g20"></td>  
                             <td class="centrado"><textarea   id="g20"   name="g20"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Diagramas, esquemas, avisos y señales.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g21.1"  name="g21.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g21.1"  name="g21.1"></td>  
                             <td class="centrado"><textarea   id="g21.1"   name="g21.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-8 Numeral 5</td>     
                            <td class="centrado"><input type="radio" value="a" id="g21"  name="g21"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g21"  name="g21"></td>  
                             <td class="centrado"><textarea   id="g21"   name="g21"></textarea> </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td>DOCUMENTACION FINAL</td> 
                            <th colspan="2"></th>
                            <th rowspan="1"></th>
                            
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td>Memoria del proyecto.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g22.1"  name="g22.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g22.1"  name="g22.1"></td>  
                             <td class="centrado"><textarea   id="g22.1"   name="g22.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-5</td>     
                            <td class="centrado"><input type="radio" value="a" id="g22"  name="g22"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g22"  name="g22"></td>  
                             <td class="centrado"><textarea   id="g22"   name="g22"></textarea> </td>
                        </tr>
                        <tr>
                            <td>Plano(s) de lo construido.</td>
                            <td>  </td>     
                            <td class="centrado"><input type="radio" value="a" id="g23.1"  name="g23.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g23.1"  name="g23.1"></td>  
                             <td class="centrado"><textarea   id="g23.1"   name="g23.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-5</td>     
                            <td class="centrado"><input type="radio" value="a" id="g23"  name="g23"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g23"  name="g23"></td>  
                             <td class="centrado"><textarea   id="g23"   name="g23"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Certificaciones de productos.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g24.1"  name="g24.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g24.1"  name="g24.1"></td>  
                             <td class="centrado"><textarea   id="g24.1"   name="g24.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Verificación de cumplimiento en los FORMATOS O/PS/R/01-3, O/PS/R/01-14</td>     
                            <td class="centrado"><input type="radio" value="a" id="g24"  name="g24"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g24"  name="g24"></td>  
                             <td class="centrado"><textarea   id="g24"   name="g24"></textarea> </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td>OTROS</td> 
                            <th colspan="2"></th>
                            <th rowspan="1"></th>
                            
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td>Bomba contra incendios.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g25.1"  name="g25.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g25.1"  name="g25.1"></td>  
                             <td class="centrado"><textarea   id="g25.1"   name="g25.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Verificación de cumplimiento en los FORMATOS  O/PS/R/01-31, O/PS/R/01-38</td>     
                            <td class="centrado"><input type="radio" value="a" id="g25"  name="g25"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g25"  name="g25"></td>  
                             <td class="centrado"><textarea   id="g25"   name="g25"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Compatibilidad térmica de equipos y materiales.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g26.1"  name="g26.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g26.1"  name="g26.1"></td>  
                             <td class="centrado"><textarea   id="g26.1"   name="g26.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-8 Numeral 12.5</td>     
                            <td class="centrado"><input type="radio" value="a" id="g26"  name="g26"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g26"  name="g26"></td>  
                             <td class="centrado"><textarea   id="g26"   name="g26"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Ejecución de las conexiones.  </td>     
                            <td class="centrado"><input type="radio" value="a" id="g27.1"  name="g27.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g27.1"  name="g27.1"></td>  
                             <td class="centrado"><textarea   id="g27.1"   name="g27.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>Verificación de cumplimiento en el FORMATO  O/PS/R/01-23</td>     
                            <td class="centrado"><input type="radio" value="a" id="g27"  name="g27"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g27"  name="g27"></td>  
                             <td class="centrado"><textarea   id="g27"   name="g27"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Ensayos funcionales.  </td>     
                            <td class="centrado"><input type="radio" value="a" id="g28.1"  name="g28.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g28.1"  name="g28.1"></td>  
                             <td class="centrado"><textarea   id="g28.1"   name="g28.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Verificación de cumplimiento en el FORMATO  O/PS/R/01-23</td>     
                            <td class="centrado"><input type="radio" value="a" id="g28"  name="g28"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g28"  name="g28"></td>  
                             <td class="centrado"><textarea   id="g28"   name="g28"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Materiales acordes a las condiciones ambientales. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g29.1"  name="g29.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g29.1"  name="g29.1"></td>  
                             <td class="centrado"><textarea   id="g29.1"   name="g29.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-8 Numerales 1.20, 3.3, 3.4, 3.13, 5.6, 6.16, 11.6</td>     
                            <td class="centrado"><input type="radio" value="a" id="g29"  name="g29"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g29"  name="g29"></td>  
                             <td class="centrado"><textarea   id="g29"   name="g29"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Protección contra arcos internos.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g30.1"  name="g30.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g30.1"  name="g30.1"></td>  
                             <td class="centrado"><textarea   id="g30.1"   name="g30.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-8 Numerales 14 Y 15</td>     
                            <td class="centrado"><input type="radio" value="a" id="g30"  name="g30"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g30"  name="g30"></td>  
                             <td class="centrado"><textarea   id="g30"   name="g30"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Protección contra electrocución por contacto directo.  </td>     
                            <td class="centrado"><input type="radio" value="a" id="g31.1"  name="g31.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g31.1"  name="g31.1"></td>  
                             <td class="centrado"><textarea   id="g31.1"   name="g31.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-8 Numerales 14 Y 15</td>     
                            <td class="centrado"><input type="radio" value="a" id="g31"  name="g31"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g31"  name="g31"></td>  
                             <td class="centrado"><textarea   id="g31"   name="g31"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Protección contra electrocución por contacto indirecto.  </td>     
                            <td class="centrado"><input type="radio" value="a" id="g32.1"  name="g32.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g32.1"  name="g32.1"></td>  
                             <td class="centrado"><textarea   id="g32.1"   name="g32.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Verificación de cumplimiento en el FORMATO O/PS/R/01-8 Numerales 14 Y 15</td>     
                            <td class="centrado"><input type="radio" value="a" id="g32"  name="g32"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g32"  name="g32"></td>  
                             <td class="centrado"><textarea   id="g32"   name="g32"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Resistencia de aislamiento.  </td>     
                            <td class="centrado"><input type="radio" value="a" id="g33.1"  name="g33.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g33.1"  name="g33.1"></td>  
                             <td class="centrado"><textarea   id="g33.1"   name="g33.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Verificación de cumplimiento en el FORMATO  O/PS/R/01-23</td>     
                            <td class="centrado"><input type="radio" value="a" id="g33"  name="g33"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g33"  name="g33"></td>  
                             <td class="centrado"><textarea   id="g33"   name="g33"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Sistemas de emergencia</td>     
                            <td class="centrado"><input type="radio" value="a" id="g34.1"  name="g34.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g34.1"  name="g34.1"></td>  
                             <td class="centrado"><textarea   id="g34.1"   name="g34.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Los sistemas de emergencia son aquellos sistemas legalmente obligatorios y clasificados como 
                                de emergencia por las autoridades competentes. Estos sistemas están destinados para suministrar 
                                automáticamente energía eléctrica a sistemas de alumbrado, de fuerza o ambos, para áreas y equipos
                                determinados en caso de falla del suministro normal o en caso de accidente en los componentes de un
                                sistema destinado para suministrar, distribuir y controlar la potencia y alumbrado esenciales para
                                la seguridad de la vida humana. Si este numeral aplica llenar formato O/PS/R/01-32</td>     
                            <td class="centrado"><input type="radio" value="a" id="g34"  name="g34"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g34"  name="g34"></td>  
                             <td class="centrado"><textarea   id="g34"   name="g34"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Sujeción mecánica de elementos de la instalación.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g35.1"  name="g35.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g35.1"  name="g35.1"></td>  
                             <td class="centrado"><textarea   id="g35.1"   name="g35.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>Verificación de cumplimiento en el FORMATO  O/PS/R/01-23</td>     
                            <td class="centrado"><input type="radio" value="a" id="g35"  name="g35"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g35"  name="g35"></td>  
                             <td class="centrado"><textarea   id="g35"   name="g35"></textarea> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Ventilación de equipos.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g36.1"  name="g36.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g36.1"  name="g36.1"></td>  
                             <td class="centrado"><textarea   id="g36.1"   name="g36.1"></textarea> </td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>Verificación de cumplimiento en el FORMATO  O/PS/R/01-23</td>     
                            <td class="centrado"><input type="radio" value="a" id="g36"  name="g36"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g36"  name="g36"></td>  
                             <td class="centrado"><textarea   id="g36"   name="g36"></textarea> </td>
                        </tr>
                        </tbody>
                </table> 
              </div>       
</div>