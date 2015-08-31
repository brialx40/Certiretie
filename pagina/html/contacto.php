<div class="box-section unik-section col-lg-12 ">
<section class="content-header">

    <center><h2><strong>CONTACTO</strong></h2></center>

</section>
<script>
    $('#contacto').submit(function (e) {
        validarForm();
        var data = new FormData(this); //Creamos los datos a enviar con el formulario
        $.ajax({
            url: './php/enviarMail.php', //URL destino
            data: data,
            processData: false, //Evitamos que JQuery procese los datos, daría error
            contentType: false, //No especificamos ningún tipo de dato
            type: 'POST',
            success: function (data) {
                $('#resul').html(data);
            }
        });

        e.preventDefault();
        $('#contacto').each(function () {
            this.reset();
        });//Evitamos que se mande del formulario de forma convencional
    });
    
</script>
<section class="content">
    <div class="row" >
        <div class="col-lg-12">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <form class="form-horizontal" role="form" enctype="multipart/form-data" name="form1" id="contacto" method="post" >
                    <div class="form-group">
                        <label for="inputEmail3" class="control-label">Nombre                         
                         <input name="nombre" type="text" id="nombre" placeholder="Digite su nombre" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="control-label">E-mail <span class="importante">*</span></label>                        
                        <input name="email" type="email" id="email" placeholder="Digite su Correo" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="control-label">Mensaje <span class="importante">*</span></label>
                        <textarea id="mensaje" name="mensaje" class="form-control" rows="3" placeholder="Escriba su mensaje aquí" required></textarea>
                    </div>                    
                    <div class="form-group">
                        <img src="../php/captcha.php"/>
                        <input name="code" type="text" id="code" placeholder="Digite el texto de la imagen" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <center><input type="submit" class="btn btn-success" value="Enviar Mensaje" /></center>
                    </div>
                    <div class="col-sm-12" id="resul">
                        
                    </div>

                </form>
            </div>
            <div class="col-lg-5">
                <h2>Contactenos</h2>

                <p>&nbsp;</p>
                <p>CÚCUTA:<br>
                    Nombre: CERTIRETIE LTDA<br>
                    NIT: 0900350939 – 6<br>
                    Gerente:  Laura Quiroga<br>
                    Dirección: Calle 1N 7E – 15 Barrio  Quinta Bosch<br>
                    Teléf.- Fax: 7 - 5743841&nbsp;<br>
                    Cel. 311 2655589<br>
                    Email:  certiretie@gmail.com<br>
                    ____________________________________<br>
                    &nbsp;<br>
                    NORTE Y ORIENTE DEL PAÍS:<br>
                    Ing. EDUARDO ESPINEL<br>
                    Calle 7 No. 33-28 Barrio Primavera<br>
                    Cel. 315 3814886<br>
                    Email:&nbsp; &nbsp;<a href="mailto:eduardo.espinel@certiretie.com">eduardo.espinel@certiretie.com</a><br>
                    <a href="mailto:auxiliar.comercial@certiretie.com">auxiliar.comercial@certiretie.com</a><br>
                    <a href="mailto:certiretie@gmail.com">certiretie@gmail.com</a>&nbsp;<br>
                    ____________________________________                    </p>
            </div>
            <div class="col-lg-1"></div>
        </div>


    </div>

</section>              

</div>

