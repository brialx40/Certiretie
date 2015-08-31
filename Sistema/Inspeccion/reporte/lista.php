<html>
    <head>          
    </head>
    <body>
        <style>
            html {
                margin: 0;
            }
            body {
                font-family: "Times New Roman", serif;
                margin: 10mm 8mm 2mm 8mm;
            }

            td.check{
                border: #000 1px solid;

            }

            p.bordes{
                border: #000 1px solid;
            }


        </style>
        <table>
            <tbody>
                <tr>
                    <td rowspan="2"><img src="../images/photo.jpg"></td>
                    <td colspan="3" style="font-weight: bold;">DECLARACIÓN DE IMPARCIALIDAD, INDEPENDENCIA, CONFLICTOS DE INTERESES Y COMPROMISO DE CONFIDENCIALIDAD</td>
                </tr>
                <tr>
                    <td align="center">FECHA: 2014-03-01</td>
                    <td align="center">VERSION: 2</td>
                    <td align="center">O/PS/R/01-1</td>
                </tr>
                <tr>
                    <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">FECHA: <?php echo $_POST["fechar"] ?></td>                    
                    <td colspan="2" align="right">ORDEN SERVICIO N°: <?php echo $_POST["orden"]; ?></td>                    
                </tr>
                <tr>
                    <td colspan="4" >CIUDAD: <?php echo $_POST["ciudad"]; ?></td>
                </tr>
            </tbody>
        </table>

        <?php
        $diseno = "<img src='../images/nocheck.png'/>";
        $productor = "<img src='../images/nocheck.png'/>";
        $consultor = "<img src='../images/nocheck.png'/>";
        $asesor = "<img src='../images/nocheck.png'/>";
        $interventor = "<img src='../images/nocheck.png'/>";
        $asesor = "<img src='../images/nocheck.png'/>";
        $obra = "<img src='../images/nocheck.png'/>";
        $proveedor = "<img src='../images/nocheck.png'/>";
        $instalador = "<img src='../images/nocheck.png'/>";
        $comprador = "<img src='../images/nocheck.png'/>";
        $propietario = "<img src='../images/nocheck.png'/>";
        $usuario = "<img src='../images/nocheck.png'/>";
        $mante = "<img src='../images/nocheck.png'/>";
        $autor = "<img src='../images/nocheck.png'/>";
        $obser = "";

        if (isset($_POST["diseno"])) {
            $diseno = "<img src='../images/check.png'/>";
        }
        if (isset($_POST["productor"])) {
            $productor = "<img src='../images/check.png'/>";
        }
        if (isset($_POST["consultor"])) {
            $consultor = "<img src='../images/check.png'/>";
        }
        if (isset($_POST["asesor"])) {
            $asesor = "<img src='../images/check.png'/>";
        }
        if (isset($_POST["interventor"])) {
            $interventor = "<img src='../images/check.png'/>";
        }
        if (isset($_POST["obra"])) {
            $obra = "<img src='../images/check.png'/>";
        }
        if (isset($_POST["proveedor"])) {
            $proveedor = "<img src='../images/check.png'/>";
        }
        if (isset($_POST["instalador"])) {
            $instalador = "<img src='../images/check.png'/>";
        }
        if (isset($_POST["comprador"])) {
            $comprador = "<img src='../images/check.png'/>";
        }
        if (isset($_POST["propietario"])) {
            $propietario = "<img src='../images/check.png'/>";
        }
        if (isset($_POST["usuario"])) {
            $usuario = "<img src='../images/check.png'/>";
        }
        if (isset($_POST["mante"])) {
            $mante = "<img src='../images/check.png'/>";
        }
        if (isset($_POST["autor"])) {
            $autor = "<img src='../images/check.png'/>";
        }
        if (isset($_POST["obser"])) {
            $obser = $_POST["obser"];
        }
        ?>

        <div id="preguntas" class="margen col-xs-12">
            <div class="col-xs-12">
                <p align="justify">Se declara bajo gravedad de juramento que: <br>
                    1.   CERTIRETIE LTDA, su director técnico e inspectores involucrados en la inspección de la instalación eléctrica sujeta a esta orden de servicio cumple con los requisitos exigidos por el Reglamento Técnico de Instalaciones Eléctricas RETIE según resolución  número 90708 de Agosto 30 de 2013.
                    <br>
                    2.   CERTIRETIE LTDA, su director técnico e inspectores involucrados en la inspección de la instalación eléctrica sujeta a esta orden de servicio:
                    <br>
                    a. No estamos involucrados ni tenemos relación en ninguna de las siguientes actividades de la inspección como:
                </p>
            </div>

            <table>
                <tr>
                    <td class="check"><?php echo $diseno ?></td>
                    <td> DISEÑADOR </td>
                    <td class="check"><?php echo $productor ?></td>
                    <td> PRODUCTOR </td>
                </tr>

                <tr>
                    <td class="check"><?php echo $consultor ?></td>
                    <td> CONSULTOR </td>
                    <td class="check"><?php echo $asesor ?></td>
                    <td> ASESOR </td>
                </tr>

                <tr>
                    <td class="check"><?php echo $interventor ?></td>
                    <td> INTERVENTOR </td>
                    <td class="check"><?php echo $obra ?></td>
                    <td> RESPONSABLE DE LA OBRA </td>
                </tr>

                <tr>
                    <td class="check"><?php echo $proveedor ?></td>
                    <td> PROVEEDOR </td>
                    <td class="check"><?php echo $instalador ?></td>
                    <td> INSTALADOR </td>
                </tr>

                <tr>
                    <td class="check"><?php echo $comprador ?></td>
                    <td> COMPRADOR </td>
                    <td class="check"><?php echo $propietario ?></td>
                    <td> PROPIETARIO </td>
                </tr>

                <tr>
                    <td class="check"><?php echo $usuario ?></td>
                    <td colspan="3"> USUARIO </td>
                </tr>
                <tr>
                    <td class="check"><?php echo $mante ?></td>
                    <td colspan="3"> RESPONSABLE DE MANTENIMIENTO DE LAS INSTALACIONES </td>                    
                </tr>
                <tr>
                    <td class="check"><?php echo $autor ?></td>
                    <td colspan="3"> REPRESENTANTE AUTORIZADO DE AMBAS PARTES   </td>
                </tr>
            </table>

            <div class="col-xs-12">
                <p align="justify"> </td></td>
                    b.	Somos imparciales para la realización de la inspección.<br>	
                    c.	No incurrimos en conflicto de intereses para la realización de la inspección.<br>
                    d.	Garantizamos la confidencialidad de la información.<br>	
                    e.	No aceptaremos dadivas, regalos, o presiones por parte del cliente o involucrado en la obra.<br>
                    f.	No seremos discriminatorios durante la ejecución de la inspección.<br>		
                    g.	Cumpliremos con todos los aspectos indicados en el código de ética de la empresa.<br>
                </p>
            </div>																							
            <p class="bordes"><b>Observaciones:</b> <?php echo $obser ?></p>
        </div>
    </div>
    <div id="firma">
        <table>
            <tbody>
                <tr>
                    <td>Gerente:</td>
                    <td>Director Tecnico:</td>
                    <td>Inspector:</td>
                </tr>
                <tr>
                    <td>Firma ____________________________</td>
                    <td>Firma ____________________________</td>
                    <td>Firma ____________________________</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>