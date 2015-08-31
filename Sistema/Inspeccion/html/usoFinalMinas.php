<div class="col-md-12 "> 
 
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
                        <p> TIPO DE INSTALACION: ESPECIAL </P>
                       
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
                            <th>NUM</th>
                            <th>ASPECTO</th>
                            <th>NORMA</th>
                            <td>C</td>
                            <td>NC</td>
                            <td>cyC</td>
                            <th>OBSERVACIONES</th>
                           
                        </tr>
                        <tr>
                          <th>1.</th>
                          <th colspan="6" align="left">GENERAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr >
                            <td>1.1</td>
                            <td>El diseño,  construcción,  reparaciones, ampliaciones y cambios es realizado por profesionales especializados</td>
                            <td>RETIE  29.1 literal c</td> 
                            <td class="centrado"><input type="radio" value="a" id="g1.1"  name="g1.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.1"  name="g1.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.1"   name="g1.1"></td>
                            <td class="centrado"><textarea   id="g1.1"   name="g1.1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>1.2</td>
                            <td>La instalación eléctrica y los equipos asociados garantizan el suministro ininterrumpido 
                                de potencia en sitios donde la falta de ésta pueda originar riesgos para la vida de las personas</td>
                            <td>RETIE 17.1 literal a, RETIE 28.3.3</td> 
                            <td class="centrado"><input type="radio" value="a" id="g1.2"  name="g1.2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.2" name="g1.2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.2" name="g1.2"></td>
                              <td class="centrado"><textarea   id="g1.2"   name="g1.2"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>1.3</td>
                            <td>El suministro de energía eléctrica opera dentro de los 10 segundos siguientes al corte,
                                a los sistemas de alumbrado y fuerza para áreas y equipos previamente definidos, y en
                                caso de falla del sistema destinado a alimentar circuitos esenciales para la seguridad y la vida humana.</td>
                            <td>&nbsp;</td>    
                            <td class="centrado"><input type="radio" value="a" id="g1.3"  name="g1.3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.3"  name="g1.3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.3"   name="g1.3"></td>
                              <td class="centrado"><textarea   id="g1.3"   name="g1.3"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>1.4</td>
                            <td>En los sitios donde se requiera la fuente de respaldo de energía, el sistema debe proveer 
                                autonomía por lo menos 60 minutos a plena carga, sin que la tensión baje del 87,5 % de su valor nominal.</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.4"  name="g1.4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.4"  name="g1.4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.4"   name="g1.4"></td>
                              <td class="centrado"><textarea   id="g1.4"   name="g1.4"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>1.5</td>
                            <td>Las distancias de seguridad a las lineas o redes energizadas cumplen con lo establecido en el Artículo 13 </td>
                            <td>&nbsp;</td>     
                             <td class="centrado"><input type="radio" value="a" id="g1.5"  name="g1.5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.5"  name="g1.5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.5"   name="g1.5"></td>
                              <td class="centrado"><textarea   id="g1.5"   name="g1.5"></textarea> </td> 
                        <tr >
                            <td>1.6</td>
                            <td>La capacidad instalable en KVA que puede soportar la acometida a tensión nominal de la red 
                                y la carga máxima que soporta la protección de sobrecorriente de la acometida es la adecuada.</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.6"  name="g1.6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.6"  name="g1.6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.6"   name="g1.6"></td>
                              <td class="centrado"><textarea   id="g1.6"   name="g1.6"></textarea> </td>            
                        </tr>
                        <tr >
                            <td>1.7</td>
                            <td>Se efectua una adecuada coordinación de las protecciones eléctricas con la selectividad que garantice al máximo la continuidad del servicio.</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.7"  name="g1.7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.7"  name="g1.7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.7"   name="g1.7"></td>
                              <td class="centrado"><textarea   id="g1.7"   name="g1.7"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>1.8</td>
                            <td>Se entrega un estudio de coordinación de aislamiento que contemple el uso de protecciones de sobretensión 
                                en cascada en los circuitos más críticos para garantizar la continuidad de servicio ante eventos
                                de sobretensiones transitorias generadas por descargas atmosféricas o por maniobras en la red.</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.8"  name="g1.8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.8"  name="g1.8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.8"   name="g1.8"></td>
                              <td class="centrado"><textarea   id="g1.8"   name="g1.8"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>1.9</td>
                            <td>Se evalúa la mina como una instalación especial y se clasifican las áreas de acuerdo a los componentes presentes</td>
                            <td>&nbsp;</td>  
                            <td class="centrado"><input type="radio" value="a" id="g1.9"  name="g1.9"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.9"  name="g1.9"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.9"   name="g1.9"></td>
                              <td class="centrado"><textarea   id="g1.9"   name="g1.9"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>1.10</td>
                            <td>Se dispone de planos o diagramas que  muestren información actualizada del sistema eléctrico</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.10"  name="g1.10"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.10"  name="g1.10"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.10"   name="g1.10"></td>
                              <td class="centrado"><textarea   id="g1.10"   name="g1.10"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>1.11</td>
                            <td>Se encuentran los planos o diagramas del sistema eléctrico siempre disponible para la operación,
                                mantenimiento o requerimiento de la autoridad competente</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.11"  name="g1.11"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.11"  name="g1.11"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.11"   name="g1.11"></td>
                              <td class="centrado"><textarea   id="g1.11"   name="g1.11"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>1.12</td>
                            <td>En las instalaciones eléctricas temporales (aquéllas destinadas al mantenimiento
                                y reparación de equipos o estructuras o al traslado de equipos exclusivamente mientas dura la actividad) Se instalan interruptores en el punto de suministro de toda instalación temporal. </td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g12"  name="g1.12"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.12"  name="g1.12"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.12"   name="g.12"></td>
                              <td class="centrado"><textarea   id="g1.12"   name="g1.12"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>13</td>
                            <td>Las redes que estén fuera de servicio son desconectadas de su fuente de alimentación, aisladas y puestas a tierra</td>
                            <td>&nbsp;</td>     
                           <td class="centrado"><input type="radio" value="a" id="g1.13"  name="g.13"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.13"  name="g1.13"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.13"   name="g1.13"></td>
                              <td class="centrado"><textarea   id="g1.13"   name="g1.13"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>1.14</td>
                            <td>Las redes aéreas cumplen las distancias de seguridad establecidas, incrementadas de acuerdo 
                                con las alturas máximas alcanzables por equipos de transporte y extracción?</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.14"  name="g1.14"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.14"  name="g1.14"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.14"   name="g1.14"></td>
                              <td class="centrado"><textarea   id="g1.14"   name="g1.14"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>1.15</td>
                            <td>Los medios de desconexión de los circuito pueden ser bloqueados y etiquetados en la posición
                                abierta, mientras se realizan trabajos en una máquina o equipo?</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.15"  name="g1.15"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.15"  name="g1.15"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.15"   name="g1.15"></td>
                              <td class="centrado"><textarea   id="g1.15"   name="g1.15"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>1.16</td>
                            <td>Todas las áreas con equipo eléctrico cuentan con un extintor por lo menos. </td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.16"  name="g1.16"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.16"  name="g1.16"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.16"   name="g1.16"></td>
                              <td class="centrado"><textarea   id="g1.16"   name="g1.16"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>1.17</td>
                            <td>Estan desenergizadas las secciones o minas abandonadas o que han dejado de ser operadas </td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g17"  name="g17"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g17"  name="g17"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g17"   name="g17"></td>
                              <td class="centrado"><textarea   id="g17"   name="g17"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>1.18</td>
                            <td>Los equipos eléctricos instalados en lugares de almacenamiento de explosivos,
                                detonadores o en general donde se presenten ambientes con gases o vapores explosivos, 
                                cumplen con los requerimientos correspondientes a la clasificación Clase II, División 2,
                                según NTC 2050 o su equivalente IEC.</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.18"  name="g1.18"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.18"  name="g1.18"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.18"   name="g1.18"></td>
                              <td class="centrado"><textarea   id="g1.18"   name="g1.18"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>1.19</td>
                            <td>Los polvorines en superficie están ubicados, como mínimo a 60 m de redes aéreas y como mínimo a 100 m de subestaciones eléctricas.</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.19"  name="g1.19"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.19"  name="g1.19"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.19"   name="g1.19"></td>
                            <td class="centrado"><textarea   id="g1.19"   name="g1.19"></textarea> </td>
                        </tr>
                        <tr>
                            <td>1.20</td>
                            <td>Todos los circuitos que operan a tensiones mayores a 300 V, disponen de medios de 
                                desconexión del tipo apertura visible u otros que indiquen que los contactos estén 
                                abiertos y están localizados lo mas cerca posible al punto de suministro?. Se permite 
                                el uso de interruptores automáticos de caja moldeada sin apertura visible, siempre y 
                                cuando, se tomen medidas para asegurar que todas las fases queden abiertas.</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.20"  name="g1.20"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.20"  name="g1.20"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.20"   name="g1.20"></td>
                            <td class="centrado"><textarea   id="g1.20"   name="g1.20"></textarea> </td>
                        </tr>
                        <tr>
                            <td>1.21</td>
                            <td>En los interruptores automáticos de caja moldeada sin apertura visible se toman medidas
                                para asegurar que todas las fases queden abiertas</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.21"  name="g1.21"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.21"  name="g1.21"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.21"   name="g1.21"></td>
                            <td class="centrado"><textarea   id="g1.21"   name="g1.21"></textarea> </td>
                        </tr
                        ><tr>
                            <td>1.22</td>
                            <td>Se cuenta con un sistema de alumbrado de emergencia donde existe la posibilidad de peligro
                                al personal por causa de una falla en el sistema de alumbrado</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.22"  name="g1.22"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.22"  name="g1.22"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.22"   name="g1.22"></td>
                            <td class="centrado"><textarea   id="g1.1.22"   name="g1.1.22"></textarea> </td>
                        </tr>
                        <tr>
                            <td>1.23</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.23"  name="g1.23"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.23"  name="g1.23"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.23"   name="g1.23"></td>
                            <td class="centrado"><textarea   id="g1.23"   name="g1.23"></textarea> </td>
                        </tr>
                     </tbody>
                </table> 
              </div>  <!--fin tablaa 1 de aspectos generales-->
              
              <P></P>
             <!--inicio tabla 2-->  
            <div id="preguntas" class="margen col-xs-12">
                <table border="1" class=" tam-tabla" >
                    <thead>
                        <tr>
                            <th width="28">2</th>
                            <th width="240">SISTEMA DE CONEXION A TIERRA</th>
                            <th >NORMA</th>
                            <th >A</th>
                            <th >ANC</th>
                            <th >NC</th>
                            <th >OBSERVACIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                         <tr>
                            <td>2.1</td>
                            <td>Los circuitos de suministro son puestos a tierra a través de una impedancia limitadora (sistema IT)</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.1"  name="g2.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.1"  name="g2.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.1"   name="g2.1"></td>
                            <td class="centrado"><textarea   id="g2.1"   name="g.1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>2.2</td>
                            <td>Los circuitos de suministro poseen un sistema de vigilancia o monitoreo del aislamiento de la red que permita indicar permanentemente la continuidad del circuito de tierra </td>
                            <td>&nbsp;</td> 
                            <td class="centrado"><input type="radio" value="a" id="g2.2"  name="g2.2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.2" name="g2.2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.2" name="g2.2"></td>
                              <td class="centrado"><textarea   id="g2.2"   name="g2.2"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>2.3</td>
                            <td>Se garantiza que la desconexión en caso de falla se realice como máximo en 1,5 segundos o se activa un sistema de alarma.</td>
                            <td>&nbsp;</td>    
                            <td class="centrado"><input type="radio" value="a" id="g2.3"  name="g2.3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.3"  name="g2.3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.3"   name="g.3"></td>
                              <td class="centrado"><textarea   id="g2.3"   name="g2.3"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>2.4</td>
                            <td> El monitoreo debe estar instalado en un circuito a prueba de fallas.</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.4"  name="g2.4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.4"  name="g2.4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.4"   name="g.4"></td>
                              <td class="centrado"><textarea   id="g2.4"   name="g2.4"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>2.5</td>
                            <td>La impedancia limitadora está dimensionada para funcionamiento continuo? , excepto cuando se
                                provea un dispositivo de disparo de falla a tierra; monitoreada de tal manera que desenergice 
                                la fuente si la impedancia se abre y conectada al neutro tan cerca como sea posible de la fuente.</td>
                            <td>&nbsp;</td>     
                             <td class="centrado"><input type="radio" value="a" id="g2.5"  name="g2.5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.5"  name="g2.5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.5"   name="g2.5"></td>
                              <td class="centrado"><textarea   id="g2.5"   name="g2.5"></textarea> </td> 
                        <tr >
                            <td>2.6</td>
                            <td>La impedancia limitadora está monitoreada de tal manera que desenergice la fuente si la
                                impedancia se abre y conectada al neutro tan cerca como sea posible de la fuente.</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.6"  name="g2.6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.6"  name="g2.6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.6"   name="g2.6"></td>
                              <td class="centrado"><textarea   id="g2.6"   name="g2.6"></textarea> </td>            
                        </tr>
                        <tr >
                            <td>2.7</td>
                            <td>La impedancia limitadora está conectada al neutro tan cerca como sea posible de la fuente.</td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.7"  name="g2.7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.7"  name="g2.7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.7"   name="g2.7"></td>
                              <td class="centrado"><textarea   id="g2.7"   name="g2.7"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>2.8</td>
                            <td>En redes de menos de 1000 volt, se dispone de  una lámpara de luz intermitente en zonas 
                                de permanencia de personas, que se activa si la resistencia de aislamiento de la red 
                                desciende por debajo de 50 ohm por cada voltio de tensión nominal fase-tierra? </td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.8"  name="g2.8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.8"  name="g2.8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.8"   name="g2.8"></td>
                              <td class="centrado"><textarea   id="g2.8"   name="g2.8"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>2.9</td>
                            <td>La alarma visible para indicar una falla a tierra, se mantiene continua hasta que se elimine la falla? </td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.9"  name="g2.9"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.9"  name="g2.9"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.9"   name="g2.9"></td>
                              <td class="centrado"><textarea   id="g2.9"   name="g2.9"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>2.10</td>
                            <td>Se  instala dispositivo indicador de falla a tierra acoplado con la protección del circuito cuando se tienen sistemas no puestos a tierra.  </td>
                            <td>&nbsp;</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.10"  name="g2.10"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.10"  name="g2.10"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.10"   name="g2.10"></td>
                              <td class="centrado"><textarea   id="g2.10"   name="g2.10"></textarea> </td>                   
                        </tr>
                    </tbody>
                </table> 
              </div>  <!--fin tablaa 2 -->
              
              
              <P></P>
             <!--inicio tabla 3 -->  
            <div id="preguntas" class="margen col-xs-12">
                <table border="1" class=" tam-tabla" >
                    <thead>
                        <tr>
                            <th width="28" rowspan="2">3</th>
                            <th width="226" rowspan="2">EQUIPOS MOVILES</th>
                            <th width="63" rowspan="2">NORMA</th>
                            <th colspan="3">APLICA</th>
                            <th width="161" rowspan="2">OBSERVACIONES</th>
                        </tr>
                        <tr>
                            <td width="20">A</td>
                            <td width="34">ANC</td>
                            <td width="23">NC</td>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                            <td>3.1</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.1"  name="g3.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.1"  name="g3.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.1"   name="g3.1"></td>
                            <td class="centrado"><textarea   id="g3.1"   name="g3.1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>3.2</td>
                            <td></td>
                            <td></td> 
                            <td class="centrado"><input type="radio" value="a" id="g3.2"  name="g3.2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.2" name="g3.2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.2" name="g3.2"></td>
                              <td class="centrado"><textarea   id="g3.2"   name="g3.2"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>3.3</td>
                            <td></td>
                            <td></td>    
                            <td class="centrado"><input type="radio" value="a" id="g3.3"  name="g3.3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.3"  name="g3.3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.3"   name="g3.3"></td>
                              <td class="centrado"><textarea   id="g3.3"   name="g3.3"></textarea> </td>                 
                        </tr>
                        <tr>
                            <td colspan="7">EQUIPOS MINERIA SUBTERRANEA</td>
                        </tr>
                        <tr >
                            <td>3.4</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.4"  name="g3.4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.4"  name="g3.4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.4"   name="g3.4"></td>
                            <th><span class="centrado">
                              <textarea   id="g3.16"   name="g3.16"></textarea>
                            </span></th>
                                            
                        </tr>
                        <tr >
                            <td>3.5</td>
                            <td></td>
                            <td></td>     
                             <td class="centrado"><input type="radio" value="a" id="g3.5"  name="g3.5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.5"  name="g3.5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.5"   name="g3.5"></td>
                              <td class="centrado"><textarea   id="3.5"   name="g3.5"></textarea> </td> 
                        <tr >
                            <td>3.6</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.6"  name="g3.6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.6"  name="g3.6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.6"   name="g3.6"></td>
                              <td class="centrado"><textarea   id="g3.6"   name="g3.6"></textarea> </td>            
                        </tr>
                            <tr >
                            <td>3.7</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.7"  name="g3.7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.7"  name="g3.7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.7"   name="g3.7"></td>
                              <td class="centrado"><textarea   id="g3.7"   name="g3.7"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>3.8</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.8"  name="g3.8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.8"  name="g3.8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.8"   name="g3.8"></td>
                              <td class="centrado"><textarea   id="g3.8"   name="g3.8"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>3.9</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.9"  name="g3.9"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.9"  name="g3.9"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.9"   name="g3.9"></td>
                              <td class="centrado"><textarea   id="g3.9"   name="g3.9"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>3.10</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.10"  name="g3.10"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.10"  name="g3.10"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.10"   name="g3.10"></td>
                              <td class="centrado"><textarea   id="g3.10"   name="g3.10"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>3.11</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.11"  name="g3.11"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.11"  name="g3.11"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.11"   name="g3.11"></td>
                              <td class="centrado"><textarea   id="g3.11"   name="g3.11"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>3.12</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.12"  name="g3.12"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.12"  name="g3.12"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.12"   name="g3.12"></td>
                              <td class="centrado"><textarea   id="g3.12"   name="g3.12"></textarea> </td>                   
                        </tr>
                        
                        <tr >
                            <td>3.13</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.13"  name="g3.13"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.13"  name="g3.13"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.13"   name="g3.13"></td>
                              <td class="centrado"><textarea   id="g3.13"   name="g3.13"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>3.14</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.14"  name="g.14"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g.14"  name="g3.14"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g.14"   name="g3.14"></td>
                              <td class="centrado"><textarea   id="g3.14"   name="g3.14"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>3.15</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.15"  name="g3.15"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.15"  name="g3.15"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.15"   name="g3.15"></td>
                              <td class="centrado"><textarea   id="g3.15"   name="g3.15"></textarea> </td>                   
                        </tr>
                    </tbody>
                </table> 
              </div>  <!--fin tablaa 3 -->
              
             <P></P>
             <!--inicio tabla 4 -->  
            <div id="preguntas" class="margen col-xs-12">
              <table border="1" class=" tam-tabla" >
              <thead>
                <tr>
                  <th width="28" rowspan="2">4</th>
                  <th width="224" rowspan="2"></th>
                  <th width="61" rowspan="2"></th>
                  <th colspan="3">APLICA</th>
                  <th width="165" rowspan="2">OBSERVACIONES</th>
                </tr>
                <tr>
                  <td width="20">A</td>
                  <td width="34">ANC</td>
                  <td width="23">NC</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>4.1</td>
                  <td></td>
                  <td></td>
                  <td class="centrado"><input type="radio" value="a" id="g4.1"  name="g4.1" /></td>
                  <td class="centrado"><input type="radio" value="anc" checked  id="g4.1"  name="g4.1" /></td>
                  <td class="centrado"><input type="radio" value="nc"   checked id="g4.1"   name="g4.1" /></td>
                  <td class="centrado"><textarea   id="g4.1"   name="g4.1"></textarea></td>
                </tr>
                <tr>
                  <td>4.2</td>
                  <td></td>
                  <td></td>
                  <td class="centrado"><input type="radio" value="a" id="g4.2"  name="g4.2" /></td>
                  <td class="centrado"><input type="radio" value="anc" checked  id="g4.2"  name="g4.2" /></td>
                  <td class="centrado"><input type="radio" value="nc"   checked id="g4.2"   name="g4.2" /></td>
                  <td class="centrado"><textarea   id="g4.2"   name="g4.2"></textarea></td>
                </tr>
                <tr>
                  <td>4.3</td>
                  <td></td>
                  <td></td>
                  <td class="centrado"><input type="radio" value="a" id="g4.3"  name="g4.3" /></td>
                  <td class="centrado"><input type="radio" value="anc" checked  id="g4.3"  name="g4.3" /></td>
                  <td class="centrado"><input type="radio" value="nc"   checked id="g4.3"   name="g4.3" /></td>
                  <td class="centrado"><textarea   id="g4.3"   name="g4.3"></textarea></td>
                </tr>
                <tr>
                  <td>4.4</td>
                  <td></td>
                  <td></td>
                  <td class="centrado"><input type="radio" value="a" id="g4.4"  name="g4.4" /></td>
                  <td class="centrado"><input type="radio" value="anc" checked  id="g4.4"  name="g4.4" /></td>
                  <td class="centrado"><input type="radio" value="nc"   checked id="g4.4"   name="g4.4" /></td>
                  <td class="centrado"><textarea   id="g4.4"   name="g4.4"></textarea></td>
                </tr>
                <tr>
                  <td>4.5</td>
                  <td></td>
                  <td></td>
                  <td class="centrado"><input type="radio" value="a" id="g4.5"  name="g4.5" /></td>
                  <td class="centrado"><input type="radio" value="anc" checked  id="g4.5"  name="g4.5" /></td>
                  <td class="centrado"><input type="radio" value="nc"   checked id="g4.5"   name="g4.5" /></td>
                  <td class="centrado"><textarea   id="g4.5"   name="g4.5"></textarea></td>
                </tr>
                <tr>
                  <td>4.6</td>
                  <td></td>
                  <td></td>
                  <td class="centrado"><input type="radio" value="a" id="g4.6"  name="g4.6" /></td>
                  <td class="centrado"><input type="radio" value="anc" checked  id="g4.6"  name="g4.6" /></td>
                  <td class="centrado"><input type="radio" value="nc"   checked id="g4.6"   name="g4.6" /></td>
                  <td class="centrado"><textarea   id="g4.6"   name="g4.6"></textarea></td>
                </tr>
                <tr>
                  <td colspan="7">EQUIPOS MINERIA SUBTERRANEA</td>
                </tr>
                <tr>
                  <td>4.7</td>
                  <td></td>
                  <td></td>
                  <td class="centrado"><input type="radio" value="a" id="g4.7"  name="g4.7" /></td>
                  <td class="centrado"><input type="radio" value="anc" checked  id="g4.7"  name="g4.7" /></td>
                  <td class="centrado"><input type="radio" value="nc"   checked id="g4.7"   name="g4.7" /></td>
                  <th><span class="centrado">
                    <textarea   id="g4.10"   name="g4.10"></textarea>
                  </span></th>
                
                </tr>
                <tr>
                  <td>4.8</td>
                  <td></td>
                  <td></td>
                  <td class="centrado"><input type="radio" value="a" id="g4.8"  name="g4.8" /></td>
                  <td class="centrado"><input type="radio" value="anc" checked  id="g4.8"  name="g4.8" /></td>
                  <td class="centrado"><input type="radio" value="nc"   checked id="g4.8"   name="g4.8" /></td>
                  <td class="centrado"><textarea   id="g4.8"   name="g4.8"></textarea></td>
                </tr>
                <tr>
                  <td>4.9</td>
                  <td></td>
                  <td></td>
                  <td class="centrado"><input type="radio" value="a" id="g4.9"  name="g4.9" /></td>
                  <td class="centrado"><input type="radio" value="anc" checked  id="g4.9"  name="g4.9" /></td>
                  <td class="centrado"><input type="radio" value="nc"   checked id="g4.9"   name="g4.9" /></td>
                  <td class="centrado"><textarea   id="g4.9"   name="g4.9"></textarea></td>
                </tr>
                <tr>
                  <td>4.10</td>
                  <td></td>
                  <td></td>
                  <td class="centrado"><input type="radio" value="a" id="g4.9"  name="g4.9" /></td>
                  <td class="centrado"><input type="radio" value="anc" checked  id="g4.9"  name="g4.9" /></td>
                  <td class="centrado"><input type="radio" value="nc"   checked id="g4.9"   name="g4.9" /></td>
                  <td class="centrado"><textarea   id="g4.9"   name="g4.9"></textarea></td>
                </tr>
                <tr>
                  <td>4.11</td>
                  <td></td>
                  <td></td>
                  <td class="centrado"><input type="radio" value="a" id="g4.9"  name="g4.9" /></td>
                  <td class="centrado"><input type="radio" value="anc" checked  id="g4.9"  name="g4.9" /></td>
                  <td class="centrado"><input type="radio" value="nc"   checked id="g4.9"   name="g4.9" /></td>
                  <td class="centrado"><textarea   id="g4.9"   name="g4.9"></textarea></td>
                </tr>
                <tr>
                  <td>4.12</td>
                  <td></td>
                  <td></td>
                  <td class="centrado"><input type="radio" value="a" id="g4.9"  name="g4.9" /></td>
                  <td class="centrado"><input type="radio" value="anc" checked  id="g4.9"  name="g4.9" /></td>
                  <td class="centrado"><input type="radio" value="nc"   checked id="g4.9"   name="g4.9" /></td>
                  <td class="centrado"><textarea   id="g4.9"   name="g4.9"></textarea></td>
                </tr>
                <tr>
                  <td>4.13</td>
                  <td></td>
                  <td></td>
                  <td class="centrado"><input type="radio" value="a" id="g4.9"  name="g4.9" /></td>
                  <td class="centrado"><input type="radio" value="anc" checked  id="g4.9"  name="g4.9" /></td>
                  <td class="centrado"><input type="radio" value="nc"   checked id="g4.9"   name="g4.9" /></td>
                  <td class="centrado"><textarea   id="g4.9"   name="g4.9"></textarea></td>
                </tr>
              </tbody>
              </table>
            </div>  <!--fin tablaa 4 -->
              
               <P></P>
             <!--inicio tabla 5 -->  
            <div id="preguntas" class="margen col-xs-12">
                <table border="1" class=" tam-tabla" >
                    <thead>
                        <tr>
                            <th width="20" rowspan="2">5</th>
                            <th width="233" rowspan="2">TABLEROS ELECTRICOS</th>
                            <th width="63" rowspan="2">&nbsp;</th>
                            <th colspan="3">APLICA</th>
                            <th width="162" rowspan="2">OBSERVACIONES</th>
                        </tr>
                        <tr>
                            <td width="20">A</td>
                            <td width="34">ANC</td>
                            <td width="23">NC</td>
                        </tr>
                    </thead>
                    <tbody>
                            <tr >
                            <td>5.1</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g5.1"  name="g5.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g5.1"  name="g5.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g5.1"   name="g5.1"></td>
                              <td class="centrado"><textarea   id="g5.1"   name="g5.1"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>5.2</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g5.2"  name="g5.2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g5.2"  name="g5.2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g5.2"   name="g5.2"></td>
                              <td class="centrado"><textarea   id="g5.2"   name="g5.2"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>5.3</td>
                            <td></td>
                            <td></td>     
                            <td class="centrado"><input type="radio" value="a" id="g5.3"  name="g5.3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g5.3"  name="g5.3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g5.3"   name="g5.3"></td>
                              <td class="centrado"><textarea   id="g5.3"   name="g5.3"></textarea> </td>                   
                        </tr>
                    </tbody>
                </table> 
              </div>  <!--fin tablaa 5 -->
              
              <!--inicio tabla 6 -->  
            <div id="preguntas" class="margen col-xs-12">
                <table border="1" class=" tam-tabla" >
                    <thead>
                        <tr>
                            <th width="20" rowspan="2">6</th>
                            <th rowspan="2">GARAJES COMERCIALES</th>
                            <th rowspan="2">&nbsp;</th>
                            <th colspan="3">APLICA</th>
                            <th width="161" rowspan="2">OBSERVACIONES</th>
                        </tr>
                        <tr>
                            <td width="20">A</td>
                            <td width="34">ANC</td>
                            <td width="23">NC</td>
                        </tr>
                    </thead>
                    <tbody>
                            <tr >
                            <td>6.1</td>
                            <td width="230"></td>
                            <td width="67"></td>     
                            <td class="centrado"><input type="radio" value="a" id="g6.1"  name="g6.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6.1"  name="g6.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g6.1"   name="g6.1"></td>
                              <td class="centrado"><textarea   id="g6.1"   name="g6.1"></textarea> </td>                   
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
            <P>
                FIRMA INSPECTOR: _______________________________
            </P>
                <p> 
               <input type="submit" value="ENVIAR"/> 
            </div>
  



