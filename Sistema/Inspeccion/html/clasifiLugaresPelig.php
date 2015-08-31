<div class="col-md-12 fondo-blanco"> 
    <!-- Task Widget -->

    <br><br>
            <!-- inicio encabezado -->
            <div id="encabezado"  class="col-xs-12">

                <div class="logop col-xs-3">
                    <a href="#"><img src="images/photo.jpg"></a>
                </div>
                <div class="titulo col-xs-9">
                    <h3 class="negrita">CLASIFICACION DE LUGARES PELIGROSOS </h3>
                    <div class="col-xs-12">

                        <p>FECHA:2013-09-30					
                            &nbsp;&nbsp;	
                            VERSION:2 			
                            &nbsp;&nbsp;	
                            O/PS/R/01-12</p>
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
            <div id="preguntas" class="margen col-xs-12">
                <table border="1" class=" tam-tabla" >
                    <thead>
                        <tr>
                            <th rowspan="2">NUM</th>
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
                        <tr>
                            <td>1.</td>
                            <td>GENERAL</td> 
                            <th colspan="3"></th>
                            <th rowspan="2"></th>
                            
                        </tr>
                         <tr >
                        <tr >
                            <td>1.1</td>
                            <td>La clasificación, diseño,  construcción,  reparaciones, ampliaciones y cambios es 
                                realizado por profesionales especializados?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.1"  name="g1.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.1"  name="g1.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.1"   name="g1.1"></td>
                            <td class="centrado"><textarea   id="g1.1"   name="g1.1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>1.2</td>
                            <td>Las áreas a inspeccionar se encuentran clasificadas dependiendo de las propiedades
                                de los vapores, líquidos o gases inflamables y los polvos o fibras combustibles que 
                                pueda haber en ellos y por la posibilidad de que se
                                produzcan concentraciones o cantidades inflamables o combustibles</td> 
                            <td class="centrado"><input type="radio" value="a" id="g1.2"  name="g1.2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.2" name="g1.2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.2" name="g1.2"></td>
                              <td class="centrado"><textarea   id="g1.2"   name="g1.2"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>1.3</td>
                            <td>La capacidad instalable en KVA que puede soportar la acometida a tensión nominal de la
                                red y la carga máxima que soporta la protección de sobrecorriente de la acometida es la adecuada.</td>    
                            <td class="centrado"><input type="radio" value="a" id="g1.3"  name="g1.3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.3"  name="g1.3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.3"   name="g1.3"></td>
                              <td class="centrado"><textarea   id="g1.3"   name="g1.3"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>1.4</td>
                            <td>Se efectua una adecuada coordinación de las protecciones eléctricas con la selectividad que garantice
                                al máximo la continuidad del servicio.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.4"  name="g1.4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.4"  name="g1.4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.4"   name="g1.4"></td>
                              <td class="centrado"><textarea   id="g1.4"   name="g1.4"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>1.5</td>
                            <td>Se entrega un estudio de coordinación de aislamiento que contemple el uso de
                                protecciones de sobretensión en cascada en los circuitos más críticos para garantizar 
                                la continuidad de servicio ante eventos de sobretensiones transitorias generadas por 
                                descargas atmosféricas o por maniobras en la red.?</td>     
                             <td class="centrado"><input type="radio" value="a" id="g1.5"  name="g1.5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.5"  name="g1.5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.5"   name="g1.5"></td>
                              <td class="centrado"><textarea   id="g1.5"   name="g1.5"></textarea> </td> 
                        <tr >
                            <td>1.6</td>
                            <td>La capacidad instalable en KVA que puede soportar la acometida a tensión nominal de la red 
                                y la carga máxima que soporta la protección de sobrecorriente de la acometida es la adecuada.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.6"  name="g1.6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.6"  name="g1.6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.6"   name="g1.6"></td>
                              <td class="centrado"><textarea   id="g1.6"   name="g1.6"></textarea> </td>            
                        </tr>
                        <tr >
                            <td>1.7</td>
                            <td>Se dispone de planos o diagramas que  muestren información actualizada del sistema eléctrico? Se 
                                encuentra esta información siempre disponible para la operación, mantenimiento o requerimiento de
                                la autoridad competente?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.7"  name="g1.7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.7"  name="g1.7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.7"   name="g1.7"></td>
                              <td class="centrado"><textarea   id="g1.7"   name="g1.7"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>1.8</td>
                            <td>Los equiipos  instalados en ambientes peligros están marcado para mostrar la temperatura de 
                                operación o rango de temperatura</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.8"  name="g1.8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.8"  name="g1.8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.8"   name="g1.8"></td>
                              <td class="centrado"><textarea   id="g1.8"   name="g1.8"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>1.9</td>
                            <td>Los equipos deben estar construidos e instalados de manera que garanticen un funcionamiento seguro en
                               condiciones adecuadas de uso y mantenimiento.</td>  
                            <td class="centrado"><input type="radio" value="a" id="g1.9"  name="g1.9"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.9"  name="g1.9"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.9"   name="g1.9"></td>
                              <td class="centrado"><textarea   id="g1.9"   name="g1.9"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>1.10</td>
                            <td>Las estaciones de servicio que suministran gasolina y gas natural vehicular,
                                de la industria petroquímica, plantas de gas natural, refinerías y otras indicadas 
                                en la norma NTC 2050, Capítulo 5,  deben contar con los planos de clasificación de áreas, 
                                disponibles y vigentes, elaborados y firmados por un Ingeniero experto en áreas clasificadas y procesos</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.10"  name="g1.10"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.10"  name="g1.10"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.10"   name="g1.10"></td>
                              <td class="centrado"><textarea   id="g1.10"   name="g1.10"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>1.11</td>
                            <td>Se debe evitar que estén presentes materiales inflamables (gas, vapor, niebla o polvo)
                                y aire (oxigeno) en condiciones y cantidades apropiadas para producir una mezcla explosiva. 
                                Si no se puede garantizar esta condición, se deben tomar acciones especiales para controlar 
                                la energía de las fuentes de ignición.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.11"  name="g1.11"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.11"  name="g1.11"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.11"   name="g1.11"></td>
                              <td class="centrado"><textarea   id="g1.11"   name="g1.11"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>1.12</td>
                            <td>Los equipos eléctricos instalados en áreas peligrosas deben estar aprobados para los
                                parámetros de la clasificación del área correspondiente, estar rotulados y cumplir con 
                                los requisitos de una norma internacional, de reconocimiento internacional o NTC para el producto y uso.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g12"  name="g1.12"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.12"  name="g1.12"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.12"   name="g.12"></td>
                              <td class="centrado"><textarea   id="g1.12"   name="g1.12"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>13</td>
                            <td>Se aplican técnica para controlar el riesgo en áreas peligrosas?</td>     
                           <td class="centrado"><input type="radio" value="a" id="g1.13"  name="g.13"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.13"  name="g1.13"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.13"   name="g1.13"></td>
                              <td class="centrado"><textarea   id="g1.13"   name="g1.13"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>1.14</td>
                            <td>El equipo eléctrico debe seleccionarse de tal modo que se asegure, que la Clase Térmica 
                                indicada en los equipos, no exceda la temperatura de ignición de la sustancia explosiva existente en el sitio donde está instalado</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.14"  name="g1.14"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.14"  name="g1.14"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.14"   name="g1.14"></td>
                              <td class="centrado"><textarea   id="g1.14"   name="g1.14"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>1.15</td>
                            <td>Las conexiones equipotenciales se deben hacer mediante accesorios u otros medios adecuados para ese propósito</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.15"  name="g1.15"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.15"  name="g1.15"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.15"   name="g1.15"></td>
                              <td class="centrado"><textarea   id="g1.15"   name="g1.15"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>1.16</td>
                            <td>Los productos eléctricos seleccionados para operar en un ambiente clasificado como peligroso, 
                                deben estar diseñados y manufacturados para un uso seguro, con la adecuada instalación y
                                mantenimiento y deben demostrar tal condición mediante un certificado de producto, donde señale
                                la aplicación para la cual está certificado y la norma que le aplica</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.16"  name="g1.16"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.16"  name="g1.16"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.16"   name="g1.16"></td>
                              <td class="centrado"><textarea   id="g1.16"   name="g1.16"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>1.17</td>
                            <td>En la selección de los equipos, estos deben ser aprobados no solo para la Clase, 
                                División (o Zona), Grupo y Clasificación (Código) de Temperatura del lugar, sino también con
                                base en las propiedades explosivas o combustibles del, gas, vapor, polvos, fibras o partículas que están presentes.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g17"  name="g17"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g17"  name="g17"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g17"   name="g17"></td>
                              <td class="centrado"><textarea   id="g17"   name="g17"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>1.18</td>
                            <td>En los equipos a prueba de explosión, las cubiertas de estos equipos deben contener y prevenir 
                                la propagación de la llama hacia afuera, a través de las juntas o aberturas, para evitar que las
                                mezclas de vapores alrededor se incendien</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.18"  name="g1.18"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.18"  name="g1.18"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.18"   name="g1.18"></td>
                              <td class="centrado"><textarea   id="g1.18"   name="g1.18"></textarea> </td>                    
                        </tr>
                        <tr >
                            <td>1.19</td>
                            <td>En los equipos a prueba de explosión, las cubiertas deben ser suficientemente fuertes
                                para resistir, sin rotura o seria deformación, la presión interna de la ignición</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.19"  name="g1.19"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.19"  name="g1.19"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.19"   name="g1.19"></td>
                            <td class="centrado"><textarea   id="g1.19"   name="g1.19"></textarea> </td>
                        </tr>
                        <tr>
                            <td>1.20</td>
                            <td>El equipo eléctrico debe seleccionarse de tal modo que se asegure, que la Clase Térmica 
                                indicada en los equipos, no exceda la temperatura de ignición de la sustancia explosiva 
                                existente en el sitio donde está instalado.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.20"  name="g1.20"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.20"  name="g1.20"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.20"   name="g1.20"></td>
                            <td class="centrado"><textarea   id="g1.20"   name="g1.20"></textarea> </td>
                        </tr>
                        <tr>
                            <td>1.21</td>
                            <td>Los medios para conexiones equipotenciales se deben aplicar a todas las canalizaciones,
                                accesorios, cajas, armarios, etc. involucrados entre los lugares Clase I, II o III y el 
                                punto de puesta a tierra del equipo de acometida o de un sistema derivado independiente</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.21"  name="g1.21"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.21"  name="g1.21"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.21"   name="g1.21"></td>
                            <td class="centrado"><textarea   id="g1.21"   name="g1.21"></textarea> </td>
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
                            <th rowspan="2">2</th>
                            <th rowspan="2">ILUMINACION DE SEGURIDAD</th>
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
                        
                         <tr>
                            <td>2.1</td>
                            <td>La instalación eléctrica y los equipos asociados garantizan el suministro ininterrumpido para
                                iluminación en sitios donde la falta de ésta pueda originar riesgos para la vida de las personas, tal como en áreas críticas, salidas de emergencia o rutas de evacuación.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.1"  name="g2.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.1"  name="g2.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.1"   name="g2.1"></td>
                            <td class="centrado"><textarea   id="g2.1"   name="g.1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>2.2</td>
                            <td>Se asegura que no se utilicen lámparas de descarga con encendido retardado en circuitos de
                                iluminación de emergencia</td> 
                            <td class="centrado"><input type="radio" value="a" id="g2.2"  name="g2.2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.2" name="g2.2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.2" name="g2.2"></td>
                              <td class="centrado"><textarea   id="g2.2"   name="g2.2"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>2.3</td>
                            <td>El sistema de alumbrado de emergencia equipados con grupos de baterías garantizan
                                su funcionamiento por lo menos durante los 60 minutos después de que se interrumpa el servicio eléctrico normal.</td>    
                            <td class="centrado"><input type="radio" value="a" id="g2.3"  name="g2.3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.3"  name="g2.3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.3"   name="g.3"></td>
                              <td class="centrado"><textarea   id="g2.3"   name="g2.3"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>2.4</td>
                            <td>Se garantiza una iluminancia horizontal mínima de 5 luxes a la altura del plano de uso
                                en los lugares en los que estén situados los equipos de emergencia,  las instalaciones 
                                de protección contra incendios de utilización manual y los tableros de distribución del alumbrado?</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.4"  name="g2.4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.4"  name="g2.4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.4"   name="g.4"></td>
                              <td class="centrado"><textarea   id="g2.4"   name="g2.4"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>2.5</td>
                            <td>Se garantiza que las rutas de evacuación están claramente visibles, señalizadas e iluminadas con
                                un sistema autónomo con batería, con un mínimo de: 5 Lux y 40% de uniformidad y un máximo del 20%
                                de deslumbramiento, aún en condiciones de humo o plena oscuridad.</td>     
                             <td class="centrado"><input type="radio" value="a" id="g2.5"  name="g2.5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.5"  name="g2.5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.5"   name="g2.5"></td>
                              <td class="centrado"><textarea   id="g2.5"   name="g2.5"></textarea> </td> 
                        <tr >
                            <td>2.6</td>
                            <td>La hermeticidad de las luminarias es mayor a IP20 para interiores e IP65 para exteriores. </td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.6"  name="g2.6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.6"  name="g2.6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.6"   name="g2.6"></td>
                              <td class="centrado"><textarea   id="g2.6"   name="g2.6"></textarea> </td>            
                        </tr>
                        <tr >
                            <td>2.7</td>
                            <td>Las luminarias son capaces de resistir la combustión a 70°C de temperatura ambiente, al menos en la mitad de su autonomía declarada.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.7"  name="g2.7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.7"  name="g2.7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.7"   name="g2.7"></td>
                              <td class="centrado"><textarea   id="g2.7"   name="g2.7"></textarea> </td>                   
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
                            <th rowspan="2">3</th>
                            <th rowspan="2">LUGARES CLASE 1</th>
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
                        <tr>
                            <td></td>
                            <td>Clase 1, Grupo A: atmósferas que contienen acetileno.</td>
                            <th colspan="3"></th>
                            <th rowspan="1"></th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Clase 1, Grupo B: atmósferas que contienen hidrogeno o gases como butadieno, óxido de etileno, óxido de propileno y acroleína.</td>
                             <th colspan="3"></th>
                            <th rowspan="1"></th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Clase 1, Grupo C: atmósferas con gases como éter etílico, etileno u otros gases o vapores de riesgo equivalentes.</td>
                            <th colspan="3"></th>
                            <th rowspan="1"></th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Clase 1, Grupo D: atmósferas con gases como acetona, amoniaco, benceno, butano, ciclopropano, etanol, gasolina, hexano,
                                metanol, metano, gas natural, nafta, propano o gases o vapores de riesgo equivalente.</td>
                            <th colspan="3"></th>
                            <th rowspan="1"></th>
                        </tr>
                        
                         <tr>
                            <td>3.1</td>
                            <td>Confirmar la clasificación de las áreas, incluidas la clase, división y grupo.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.1"  name="g3.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.1"  name="g3.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.1"   name="g3.1"></td>
                            <td class="centrado"><textarea   id="g3.1"   name="g3.1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>3.2</td>
                            <td>Verificar la conveniencia de los métodos de alambrado que se usan.</td> 
                            <td class="centrado"><input type="radio" value="a" id="g3.2"  name="g3.2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.2" name="g3.2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.2" name="g3.2"></td>
                              <td class="centrado"><textarea   id="g3.2"   name="g3.2"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>3.3</td>
                            <td>Verificar que los sellos estén ubicados en donde se requiere y que estén instalados y sellados apropiadamente.</td>    
                            <td class="centrado"><input type="radio" value="a" id="g3.3"  name="g3.3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.3"  name="g3.3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.3"   name="g3.3"></td>
                              <td class="centrado"><textarea   id="g3.3"   name="g3.3"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>3.4</td>
                            <td>Revisar la conveniencia de los materiales usados en las 
                                conexiones flexibles, tales como herrajes flexibles y cordones flexibles a prueba de explosión.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.4"  name="g3.4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.4"  name="g3.4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.4"   name="g3.4"></td>
                              <td class="centrado"><textarea   id="g3.4"   name="g3.4"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>3.5</td>
                            <td>Revisar la conveniencia de los tomacorrientes y los conectores de cordón flexible.</td>     
                             <td class="centrado"><input type="radio" value="a" id="g3.5"  name="g3.5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.5"  name="g3.5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.5"   name="g3.5"></td>
                              <td class="centrado"><textarea   id="3.5"   name="g3.5"></textarea> </td> 
                        <tr >
                            <td>3.6</td>
                            <td>Verificar que las temperaturas marcadas en los equipos no sean mayores que la temperatura de ignición de los gases o vapores involucrados.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.6"  name="g3.6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.6"  name="g3.6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.6"   name="g3.6"></td>
                              <td class="centrado"><textarea   id="g3.6"   name="g3.6"></textarea> </td>            
                        </tr>
                        <tr >
                            <td>3.7</td>
                            <td>Revisar las capacidades nominales apropiadas de equipos tales como motores, transformadores, dispositivos de sobre corriente, 
                                interruptores y controladores, accesorios de alumbrado, calentadores y artefactos.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.7"  name="g3.7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.7"  name="g3.7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.7"   name="g3.7"></td>
                              <td class="centrado"><textarea   id="g3.7"   name="g3.7"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>3.8</td>
                            <td>Revisar las trayectorias adecuadas de puestas a tierra y conexión equipotencial al medio de
                                desconexión de la edificación o sistema derivado independiente.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.8"  name="g3.8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.8"  name="g3.8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.8"   name="g3.8"></td>
                              <td class="centrado"><textarea   id="g3.8"   name="g3.8"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>3.9</td>
                            <td>Revisar los circuitos ramales multiconductores en el área clasificada.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g3.9"  name="g3.9"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3.9"  name="g3.9"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3.9"   name="g3.9"></td>
                              <td class="centrado"><textarea   id="g3.9"   name="g3.9"></textarea> </td>                   
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
                            <th rowspan="2">4</th>
                            <th rowspan="2">LUGARES CLASE 2</th>
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
                        <tr>
                            <td></td>
                            <td>Clase 2, Grupo E: atmósferas que contienen polvos metálicos combustibles, como los de aluminio, magnesio y sus aleaciones comerciales u otros polvos combustibles presentan riesgos similares con el uso de equpos eléctricos.</td>
                            <th colspan="3"></th>
                            <th rowspan="1"></th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Clase 2, Grupo F: atmósferas que contienen polvos combustibles como carbón mineral, carbón vegetal, negro de humo o polvos que estén sensibilizados por otros materiales y representan riesgos de explosión.</td>
                             <th colspan="3"></th>
                            <th rowspan="1"></th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Clase 2, Grupo G: atmósferas que contiene polvos combustibles como harina, cereales, aserrín de madera, aserrín de plástico y productos químicos.</td>
                            <th colspan="3"></th>
                            <th rowspan="1"></th>
                        </tr>
                       
                            <tr>
                            <td>4.1</td>
                            <td>Confirmar la clasificación de las áreas, incluidas la clase, división y grupo</td>     
                            <td class="centrado"><input type="radio" value="a" id="g4.1"  name="g4.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4.1"  name="g4.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g4.1"   name="g4.1"></td>
                            <td class="centrado"><textarea   id="g4.1"   name="g4.1"></textarea> </td>
                            </tr>
                            <tr>
                            <td>4.2</td>
                            <td>Verificar la conveniencia de los métodos de alambrado que se usan</td>     
                            <td class="centrado"><input type="radio" value="a" id="g4.2"  name="g4.2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4.2"  name="g4.2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g4.2"   name="g4.2"></td>
                            <td class="centrado"><textarea   id="g4.2"   name="g4.2"></textarea> </td>
                            </tr>
                            <tr>
                            <td>4.3</td>
                            <td>Verificar que los sellos estén ubicados en donde se requiere y que estén instalados y sellados apropiadamente</td>     
                            <td class="centrado"><input type="radio" value="a" id="g4.3"  name="g4.3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4.3"  name="g4.3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g4.3"   name="g4.3"></td>
                            <td class="centrado"><textarea   id="g4.3"   name="g4.3"></textarea> </td>
                            </tr>
                            <tr>
                            <td>4.4</td>
                            <td>Revisarla conveniencia de los materiales usados en las conexiones flexibles, tales como herrajes
                                flexibles y cordones flexibles, tomacorrientes a prueba de explosión</td>     
                            <td class="centrado"><input type="radio" value="a" id="g4.4"  name="g4.4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4.4"  name="g4.4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g4.4"   name="g4.4"></td>
                            <td class="centrado"><textarea   id="g4.4"   name="g4.4"></textarea> </td>
                            </tr>
                            <tr>
                            <td>4.5</td>
                            <td>Revisar la conveniencia de los tomacorrientes y los conectores de cordón flexible</td>     
                            <td class="centrado"><input type="radio" value="a" id="g4.5"  name="g4.5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4.5"  name="g4.5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g4.5"   name="g4.5"></td>
                            <td class="centrado"><textarea   id="g4.5"   name="g4.5"></textarea> </td>
                            </tr>
                            <tr>
                            <td>4.6</td>
                            <td>Verificar que las temperaturas marcadas en los equipos no sean mayores que la temperatura de ignición de los polvos involucrados</td>     
                            <td class="centrado"><input type="radio" value="a" id="g4.6"  name="g4.6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4.6"  name="g4.6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g4.6"   name="g4.6"></td>
                            <td class="centrado"><textarea   id="g4.6"   name="g4.6"></textarea> </td>
                            </tr>
                            <tr>
                            <td>4.7</td>
                            <td>Revisar las capacidades nominales apropiadas de equipos tales como motores, transformadores, dispositivos de sobre corriente,
                                interruptores y controladores, accesorios de alumbrado, calentadores y artefactos</td>     
                            <td class="centrado"><input type="radio" value="a" id="g4.7"  name="g4.7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4.7"  name="g4.7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g4.7"   name="g4.7"></td>
                            <td class="centrado"><textarea   id="g4.7"   name="g4.7"></textarea> </td>
                            </tr>
                            <tr>
                            <td>4.8</td>
                            <td>visar las trayectorias adecuadas de puestas a tierra y conexión equipotencial al medio de
                                desconexión de la edificación o sistema derivado independiente</td>     
                            <td class="centrado"><input type="radio" value="a" id="g4.8"  name="g4.8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4.8"  name="g4.8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g4.8"   name="g4.8"></td>
                            <td class="centrado"><textarea   id="g4.8"   name="g4.8"></textarea> </td>
                            </tr>
                            <tr>
                            <td>4.9</td>
                            <td>Revisar los circuitos ramales multiconductores en el área clasificada</td>     
                            <td class="centrado"><input type="radio" value="a" id="g4.9"  name="g4.9"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4.9"  name="g4.9"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g4.9"   name="g4.9"></td>
                            <td class="centrado"><textarea   id="g4.9"   name="g4.9"></textarea> </td>
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
                            <th rowspan="2">5</th>
                            <th rowspan="2">LUGARES CLASE 3</th>
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
                        <tr>
                            <td></td>
                            <td>Clase 3: lugares con presencia de fibras combustibles como rayón, algodón, cáñamo, vestidos, madera, etc.</td>
                            <th colspan="3"></th>
                            <th rowspan="1"></th>
                        </tr>
                        <tr >
                            <td>5.1</td>
                            <td>Revisar las capacidades nominales apropiadas de equipos tales como motores, transformadores, dispositivos de sobre 
                                corriente, interruptores y controladores, accesorios de alumbrado, calentadores y artefactos</td>     
                            <td class="centrado"><input type="radio" value="a" id="g5.1"  name="g5.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g5.1"  name="g5.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g5.1"   name="g5.1"></td>
                              <td class="centrado"><textarea   id="g5.1"   name="g5.1"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>5.2</td>
                            <td>Revisar las trayectorias adecuadas de puestas a tierra y conexión equipotencial al medio
                                de desconexión de la edificación o sistema derivado independiente</td>     
                            <td class="centrado"><input type="radio" value="a" id="g5.2"  name="g5.2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g5.2"  name="g5.2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g5.2"   name="g5.2"></td>
                              <td class="centrado"><textarea   id="g5.2"   name="g5.2"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>5.3</td>
                            <td>Revisar las instalaciones de grúas, polipastos y cargadores de baterías en cuanto a su ubicación e instalación adecuadas</td>     
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
                            <th rowspan="2">6</th>
                            <th rowspan="2">GARAJES COMERCIALES</th>
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
                            <td>6.1</td>
                            <td>Confirmar la aplicación del articulo 511</td>     
                            <td class="centrado"><input type="radio" value="a" id="g6.1"  name="g6.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6.1"  name="g6.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g6.1"   name="g6.1"></td>
                              <td class="centrado"><textarea   id="g6.1"   name="g6.1"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>6.2</td>
                            <td>Identificar la extensión y división de las áreas clase I</td>     
                            <td class="centrado"><input type="radio" value="a" id="g6.2"  name="g6.2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6.2"  name="g6.2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g6.2"   name="g6.2"></td>
                              <td class="centrado"><textarea   id="g6.2"   name="g6.2"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>6.3</td>
                            <td>Verificar que se usen métodos de alambrado adecuados dentro de las clases I y debajo de ellas</td>     
                            <td class="centrado"><input type="radio" value="a" id="g6.3"  name="g6.3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6.3"  name="g6.3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g6.3"   name="g6.3"></td>
                              <td class="centrado"><textarea   id="g6.3"   name="g6.3"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>6.4</td>
                            <td>Verificar que los sellos se estén localizados, instalados y sellados como se exige en la sección 501-5</td>     
                            <td class="centrado"><input type="radio" value="a" id="g6.4"  name="g6.4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6.4"  name="g6.4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g6.4"   name="g6.4"></td>
                              <td class="centrado"><textarea   id="g6.4"   name="g6.4"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>6.5</td>
                            <td>Verificar que se usen equipos y métodos de alambrado adecuados cuando están instalados sobre áreas de clase I</td>     
                            <td class="centrado"><input type="radio" value="a" id="g6.5"  name="g6.5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6.5"  name="g6.5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g6.5"   name="g6.5"></td>
                              <td class="centrado"><textarea   id="g6.5"   name="g6.5"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>6.6</td>
                            <td>Verificar que los tomacorrientes tengan protección con GFCI cuando se exija</td>     
                            <td class="centrado"><input type="radio" value="a" id="g6.6"  name="g6.6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6.6"  name="g6.6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g6.6"   name="g6.6"></td>
                              <td class="centrado"><textarea   id="g6.6"   name="g6.6"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>6.7</td>
                            <td>Verificar que los cargadores de baterías no estén localizados en áreas clasificadas</td>     
                            <td class="centrado"><input type="radio" value="a" id="g6.7"  name="g6.7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6.7"  name="g6.7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g6.7"   name="g6.7"></td>
                              <td class="centrado"><textarea   id="g6.7"   name="g6.7"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>6.8</td>
                            <td>Verificar que los conectores para equipo de carga de vehículos eléctricos no estén localizados en lugares clase I</td>     
                            <td class="centrado"><input type="radio" value="a" id="g6.8"  name="g6.8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6.8"  name="g6.8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g6.8"   name="g6.8"></td>
                              <td class="centrado"><textarea   id="g6.8"   name="g6.8"></textarea> </td>                   
                           </tr>
                       </tbody>
                </table> 
              </div>  <!--fin tablaa 6 -->
              
                <!--inicio tabla 7 -->  
            <div id="preguntas" class="margen col-xs-12">
                <table border="1" class=" tam-tabla" >
                    <thead>
                        <tr>
                            <th rowspan="2">7</th>
                            <th rowspan="2">HANGARES</th>
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
                            <td>7.1</td>
                            <td>Confirmar la aplicación del articulo 513</td>     
                            <td class="centrado"><input type="radio" value="a" id="g7.1"  name="g7.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7.1"  name="g7.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7.1"   name="g7.1"></td>
                              <td class="centrado"><textarea   id="g7.1"   name="g7.1"></textarea> </td>                   
                           </tr>
                            <tr >
                            <td>7.2</td>
                            <td>Identificar la extensión y división de las áreas clase i</td>     
                            <td class="centrado"><input type="radio" value="a" id="g7.2"  name="g7.2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7.2"  name="g7.2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7.2"   name="g7.2"></td>
                              <td class="centrado"><textarea   id="g7.2"   name="g7.2"></textarea> </td>                   
                           </tr>
                            <tr >
                            <td>7.3</td>
                            <td>Verificar que se usen métodos de alambrado adecuados dentro de las clases i y debajo de ellas</td>     
                            <td class="centrado"><input type="radio" value="a" id="g7.3"  name="g7.3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7.3"  name="g7.3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7.3"   name="g7.3"></td>
                              <td class="centrado"><textarea   id="g7.3"   name="g7.3"></textarea> </td>                   
                           </tr>
                            <tr >
                            <td>7.4</td>
                            <td>Verificar que se usen equipos y métodos de alambrado adecuados en las áreas no clasificadas del hangar</td>     
                            <td class="centrado"><input type="radio" value="a" id="g7.4"  name="g7.4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7.4"  name="g7.4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7.4"   name="gv"></td>
                              <td class="centrado"><textarea   id="g7.4"   name="g7.4"></textarea> </td>                   
                           </tr>
                            <tr >
                            <td>7.5</td>
                            <td>Verificar que los equipos usados en los andamios, plataformas y muelles sean apropiados</td>     
                            <td class="centrado"><input type="radio" value="a" id="g7.5"  name="g7.5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7.5"  name="g7.5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7.5"   name="g7.5"></td>
                              <td class="centrado"><textarea   id="g7.5"   name="g7.5"></textarea> </td>                   
                           </tr>
                            <tr >
                            <td>7.6</td>
                            <td>Verificar que los sellos están localizados, instalados y sellados de acuerdo a la sección 501-5</td>     
                            <td class="centrado"><input type="radio" value="a" id="g7.6"  name="g7.6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7.6"  name="g7.6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7.6"   name="g7.6"></td>
                              <td class="centrado"><textarea   id="g7.6"   name="g7.6"></textarea> </td>                   
                           </tr>
                            <tr >
                            <td>7.7</td>
                            <td>Verificar que los cargadores de baterías no estén localizados en áreas clasificadas</td>     
                            <td class="centrado"><input type="radio" value="a" id="g7.7"  name="g7.7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7.7"  name="g7.7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7.7"   name="g7.7"></td>
                              <td class="centrado"><textarea   id="g7.7"   name="g7.7"></textarea> </td>                   
                           </tr>
                            <tr >
                            <td>7.8</td>
                            <td>Verificar que las fuentes de alimentación externas y los equipos móviles estén localizados e instalados apropiadamente</td>     
                            <td class="centrado"><input type="radio" value="a" id="g7.8"  name="g7.8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7.8"  name="g7.8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7.8"   name="g7.8"></td>
                              <td class="centrado"><textarea   id="g7.8"   name="g7.8"></textarea> </td>                   
                           </tr>
                           </tbody>
                </table> 
              </div>  <!--fin tablaa 7 -->
              
              <!--inicio tabla 8 -->  
            <div id="preguntas" class="margen col-xs-12">
                <table border="1" class=" tam-tabla" >
                    <thead>
                        <tr>
                            <th rowspan="2">8</th>
                            <th rowspan="2">ESTACIONES DE SERVICIO</th>
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
                            <td>8.1</td>
                            <td>Confirmar la aplicación del articulo 514</td>     
                            <td class="centrado"><input type="radio" value="a" id="g8.1"  name="g8.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g8.1"  name="g8.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g8.1"   name="g8.1"></td>
                              <td class="centrado"><textarea   id="g8.1"   name="g8.1"></textarea> </td>                   
                           </tr>
                            <tr >
                            <td>8.2</td>
                            <td>Identificar la extensión y división de las áreas clase i</td>     
                            <td class="centrado"><input type="radio" value="a" id="g8.2"  name="g8.2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g8.2"  name="g8.2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g8.2"   name="g8.2"></td>
                              <td class="centrado"><textarea   id="g8.2"   name="g8.2"></textarea> </td>                   
                           </tr>
                            <tr >
                            <td>8.3</td>
                            <td>Verificar que se usen métodos de alambrado adecuados dentro de las clases i y debajo de ellas</td>     
                            <td class="centrado"><input type="radio" value="a" id="g8.3"  name="g8.3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g8.3"  name="g8.3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g8.3"   name="g8.3"></td>
                              <td class="centrado"><textarea   id="g8.3"   name="g8.3"></textarea> </td>                   
                           </tr>
                            <tr >
                            <td>8.4</td>
                            <td>Verificar que dentro y debajo de las áreas clase i se usan  equipos y métodos de alambrado adecuados</td>     
                            <td class="centrado"><input type="radio" value="a" id="g8.4"  name="g8.4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g8.4"  name="g8.4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g8.4"   name="g8.4"></td>
                              <td class="centrado"><textarea   id="g8.4"   name="g8.4"></textarea> </td>                   
                           </tr>
                            <tr >
                            <td>8.5</td>
                            <td>Verificar que haya medios de desconexión del circuito y de emergencia y que desconecten todos los conductores del circuito, incluido cualquier conductor puesto a tierra</td>     
                            <td class="centrado"><input type="radio" value="a" id="g8.5"  name="g8.5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g8.5"  name="g8.5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g8.5"   name="g8.5"></td>
                              <td class="centrado"><textarea   id="g8.5"   name="g8.5"></textarea> </td>                   
                           </tr>
                            <tr >
                            <td>8.6</td>
                            <td>Verificar que los sellos están localizados, instalados y sellados de acuerdo a la sección 501-5</td>     
                            <td class="centrado"><input type="radio" value="a" id="g8.6"  name="g8.6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g8.6"  name="g8.6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g8.6"   name="g8.6"></td>
                              <td class="centrado"><textarea   id="g8.6"   name="g8.6"></textarea> </td>                   
                           </tr>
                            <tr >
                            <td>8.7</td>
                            <td>Verificar que haya medios para desconectar todas las fuentes de tensión, incluidas las tensiones de retroalimentación</td>     
                            <td class="centrado"><input type="radio" value="a" id="g8.7"  name="g8.7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g8.7"  name="g8.7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g8.7"   name="g8.7"></td>
                              <td class="centrado"><textarea   id="g8.7"   name="g8.7"></textarea> </td>                   
                        </tbody>
                </table> 
              </div>  <!--fin tablaa 8 -->
              
                            
              <!--inicio tabla 9 -->  
            <div id="preguntas" class="margen col-xs-12">
                <table border="1" class=" tam-tabla" >
                    <thead>
                        <tr>
                            <th rowspan="2">9</th>
                            <th rowspan="2">ALMACENAMIENTO A GRANEL</th>
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
                            <td>9.1</td>
                            <td>Confirmar la aplicación del articulo 515</td>     
                            <td class="centrado"><input type="radio" value="a" id="g9.1"  name="g9.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g9.1"  name="g9.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g9.1"   name="g9.1"></td>
                              <td class="centrado"><textarea   id="g9.1"   name="g9.1"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>9.2</td>
                            <td>Identificar la extensión y división de las áreas clase i</td>     
                            <td class="centrado"><input type="radio" value="a" id="g9.2"  name="g9.2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g9.2"  name="g9.2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g9.2"   name="g9.2"></td>
                              <td class="centrado"><textarea   id="g9.2"   name="g9.2"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>9.3</td>
                            <td>Verificar que se usen métodos de alambrado adecuados dentro de las clases i y debajo de ellas</td>     
                            <td class="centrado"><input type="radio" value="a" id="g9.3"  name="g9.3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g9.3"  name="g9.3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g9.3"   name="g9.3"></td>
                              <td class="centrado"><textarea   id="g9.3"   name="g9.3"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>9.4</td>
                            <td>Verificar que  se usan  equipos y métodos de alambrado adecuados para las áreas clasificadas</td>     
                            <td class="centrado"><input type="radio" value="a" id="g9.4"  name="g9.4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g9.4"  name="g9.4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g9.4"   name="g9.4"></td>
                              <td class="centrado"><textarea   id="g9.4"   name="g9.4"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>9.5</td>
                            <td>Verificar que los sellos están localizados, instalados y sellados de acuerdo a la sección 501-5</td>     
                            <td class="centrado"><input type="radio" value="a" id="g9.5"  name="g9.5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g9.5"  name="g9.5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g9.5"   name="g9.5"></td>
                              <td class="centrado"><textarea   id="g9.5"   name="g9.5"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>9.6</td>
                            <td>Verificar que las áreas de suministro de combustible cumplan con el articulo 514</td>     
                            <td class="centrado"><input type="radio" value="a" id="g9.6"  name="g9.6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g9.6"  name="g9.6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g9.6"   name="g9.6"></td>
                              <td class="centrado"><textarea   id="g9.6"   name="g9.6"></textarea> </td>                   
                           </tr>
                     </tbody>
                </table> 
              </div>  <!--fin tablaa 9 -->
              
                <!--inicio tabla 10 -->  
            <div id="preguntas" class="margen col-xs-12">
                <table border="1" class=" tam-tabla" >
                    <thead>
                        <tr>
                            <th rowspan="2">10</th>
                            <th rowspan="2">LISTA DE CHEQUEO ROCIADO, INMERSION Y RECUBRIMIENTO</th>
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
                            <td>10.1</td>
                            <td>Confirmar la aplicación del articulo 516</td>     
                            <td class="centrado"><input type="radio" value="a" id="g10.1"  name="g10.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10.1"  name="g10.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g10.1"   name="g10.1"></td>
                              <td class="centrado"><textarea   id="g10.1"   name="g10.1"></textarea> </td>                   
                           </tr>
                            <tr >
                            <td>10.2</td>
                            <td>Identificar la extensión y división de las áreas clase i y clases ii</td>     
                            <td class="centrado"><input type="radio" value="a" id="g10.2"  name="g10.2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10.2"  name="g10.2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g10.2"   name="g10.2"></td>
                              <td class="centrado"><textarea   id="g10.2"   name="g10.2"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>10.3</td>
                            <td>Verificar que se usen métodos de alambrado adecuados dentro de las clases i y debajo de ellas</td>     
                            <td class="centrado"><input type="radio" value="a" id="g10.3"  name="g10.3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10.3"  name="g10.3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g10.3"   name="g10.3"></td>
                              <td class="centrado"><textarea   id="g10.3"   name="g10.3"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>10.4</td>
                            <td>Identificar la extensión de cualquier área no clasificada debido al uso de enclavamientos y ventilación</td>     
                            <td class="centrado"><input type="radio" value="a" id="g10.4"  name="g10.4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10.4"  name="g10.4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g10.4"   name="g10.4"></td>
                              <td class="centrado"><textarea   id="g10.4"   name="g10.4"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>10.5</td>
                            <td>Verificar que los accesorios de alumbrado estén certificados adecuadamente para las áreas clasificadas
                                o que estén localizados detrás de paneles fijos y por fuera de las áreas clasificadas</td>     
                            <td class="centrado"><input type="radio" value="a" id="g10.5"  name="g10.5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10.5"  name="g10.5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g10.5"   name="g10.5"></td>
                              <td class="centrado"><textarea   id="g10.5"   name="g10.5"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>10.6</td>
                            <td>Verificar que se usan los equipos y métodos de alumbrado adecuados sobre las áreas clasificadas</td>     
                            <td class="centrado"><input type="radio" value="a" id="g10.6"  name="g10.6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10.6"  name="g10.6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g10.6"   name="g10.6"></td>
                              <td class="centrado"><textarea   id="g10.6"   name="g10.6"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>10.7</td>
                            <td>Verificar que los sellos estén localizados, instalados y sellados de acuerdo con la sección 501-5</td>     
                            <td class="centrado"><input type="radio" value="a" id="g10.7"  name="g10.7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10.7"  name="g10.7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g10.7"   name="g10.7"></td>
                              <td class="centrado"><textarea   id="g10.7"   name="g10.7"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>10.8</td>
                            <td>Revisar la instalación apropiada de los equipos de rociado electroestático</td>     
                            <td class="centrado"><input type="radio" value="a" id="g10.8"  name="g10.8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10.8"  name="g10.8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g10.8"   name="g10.8"></td>
                              <td class="centrado"><textarea   id="g10.8"   name="g10.8"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>10.9</td>
                            <td>Revisar la instalación apropiada de los equipos de recubrimiento de polvo</td>     
                            <td class="centrado"><input type="radio" value="a" id="g10.9"  name="g10.9"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g10.9"  name="g10.9"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g10.9"   name="g10.9"></td>
                              <td class="centrado"><textarea   id="g10.9"   name="g10.9"></textarea> </td>                   
                           </tr>
                     </tbody>
                </table> 
              </div>  <!--fin tablaa 10 -->
              
                <!--inicio tabla ASPECTOS GENERALES -->  
            <div id="preguntas" class="margen col-xs-12">
                <table border="1" class=" tam-tabla" >
                    <thead>
                        <tr>
                            <th rowspan="2">2</th>
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
                        <tr>
                            <td>2.1</td>
                            <td>Transformadores y condensadores.(CLASES: 1,2,3)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.1"  name="g2.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.1"  name="g2.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.1"   name="g2.1"></td>
                            <td class="centrado"><textarea   id="g2.1"   name="g.1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>2.2</td>
                            <td>Medidores, instrumentos y relés.(CLASES: 1,2)</td> 
                            <td class="centrado"><input type="radio" value="a" id="g2.2"  name="g2.2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.2" name="g2.2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.2" name="g2.2"></td>
                              <td class="centrado"><textarea   id="g2.2"   name="g2.2"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>2.3</td>
                            <td>Métodos de alambrado.(CLASES: 1,2,3)</td>    
                            <td class="centrado"><input type="radio" value="a" id="g2.3"  name="g2.3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.3"  name="g2.3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.3"   name="g.3"></td>
                              <td class="centrado"><textarea   id="g2.3"   name="g2.3"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>2.4</td>
                            <td>Sellamiento de sistemas de tuberías conduit y cables. (CLASES: 1,2)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.4"  name="g2.4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.4"  name="g2.4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.4"   name="g.4"></td>
                              <td class="centrado"><textarea   id="g2.4"   name="g2.4"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>2.5</td>
                            <td>Interruptores, interruptores automáticos, controladores de motores y fusibles.     (CLASES: 1,2,3)</td>     
                             <td class="centrado"><input type="radio" value="a" id="g2.5"  name="g2.5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.5"  name="g2.5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.5"   name="g2.5"></td>
                              <td class="centrado"><textarea   id="g2.5"   name="g2.5"></textarea> </td> 
                        <tr >
                            <td>2.6</td>
                            <td>Transformadores y resistencias de control. (CLASES: 1,2,3)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.6"  name="g2.6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.6"  name="g2.6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.6"   name="g2.6"></td>
                              <td class="centrado"><textarea   id="g2.6"   name="g2.6"></textarea> </td>            
                        </tr>
                        <tr >
                            <td>2.7</td>
                            <td>Motores y generadores. (CLASES: 1,2,3)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.7"  name="g2.7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.7"  name="g2.7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.7"   name="g2.7"></td>
                              <td class="centrado"><textarea   id="g2.7"   name="g2.7"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>2.8</td>
                            <td>Equipos de alumbrado.(CLASES: 1,2,3)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.8"  name="g2.8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.8"  name="g2.8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.8"   name="g2.8"></td>
                              <td class="centrado"><textarea   id="g2.8"   name="g2.8"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>2.9</td>
                            <td>Equipo eléctrico utilitario. (CLASES: 1,2,3)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.9"  name="g2.9"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.9"  name="g2.9"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.9"   name="g2.9"></td>
                              <td class="centrado"><textarea   id="g2.9"   name="g2.9"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>2.10</td>
                            <td>Cables y cordones flexibles. (CLASES: 1,2,3)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.10"  name="g2.10"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.10"  name="g2.10"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.10"   name="g2.10"></td>
                              <td class="centrado"><textarea   id="g2.10"   name="g2.10"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>2.11</td>
                            <td>Tomacorrientes y clavijas.(CLASES: 1,2,3)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.11"  name="g2.11"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.11"  name="g2.11"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.11"   name="g2.11"></td>
                              <td class="centrado"><textarea   id="g2.11"   name="g2.11"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>2.12</td>
                            <td>Aislamientos de los conductores. (CLASE: 1)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.12"  name="g2.12"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.12"  name="g2.12"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.12"   name="g2.12"></td>
                              <td class="centrado"><textarea   id="g2.12"   name="g2.12"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>2.13</td>
                            <td>Sistema de señalización, comunicación y control remoto.(CLASES: 1,2)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.13"  name="g2.13"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.13"  name="g2.13"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g"   name="g2.13"></td>
                              <td class="centrado"><textarea   id="g2.13"   name="g2.13"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>2.14</td>
                            <td>Puesta a tierra.(CLASES: 1,2,3)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.14"  name="g2.14"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.14"  name="g2.14"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.14"   name="g2.14"></td>
                              <td class="centrado"><textarea   id="g2.14"   name="g2.14"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>2.15</td>
                            <td>Protección contra impulsos de tensión.(CLASES: 1,2)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.15"  name="g2.15"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.15"  name="g2.15"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.15"   name="g2.15"></td>
                              <td class="centrado"><textarea   id="g2.15"   name="g2.15"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>2.16</td>
                            <td>Ductos de ventilación. (CLASES: 2,3)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.16"  name="g2.16"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.16"  name="g2.16"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.16"   name="g2.16"></td>
                              <td class="centrado"><textarea   id="g2.16"   name="g2.16"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>2.17</td>
                            <td>Sistemas de señalización, alarma, control remoto e intercomunicación local por altavoces. (CLASE: 3)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g"  name="g"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.17"  name="g2.17"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.17"   name="g2.17"></td>
                              <td class="centrado"><textarea   id="g2.17"   name="g2.17"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>2.18</td>
                            <td>Grúas, montacargas, elevadores eléctricos y equipos similares.(CLASE: 3)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.18"  name="g2.18"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.18"  name="g2.18"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.18"   name="g2.18"></td>
                              <td class="centrado"><textarea   id="g2.18"   name="g2.18"></textarea> </td>                   
                           </tr>
                           <tr >
                            <td>2.19</td>
                            <td>Cargadores de baterías. (CLASE: 3)</td>     
                            <td class="centrado"><input type="radio" value="a" id="g2.19"  name="g2.19"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2.19"  name="g2.19"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2.19"   name="g2.19"></td>
                              <td class="centrado"><textarea   id="g2.19"   name="g2.19"></textarea> </td>                   
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
            <P>CONCEPTO:</p>
            <td class="centrado"><input type="radio" value="anc" checked  id="g150"  name="g150"></td> APROBADO 
            <td class="centrado"><input type="radio" value="nc"   checked id="g1151"   name="g151"></td>NO APROBADO
            <br>
            <div class="col-md-12">
            </div>
            </form>
            
            <br>
            <tr> 
                <td>En lugares clasificados como peligrosos se utilizan clavijas y tomacorrientes aprobados y certificados para uso en estos ambientes. RETIE 20.10.2 literal g</td>
            <br>
                <td>Las clavijas y tomacorrientes utilizados en áreas clasificadas deben instalarse de tal forma que no se deteriore el grado de encerramiento requerido.RETIE 20.10.2 literal i</td>
            </tr>
            
            <br>
            <P>
                FIRMA INSPECTOR: _______________________________
            </P>
                <p> 
               <input type="submit" value="ENVIAR"/> 
            </div>
          

