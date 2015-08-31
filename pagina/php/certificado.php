<!DOCTYPE html>

<div class="box-section unik-section col-lg-12 ">
    <div class=" fondoimg fondoimgCertificado">
    <br>
    <br>
    <br>
    </div>
<center>
                <table width="80%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td width="11" rowspan="9"><br>
                            <td rowspan="9" valign="top">
        <script>
            $('#certificado').submit(function (e) {//               
                var data = new FormData(this); //Creamos los datos a enviar con el formulario
                $.ajax({
                    url: './php/validarCertificado.php', //URL destino
                    data: data,
                    processData: false, //Evitamos que JQuery procese los datos, daría error
                    contentType: false, //No especificamos ningún tipo de dato
                    type: 'POST',
                    success: function (data) {
                        $('#resul').html(data);
                    }
                });

                e.preventDefault();
                $('#certificado').each(function () {
                    this.reset();
                });//Evitamos que se mande del formulario de forma convencional

            });
        </script>
        <div class="col-md-3"></div>
        <!-- Buscar Section -->
        <div id='contenedor' class='box_round col-md-12'>
            <br/>
            <form class="form-horizontal" role="form" enctype="multipart/form-data" name="form1" id="certificado" method="post" >
                <div class="titulo">
                    <strong><h2>CERTIFICADOS</h2></strong>
                </div>
                <div class="cuerpo">
                    <div class="form-group">
                        <div class="col-sm-2"></div>
                        <label class="col-sm-2 control-label">Cedula <span class="importante">*</span></label>
                        <div class="col-sm-6">
                            <input name="cc" type="text" id="cc" placeholder="Digite el numero de su cedula" class="form-control" onkeydown="return validarNumeros(event)" required/>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12" >
                            <center><input type="submit" name="Submit" onclick="validartipo();" value="Buscar Certificado" class="btn btn-default"/></center>
                        </div> 
                    </div>                   
                </div>
            </form>
            <br/>
            <div class="col-sm-12" id="resul">
            </div>
        </div>
        <!-- End Buscar Section -->
        <div class="col-md-3"></div>
        <script src="../js/funciones.js"></script>
        <script src="../js/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="../js/jquery-ui-1.10.3.min.js" type="text/javascript"></script> 
                            </td></tr>
                    </tbody>
                </table>
            </center>
</div>