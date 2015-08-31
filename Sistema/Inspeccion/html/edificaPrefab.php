<div class="col-md-12 fondo-blanco"> 
    <!-- Task Widget -->

    <br><br>
            <!-- inicio encabezado -->
            <div id="encabezado"  class="col-xs-12">

                <div class="logop col-xs-3">
                    <a href="#"><img src="images/photo.jpg"></a>
                </div>
                <div class="titulo col-xs-9">
                    <h3 class="negrita">EDIFICACIONES PREFABRICADAS</h3>
                    <div class="col-xs-12">

                        <p>FECHA:2014-08-01					
                            &nbsp;&nbsp;	
                            VERSION:1			
                            &nbsp;&nbsp;	
                            O/PS/R/01-25</p>
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
                    <br>TIPO DE INSTALACION:
                    <input type="text" id="instalacion" name="istalacion" />
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
                            <td>APLICACION:  Cualquier edificación de construcción cerrada, hecha o montada en una fábrica o 
                                en lugar distinto a donde vaya a estar instalada, o montada en el lugar donde vaya a estar 
                                instalada, pero que no sean casas prefabricadas, viviendas móviles, caravanas ni vehículos recreativos</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1.1"  name="g1.1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1.1"  name="g1.1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1.1"   name="g1.1"></td>
                            <td class="centrado"><textarea   id="g1.1"   name="g1.1"></textarea> </td>
                        </tr>
                           <tr >
                            <td>1</td>
                            <td>Se dispone de los medios para llevar los conductores de entrada de acometida desde el equipo
                                de acometida hasta su punto de conexión.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g1"  name="g1"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g1"  name="g1"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g1"   name="g1"></td>
                            <td class="centrado"><textarea   id="g1"   name="g1"></textarea> </td>
                        </tr>
                        <tr >
                            <td>2</td>
                            <td>Se utilizan métodos de alambrado en cable y canalizaciones destinado y  certificado para uso 
                                en edificaciones prefabricadas, con accesorios certificados e identificados también para su
                                uso en edificaciones prefabricadas </td> 
                            <td class="centrado"><input type="radio" value="a" id="g2"  name="g2"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g2" name="g2"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g2" name="g2"></td>
                              <td class="centrado"><textarea   id="g2"   name="g2"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>3</td>
                            <td>Los cables sujetos sólo en los armarios, cajas o accesorios tienen sección 
                                transversal de 5,25 mm2 (AWG 10) o menor y estén protegidos contra daños físicos</td>    
                            <td class="centrado"><input type="radio" value="a" id="g3"  name="g3"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g3"  name="g3"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g3"   name="g3"></td>
                              <td class="centrado"><textarea   id="g3"   name="g3"></textarea> </td>                 
                        </tr>
                        <tr >
                            <td>4</td>
                            <td>Las cajas menores de 1640 cm3 están diseñadas para montarlas en construcciones cerradas, y 
                                están sujetas con anclajes o abrazaderas de modo que constituyan un conjunto rígido.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g"  name="g4"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g4"  name="g4"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g4"   name="g4"></td>
                              <td class="centrado"><textarea   id="g4"   name="g4"></textarea> </td>                     
                        </tr>
                        <tr >
                            <td>5</td>
                            <td>Los tomacorrientes o interruptores con encerramiento y medios de montaje integrales están
                                ensayados, identificados y certificados según las normas aplicables</td>     
                             <td class="centrado"><input type="radio" value="a" id="g5"  name="g5"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g5"  name="g5"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g5"   name="g5"></td>
                              <td class="centrado"><textarea   id="g5"   name="g5"></textarea> </td> 
                        <tr >
                            <td>6</td>
                            <td>Los paneles prealambrados y los componentes de la edificación tienen los medios para su conexión 
                                equipotencial, o para esta conexión y puesta a tierra de todas las partes metálicas expuestas que se pudieran llegar a energizar</td>     
                            <td class="centrado"><input type="radio" value="a" id="g6"  name="g6"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g6"  name="g6"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g6"   name="g6"></td>
                              <td class="centrado"><textarea   id="g6"   name="g6"></textarea> </td>            
                        </tr>
                        <tr >
                            <td>7</td>
                            <td>Existen los  medios para llevar el conductor del electrodo de puesta a tierra desde el equipo de la acometida hasta el punto de conexión del electrodo.</td>     
                            <td class="centrado"><input type="radio" value="a" id="g7"  name="g7"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g7"  name="g7"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g7"   name="g7"></td>
                              <td class="centrado"><textarea   id="g7"   name="g7"></textarea> </td>                   
                        </tr>
                        <tr >
                            <td>8</td>
                            <td>Los accesorios y conectores son adecuados para el método de alambrado utilizado en cuanto a aislamiento, aumento de temperatura y soporte de corriente 
                                de falla y son capaces de soportar las vibraciones y pequeños movimientos relativos entre los distintos componentes de la edificación prefabricada</td>     
                            <td class="centrado"><input type="radio" value="a" id="g8"  name="g8"></td>
                            <td class="centrado"><input type="radio" value="anc" checked  id="g8"  name="g8"></td>  
                            <td class="centrado"><input type="radio" value="nc"   checked id="g8"   name="g8"></td>
                              <td class="centrado"><textarea   id="g8"   name="g8"></textarea> </td>                     
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
 


