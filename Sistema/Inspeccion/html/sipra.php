
<div class="col-md-12 fondo-blanco"> 
    <!-- Task Widget -->

    <br><br>
            <!-- inicio encabezado -->
            <div id="encabezado"  class="col-xs-12">

                <div class="logop col-xs-3">
                    <a href="#"><img src="images/photo.jpg"></a>
                </div>
                <div class="titulo col-xs-9">
                    <h3 class="negrita">SISTEMA DE PROTECCION CONTRA RAYOS</h3>
                    <div class="col-xs-12">

                        <p>FECHA:2014-10-07					
                            &nbsp;&nbsp;	
                            VERSION:3			
                            &nbsp;&nbsp;	
                            O/PS/R/01-11</p>
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
                <p></p>
                  <div class="col-xs-5">
                    <br>TIPO DE INSTALACION::
                    <input type="text" id="instalacion" name="istalacion" />
                </div>
                <div class="col-xs-12">
                    <br>TIPO PROCESO: <input type="text" class="tam-tabla" id="proceso" name="proceso"/>
                </div>
                <div class="col-xs-12">
                    <br>TIPO DE INSPECCION: <input type="text" class="tam-tabla" id="inspeccion" name="inspeccion"/>
                </div>
                
            </div>
            <br>

            <!-- inicio preguntas-->
            <div id="preguntas" class="margen col-xs-12">
                <table border="1" class=" tam-tabla" >
                    <thead>
                        <tr>
                            <th rowspan="2">NUM</th>
                            <th rowspan="2">ASPECTO</th>
                            <th colspan="3">APLICA</th>
                            <th rowspan="2">OBSERVACIONES</th>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>ANC</td>
                            <td>NC</td>
                        </tr>
                        
                    </thead>
                      <tbody>
                           <tr >
                            <td>1</td>
                            <td>El diseño y construcción es realizado por profesionales especializados</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1"  name="g1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1"  name="g1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1"   name="g1"></td>
                            <td class="centrado"><textarea   id="g1"   name="g1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>2</td>
                            <td>El diseño e implementación del sistema se basa en el Método electrogeométrico.</td> 
                            <td class="centrado"><input type="radio" value="a" id="g2"  name="g2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2" name="g2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2" name="g2"></td>
                              <td class="centrado"><textarea   id="g2"   name="g2"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>3</td>
                            <td>Verificar procedimiento para la evaluación del nivel de riesgo por exposición al rayo.</td>    
                            <td class="centrado"><input type="radio" value="a" id="g3"  name="g3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3"  name="g3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3"   name="g3"></td>
                              <td class="centrado"><textarea   id="g3"   name="g3"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>4</td>
                            <td>Los bajantes se disponen de manera que  existan varios caminos en paralelo para la corriente hacia tierra</td>     
                            <td class="centrado"><input type="radio" value="a" id="g"  name="g4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4"  name="g4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g4"   name="g4"></td>
                              <td class="centrado"><textarea   id="g4"   name="g4"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>5</td>
                            <td>La longitud de los caminos de corriente se reduce al mínimo </td>     
                             <td class="centrado"><input type="radio" value="a" id="g5"  name="g5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g5"  name="g5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g5"   name="g5"></td>
                              <td class="centrado"><textarea   id="g5"   name="g5"></textarea> </td> 
                        <tr >
                            <td>6</td>
                            <td>Se realizan las conexiones equipotenciales a las partes conductoras de la estructura.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g6"  name="g6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6"  name="g6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g6"   name="g6"></td>
                              <td class="centrado"><textarea   id="g6"   name="g6"></textarea> </td>            
                        </tr>
                        <tr >
                            <td>7</td>
                            <td>Se tienen en cuenta los riesgos de efectos térmicos o explosivos en el punto de impacto de rayo para determinar el tipo de bajante </td>     
                            <td class="centrado"><input type="radio" value="a" id="g7"  name="g7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7"  name="g7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7"   name="g7"></td>
                              <td class="centrado"><textarea   id="g7"   name="g7"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>8</td>
                            <td>La interconexión de bajantes se hace en la parte superior </td>     
                            <td class="centrado"><input type="radio" value="a" id="g8"  name="g8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g8"  name="g8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g8"   name="g8"></td>
                              <td class="centrado"><textarea   id="g8"   name="g8"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>9</td>
                            <td>Se aplica la Tabla 16.2 del RETIE para aplicar las distancias de separación de bajantes y anillos.</td>  
                            <td class="centrado"><input type="radio" value="a" id="g9"  name="g9"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g9"  name="g9"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g9"   name="g9"></td>
                              <td class="centrado"><textarea   id="g9"   name="g9"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>10</td>
                            <td>En estructuras totalmente metálicas y en estructuras de concreto en las que el acero de refuerzo
                                es eléctricamente continuo se instalan más bajantes, espaciadas de forma equidistante alrededor del perímetro y conectadas mediante anillos equipotenciales</td>     
                            <td class="centrado"><input type="radio" value="a" id="g10"  name="g10"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10"  name="g10"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g10"   name="g10"></td>
                              <td class="centrado"><textarea   id="g10"   name="g10"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>11</td>
                            <td>Cada bajante termina en una puesta tierra que tiene un camino vertical y otro horizontal a la corriente</td>     
                            <td class="centrado"><input type="radio" value="a" id="g11"  name="g11"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g11"  name="g11"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g11"   name="g11"></td>
                              <td class="centrado"><textarea   id="g11"   name="g11"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>12</td>
                            <td>Los bajantes son instalados de manera que sean una continuación directa de los conductores del sistema de captación</td>     
                            <td class="centrado"><input type="radio" value="a" id="g12"  name="g12"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g12"  name="g12"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g12"   name="g12"></td>
                              <td class="centrado"><textarea   id="g12"   name="g12"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>13</td>
                            <td>Los conductores bajantes se encuentran de manera rectilínea y vertical, siguiendo el camino más corto y directo a tierra</td>     
                           <td class="centrado"><input type="radio" value="a" id="g13"  name="g13"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g13"  name="g13"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g13"   name="g13"></td>
                              <td class="centrado"><textarea   id="g13"   name="g13"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>14</td>
                            <td>Se evitan la formación de bucles en el conductor bajante y de curvas de menos de 20 cm de radio.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g14"  name="g14"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g14"  name="g14"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g14"   name="g14"></td>
                              <td class="centrado"><textarea   id="g14"   name="g14"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>15</td>
                            <td>Los conductores bajantes se encuentran ubicados en lugares diferentes a canales de drenaje de aguas.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g15"  name="g15"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g15"  name="g15"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g15"   name="g15"></td>
                              <td class="centrado"><textarea   id="g15"   name="g15"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>16</td>
                            <td>Los materiales intalados en el Sistema cumplen con las especificaciones dadas en la Tabla 16.1 del RETIE.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g16"  name="g16"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g16"  name="g16"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g16"   name="g16"></td>
                              <td class="centrado"><textarea   id="g16"   name="g16"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>17</td>
                            <td>Los marcos o elementos de la fachada utilizados como bajantes cumplen con los requisitos para este propósito</td>     
                            <td class="centrado"><input type="radio" value="a" id="g17"  name="g17"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g17"  name="g17"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g17"   name="g17"></td>
                              <td class="centrado"><textarea   id="g17"   name="g17"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>18</td>
                            <td>La puesta a tierra de protección contra rayos se encuentra interconectada con las otras puestas a tierra de la edificación.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g18"  name="g18"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g18"  name="g18"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g18"   name="g18"></td>
                              <td class="centrado"><textarea   id="g18"   name="g18"></textarea> </td>                    
                        </tr>   <tr >
                            <td>19</td>
                            <td>Se utiliza el método de terminales de captación tipo Franklin.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g19"  name="g1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g19"  name="g19"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g19"   name="g19"></td>
                            <td class="centrado"><textarea   id="g19"   name="g19"></textarea> </td>
                        </tr>
                        <tr >
                            <td>20</td>
                            <td>Los bajantes están ubicados en las partes externas de la edificación.</td> 
                            <td class="centrado"><input type="radio" value="a" id="g20"  name="g20"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g20" name="g20"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g20" name="g20"></td>
                              <td class="centrado"><textarea   id="g20"   name="g20"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>21</td>
                            <td>Se encuentran equipotenciadas todas las partes conductoras que conforman el sistema de puesta a tierra con las bajantes</td>    
                            <td class="centrado"><input type="radio" value="a" id="g21"  name="g21"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g21"  name="g21"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g21"   name="g21"></td>
                              <td class="centrado"><textarea   id="g21"   name="g21"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>22</td>
                            <td>Se garantiza la separación mínima  entre electrodos de 1,8 m.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g"  name="g22"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g22"  name="g22"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g22"   name="g22"></td>
                              <td class="centrado"><textarea   id="g22"   name="g22"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>23</td>
                            <td>Se utiliza el método de anillos equipotenciales.</td>     
                             <td class="centrado"><input type="radio" value="a" id="g23"  name="g23"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g23"  name="g23"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g23"   name="g23"></td>
                              <td class="centrado"><textarea   id="g23"   name="g23"></textarea> </td> 
                        <tr >
                            <td>24</td>
                            <td>Puesta a tierra para protección contra rayos.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g24"  name="g24"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g24"  name="g24"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g24"   name="g24"></td>
                              <td class="centrado"><textarea   id="g24"   name="g24"></textarea> </td>            
                        </tr>
                        <tr >
                            <td>25</td>
                            <td>Tensión máxima de contacto.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g25"  name="g7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7"  name="g7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7"   name="g7"></td>
                              <td class="centrado"><textarea   id="g7"   name="g7"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>26</td>
                            <td>Tensión máxima de paso.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g26"  name="g26"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g26"  name="g26"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g26"   name="g26"></td>
                              <td class="centrado"><textarea   id="g26"   name="g26"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>27</td>
                            <td>Resistencia de puesta a tierra.</td>  
                            <td class="centrado"><input type="radio" value="a" id="g27"  name="g27"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g27"  name="g27"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g27"   name="g27"></td>
                              <td class="centrado"><textarea   id="g27"   name="g27"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>28</td>
                            <td>Altura de las puntas encontradas </td>     
                            <td class="centrado"><input type="radio" value="a" id="g28"  name="g28"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g28"  name="g28"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g28"   name="g28"></td>
                              <td class="centrado"><textarea   id="g28"   name="g28"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>29</td>
                            <td>La altura de las puntas encontradas coincide con lo especificado en planos</td>     
                            <td class="centrado"><input type="radio" value="a" id="g29"  name="g29"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g29"  name="g29"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g29"   name="g29"></td>
                              <td class="centrado"><textarea  id="g29"  name="g29"></textarea> </td>                   
                        </tr>
                    </tbody>
                </table> 
              </div>  <!--fin tablaa aspectos generales -->
              
              <div class="col-xs-6">
                <br>
                <br>
                <p> OBSERVACIONES GENERALES</p>
                <textarea class="text-area" id="o1" name="o1"></textarea>
            </div>
              
               <br>
            <tr> 
                <td>NOTA 1:<BR>Esta lista es un anexo de la lista de uso final O/PS/R/01-6<BR>Las puntas o terminales de captación del rayo, las bayonetas y cuernos de arco, que puedan estar clasificadas comercialmente como dispositivos de protección de sobretensiones, no requieren demostrar la conformidad con certificado de producto.</td>
            <br>
            <P>
            <td>NOTA 2:<br>Las puntas o terminales de captación del rayo, las bayonetas y cuernos de arco, que puedan estar clasificadas comercialmente como dispositivos de protección de sobretensiones, no requieren demostrar la conformidad con certificado de producto.</td>
            </tr>  </P>  
            
            <p></p>
                  <div class="col-xs-5">
                    <br>Numero de puntas captadoras:
                    <input type="text" id="numpuntas" name="numpuntas" />
                </div>
                <div class="col-xs-12">
                    <br>Nuemero de bajantes: <input type="text" class="tam" id="bajantes" name="bajantes"/>
                </div>
                <div class="col-xs-12">
                    <br>Numero de electrodos puesta a tierra: <input type="text" class="tam-tabla" id="numpuestat" name="numpuestat"/>
                </div>
            <br>
                <div class="col-xs-12">
                    <br>Distancia minima entre los 2 bajantes mas cercanos: <input type="text" class="tam-tabla" id="disbtajantes" name="distbajantes"/>
                </div>
            
            <br>
            <P>CONCEPTO:</p>
            <td class="centrado"><input type="radio" value="anc" checked  id="g150"  name="g150"></td> APROBADO 
            <td class="centrado"><input type="radio" value="nc"   checked id="g1151"   name="g151"></td>NO APROBADO
            <br>
            <div class="col-md-12">
            </div>
            <P></P>

            <P>
                FIRMA INSPECTOR: _______________________________
            </P>
                <p> 
               <input type="submit" value="ENVIAR"/> 
            </div>
                 

                     
