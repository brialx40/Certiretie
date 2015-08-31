<div class="col-md-12 fondo-blanco"> 
    <!-- Task Widget -->

    <br><br>
            <!-- inicio encabezado -->
            <div id="encabezado"  class="col-xs-12">

                <div class="logop col-xs-3">
                    <a href="#"><img src="images/photo.jpg"></a>
                </div>
                <div class="titulo col-xs-9">
                    <h3 class="negrita"> </h3>
                    <div class="col-xs-12">

                        <p>FECHA:2014-008-01					
                            &nbsp;&nbsp;	
                            VERSION:2 			
                            &nbsp;&nbsp;	
                            O/PS/R/01-21
                        </p>
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
                    <br><br>INSPECCION: <br><input type="text" class="tam-tabla" id="lugar" name="lugar"/>
                </div>

                <div class="col-xs-12">
                    <br><br>TIPO DE INSTALACION: <br><input type="text" class="tam-tabla" id="lugar" name="lugar"/>
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
                            <td>APLICACIÓN:  Auditorios, Auditorios dentro de Instituciones educativas, Edificios de oficinas, Edificios 
                                comerciales, Otras ocupaciones como Boleras, Comedores públicos, Cuarteles, Gimnasios, Iglesias, Museos,
                                Piscinas cubiertas, Pistas de patinaje, Restaurantes, Salas de conferencias, Salas de espera de aeropuertos,
                                puertos y estaciones, Salas de exhibición, Salas de juzgados, Salas de reunión de clubes, Salas de reuniones,
                                Salas de usos múltiples, Salas de velación, Salones de baile.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1"  name="g1.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.1"  name="g1.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.1"   name="g1.1"></td>
                            <td class="centrado"><textarea   id="g.1"   name="g1.1"></textarea> </td>
                        </tr>
                        
                        <tr >
                            <td>1</td>
                            <td>Los métodos de alambrado fijos deben ser canalizaciones metálicas, conduit metálico flexible hermético a los líquidos</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1"  name="g1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1"  name="g1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1"   name="g1"></td>
                            <td class="centrado"><textarea   id="g1"   name="g1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>2</td>
                            <td>Canalizaciones no metálicas enterradas en concreto a una profundidad no inferior a 50 mm o cables de Tipo MI o MC.</td> 
                            <td class="centrado"><input type="radio" value="a" id="g2"  name="g2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2" name="g2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2" name="g2"></td>
                              <td class="centrado"><textarea   id="g2"   name="g2"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>3</td>
                            <td>Canalizaciones no metálicas enterradas en concreto a una profundidad no inferior a 50 mm o cables de Tipo MI o MC.</td>    
                            <td class="centrado"><input type="radio" value="a" id="g3"  name="g3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3"  name="g3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3"   name="g3"></td>
                              <td class="centrado"><textarea   id="g3"   name="g3"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>4</td>
                            <td>En los edificios o parte de los mismos que, de acuerdo con su norma de edificación, no deban ser de construcción
                                a prueba de fuego se permite instalar cables con recubrimiento no metálico, cables de tipo AC, tuberías eléctricas
                                no metálicas y en tubo rígido no metálico </td>     
                            <td class="centrado"><input type="radio" value="a" id="g"  name="g4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4"  name="g4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g4"   name="g4"></td>
                              <td class="centrado"><textarea   id="g4"   name="g4"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>5</td>
                            <td>En restaurantes, salas de conferencias y reuniones en hoteles o moteles, comedores colectivos, lugares de culto 
                                religioso, salas de clubes, de juzgados y de velación las tuberías eléctricas no metálicas o la tubería rígida
                                no metálica se instalen ocultas en las paredes, suelos y techos cuando ofrezcan una barrera térmica mediante un material con un acabado de clasificación ignífuga mínima de 15 minutos</td>     
                             <td class="centrado"><input type="radio" value="a" id="g5"  name="g5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g5"  name="g5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g5"   name="g5"></td>
                              <td class="centrado"><textarea   id="g5"   name="g5"></textarea> </td> 
                        <tr >
                            <td>6</td>
                            <td>No se deben utilizar tuberías eléctricas no metálicas ni tubo rígido no metálico en espacios por los que pase el aire ambiente de ventilación </td>     
                            <td class="centrado"><input type="radio" value="a" id="g5"  name="g6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6"  name="g6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g6"   name="g6"></td>
                              <td class="centrado"><textarea   id="g6"   name="g6"></textarea> </td>            
                        </tr>
                        <tr >
                            <td>7</td>
                            <td>Los cuadros de distribución y los equipos de distribución de fuerza portátiles sólo se deben alimentar desde salidas de fuerza certificadas de capacidad nominal de corriente y tensión suficientes </td>     
                            <td class="centrado"><input type="radio" value="a" id="g7"  name="g7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7"  name="g7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7"   name="g7"></td>
                              <td class="centrado"><textarea   id="g7"   name="g7"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>8</td>
                            <td>as salidas de fuerza deben estar protegidas por dispositivos contra sobrecorriente.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g8"  name="g8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g8"  name="g8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g8"   name="g8"></td>
                              <td class="centrado"><textarea   id="g8"   name="g8"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>9</td>
                            <td>Los dispositivos de protección contra sobrecorriente y salidas de fuerza
                                no deben ser accesibles al público en general</td>  
                            <td class="centrado"><input type="radio" value="a" id="g9"  name="g9"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g9"  name="g9"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g9"   name="g9"></td>
                              <td class="centrado"><textarea   id="g9"   name="g9"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>10</td>
                            <td>Los dispositivos de protección contra sobrecorriente y salidas de fuerza  están 
                                previstos de  los medios para la conexión de un conductor de puesta a tierra de equipos</td>     
                            <td class="centrado"><input type="radio" value="a" id="g10"  name="g10"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10"  name="g10"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g10"   name="g10"></td>
                              <td class="centrado"><textarea   id="g10"   name="g10"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>11</td>
                            <td>El neutro de los alimentadores que dan suministro a sistemas de reguladores de nivel de 
                                intensidad (dimmer) trifásicos de cuatro hilos y de estado sólido, se considera como un conductor portador de corriente</td>     
                            <td class="centrado"><input type="radio" value="a" id="g11"  name="g11"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g11"  name="g11"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g11"   name="g11"></td>
                              <td class="centrado"><textarea   id="g11"   name="g11"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>12</td>
                            <td>Se provee de un sistema de potencia de emergencia destinado a suministrar automáticamente energía  a 
                                los sistemas de alumbrado y fuerza para áreas y equipos previamente definidos</td>     
                            <td class="centrado"><input type="radio" value="a" id="g12"  name="g12"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g12"  name="g12"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g12"   name="g12"></td>
                              <td class="centrado"><textarea   id="g12"   name="g12"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>13</td>
                            <td>El sistema de potencia de emergencia suministra automáticamente energía eléctrica dentro de los 10 segundos siguientes al corte</td>     
                           <td class="centrado"><input type="radio" value="a" id="g13"  name="g13"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g13"  name="g13"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g13"   name="g13"></td>
                              <td class="centrado"><textarea   id="g13"   name="g13"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>14</td>
                            <td>Los sistemas de emergencia suministran energía a las señales de salida, la ventilación, alarma contra incendio,
                                bombas contra incendio, ascensores, sistemas de comunicación, procesos industriales y demás sistemas en los que la interrupción del suministro eléctrico puede producir serios peligros para la seguridad de la vida humana</td>     
                            <td class="centrado"><input type="radio" value="a" id="g14"  name="g14"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g14"  name="g14"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g14"   name="g14"></td>
                              <td class="centrado"><textarea   id="g14"   name="g14"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>15</td>
                            <td>El sistema provee autonomía por lo menos 60 minutos a plena carga, sin que la tensión baje del 87,5 % de su valor nominal  </td>     
                            <td class="centrado"><input type="radio" value="a" id="g15"  name="g15"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g15"  name="g15"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g15"   name="g15"></td>
                              <td class="centrado"><textarea   id="g15"   name="g15"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>16</td>
                            <td>El  grupo de baterías de acumuladores, se proveen con cargador automático</td>     
                            <td class="centrado"><input type="radio" value="a" id="g16"  name="g16"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g16"  name="g16"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g16"   name="g16"></td>
                              <td class="centrado"><textarea   id="g16"   name="g16"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>17</td>
                            <td>En el  cuarto del grupos de baterías de acumuladores  se disponen  de un tomacorriente</td>     
                            <td class="centrado"><input type="radio" value="a" id="g17"  name="g17"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g17"  name="g17"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g17"   name="g17"></td>
                              <td class="centrado"><textarea   id="g17"   name="g17"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>18</td>
                            <td>Los transformadores con aislamiento en aceite están confinados en una bóveda con 
                                resistencia al fuego mínimo de tres horas o se encuentra instalado según las 
                                condiciones establecidas en los numerales 450-42 y 450-43 de la NTC 2050.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g18"  name="g18"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g18"  name="g18"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g18"   name="g18"></td>
                              <td class="centrado"><textarea   id="g18"   name="g18"></textarea> </td>                    
                        </tr>
                           <tr >
                            <td>19</td>
                            <td>La instalación eléctrica y los equipos asociados garantizan el suministro ininterrumpido
                                para iluminación en sitios donde la falta de ésta pueda originar riesgos para la vida de 
                                las personas, tal como en áreas críticas, salidas de emergencia o rutas de evacuación.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g19"  name="g1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g19"  name="g19"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g19"   name="g19"></td>
                            <td class="centrado"><textarea   id="g19"   name="g19"></textarea> </td>
                        </tr>
                        <tr >
                            <td>20</td>
                            <td>Verificar que no se utilicen lámparas de descarga con encendido retardado en circuitos de iluminación de emergencia</td> 
                            <td class="centrado"><input type="radio" value="a" id="g20"  name="g20"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g20" name="g20"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g20" name="g20"></td>
                              <td class="centrado"><textarea   id="g20"   name="g20"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>21</td>
                            <td>El sistema de alumbrado de emergencia equipados con grupos de baterías garantizan su funcionamiento 
                                por lo menos durante los 60 minutos después de que se interrumpa el servicio eléctrico normal.</td>    
                            <td class="centrado"><input type="radio" value="a" id="g21"  name="g21"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g21"  name="g21"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g21"   name="g21"></td>
                              <td class="centrado"><textarea   id="g21"   name="g21"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>22</td>
                            <td>Se garantiza una iluminancia horizontal mínima de 5 luxes a la altura del plano de uso en los lugares en los 
                                que estén situados los equipos de emergencia,  las instalaciones de protección contra incendios de 
                                utilización manual y los tableros de distribución del alumbrado</td>     
                            <td class="centrado"><input type="radio" value="a" id="g"  name="g22"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g22"  name="g22"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g22"   name="g22"></td>
                              <td class="centrado"><textarea   id="g22"   name="g22"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>23</td>
                            <td>Se garantiza que las rutas de evacuación están claramente visibles, señalizadas e iluminadas con un
                                sistema autónomo con batería, con un mínimo de: 5 Lux y 40% de uniformidad y un máximo del 20% de deslumbramiento, aún en condiciones de humo o plena oscuridad.</td>     
                             <td class="centrado"><input type="radio" value="a" id="g23"  name="g23"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g23"  name="g23"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g23"   name="g23"></td>
                              <td class="centrado"><textarea   id="g23"   name="g23"></textarea> </td> 
                        <tr >
                            <td>24</td>
                            <td>La hermeticidad de las luminarias es mayor a IP20 para interiores e IP65 para exteriores. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g24"  name="g24"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g24"  name="g24"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g24"   name="g24"></td>
                              <td class="centrado"><textarea   id="g24"   name="g24"></textarea> </td>            
                        </tr>
                        <tr >
                            <td>25</td>
                            <td>Las luminarias son capaces de resistir la combustión a 70°C de temperatura ambiente, al menos en la mitad de su autonomía declarada.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g25"  name="g7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7"  name="g7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7"   name="g7"></td>
                              <td class="centrado"><textarea   id="g7"   name="g7"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>26</td>
                            <td>Donde se tenga la presencia permanente de niños menores de tres años, los interruptores deben ser provistos de sus respectivas tapas que impidan el contacto con partes energizadas.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g26"  name="g26"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g26"  name="g26"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g26"   name="g26"></td>
                              <td class="centrado"><textarea   id="g26"   name="g26"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>27</td>
                            <td>En salacunas o jardines infantiles o lugares de alta concentración de niños menores de
                                tres años los tomacorrientes deben tener protección contra contacto a partes energizadas, tales como protección aumentada, a prueba de manipulación o a prueba de niños como se le conoce (Tamper Resistant), tapas de protección o estar localizadas a una altura (1,70 m) que no afecte la seguridad de los niños.</td>  
                            <td class="centrado"><input type="radio" value="a" id="g27"  name="g27"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g27"  name="g27"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g27"   name="g27"></td>
                              <td class="centrado"><textarea   id="g27"   name="g27"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>28</td>
                            <td>Los equipos portátiles de distribución cumple con las capacidades nominales adecuadas a su alimentación desde salidas de potencias adecuadas</td>     
                            <td class="centrado"><input type="radio" value="a" id="g28"  name="g28"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g28"  name="g28"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g28"   name="g28"></td>
                              <td class="centrado"><textarea   id="g28"   name="g28"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>29</td>
                            <td>Los interruptores, dimmers y otros elementos estan aislados para evitar contactos con partes energizadas</td>     
                            <td class="centrado"><input type="radio" value="a" id="g29"  name="g29"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g29"  name="g29"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g29"   name="g29"></td>
                              <td class="centrado"><textarea  id="g29"  name="g29"></textarea> </td>                   
                        </tr> 
                    </tbody>
                </table>
             </div>
              <p>NOTA:<br>Esta lista es un anexo de la lista de uso final O/PS/R/01-6</p>
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
            </div>
      
