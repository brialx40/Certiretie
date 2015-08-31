<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once ('../src/Facade/Facade.php');
        $dao = new Facade();
        $departamento= $_GET['opcion'];
        $idmun= $_GET['idmun'];
        $opc = $dao->listaMunicipios($departamento, $idmun);
        echo $opc;
        ?>
    </body>
</html>
