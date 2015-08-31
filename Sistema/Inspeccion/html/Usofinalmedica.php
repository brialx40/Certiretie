<div class="col-md-12 fondo-blanco"> 
    <!-- Task Widget -->

    <br><br>
            <!-- inicio encabezado -->
            <div id="encabezado"  class="col-xs-12">

                <div class="logop col-xs-3">
                    <a href="#"><img src="images/photo.jpg"></a>
                </div>
                <div class="titulo col-xs-9">
                    <h3 class="negrita">LISTA DE VERIFICACION PARA INSTALACIONES ELECTRICAS DE USO FINAL </h3>
                    <div class="col-xs-12">

                        <p>FECHA:2013-09-30					
                            &nbsp;&nbsp;	
                            VERSION:2 			
                            &nbsp;&nbsp;	
                            O/PS/R/01-7</p>
                        <P>TIPO DE INSTALACION: ESPECIAL
                           
                       </P>
                    </div>	
                </div>	
            </div>	


            <form action="reporte/evaluacion_preliminar.php" method="post">


            <!-- inicio  fecha-->
            <div id="fecha" class="col-xs-12">

                <div class="col-xs-4">
                    <br/>FECHA :&nbsp;<input type="text" class="" id="fechar" name="fechar" /> 
                </div>
                <div class="col-xs-3"></div>
                <div class="col-xs-5">
                    <br>ORDEN SERVICIO N°:
                    <input type="text" id="orden" name="orden" />
                </div>

                <div class="col-xs-12">
                    <br><br>LUGAR DE LA INSPECCION: <br><input type="text" class="tam-tabla" id="lugar" name="lugar"/>
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
                            <td>El diseño y construccion es realizado por profesionales especializados</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1"  name="g1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1"  name="g1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1"   name="g1"></td>
                            <td class="centrado"><textarea   id="g1"   name="g1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>2</td>
                            <td>Se efectua una adecuada coordinacion de las protecciones elecricas 
                                con la selectividad que garantice al maximo la continuidad del servicio</td> 
                            <td class="centrado"><input type="radio" value="a" id="g2"  name="g2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2" name="g2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2" name="g2"></td>
                              <td class="centrado"><textarea   id="g2"   name="g2"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>3</td>
                            <td>Se entrega un estudio de coordinacion de aislamiento que contemple el uso de protecciones de sobretencio
                                en cascada en los circuitos mas criticos para garantizar la continuidad de
                                 servicio ante eventos de sbretensiones transitorias generadas por descarga 
                                 atmosferica o por maniobras en la red?</td>    
                            <td class="centrado"><input type="radio" value="a" id="g3"  name="g3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3"  name="g3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3"   name="g3"></td>
                              <td class="centrado"><textarea   id="g3"   name="g3"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>4</td>
                            <td>See verifica que la distancia entre las salidas de gas o de instalaciones siperan los 20cm ?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g"  name="g4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4"  name="g4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g4"   name="g4"></td>
                              <td class="centrado"><textarea   id="g4"   name="g4"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>5</td>
                            <td>Se verifica que la altura de los artefactos electricos son iguales o superiores 1,54m </td>     
                             <td class="centrado"><input type="radio" value="a" id="g5"  name="g5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g5"  name="g5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g5"   name="g5"></td>
                              <td class="centrado"><textarea   id="g5"   name="g5"></textarea> </td> 
                        <tr >
                            <td>6</td>
                            <td>La capacidad instalable en KVA que puede soportar la acometida a tensión nominal de la red y 
                                la carga máxima que soporta la protección de sobrecorriente de la acometida es la adecuada. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g5"  name="g6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6"  name="g6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g6"   name="g6"></td>
                              <td class="centrado"><textarea   id="g6"   name="g6"></textarea> </td>            
                        </tr>
                        <tr >
                            <td>7</td>
                            <td>Se dispone de una fuente alterna de suministro de energía eléctrica que entre en operación 
                                dentro de los 10 segundos siguientes al corte de energía del sistema normal. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g7"  name="g7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7"  name="g7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7"   name="g7"></td>
                              <td class="centrado"><textarea   id="g7"   name="g7"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>8</td>
                            <td>Se provee de un sistema de transferencia automática con interruptor de conmutador de red (bypass) que permita, 
                                en caso de falla, la conmutación de la carga eléctrica al sistema normal. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g8"  name="g8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g8"  name="g8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g8"   name="g8"></td>
                              <td class="centrado"><textarea   id="g8"   name="g8"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>9</td>
                            <td>Existe acometida exclusiva para instalaciones con sistemas contra incendio.</td>  
                            <td class="centrado"><input type="radio" value="a" id="g9"  name="g9"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g9"  name="g9"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g9"   name="g9"></td>
                              <td class="centrado"><textarea   id="g9"   name="g9"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>10</td>
                            <td>Existe barreras corta fuego en la acometida para instalaciones con sistemas contra incendio. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g10"  name="g10"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10"  name="g10"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g10"   name="g10"></td>
                              <td class="centrado"><textarea   id="g10"   name="g10"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>11</td>
                            <td>El puente equipotencial principal está ubicado lo más cerca posible a la acometida.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g11"  name="g11"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g11"  name="g11"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g11"   name="g11"></td>
                              <td class="centrado"><textarea   id="g11"   name="g11"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>12</td>
                            <td>Las dimensiones de las cajas de paso son las adecuadas para las acometidas subterráneas.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g12"  name="g12"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g12"  name="g12"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g12"   name="g12"></td>
                              <td class="centrado"><textarea   id="g12"   name="g12"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>13</td>
                            <td>Diagrama unifilar actualizado, señal de riego eléctrico, señalización de las protecciones
                                y rotulado de celdas y tableros</td>     
                           <td class="centrado"><input type="radio" value="a" id="g13"  name="g13"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g13"  name="g13"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g13"   name="g13"></td>
                              <td class="centrado"><textarea   id="g13"   name="g13"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>14</td>
                            <td>Las partes externas del panel están puestas a tierra mediante conductores de
                                protección y están identificadas con el símbolo de puesta a tierra.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g14"  name="g14"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g14"  name="g14"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g14"   name="g14"></td>
                              <td class="centrado"><textarea   id="g14"   name="g14"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>15</td>
                            <td>Las dimensiones, encerramientos y barreras permiten el espacio suficiente para
                                alojamiento de los terminales y curvaturas de los cables.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g15"  name="g15"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g15"  name="g15"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g15"   name="g15"></td>
                              <td class="centrado"><textarea   id="g15"   name="g15"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>16</td>
                            <td>En los interruptores automáticos el circuito alimentador llega el terminal 
                                de línea y la salida se conecta a los terminales de carga.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g16"  name="g16"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g16"  name="g16"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g16"   name="g16"></td>
                              <td class="centrado"><textarea   id="g16"   name="g16"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>17</td>
                            <td>Los barrajes, incluido el del neutro y el de tierra están montados sobre aisladores.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g17"  name="g17"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g17"  name="g17"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g17"   name="g17"></td>
                              <td class="centrado"><textarea   id="g17"   name="g17"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>18</td>
                            <td>Las áreas a inspeccionar se encuentran clasificadas.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g18"  name="g18"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g18"  name="g18"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g18"   name="g18"></td>
                              <td class="centrado"><textarea   id="g18"   name="g18"></textarea> </td>                    
                        </tr>
                    </tbody>
                </table> 
                   <!-- fin tabla 1-->
            </div>

            <div class="col-xs-12 margen">
                <br>
                <p class="negrita"><h3>INSTALACIONES INTERNAS HOSPITALARIAS</h3></p>
            </div>
            
            
             <!--inicio tabla 2-->  
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
                            <td>19</td>
                            <td>Se usan conductores de cobre aislados en canalizaciones metálicas o cables equivalentes para 
                                brindar la puesta a tierra de los equipos en las áreas de cuidado de pacientes.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g19"  name="g1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g19"  name="g19"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g19"   name="g19"></td>
                            <td class="centrado"><textarea   id="g19"   name="g19"></textarea> </td>
                        </tr>
                        <tr >
                            <td>20</td>
                            <td>Los conductores del  circuito aislado se identifican  con los colores naranja y marrón si
                                es bifásico y  el tercer conductor  amarillo para trifasico? </td> 
                            <td class="centrado"><input type="radio" value="a" id="g20"  name="g20"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g20" name="g20"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g20" name="g20"></td>
                              <td class="centrado"><textarea   id="g20"   name="g20"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>21</td>
                            <td>Existe la conexión equipotencial entre los tableros de circuitos ramales esenciales que
                                alimentan cualquier área sencilla de cuidado de pacientes.</td>    
                            <td class="centrado"><input type="radio" value="a" id="g21"  name="g21"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g21"  name="g21"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g21"   name="g21"></td>
                              <td class="centrado"><textarea   id="g21"   name="g21"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>22</td>
                            <td>Los tomacorrientes con tierra aislada para conexión a equipo sensible no conectados a pacientes,
                                deben identificarse con un triángulo color naranja</td>     
                            <td class="centrado"><input type="radio" value="a" id="g"  name="g22"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g22"  name="g22"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g22"   name="g22"></td>
                              <td class="centrado"><textarea   id="g22"   name="g22"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>23</td>
                            <td>Cada área de la cama de un paciente en el área de cuidados generales tenga al menos 2 circuitos ramales,
                                uno del sistema normal y otro del sistema de emergencia.</td>     
                             <td class="centrado"><input type="radio" value="a" id="g23"  name="g23"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g23"  name="g23"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g23"   name="g23"></td>
                              <td class="centrado"><textarea   id="g23"   name="g23"></textarea> </td> 
                        <tr >
                            <td>24</td>
                            <td>Los tomacorrientes instalados en camas de pacientes, cuidado critica y demás areas clasificadas tienen como
                                identificación un punto verde en su exterior y son certificados para tal uso</td>     
                            <td class="centrado"><input type="radio" value="a" id="g24"  name="g24"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g24"  name="g24"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g24"   name="g24"></td>
                              <td class="centrado"><textarea   id="g24"   name="g24"></textarea> </td>            
                        </tr>
                        <tr >
                            <td>25</td>
                            <td>Cada área de la cama de un paciente en un área de cuidados generales tiene  al menos cuatro tomacorrientes.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g25"  name="g7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7"  name="g7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7"   name="g7"></td>
                              <td class="centrado"><textarea   id="g7"   name="g7"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>26</td>
                            <td>SVerificar que cada área de la cama de un paciente, en áreas de cuidado critico, tenga al menos dos circuitos 
                                ramales, uno del sistema normal y uno del sistema de emergencia. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g26"  name="g26"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g26"  name="g26"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g26"   name="g26"></td>
                              <td class="centrado"><textarea   id="g26"   name="g26"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>27</td>
                            <td>Cada área de la cama de un paciente de cuidado crítico, tiene al menos un tomacorriente alimentado 
                                por un circuito de emergencia dedicado a esa área de cama.</td>  
                            <td class="centrado"><input type="radio" value="a" id="g27"  name="g27"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g27"  name="g27"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g27"   name="g27"></td>
                              <td class="centrado"><textarea   id="g27"   name="g27"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>28</td>
                            <td>Cada área de la cama de un paciente en el área de cuidado crítico tiene al menos seis tomacorrientes.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g28"  name="g28"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g28"  name="g28"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g28"   name="g28"></td>
                              <td class="centrado"><textarea   id="g28"   name="g28"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>29</td>
                            <td>Existe al menos un tomacorriente en el área de la cama de un paciente en una área de cuidado critico este conectado 
                                al circuito ramal desde una fuente separada normal o de emergencia. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g29"  name="g29"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g29"  name="g29"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g29"   name="g29"></td>
                              <td class="centrado"><textarea  id="g29"  name="g29"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>30</td>
                            <td>Todos los tomacorrientes de las áreas de las camas de paciente son de grado hospitalario.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g30"  name="g30"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g30"  name="g30"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g30"   name="g30"></td>
                              <td class="centrado"><textarea   id="g30"   name="g30"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>31</td>
                            <td>Revisar los lugares mojados en cuanto a la protección mediante dispositivos GFCI o donde no se
                                puedan tolerar interrupciones mediante sistemas de potencia separados.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g31"  name="g31"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g31"  name="g31"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g31"   name="g31"></td>
                              <td class="centrado"><textarea   id="g31"   name="g31"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>32</td>
                            <td>Se usan los métodos de alambrado y equipos apropiados en los lugares de aplicación de anestesia.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g32"  name="g32"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g32"  name="g32"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g32"   name="g32"></td>
                              <td class="centrado"><textarea   id="g32"   name="g32"></textarea> </td>                    
                        </tr>
                        <tr >
                           <tr >
                            <td>33</td>
                            <td>Los circuitos de fuerza en lugares de aplicación de anestesia inflamable están separados de 
                                otros sistemas de distribución de potencia.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g33"  name="g33"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g33"  name="g33"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g33"   name="g33"></td>
                              <td class="centrado"><textarea   id="g33"   name="g33"></textarea> </td>                    
                        </tr>
                        
                        <tr >
                            <tr >
                            <td>34</td>
                            <td>Hay una o más unidades de alumbrado de emergencia alimentadas con baterías en los lugares de aplicación de anestesia.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g34"  name="g34"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g34"  name="g34"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g34"   name="g34"></td>
                              <td class="centrado"><textarea   id="g34"   name="g34"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>35</td>
                            <td>Los circuitos de alimentación a los equipos de Rayos X  son adecuados y que están 
                                alimentados a través de métodos de alambrado y conexiones especiales.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g35"  name="g35"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g35"  name="g35"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g35"   name="g35"></td>
                              <td class="centrado"><textarea   id="g35"   name="g35"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>36</td>
                            <td>La ubicación, capacidad y tipo de los medios de desconexión de los equipos de Rayos X son los adecuados</td>     
                            <td class="centrado"><input type="radio" value="a" id="g36"  name="g36"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g36"  name="g36"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g36"   name="g6"></td>
                              <td class="centrado"><textarea   id="g36"   name="g36"></textarea> </td>                    
                        </tr>
                        
                         <tr >
                            <td>37</td>
                            <td>Los circuitos de alimentación de los equipos de Rayos X  cumplan los requisitos
                                mínimos de capacidad nominal de corriente y sobrecorriente.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g37"  name="g37"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g37"  name="g37"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g37"   name="g37"></td>
                              <td class="centrado"><textarea   id="g37"   name="g37"></textarea> </td>                    
                        </tr>
                        
                         <tr >
                            <td>38</td>
                            <td>Los encerramientos para partes de alta tensión y partes metálicas no portadoras 
                                de corriente de los equipos de Rayos X están puestos a tierra.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g38"  name="g38"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g38"  name="g38"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g38"   name="g38"></td>
                              <td class="centrado"><textarea   id="g38"   name="g38"></textarea> </td>                    
                        </tr>
                        
                         <tr >
                            <td>39</td>
                            <td>Los sistemas de comunicaciones, de señalización, de datos, de alarma contra incendios
                                y sistemas a menos de 120 V nominales, tienen aislamiento y aislantes equivalentes a 
                                los exigidos en los sistemas eléctricos de distribución en las áreas de cuidado de los pacientes.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g39"  name="g39"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g39"  name="g39"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g39"   name="g39"></td>
                              <td class="centrado"><textarea   id="g39"   name="g39"></textarea> </td>                    
                        </tr>
                        
                         <tr >
                            <td>40</td>
                            <td>Se verifica que en las áreas médicas criticas se haya instalado una UPS para los
                                equipos eléctricos de asistencia vital, de control de gases y de comunicaciones.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g40"  name="g40"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g40"  name="g40"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g40"   name="g40"></td>
                              <td class="centrado"><textarea   id="g40"   name="g40"></textarea> </td>                    
                        </tr>
                        
                         <tr >
                            <td>41</td>
                            <td>El circuito alimentador de áreas críticas cuenta con protección en cascada contra sobretensiones</td>     
                            <td class="centrado"><input type="radio" value="a" id="g41"  name="g41"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g41"  name="g41"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g41"   name="g41"></td>
                              <td class="centrado"><textarea   id="g41"   name="g41"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>42</td>
                            <td>Se dispone de sistema de potencia aislado certificado para uso hospitalario en las siguientes areas?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g42"  name="g42"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g42"  name="g42"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g42"   name="g42"></td>
                              <td class="centrado"><textarea   id="g42"   name="g42"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>43</td>
                            <td>Quirofano</td>     
                            <td class="centrado"><input type="radio" value="a" id="g43"  name="g43"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g43"  name="g43"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g43"   name="g43"></td>
                              <td class="centrado"><textarea   id="g43"   name="g43"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>44</td>
                            <td>Salas de cirugia</td>     
                            <td class="centrado"><input type="radio" value="a" id="g44"  name="g44"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g44"  name="g44"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g44"   name="g44"></td>
                              <td class="centrado"><textarea   id="g44"   name="g44"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>45</td>
                            <td>Neonatologia</td>     
                            <td class="centrado"><input type="radio" value="a" id="g45"  name="g45"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g45"  name="g45"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g45"   name="g45"></td>
                              <td class="centrado"><textarea   id="g45"   name="g45"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>46</td>
                            <td>Unidad de Cuidados Intensivos</td>     
                            <td class="centrado"><input type="radio" value="a" id="g46"  name="g46"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g46"  name="g46"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g46"   name="g46"></td>
                              <td class="centrado"><textarea   id="g46"   name="g46"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>47</td>
                            <td>Unidad de Cuidados Coronarios</td>     
                            <td class="centrado"><input type="radio" value="a" id="g47"  name="g47"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g47"  name="g47"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g47"   name="g47"></td>
                              <td class="centrado"><textarea   id="g47"   name="g47"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>48</td>
                            <td>Salas de parto.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g48"  name="g48"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g48"  name="g48"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g48"   name="g48"></td>
                              <td class="centrado"><textarea   id="g48"   name="g48"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>49</td>
                            <td>Laboratorio de cateterismo cardíaco.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g49"  name="g9"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g49"  name="g49"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g49"   name="g49"></td>
                              <td class="centrado"><textarea   id="g49"   name="g49"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>50</td>
                            <td>Laboratorio angiográfico</td>     
                            <td class="centrado"><input type="radio" value="a" id="g50"  name="g50"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g50"  name="g50"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g50"   name="g50"></td>
                              <td class="centrado"><textarea   id="g50"   name="g50"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>51</td>
                            <td>Salas de procedimientos intracardiacos</td>     
                            <td class="centrado"><input type="radio" value="a" id="g51"  name="g51"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g51"  name="g51"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g51"   name="g51"></td>
                              <td class="centrado"><textarea   id="g51"   name="g51"></textarea> </td>                    
                        </tr>
                         <tr >
                           <td>52</td>
                            <td>Areas de manejo de anestesia.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g52"  name="g52"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g52"  name="g52"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g52"   name="g52"></td>
                              <td class="centrado"><textarea   id="g52"   name="g52"></textarea> </td>                  
                        </tr>
                         <tr >
                            <td>53</td>
                            <td>Otras áreas criticas</td>     
                            <td class="centrado"><input type="radio" value="a" id="g53"  name="g53"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g53"  name="g53"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g53"   name="g53"></td>
                              <td class="centrado"><textarea   id="g53"   name="g53"></textarea> </td>                    
                        </tr>
                        
                         <tr >
                            <td>54</td>
                            <td>Los elementos de protección en las áreas críticas son  de tipo extraíble o desenchufable que 
                                garanticen mecanismos de servicio rápido en caso de falla</td>     
                            <td class="centrado"><input type="radio" value="a" id="g54"  name="g54"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g54"  name="g54"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g54"   name="g54"></td>
                              <td class="centrado"><textarea   id="g54"   name="g54"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>55</td>
                            <td>El transformador de aislamiento para rayos x tiene una potencia entre 0,5 y 10 KVA?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g55"  name="g55"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g55"  name="g55"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g55"   name="g55"></td>
                              <td class="centrado"><textarea   id="g55"   name="g55"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>56</td>
                            <td>El transformador de aislamiento para rayos x tiene una potencia entre 0,5 y 10 KVA?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g56"  name="g56"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g56"  name="g56"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g56"   name="g56"></td>
                              <td class="centrado"><textarea   id="g56"   name="g56"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>57</td>
                            <td>El transformador de aislamiento en las areas criticas tiene una potencia entre 0,5 y 10 KVA?,
                                puede sumistrar 150% de su capacidad?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g57"  name="g57"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g57"  name="g57"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g57"   name="g57"></td>
                              <td class="centrado"><textarea   id="g57"   name="g57"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>58</td>
                            <td>Se garantiza que en caso de una segunda falla eléctrica que genere cortocircuito en las éreas 
                                críticas se abra tanto la fase como el neutro?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g58"  name="g58"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g58"  name="g58"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g58"   name="g58"></td>
                              <td class="centrado"><textarea   id="g58"   name="g58"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>59</td>
                            <td>los interruptores del secundario del transformador de aislamiento son mínimo de 20A?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g59"  name="g59"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g59"  name="g59"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g59"   name="g59"></td>
                              <td class="centrado"><textarea   id="g59"   name="g59"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>60</td>
                            <td>Se dispone de mecanismos adecuados para evitar corriente de fuga en equipos conectados a pacientes?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g60"  name="g60"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g60"  name="g60"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g60"   name="g60"></td>
                              <td class="centrado"><textarea   id="g60"   name="g60"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>61</td>
                            <td>Se dispone de un monitor de aislamiento de línea que de alarma si la R entre fase y tierra es menor de 50Kohm?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g61"  name="g61"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g61"  name="g61"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g61"   name="g61"></td>
                              <td class="centrado"><textarea   id="g61"   name="g61"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>62</td>
                            <td>Se dispone de dispositivos que permitan localizar las fallas a tierra en el menor tiempo posible. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g62"  name="g62"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g62"  name="g62"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g62"   name="g62"></td>
                              <td class="centrado"><textarea   id="g62"   name="g62"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>63</td>
                            <td>En las áreas húmedas (piscinas, baños,  junto a lavamanos y tinas terapéuticas), 
                                se instalan interruptores diferenciales de falla a tierra</td>     
                            <td class="centrado"><input type="radio" value="a" id="g63"  name="g63"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g63"  name="g63"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g63"   name="g63"></td>
                              <td class="centrado"><textarea   id="g63"   name="g63"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>64</td>
                            <td>Se instala piso conductivo en las áreas médicas donde se utilicen anestésicos inflamables, 
                                desinfectantes inflamables, en las cámaras hiperbáricas o donde aplique?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g64"  name="g64"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g64"  name="g64"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g64"   name="g64"></td>
                              <td class="centrado"><textarea   id="g64"   name="g64"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>65</td>
                            <td>En las áreas médicas donde se utilicen anestésicos inflamables, en las cámaras hiperbáricas o donde aplique 
                                se fijan los equipos eléctricos a mas de 1,53m y son a prueba de explosión?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g65"  name="g65"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g65"  name="g65"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g65"   name="g65"></td>
                              <td class="centrado"><textarea   id="g65"   name="g65"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>66</td>
                            <td>Se toman medidas para eliminar la electricidad estática?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g"  name="g66"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g66"  name="g66"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g66"   name="g66"></td>
                              <td class="centrado"><textarea   id="g66"   name="g66"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>67</td>
                            <td>En todas las areas de cuidado de pacientes se instala sistema de puesta a tierra redundante</td>     
                            <td class="centrado"><input type="radio" value="a" id="g67"  name="g67"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g67"  name="g67"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g67"   name="g67"></td>
                              <td class="centrado"><textarea   id="g67"   name="g67"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>68</td>
                            <td>Los tableros o paneles de distribución de los sistemas normal y  emergencia que alimenten la misma cama de paciente,
                                se  conectan equipotencialmente entre sí mediante conductor de cobre aislado calibre no menor al 10 AWG.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g68"  name="g68"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g68"  name="g68"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g68"   name="g68"></td>
                              <td class="centrado"><textarea   id="g68"   name="g68"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>69</td>
                            <td>Los tomacorrientes “Grado Hospitalario”  tiener como identificación un punto verde en su exterior y son 
                                certificados para tal uso.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g69"  name="g69"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g69"  name="g69"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g69"   name="g69"></td>
                              <td class="centrado"><textarea   id="g69"   name="g69"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>70</td>
                            <td>Todos los circuitos de la red de emergencia son protegidos mecánicamente mediante canalización metálica no flexible.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g70"  name="g70"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g70"  name="g70"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g70"   name="g70"></td>
                              <td class="centrado"><textarea   id="g70"   name="g70"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>71</td>
                            <td>En sala de cirugía y áreas de cuidados críticos, la longitud de los conductores y la calidad de su aislamiento garantiza 
                                que no genere corrientes de fuga mayores a 10 μA y tensiones capaces de producir corrientes en el paciente mayores a 10 mA</td>     
                            <td class="centrado"><input type="radio" value="a" id="g71"  name="g71"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g71"  name="g71"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g71"   name="g71"></td>
                              <td class="centrado"><textarea   id="g71"   name="g71"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>72</td>
                            <td>Los tomacorrientes que alimenten áreas de pacientes generales o críticos son diseñadas para alimentar
                                el máximo número de equipos que necesiten operar simultáneamente</td>     
                            <td class="centrado"><input type="radio" value="a" id="g72"  name="g72"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g72"  name="g72"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g72"   name="g72"></td>
                              <td class="centrado"><textarea   id="g72"   name="g72"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>73</td>
                            <td>Los tomacorrientes que alimenten áreas de pacientes generales o críticos se derivan
                                desde al menos dos fuentes de energía diferentes o desde la fuente de energía de suplencia 
                                (planta de emergencia), mediante dos transferencias automáticas</td>     
                            <td class="centrado"><input type="radio" value="a" id="g73"  name="g73"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g73"  name="g73"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g73"   name="g73"></td>
                              <td class="centrado"><textarea   id="g73"   name="g73"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>74</td>
                            <td>En áreas de pacientes generales se instala un mínimo de cuatro tomacorrientes</td>     
                            <td class="centrado"><input type="radio" value="a" id="g74"  name="g74"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g74"  name="g74"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g74"   name="g74"></td>
                              <td class="centrado"><textarea   id="g74"   name="g74"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>75</td>
                            <td>En áreas de pacientes críticos se instala un mínimo de seis tomacorrientes</td>     
                            <td class="centrado"><input type="radio" value="a" id="g75"  name="g75"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g75"  name="g75"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g75"   name="g75"></td>
                              <td class="centrado"><textarea   id="g75"   name="g75"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>76</td>
                            <td>Los conductores de tierra son aislados?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g76"  name="g76"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g76"  name="g76"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g76"   name="g76"></td>
                              <td class="centrado"><textarea   id="g76"   name="g76"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>77</td>
                            <td>Hay tomacorrientes en el area de siquiatria?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g77"  name="g77"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g77"  name="g77"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g77"   name="g77"></td>
                              <td class="centrado"><textarea   id="g77"   name="g77"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>78</td>
                            <td>En áreas pediátricas los tomacorrientes de 125 V de 15 ó 20 A, son del tipo a prueba de abuso,
                                o estan protegidos por una cubierta de este tipo (No se aceptarán otros tomacorrientes u otro 
                                tipo de cubiertas en estas áreas).</td>     
                            <td class="centrado"><input type="radio" value="a" id="g78"  name="g78"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g78"  name="g78"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g78"   name="g78"></td>
                              <td class="centrado"><textarea   id="g78"   name="g78"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>79</td>
                            <td>los tomacorrientes del sistema de emergencia son de color rojo  y estan plenamente identificados 
                                con el número del circuito derivado y el nombre del tablero de distribución correspondiente</td>     
                            <td class="centrado"><input type="radio" value="a" id="g79"  name="g79"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g79"  name="g79"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g79"   name="g79"></td>
                              <td class="centrado"><textarea   id="g79"   name="g79"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>80</td>
                            <td>En instalaciones en áreas de cuidado de pacientes No se permite el uso de tomacorrientes
                                con terminal de tierra aislada (triángulo naranja)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g80"  name="g80"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g80"  name="g80"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g80"   name="g80"></td>
                              <td class="centrado"><textarea   id="g80"   name="g80"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>81</td>
                            <td>Se verifica que bajo ninguna circunstancia se podrán utilizar extensiones eléctricas
                                en salas de cirugía o en áreas de cuidados críticos.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g81"  name="g81"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g81"  name="g81"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g81"   name="g81"></td>
                              <td class="centrado"><textarea   id="g81"   name="g81"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>82</td>
                            <td>Se verifica que en áreas donde se utilicen duchas eléctricas, estas se alimentan mediante 
                                un circuito exclusivo, se protege mediante interruptores de protección del circuito de falla 
                                a tierra y su conexión es a prueba de agua?.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g82"  name="g82"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g82"  name="g82"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g82"   name="g82"></td>
                              <td class="centrado"><textarea   id="g82"   name="g82"></textarea> </td>                     
                        </tr>
                         <tr >
                            <td>83</td>
                            <td>Se verifica que los conductores de los sistemas normal, de emergencia y aislado no puesto 
                                a tierra, no compartan las mismas canalizaciones.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g83"  name="g83"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g83"  name="g83"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g83"   name="g83"></td>
                              <td class="centrado"><textarea   id="g83"   name="g83"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>84</td>
                            <td>Se provee de unidades de iluminación de emergencia por baterías donde es necesario para
                                la seguridad de las personas y se garantiza que su instalación no causa riesgos.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g84"  name="g84"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g84"  name="g84"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g84"   name="g84"></td>
                              <td class="centrado"><textarea   id="g84"   name="g84"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>85</td>
                            <td>Se garantiza que el número de salidas eléctricas de iluminación garantizan el acceso 
                                seguro para cada área, tanto a los pacientes, equipos y suministros?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g85"  name="g85"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g85"  name="g85"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g85"   name="g85"></td>
                              <td class="centrado"><textarea   id="g85"   name="g85"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>86</td>
                            <td>Las puertas operadas automáticamente usadas en las salidas de los edificios son incluidas
                                en el ramal vital del subsistema de un sistema de emergencia</td>     
                            <td class="centrado"><input type="radio" value="a" id="g86"  name="g86"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g86"  name="g86"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g86"   name="g86"></td>
                              <td class="centrado"><textarea   id="g86"   name="g86"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>87</td>
                            <td>Métodos de alambrado apropiados.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g87"  name="g87"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g87"  name="g87"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g87"   name="g87"></td>
                              <td class="centrado"><textarea   id="g87"   name="g87"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>88</td>
                            <td>Método de puesta a tierra de tomacorrientes y equipos eléctricos.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g88"  name="g88"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g88"  name="g88"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g88"   name="g88"></td>
                              <td class="centrado"><textarea   id="g88"   name="g88"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>89</td>
                            <td>Conexión  equipotencial de los paneles de distribución.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g89"  name="g89"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g89"  name="g89"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g89"   name="g89"></td>
                              <td class="centrado"><textarea   id="g89"   name="g89"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>90</td>
                            <td>Identificación de tomacorrientes con polo a tierra aislado.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g90"  name="g90"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g90"  name="g90"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g90"   name="g90"></td>
                              <td class="centrado"><textarea   id="g90"   name="g90"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>91</td>
                            <td>Selección y pruebas de dispositivos adicionales de protección contra fallas a tierra.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g91"  name="g91"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g91"  name="gv"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g91"   name="g91"></td>
                              <td class="centrado"><textarea   id="g91"   name="g91"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>92</td>
                            <td>Tomacorrientes resistentes al abuso en instalaciones pediátricas.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g92"  name="g92"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g92"  name="g92"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g92"   name="g92"></td>
                              <td class="centrado"><textarea   id="g92"   name="g92"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>93</td>
                            <td>Cantidad de circuitos ramales y tomacorrientes necesarios en áreas de atención general al paciente.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g93"  name="g93"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g93"  name="g93"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g93"   name="g93"></td>
                              <td class="centrado"><textarea   id="g93"   name="g93"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>94</td>
                            <td>Cantidad de circuitos ramales y tomacorrientes necesarios en áreas de cuidados críticos.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g94"  name="g94"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g94"  name="g94"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g94"   name="g94"></td>
                              <td class="centrado"><textarea   id="g94"   name="g94"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>95</td>
                            <td>Interruptor de circuito por falla a tierra para la protección de tomacorrientes y equipos fijos en lugares mojados.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g95"  name="g95"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g95"  name="g95"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g95"   name="g95"></td>
                              <td class="centrado"><textarea   id="g95"   name="g95"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>96</td>
                            <td>Sistema eléctrico esencial.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g96"  name="g96"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g96"  name="g96"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g96"   name="g96"></td>
                              <td class="centrado"><textarea   id="g96"   name="g96"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>97</td>
                            <td>Ramal vital.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g97"  name="g97"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g97"  name="g97"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g97"   name="g97"></td>
                              <td class="centrado"><textarea   id="g97"   name="g97"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>98</td>
                            <td>Ramal critico.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g98"  name="g98"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g98"  name="g98"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g98"   name="g98"></td>
                              <td class="centrado"><textarea   id="g98"   name="g98"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>99</td>
                            <td>Fuentes de alimentación para sistemas eléctricos esenciales.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g99"  name="g99"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g99"  name="g99"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g99"   name="g99"></td>
                              <td class="centrado"><textarea   id="g99"   name="g99"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>100</td>
                            <td>Instalaciones de rayos X.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g100"  name="g100"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g100"  name="g100"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g100"   name="g100"></td>
                              <td class="centrado"><textarea   id="g100"   name="g100"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>101</td>
                            <td>Ventilación y sistemas de extracción de gases.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g101"  name="g101"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g101"  name="g101"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g101"   name="g101"></td>
                              <td class="centrado"><textarea   id="g101"   name="g101"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>102</td>
                            <td>Sistemas de potencia aislados.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g102"  name="g102"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g102"  name="g102"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g102"   name="g102"></td>
                              <td class="centrado"><textarea   id="g102"   name="g102"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>103</td>
                            <td>Existencia de interruptor diferencial de falla a tierra en áreas húmedas como piscinas,
                                baños, tinas terapéuticas y junto a lavamanos.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g103"  name="g103"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g103"  name="g103"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g103"   name="g103"></td>
                              <td class="centrado"><textarea   id="g103"   name="g103"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>104</td>
                            <td>Áreas con utilización de anestésicos inflamables y cámaras hiperbaricas.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g104"  name="g104"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g104"  name="g104"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g104"   name="g104"></td>
                              <td class="centrado"><textarea   id="g104"   name="g104"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>105</td>
                            <td>Utilización de zapatos conductivos por parte del personal medico.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g105"  name="g105"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g105"  name="g105"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g105"   name="g105"></td>
                              <td class="centrado"><textarea   id="g105"   name="g105"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>106</td>
                            <td>Altura mínima de los equipos sobre el nivel del piso terminado 1,53m.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g106"  name="g106"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g106"  name="g106"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g106"   name="g106"></td>
                              <td class="centrado"><textarea   id="g106"   name="g106"></textarea> </td>                    
                        </tr>
                         <tr >
                            <td>107</td>
                            <td>Canalización e identificación de tomacorrientes el sistema de emergencia.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g107"  name="g107"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g107"  name="g107"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g107"   name="g107"></td>
                              <td class="centrado"><textarea   id="g107"   name="g107"></textarea> </td>                    
                        </tr>
                         
                        <tr >
                            <td>108</td>
                            <td>Áreas siquiátricas sin tomacorrientes.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g108"  name="g108"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g108"  name="g108"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g108"   name="g108"></td>
                              <td class="centrado"><textarea   id="g108"   name="g108"></textarea> </td>                    
                        </tr>
                        
                        <tr >
                            <td>109</td>
                            <td>Existencia de interruptor diferencial de falla a tierra en áreas donde se utilizan duchas eléctricas.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g109"  name="g109"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g109"  name="g109"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g109"   name="g109"></td>
                              <td class="centrado"><textarea   id="g109"   name="g109"></textarea> </td>                    
                        </tr>
                        
                    </tbody>
                </table> 
                   <!-- fin tabla 2-->
            </div>  
             <br>
         <!--inicio tabla 3-->
    
             <div id="preguntas" class="margen col-xs-12">
                <table border="1" class=" tam-tabla" >
                    <thead>
                        <tr>
                            <th rowspan="2">ASPECTOS GENERALES</th>
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
                            
                            <td>Accesibilidad a todos los dispositivos de protección.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g110"  name="g110"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g110"  name="g110"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g110"   name="g110"></td>
                            <td class="centrado"><textarea   id="g110"   name="g110"></textarea> </td>
                        </tr>
                        <tr >
                            <td>Bomba contra incendio.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g120"  name="g120"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g120"  name="g120"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g120"   name="g120"></td>
                            <td class="centrado"><textarea   id="g120"   name="g120"></textarea> </td>
                        </tr>
                        <tr >
                            
                            <td>Conexiones equipotenciales.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g121"  name="g121"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g121"  name="g121"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g11"   name="g11"></td>
                            <td class="centrado"><textarea   id="g121"   name="g121"></textarea> </td>
                        </tr>
                         <tr >
                            
                            <td>Corrientes en el sistema de puesta a tierra.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g122"  name="g122"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g122"  name="g122"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g122"   name="g122"></td>
                            <td class="centrado"><textarea   id="g122"   name="g122"></textarea> </td>
                        </tr>
                         <tr >
                            
                            <td>Distancias de seguridad.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g123"  name="g123"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g123"  name="g123"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g123"   name="g123"></td>
                            <td class="centrado"><textarea   id="g123"   name="g123"></textarea> </td>
                        </tr>
                         <tr >
                            
                            <td>Ejecución de las conexiones, alambrado, derivaciones y empalmes con método aprobado.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g124"  name="g124"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g124"  name="g124"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1v"   name="g124"></td>
                            <td class="centrado"><textarea   id="g124"   name="g124"></textarea> </td>
                        </tr>
                         <tr >
                            
                            <td>Ensayos funcionales.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g125"  name="g125"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g125"  name="g125"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g125"   name="g125"></td>
                            <td class="centrado"><textarea   id="g125" name="g125"></textarea> </td>
                        </tr>
                         <tr >
                            
                            <td>Existencia de planos, esquemas, avisos y señales.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g126"  name="g126"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g126"  name="g126"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g126"   name="g126"></td>
                            <td class="centrado"><textarea   id="g126"   name="g126"></textarea> </td>
                        </tr>
                         <tr >
                            
                            <td>Funcionamiento del corte automático de la alimentación.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g127"  name="g127"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g127"  name="g127"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g127"   name="g127"></td>
                            <td class="centrado"><textarea   id="g127"   name="g127"></textarea> </td>
                        </tr>
                         <tr >
                            
                            <td>Selección, identificación, estado y ocupación de las canalizaciones.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g128"  name="g128"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g128"  name="g128"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g128"   name="g128"></td>
                            <td class="centrado"><textarea   id="g128"   name="g128"></textarea> </td>
                        </tr>
                         <tr >
                            
                            <td>Identificación de circuitos.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g129"  name="g129"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g129"  name="g129"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g129"   name="g1v"></td>
                            <td class="centrado"><textarea   id="g129"   name="g129"></textarea> </td>
                        </tr>
                         <tr >
                            
                            <td>Identificación de conductores de fase, neutro y tierras.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g130"  name="g130"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g130"  name="g130"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g130"   name="g130"></td>
                            <td class="centrado"><textarea   id="g130"   name="g130"></textarea> </td>
                        </tr>
                         <tr >
                            
                            <td>Materiales acordes con las condiciones ambientales.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g131"  name="g131"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g131"  name="g131"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g131"   name="g131"></td>
                            <td class="centrado"><textarea   id="g131"   name="g131"></textarea> </td>
                        </tr>
                         <tr >
                            
                            <td>Memorias de calculo.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g132"  name="g132"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g132"  name="g132"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g132"   name="g132"></td>
                            <td class="centrado"><textarea   id="g132"   name="g132"></textarea> </td>
                        </tr>
                         <tr >
                            
                            <td>Niveles de iluminación.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g133"  name="g133"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g133"  name="g133"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g133"   name="g133"></td>
                            <td class="centrado"><textarea   id="g133"   name="g133"></textarea> </td>
                        </tr>
                        
                         <tr>
                            <td>Protección contra arcos internos.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g134"  name="g134"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g134"  name="g134"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g134"   name="g134"></td>
                            <td class="centrado"><textarea   id="g134"   name="g134"></textarea> </td>
                        </tr>
                         <tr >
                            <td>Protección contra electrocución por contacto directo.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g135"  name="g135"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g135"  name="g135"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g135"   name="g15"></td>
                            <td class="centrado"><textarea   id="g135"   name="g135"></textarea> </td>
                        </tr>
                         <tr >
                            <td>Protección contra electrocución por contacto indirecto.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g136"  name="g136"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g136"  name="g136"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g136"   name="g136"></td>
                            <td class="centrado"><textarea   id="g136"   name="g136"></textarea> </td>
                        </tr>
                         <tr >
                            <td>Resistencia de aislamiento.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g137"  name="g137"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g137"  name="g137"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g137"   name="g137"></td>
                            <td class="centrado"><textarea   id="g137"   name="g137"></textarea> </td>
                        </tr>
                         <tr >
                            <td>Resistencia de puesta a tierra.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g138"  name="g138"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g138"  name="g138"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g138"   name="g138"></td>
                            <td class="centrado"><textarea   id="g1"   name="g138"></textarea> </td>
                        </tr>
                         <tr >
                            <td>Revisiones de certificaciones de producto.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g139"  name="g139"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g139"  name="g139"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g139"   name="g139"></td>
                            <td class="centrado"><textarea   id="g139"   name="g139"></textarea> </td>
                        </tr>
                         <tr >
                            <td>Selección material, calibre y aislamiento de conductores.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g140"  name="g140"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g140"  name="g140"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g140"   name="g140"></td>
                            <td class="centrado"><textarea   id="g140"   name="g140"></textarea> </td>
                        </tr>
                         <tr >
                            <td>Selección de dispositivos de protección contra sobrecorrientes.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g141"  name="g141"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g141"  name="g141"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g141"   name="g141"></td>
                            <td class="centrado"><textarea   id="g141"   name="g141"></textarea> </td>
                        </tr>
                         <tr >
                            <td>Selección de dispositivos de protección contra sobretensiones.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g142"  name="g142"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g142"  name="g142"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g142"   name="g142"></td>
                            <td class="centrado"><textarea   id="g142"   name="g142"></textarea> </td>
                        </tr>
                         <tr >
                            <td>Sistema de emergencia.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g143"  name="g143"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g143"  name="g143"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g143"   name="g143"></td>
                            <td class="centrado"><textarea   id="g143"   name="g143"></textarea> </td>
                        </tr>
                         <tr >
                            <td>Sistema de protección contra rayos.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g144"  name="g144"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g144"  name="g144"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g144"   name="g144"></td>
                            <td class="centrado"><textarea   id="g144"   name="g144"></textarea> </td>
                        </tr>
                         <tr >
                            <td>Valores de campos electromagnéticos.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g145"  name="g145"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g145"  name="g145"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g145"   name="g145"></td>
                            <td class="centrado"><textarea   id="g145"   name="g145"></textarea> </td>
                        </tr>
                         <tr >
                            <td>Sistema de alarmas contra incendio.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g146"  name="g146"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g146"  name="g146"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g146"   name="g146"></td>
                            <td class="centrado"><textarea   id="g146"   name="g146"></textarea> </td>
                        </tr>
                        
                         <tr >
                            <td>Código de colores.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g147"  name="g147"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g147"  name="g147"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g147"   name="g147"></td>
                            <td class="centrado"><textarea   id="g147"   name="g147"></textarea> </td>
                        </tr>
                         <tr >
                            <td>Fuente alterna del suministro de energía eléctrica.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g148"  name="g148"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g148"  name="g148"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g148"   name="g148"></td>
                            <td class="centrado"><textarea   id="g148"   name="g148"></textarea> </td>
                        </tr>
                         <tr >
                            <td>Tiempo de operación después del corte de energía del sistema normal.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g149"  name="g149"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g149"  name="g149"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g149"   name="g149"></td>
                            <td class="centrado"><textarea   id="g149"   name="g149"></textarea> </td>
                        </tr>
                     
                    </tbody>
                </table>
             </div>
             
             
           
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
                FIRMA INSPECTOR: _______________________________
                <p> 
               <input type="submit" value="ENVIAR"/> 
                </p>
</div>
 
<!-- end: .col-md-5-->