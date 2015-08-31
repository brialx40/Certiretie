<div class="col-md-12 fondo-blanco"> 
    <!-- Task Widget -->

    <br><br>

   
            <!-- inicio encabezado -->
            <div id="encabezado"  class="col-xs-12">

                <div class="logop col-xs-3">
                    <a href="#"><img src="images/photo.jpg"></a>
                </div>
                <div class="titulo col-xs-9">
                    <h3 class="negrita">EDIFICIOS PARA USOS AGRICOLAS Y PECUARIAS</h3>
                    <div class="col-xs-12">

                        <p>FECHA:2014-08-01					
                            &nbsp;&nbsp;	
                            VERSION:3			
                            &nbsp;&nbsp;	
                            O/PS/R/01-26</p>
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
                            <th rowspan="2">DESCRIPCION</th>
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
                            <td></td>
                            <td>APLICACIÓN:  Establos, granjas agrícolas, avícolas o porcícolas</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.1"  name="g1.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.1"  name="g1.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.1"   name="g1.1"></td>
                            <td class="centrado"><textarea   id="g1.1"   name="g1.1"></textarea> </td>
                        </tr>
                           <tr >
                            <td>1</td>
                            <td>Los equipos eléctricos a plena carga tienen una temperatura superficial 
                                que no supera la temperatura de funcionamiento  normal del equipo o artefacto</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1"  name="g1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1"  name="g1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1"   name="g1"></td>
                            <td class="centrado"><textarea   id="g1"   name="g1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>2</td>
                            <td>El alambrado se efectúa con cable tipo UF, NMC, SE de cobre u otros cables o canalizaciones adecuados para el lugar</td> 
                            <td class="centrado"><input type="radio" value="a" id="g2"  name="g2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2" name="g2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2" name="g2"></td>
                              <td class="centrado"><textarea   id="g2"   name="g2"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>3</td>
                            <td>Las canalizaciones y métodos de alambrado estan acorde a las condiciones  de humedad, 
                                y atmósferas químicas, y demás condiciones del sitio del inmueble, garantizando la protección contra daño físico.</td>    
                            <td class="centrado"><input type="radio" value="a" id="g3"  name="g3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3"  name="g3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3"   name="g3"></td>
                              <td class="centrado"><textarea   id="g3"   name="g3"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>4</td>
                            <td>Para uso subterráneo, el material debe ser aceptablemente resistente a la humedad y a los agentes corrosivos y de
                                resistencia suficiente para soportar malos tratos, como impactos y aplastamientos, durante su manipulación e instalación.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g"  name="g4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4"  name="g4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g4"   name="g4"></td>
                              <td class="centrado"><textarea   id="g4"   name="g4"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>5</td>
                            <td>Los interruptores, interruptores automáticos, controladores y fusibles, incluidos los pulsadores, relés y
                                dispositivos similares, están provistos de encerramientos adecuados</td>     
                             <td class="centrado"><input type="radio" value="a" id="g5"  name="g5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g5"  name="g5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g5"   name="g5"></td>
                              <td class="centrado"><textarea   id="g5"   name="g5"></textarea> </td> 
                        <tr >
                            <td>6</td>
                            <td>En instalaciones con atmósferas corrosivas se  utilizan encerramientos adecuados para las condiciones
                                que se vayan a encontrar en su aplicación.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g6"  name="g6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6"  name="g6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g6"   name="g6"></td>
                              <td class="centrado"><textarea   id="g6"   name="g6"></textarea> </td>            
                        </tr>
                        <tr >
                            <td>7</td>
                            <td>Los motores y otros equipos eléctricos rotativos están totalmente cerrados o diseñados de modo 
                                que se evite al máximo la entrada de polvo, humedad o partículas corrosivas.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g7"  name="g7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7"  name="g7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7"   name="g7"></td>
                              <td class="centrado"><textarea   id="g7"   name="g7"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>8</td>
                            <td>Los artefactos de alumbrado instalados en los edificios agrícolas son instalados de modo que se 
                                evite al máximo la entrada de polvo, materias extrañas, humedad y materias corrosivas.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g8"  name="g8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g8"  name="g8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g8"   name="g8"></td>
                              <td class="centrado"><textarea   id="g8"   name="g8"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>9</td>
                            <td>Revisar la conveniencia de los métodos de alambrado para el inmueble, las condiciones y la protección contra daño físico</td>  
                            <td class="centrado"><input type="radio" value="a" id="g9"  name="g9"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g9"  name="g9"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g9"   name="g9"></td>
                              <td class="centrado"><textarea   id="g9"   name="g9"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>10</td>
                            <td>Verificar que el equipo que se exige que este puesto a tierra, lo este mediante un conductor de cobre para puesta a tierra de equipos</td>     
                            <td class="centrado"><input type="radio" value="a" id="g10"  name="g10"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10"  name="g10"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g10"   name="g10"></td>
                              <td class="centrado"><textarea   id="g10"   name="g10"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>11</td>
                            <td>Verificar que cualquier conductor de puesta a tierra instalado la tierra este aislado o cubierto</td>     
                            <td class="centrado"><input type="radio" value="a" id="g11"  name="g11"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g11"  name="g11"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g11"   name="g11"></td>
                              <td class="centrado"><textarea   id="g11"   name="g11"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>12</td>
                            <td>Revisar que los interruptores, interruptores automáticos, controladores y similares, tengan encerramientos adecuados </td>     
                            <td class="centrado"><input type="radio" value="a" id="g12"  name="g12"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g12"  name="g12"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g12"   name="g12"></td>
                              <td class="centrado"><textarea   id="g12"   name="g12"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>13</td>
                            <td>Verificar que los accesorios de alumbrado estén instalados para minimizar la entrada de polvo  y agua y que los 
                                accesorios expuestos a daño se suministren resguardados</td>     
                           <td class="centrado"><input type="radio" value="a" id="g13"  name="g13"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g13"  name="g13"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g13"   name="g13"></td>
                              <td class="centrado"><textarea   id="g13"   name="g13"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>14</td>
                            <td>Verificar que la disposición del equipo de la acometida, el equipo de distribución, la protección
                                contra sobre corriente y la puesta a tierra cumplan</td>     
                            <td class="centrado"><input type="radio" value="a" id="g14"  name="g14"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g14"  name="g14"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g14"   name="g14"></td>
                              <td class="centrado"><textarea   id="g14"   name="g14"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>15</td>
                            <td>Verificar que se haya instalado un plano equipotencial en los pisos de concreto de las áreas de
                                contención de ganado y que este conectado equipotencialmente a electrodos y elementos conductores</td>     
                            <td class="centrado"><input type="radio" value="a" id="g15"  name="g15"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g15"  name="g15"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g15"   name="g15"></td>
                              <td class="centrado"><textarea   id="g15"   name="g15"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>16</td>
                            <td>Verificar que el alambrado y los equipos eléctricos existentes en las áreas estén protegidos contra daños físicos</td>     
                            <td class="centrado"><input type="radio" value="a" id="g16"  name="g16"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g16"  name="g16"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g16"   name="g16"></td>
                              <td class="centrado"><textarea   id="g16"   name="g16"></textarea> </td>                   
                        </tr>
                         </tbody>
                </table> 
              </div>  <!--fin tablaa -->
              <br>
            <tr> 
                <td>NOTA 1:Esta lista es un anexo de la lista de uso final O/PS/R/01-6</td>
            <br>
              
               <div class="col-xs-6">
                <br>
                <br>
                <p> OBSERVACIONES GENERALES</p>
                <textarea class="text-area" id="o1" name="o1"></textarea>
            </div>
            <br>
            <P>CONCEPTO:</p>
            <td class="centrado"><input type="radio" value="anc" checked  id="g150"  name="g150"></td> APROBADO 
            <td class="centrado"><input type="radio" value="nc"   checked id="g1151"   name="g151"></td>NO APROBADO
            <br>
            <div class="col-md-12">
            </div>
            </form>
           
            <br>
            <P>
                FIRMA INSPECTOR: _______________________________
            </P>
                <p> 
               <input type="submit" value="ENVIAR"/> 
            </div>
    

