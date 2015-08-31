<div class="col-md-12 fondo-blanco"> 
    <!-- Task Widget -->

    <br><br>
            <!-- inicio encabezado -->
            <div id="encabezado"  class="col-xs-12">

                <div class="logop col-xs-3">
                    <a href="#"><img src="images/photo.jpg"></a>
                </div>
                <div class="titulo col-xs-9">
                    <h3 class="negrita">EQUIPOS DE RAYOS X</h3>
                    <div class="col-xs-12">

                        <p>FECHA:2014-08-01					
                            &nbsp;&nbsp;	
                            VERSION:1			
                            &nbsp;&nbsp;	
                            O/PS/R/01-27</p>
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
                            <td>1</td>
                            <td>Adicional a las fuentes señaladas en la NTC 2050 para suministrar energía a los sistemas
                                de emergencia, se podrá mantener la carga total durante por lo menos dos horas con celdas 
                                de combustible u otras fuentes energéticas.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1"  name="g1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1"  name="g1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1"   name="g1"></td>
                            <td class="centrado"><textarea   id="g1"   name="g1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>2</td>
                            <td>Cuando hayan instaladas baterías o sistemas de baterías, incluidas las utilizadas para el 
                                arranque, control y encendido de los motores auxiliares, se deben seguir las recomendaciones
                                del fabricante para su mantenimiento periódico</td> 
                            <td class="centrado"><input type="radio" value="a" id="g2"  name="g2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2" name="g2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2" name="g2"></td>
                              <td class="centrado"><textarea   id="g2"   name="g2"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>3</td>
                            <td>Se deben instalar medios que permitan ensayar todos los sistemas de fuerza y de alumbrado 
                                de emergencia en las condiciones de carga máxima prevista.</td>    
                            <td class="centrado"><input type="radio" value="a" id="g3"  name="g3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3"  name="g3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3"   name="g3"></td>
                              <td class="centrado"><textarea   id="g3"   name="g3"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>4</td>
                            <td>Los equipos de los sistemas de emergencia deben ser adecuados para la máxima corriente de 
                                falla disponible en sus terminales.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g"  name="g4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4"  name="g4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g4"   name="g4"></td>
                              <td class="centrado"><textarea   id="g4"   name="g4"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>5</td>
                            <td>El equipo de transferencia, incluidos los conmutadores automáticos de transferencia, debe 
                                ser automático, estar identificado para usarlo en emergencia y aprobado por la autoridad competente</td>     
                             <td class="centrado"><input type="radio" value="a" id="g5"  name="g5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g5"  name="g5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g5"   name="g5"></td>
                              <td class="centrado"><textarea   id="g5"   name="g5"></textarea> </td> 
                        <tr >
                            <td>6</td>
                            <td>El equipo de transferencia se debe diseñar e instalar de modo que impida la interconexión accidental
                                de las fuentes de alimentación normal y de emergencia al hacer cualquier manipulación</td>     
                            <td class="centrado"><input type="radio" value="a" id="g6"  name="g6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6"  name="g6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g6"   name="g6"></td>
                              <td class="centrado"><textarea   id="g6"   name="g6"></textarea> </td>            
                        </tr>
                        <tr >
                            <td>7</td>
                            <td>Se debe permitir un dispositivo para puentear y aislar (separar) el equipo de transferencia.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g7"  name="g7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7"  name="g7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7"   name="g7"></td>
                              <td class="centrado"><textarea   id="g7"   name="g7"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>8</td>
                            <td>En el equipo de entrada de acometida se debe colocar un diagrama que indique el tipo y 
                                la ubicación de las fuentes internas para suministro de emergencia.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g8"  name="g8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g8"  name="g8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g8"   name="g8"></td>
                              <td class="centrado"><textarea   id="g8"   name="g8"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>9</td>
                            <td>Cuando el conductor del circuito puesto a tierra conectado a la fuente de emergencia esté conectado al
                                conductor del electrodo de puesta a tierra en un lugar remoto de dicha fuente, cerca del electrodo se debe 
                                colocar un aviso que identifique las fuentes de alimentación normales y de emergencia que estén conectadas a ese conductor en ese lugar.</td>  
                            <td class="centrado"><input type="radio" value="a" id="g9"  name="g9"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g9"  name="g9"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g9"   name="g9"></td>
                              <td class="centrado"><textarea   id="g9"   name="g9"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>10</td>
                            <td>Todas las cajas y encerramientos de los circuitos de emergencia (incluidas las de los conmutadores de transferencia, generadores y
                                paneles de fuerza) deben tener rótulos permanentes que permitan identificarlas fácilmente como pertenecientes a un sistema o circuito de emergencia</td>     
                            <td class="centrado"><input type="radio" value="a" id="g10"  name="g10"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10"  name="g10"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g10"   name="g10"></td>
                              <td class="centrado"><textarea   id="g10"   name="g10"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>11</td>
                            <td>El alambrado desde la fuente de emergencia o desde la protección contra sobrecorriente de la fuente de distribución de emergencia hasta las cargas del sistema
                                de emergencia debe ser totalmente independiente de cualquier otro alambrado y equipos y no debe estar en la misma canalización, cable, caja o gabinete con otro alambrado</td>     
                            <td class="centrado"><input type="radio" value="a" id="g11"  name="g11"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g11"  name="g11"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g11"   name="g11"></td>
                              <td class="centrado"><textarea   id="g11"   name="g11"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>12</td>
                            <td>El suministro de corriente por parte de los sistemas de emergencia no debe demorar más de 10 segundos</td>     
                            <td class="centrado"><input type="radio" value="a" id="g12"  name="g12"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g12"  name="g12"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g12"   name="g12"></td>
                              <td class="centrado"><textarea   id="g12"   name="g12"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>13</td>
                            <td>Los equipos del sistema de emergencia se deben diseñar y ubicar de modo que se reduzcan al
                                mínimo los riesgos de fallas debidas a inundaciones, incendios, congelamiento o vandalismo.</td>     
                           <td class="centrado"><input type="radio" value="a" id="g13"  name="g13"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g13"  name="g13"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g13"   name="g13"></td>
                              <td class="centrado"><textarea   id="g13"   name="g13"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>14</td>
                            <td>En lugares de reuniones en los que pueda haber más de 1.000 personas o en edificaciones 
                                que tengan más de 23m de altura con cualquiera de las siguientes clases de actividad : 
                                educación, residencial, detención y correccional, negocios y comercio, los equipos de las
                                fuentes de alimentación, los sistemas de emergencia deben estar instalados en espacios 
                                totalmente protegidos por sistemas automáticos aprobados de protección contra incendios 
                                (rociadores automáticos, sistemas de dióxido de carbono, etc.), o en espacios con 
                                resistencia nominal al fuego de una hora</td>     
                            <td class="centrado"><input type="radio" value="a" id="g14"  name="g14"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g14"  name="g14"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g14"   name="g14"></td>
                              <td class="centrado"><textarea   id="g14"   name="g14"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>15</td>
                            <td>Las baterías que se utilicen como fuentes de alimentación para sistemas de emergencia
                                deben ser de capacidad nominal de corriente adecuada para alimentar y mantener durante
                                1,5 horas como mínimo la carga total conectada, sin que la tensión aplicada a la carga 
                                caiga por debajo del 87,5 % de la tensión normal.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g15"  name="g15"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g15"  name="g15"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g15"   name="g15"></td>
                              <td class="centrado"><textarea   id="g15"   name="g15"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>16</td>
                            <td>En la instalación de grupos electrógenos se deben instalar medios para arrancar el motor 
                                primario automáticamente bajo falla en el servicio normal y que transfieran automáticamente 
                                las cargas a los circuitos de emergencia y las mantengan en funcionamiento.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g16"  name="g16"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g16"  name="g16"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g16"   name="g16"></td>
                              <td class="centrado"><textarea   id="g16"   name="g16"></textarea> </td>                   
                        </tr>
                         <tr >
                            <td>17</td>
                            <td>En la instalación de grupos electrógenos Se debe proporcionar un retardo de tiempo que permita un 
                                ajuste de 15 minutos para evitar retransferir en caso de Restablecimiento de corta duración de la fuente normal</td>     
                            <td class="centrado"><input type="radio" value="a" id="g17"  name="g17"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g17"  name="g17"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g17"   name="g17"></td>
                              <td class="centrado"><textarea   id="g17"   name="g17"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>18</td>
                            <td>En lainstalación de grupos electrógenos, cuando el motor primario del grupo electrógeno sea de 
                                combustión interna, debe instalarse en el mismo sitio un depósito y un sistema de alimentación de 
                                combustible suficiente para que el sistema de emergencia pueda funcionar durante dos horas como mínimo.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g18"  name="g18"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g18"  name="g18"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g18"   name="g18"></td>
                              <td class="centrado"><textarea   id="g18"   name="g18"></textarea> </td>                    
                        </tr>   
                        <tr >
                            <td>19</td>
                            <td>Los sistemas de alimentación ininterrumpida (UPS) que se utilicen para suministro de los sistemas de emergencia 
                                deben cumplir las disposiciones aplicables del Artículo 700-12.a) y b).</td>     
                            <td class="centrado"><input type="radio" value="a" id="g19"  name="g1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g19"  name="g19"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g19"   name="g19"></td>
                            <td class="centrado"><textarea   id="g19"   name="g19"></textarea> </td>
                        </tr>
                        <tr >
                            <td>20</td>
                            <td>A los circuitos de alumbrado de emergencia no deben conectarse otros artefactos ni bombillas 
                                que no sean los específicos del sistema de emergencia</td> 
                            <td class="centrado"><input type="radio" value="a" id="g20"  name="g20"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g20" name="g20"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g20" name="g20"></td>
                              <td class="centrado"><textarea   id="g20"   name="g20"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>21</td>
                            <td>Los interruptores que hayan en los circuitos de alumbrado de emergencia deben estar instalados de modo 
                                que solo personas autorizadas puedan manipular el alumbrado de emergencia.</td>    
                            <td class="centrado"><input type="radio" value="a" id="g21"  name="g21"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g21"  name="g21"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g21"   name="g21"></td>
                              <td class="centrado"><textarea   id="g21"   name="g21"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>22</td>
                            <td>El dispositivo de protección contra sobrecorriente del circuito ramal al que estén conectados
                                los circuitos de emergencia debe ser accesible únicamente a personas autorizadas.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g"  name="g22"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g22"  name="g22"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g22"   name="g22"></td>
                              <td class="centrado"><textarea   id="g22"   name="g22"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>23</td>
                            <td>Los sistemas de emergencia deben cumplir los requisitos establecidos en la sección 700 de la NTC 2050.</td>     
                             <td class="centrado"><input type="radio" value="a" id="g23"  name="g23"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g23"  name="g23"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g23"   name="g23"></td>
                              <td class="centrado"><textarea   id="g23"   name="g23"></textarea> </td> 
                        <tr >

                        
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

</div>