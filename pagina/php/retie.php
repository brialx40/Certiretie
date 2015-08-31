<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script>
            $("#form1").submit(function (e) {
                var data = new FormData(this); //Creamos los datos a enviar con el formulario
                $.ajax({
                    url: './validar/RegistroCliente.php', //URL destino
                    data: data,
                    processData: false, //Evitamos que JQuery procese los datos, daría error
                    contentType: false, //No especificamos ningún tipo de dato
                    type: 'POST',
                    success: function (data) {
                        $("#resul1").html(data);
                    }
                });

                e.preventDefault();



                $('#form1').each(function () {
                    this.reset();
                });//Evitamos que se mande del formulario de forma convencional
            });

            $("#form2").submit(function (e) {
                var data = new FormData(this); //Creamos los datos a enviar con el formulario
                $.ajax({
                    url: './validar/RegistroProyecto.php', //URL destino
                    data: data,
                    processData: false, //Evitamos que JQuery procese los datos, daría error
                    contentType: false, //No especificamos ningún tipo de dato
                    type: 'POST',
                    success: function (data) {
                        $("#resul2").html(data);
                    }
                });

                e.preventDefault();



                $('#form2').each(function () {
                    this.reset();
                });//Evitamos que se mande del formulario de forma convencional
            });

            $("#form3").submit(function (e) {
                var data = new FormData(this); //Creamos los datos a enviar con el formulario
                $.ajax({
                    url: './validar/RegistroCotizacion.php', //URL destino
                    data: data,
                    processData: false, //Evitamos que JQuery procese los datos, daría error
                    contentType: false, //No especificamos ningún tipo de dato
                    type: 'POST',
                    success: function (data) {
                        $("#resul3").html(data);
                    }
                });

                e.preventDefault();



                $('#form3').each(function () {
                    this.reset();
                });//Evitamos que se mande del formulario de forma convencional
            });
        </script>

        <div class="box-section unik-section col-lg-12 ">
            <section class="content-header">
                <center><h2><b>COTIZACI&Oacute;N RETIE</b></h2></center>  
            </section>
            <div class="cuerpo">
                <h4> Las celdas que tienen <span class="importante">*</span> son obligatorias</h4>
            </div>


            <div class="container">
                <ul class="nav nav-tabs">
                    <li id="cli" class="active"><a href="#" >CLIENTE</a></li>
                    <li id="pro" class=""><a href="#" >PROYECTO</a></li>
                    <li id="inst" class=""><a href="#tipo" data-toggle="tab" >TIPO INSTALACI&Oacute;N</a></li>
                </ul>

                <div class="tab-content">
                    <!-- tab panel Cliente-->
                    <div class="tab-pane fade in active" id="inicio">
                        <form class="form-horizontal" role="form" enctype="multipart/form-data" name="form1" id="form1" method="post" >
                            <div class="cuerpo">
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Cedula<span class="importante">*</span></label>
                                    <div class="col-sm-6">
                                        <input name="num_documento" type="number" id="num_documento" placeholder="Digite el numero de su cedula(solo numeros)" class="form-control" required/>
                                        <i id="val1" class=""></i>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Nombre <span class="importante">*</span></label>
                                    <div class="col-sm-6">
                                        <input name="nombre" type="text" id="nombre"  class="form-control" placeholder="Digite su nombre completo" required />

                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Profesi&oacute;n <span class="importante">*</span></label>
                                    <div class="col-sm-6">
                                        <input name="profesion" type="text" placeholder="Digite su profesion o cargo" id="profesion" class="form-control"  required/>
                                    </div>        
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Raz&oacute;n Social <span class="importante">*</span></label>
                                    <div class="col-sm-6">
                                        <input name="rsocial" type="text" placeholder="Digite su razón social o la de la empresa" id="rsocial" class="form-control"  required/>
                                    </div>        
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Direcci&oacute;n <span class="importante">*</span></label>
                                    <div class="col-sm-6">
                                        <input name="direccion" type="text" id="direccion" placeholder="Digite la dirección de su casa"  class="form-control" required/>
                                    </div>
                                </div>                         
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Departamento <span class="importante">*</span></label>
                                    <div class="col-sm-6">
                                        <select name="departamento" id="departamento" class="form-control" onChange="cargaContenido(this.id, 'municipio')" required>
                                            <?php
                                            include_once ("../src/Facade/Facade.php");
                                            $dao = new Facade();
                                            echo $dao->listaDepartamentos();
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Municipio <span class="importante">*</span></label>
                                    <div class="col-sm-6">
                                        <select disabled="disabled" name="municipio" id="municipio" class="form-control"  required>
                                            <option value="0">Selecciona opci&oacute;n...</option>
                                        </select>
                                    </div>        
                                </div>  
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Tel. Fijo </label>
                                    <div class="col-sm-6">
                                        <input name="telefono_fijo" type="text" placeholder="Si no tiene numero fijo tiene digite N/A" id="telefono_fijo" class="form-control" required/>
                                    </div>        
                                </div>        
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Celular <span class="importante">*</span> </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="celular" id="celular" placeholder="Digite el numero de su celular"  class="form-control" required/>
                                    </div>        
                                </div>   
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label" align="left">Email <span class="importante">*</span></label>
                                    <div class="col-sm-6">
                                        <input name="email" type="email" id="email" placeholder="Digite su email para contactarlo" class="form-control" required/>
                                    </div>        
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-3">
                                        <input type="submit" class="btn btn-success" id="rgC" value="Registrar Cliente"/>                                        
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="#proyecto" data-toggle="tab">
                                            <button class="btn btn-success" onclick="cambiarTab('cli', 'pro')" name="Continuar" id="Continuar" disabled>Continuar</button>
                                        </a>
                                    </div>
                                    <div id="resul1"></div>
                                </div>
                            </div><!-- End Info Cliente -->
                        </form><!-- ./fomr1 -->
                    </div><!-- ./tab panel Cliente-->

                    <!-- tab panel Proyecto-->
                    <div class="tab-pane fade" id="proyecto">
                        <form class="form-horizontal" role="form" enctype="multipart/form-data" name="form2" id="form2" method="post" >
                            <div class="cuerpo">
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Nombre <span class="importante">*</span></label>
                                    <div class="col-sm-6">
                                        <input name="nombre_pro" type="text" id="nombre_pro" placeholder="Digite el nombre del proyecto"  class="form-control" required />
                                        <input type="hidden" name="cedula" id="cedula" value="0" />
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Direcci&oacute;n <span class="importante">*</span></label>
                                    <div class="col-sm-6">
                                        <input name="direccion_pro" type="text" id="direccion_pro" placeholder="Digite la direccion del proyecto" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Estrato <span class="importante">*</span> </label>
                                    <div class="col-sm-6">
                                        <input type="number" name="estrato" id="estrato" min="1" placeholder="Digite el estrato donde está el proyecto" class="form-control" />
                                    </div>        
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Departamento <span class="importante">*</span></label>
                                    <div class="col-sm-6">
                                        <select name="departamento2" id="departamento2" class="form-control" onChange="cargaContenido(this.id, 'municipio2')" required>
                                            <?php echo $dao->listaDepartamentos() ?>
                                        </select>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Municipio <span class="importante">*</span></label>
                                    <div class="col-sm-6">
                                        <select disabled="disabled" name="municipio2" id="municipio2" class="form-control" required>
                                            <option value="0">Selecciona opci&oacute;n...</option>
                                        </select>
                                    </div>        
                                </div>  
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Propietario <span class="importante">*</span></label>
                                    <div class="col-sm-6">
                                        <input name="propietario" type="text" placeholder="Digite el nombre del propietario" id="propietario" class="form-control" required/>
                                    </div>        
                                </div>        
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Diseñador <span class="importante">*</span> </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="disenador" id="disenador" placeholder="Digite el nombre del diseñador" class="form-control" required/>
                                    </div>        
                                </div>   
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Descripci&oacute;n del proyecto <span class="importante">*</span> </label>
                                    <div class="col-sm-6">
                                        <textarea rows="4" cols="50" placeholder="Digite el alcance o descripción del proyecto" name="alcance" id="alcance" class="form-control" required></textarea>                                    
                                    </div>        
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">tipo de proyecto<span class="importante">*</span> </label>
                                    <div class="col-sm-6">
                                        <select name="tipo_p" id="tipo_p" onchange="validarOption(this.id)" class="form-control" required>
                                            <option value="0">Selecciona opci&oacute;n...</option>
                                            <option value="1">Provisional</option>
                                            <option value="2">Ampliaci&oacute;n</option>
                                            <option value="3">Reforma</option>
                                            <option value="4">Nueva</option>
                                        </select>                                    
                                    </div>        
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Plano <span class="importante">*</span> </label>
                                    <div class="col-sm-6">
                                        <input type="file" name="plano" id="plano"  required/>
                                        <strong>Por Favor anexar el plano del proyecto.</strong>
                                    </div>        
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-3">
                                        <input type="submit" class="btn btn-success" id="rgP" value="Registrar Proyecto"/>                                        
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="#proyecto" data-toggle="tab">
                                            <button class="btn btn-success" onclick="cambiarTab('pro', 'inst')" name="Continuar2" id="Continuar2" disabled>Continuar</button>
                                        </a>
                                    </div>
                                    <div id="resul1"></div>
                                </div>
                            </div>
                        </form>
                    </div><!-- ./tab panel Proyecto-->

                    <!-- tab panel Cotizacion-->
                    <div class="tab-pane fade" id="tipo">
                        <form class="form-horizontal" role="form" enctype="multipart/form-data" name="form3" id="form3" method="post" >
                            <div class="cuerpo">
                                <div class="col-sm-3">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Uso Final&nbsp; <span class="caret"></span></button>
                                        <input type="hidden" name="proyectoid" id="proyectoid" value="0" />
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a id="usoresidencial" onclick="mostrarDivs(1)" >Residencial</a></li>
                                            <li><a id="usocomercial" onclick="mostrarDivs(2)">Comercial</a></li>
                                            <li><a id="usoindustrial" onclick="mostrarDivs(3)">Industrial</a></li>
                                        </ul>
                                    </div>    
                                </div>
                                <div class="col-sm-3"><input id="distribucion" type="button" onclick="mostrarDivs(4)" class="btn btn-default" value="Distribución"></div>                           
                                <div class="col-sm-3"><input id="transformacion" type="button" onclick="mostrarDivs(5)" class="btn btn-default" value="Transformación"></div>
                                <div class="col-sm-3"><input id="especial" type="button" onclick="mostrarDivs(6)" class="btn btn-default" value="Especiales"></div>
                                <br/><br/>
                            </div>

                            <!-- Codigo raro-->
                            <div id="adicional" style="display: none" >
                                <div class="cuerpo">
                                    <div class="form-group" align="center">
                                        <label class="control-label"> Áreas o sistemas eléctricos que hacen parte de la instalación eléctrica a inspeccionar</label>                                       
                                    </div> 
                                    <div class="form-group">                                    
                                        <label class="col-sm-2 control-label" align="left"><input type="checkbox" id="tras_adc" name="tras_adc" onclick="validarCheckAdc(this.id, 'kva_adc', 'cant_adc', '10', 'dis_adc', 'distancia_adc', 'tipo_adc')" value="OFF"/> KVA </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="kva_adc"  id="kva_adc" placeholder="KVA de transformadores" class="form-control" disabled>
                                        </div>        
                                        <label class="col-sm-2 control-label" align="left">Cantidad</label><div class="col-sm-4">
                                            <input type="number" name="cant_adc" id="cant_adc" placeholder="Nro Transformadores" class="form-control" disabled>
                                        </div></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" align="left"><input type="checkbox" onclick="validarCheckAdc(this.id, 'tipo_adc', 'distancia_adc', '9', 'tras_adc', 'kva_adc', 'cant_adc')" id="dis_adc" name="dis_adc" value="OFF"/> Tipo</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="tipo_adc" id="tipo_adc" disabled>
                                                <option value="0">Seleccione red</option>
                                                <option value="1">Media</option>
                                                <option value="2">Baja</option>
                                            </select>
                                        </div>
                                        <label class="col-sm-2 control-label" align="left">Distancia</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="distancia_adc" placeholder="Digite la distancia en M" id="distancia_adc" class="form-control" disabled>
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Información detallada de la instalación</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3"><input type="checkbox" id="peligrosa" onclick="validarCheck(this.id)" value="0">¿Existen áreas clasificadas (peligrosas)? </label>                                    
                                        <label class="col-sm-3"><input type="checkbox" id="asc" onclick="validarCheck(this.id)" value="0">¿Tiene ascensores, escaleras? </label>                                    
                                        <label class="col-sm-3"><input type="checkbox" id="apantalla" onclick="validarCheck(this.id)" value="0">¿Tiene apantallamiento? </label>                                    
                                        <label class="col-sm-3"><input type="checkbox" id="incendio" onclick="validarCheck(this.id)" value="0">¿Tiene Sistema de alarma contra incendio? </label>                                                                        
                                    </div>
                                </div>
                                <input type="hidden" id="instalacion_adc" value="0"/>
                            </div>
                            <!-- div residencial -->
                            <div id="residencial" style="display: none">
                                <div class="titulo"   align="center">
                                    <strong><h3>INSTALACI&Oacute;N RESIDENCIAL</h3></strong>
                                </div>
                                <div class="cuerpo" >
                                    <div class="form-group">
                                        <label  class="col-sm-3 control-label">Estrato <span class="importante">*</span> </label>
                                        <div class="col-sm-6">
                                            <select id="ubicacion1" onchange="validarOption(this.id)" class="form-control">
                                                <option value="0">Seleccione</option>
                                                <option value="1">Rural</option>
                                                <option value="2">Urbano</option>
                                            </select>
                                        </div>        
                                    </div>
                                    <div class="form-group">                                    
                                        <label  class="col-sm-3 control-label" align="left">Acometida <span class="importante">*</span> </label>
                                        <div class="col-sm-6">
                                            <input type="text" name="acometida1" id="acometida1" class="form-control" placeholder="Digite tipo acometida" />
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-3 control-label" align="left">Calibre <span class="importante">*</span> </label>
                                        <div class="col-sm-6">
                                            <input type="text" name="calibre1" id="calibre1" class="form-control" placeholder="Digite tipo calibre" />
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-3 control-label" align="left">Area <span class="importante">*</span> </label>
                                        <div class="col-sm-6">
                                            <input type="text" name="area1" id="area1" class="form-control" placeholder="Digite área en KM " />
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-3 control-label" align="left">Cantidad viviendas <span class="importante">*</span> </label>
                                        <div class="col-sm-6">
                                            <input type="number" name="cant1" id="cant1" min="1" class="form-control" placeholder="Cantidad de viviendas o apartamentos" />
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Seleccione :</label>                                    
                                        <label class="col-sm-4"><input type="checkbox" id="comunes1" onclick="validarCheck(this.id)" value="0"/>¿Tiene áreas comunes?</label>     
                                        <label class="col-sm-4"><input type="checkbox" id="piscina1" onclick="validarCheck(this.id)" value="0"/>¿Tiene Piscina?</label>                                                        
                                    </div>
                                </div>
                            </div>
                            <!-- div comercial -->
                            <div id="comercial" style="display: none">
                                <div class="titulo"   align="center">
                                    <strong><h3>INSTALACI&Oacute;N COMERCIAL</h3></strong>
                                </div>
                                <div class="cuerpo" >
                                    <div class="col-sm-6">
                                        <select id="ubicacion2" onchange="validarOption(this.id)" class="form-control">
                                            <option value="0">Seleccione</option>
                                            <option value="1">Rural</option>
                                            <option value="2">Urbano</option>
                                        </select>
                                    </div> 
                                    <div class="form-group">
                                        <label  class="col-sm-3 control-label" align="left">Acometida <span class="importante">*</span> </label>
                                        <div class="col-sm-6">
                                            <input type="text" name="acometida2" id="acometida2" placeholder="Digite tipo de la acometida" class="form-control" />
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-3 control-label" align="left">Calibre <span class="importante">*</span> </label>
                                        <div class="col-sm-6">
                                            <input type="text" name="calibre2" id="calibre2" placeholder="Digite el calibre" class="form-control" />
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-3 control-label" align="left">Area <span class="importante">*</span> </label>
                                        <div class="col-sm-6">
                                            <input type="text" name="area2" id="area2" placeholder="Digite el área en KM" class="form-control" />
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-3 control-label" align="left">Cantidad locales<span class="importante">*</span> </label>
                                        <div class="col-sm-6">
                                            <input type="number" name="cant2" id="cant2" placeholder="Digite la cantidad de locales" class="form-control" />
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3">Seleccione :</label>
                                        <div class="col-sm-6">
                                            <label class="col-sm-4"><input type="checkbox" id="comunes2" onclick="validarCheck(this.id)" value="0" />¿Tiene áreas comunes?</label>     
                                            <label class="col-sm-4"><input type="checkbox" id="piscina2" onclick="validarCheck(this.id)" value="0" />¿Tiene Piscina?</label>   
                                        </div>        
                                    </div>
                                </div>
                            </div>
                            <!-- div industrial -->
                            <div id="industrial" style="display: none">
                                <div class="titulo"   align="center">
                                    <strong><h3>INSTALACI&Oacute;N INDUSTRIAL</h3></strong>
                                </div>
                                <div class="cuerpo">
                                    <div class="form-group">
                                        <label  class="col-sm-3 control-label" align="left">Ubicaci&oacute;n <span class="importante">*</span> </label>
                                        <div class="col-sm-5">
                                            <select onchange="validarOption(this.id)" class="form-control" id="ubicacion3">
                                                <option value="0">Seleccione</option>
                                                <option value="1">Rural</option>
                                                <option value="2">Urbano</option>
                                            </select>
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-3 control-label" align="left">KVA <span class="importante">*</span> </label>
                                        <div class="col-sm-5">
                                            <input type="number" name="kva3" id="kva3" min="1" class="form-control" />
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-3 control-label" align="left">AREA <span class="importante">*</span> </label>
                                        <div class="col-sm-5">
                                            <input type="number" name="area3" min="1" id="area3" class="form-control" />
                                        </div>        
                                    </div>
                                </div>
                            </div>
                            <!-- div distribucion -->
                            <div id="dis" style="display: none">
                                <div class="titulo"   align="center">
                                    <strong><h3>INSTALACI&Oacute;N DISTRIBUCI&Oacute;N</h3></strong>
                                </div>
                                <div class="cuerpo" >
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label" align="left">Ubicaci&oacute;n <span class="importante">*</span> </label>
                                        <div class="col-sm-4">
                                            <select name="ubicacion4" onchange="validarOption(this.id)" class="form-control" id="ubicacion4">
                                                <option value="0">Seleccione</option>
                                                <option value="1">Rural</option>
                                                <option value="2">Urbano</option>
                                            </select>
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label" align="left">Tipo Red <span class="importante">*</span> </label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="tipo4" id="tipo4" onchange="validarOption(this.id)">
                                                <option value="0">Seleccione</option>
                                                <option value="1">Media</option>
                                                <option value="2">Baja</option>
                                            </select>
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label" align="left">Distancia <span class="importante">*</span> </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="distancia4" placeholder="Digite la distancia en M" id="distancia4" class="form-control" />
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label" align="left">Nro Estructuras <span class="importante">*</span> </label>
                                        <div class="col-sm-4">
                                            <input type="number" name="cant4" id="cant4" min="1" class="form-control" />
                                        </div>        
                                    </div>
                                </div>
                            </div>
                            <!-- div transformacion -->
                            <div id="trans" style="display: none">
                                <div class="titulo"   align="center">
                                    <strong><h3>INSTALACI&Oacute;N TRANSFORMACI&Oacute;N</h3></strong>
                                </div>
                                <div class="cuerpo" >
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label" align="left">Ubicaci&oacute;n <span class="importante">*</span> </label>
                                        <div class="col-sm-4">
                                            <select name="ubicacion5" onchange="validarOption(this.id)" class="form-control" id="ubicacion5">
                                                <option value="0">Seleccione</option>
                                                <option value="1">Rural</option>
                                                <option value="2">Urbano</option>
                                            </select>
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label" align="left">KVA <span class="importante">*</span> </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="kva5" id="kva5" class="form-control" />
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label" align="left">Nro transformadores <span class="importante">*</span> </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="cantidad5" id="cantidad5" class="form-control"/>
                                        </div>        
                                    </div>                                
                                </div>
                            </div>
                            <!-- div especiales -->
                            <div id="espe" style="display: none">
                                <div class="titulo"   align="center">
                                    <strong><h3>INSTALACI&Oacute;N ESPECIAL</h3></strong>
                                </div>
                                <div class="cuerpo" >
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label" align="left">Ubicaci&oacute;n <span class="importante">*</span> </label>
                                        <div class="col-sm-4">
                                            <select name="ubicacion6" onchange="validarOption(this.id)" class="form-control" id="ubicacion6">
                                                <option value="0">Seleccione</option>
                                                <option value="1">Rural</option>
                                                <option value="2">Urbano</option>
                                            </select>
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label" align="left">KVA <span class="importante">*</span> </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="kva4" id="area_com" class="form-control" />
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label" align="left">Area <span class="importante">*</span> </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="area4" id="cant_com" class="form-control" />
                                        </div>        
                                    </div>

                                </div>
                            </div>
                            <input type="hidden" name="instalacion" id="instalacion" value="0">
                            <br>
                            <div class="form-group">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4"><input type="submit" class="btn btn-success" value="REGISTRAR COTIZACIÓN"/> </div>
                            </div>
                            <div class="col-sm-12" id="resul">
                                
                            </div>
                        </form>
                    </div><!-- ./tab panel Cotizacion-->
                </div>        
            </div>

        </div>               

        <script src="./js/cambiarTabs.js"></script>

    </body>

</html>
