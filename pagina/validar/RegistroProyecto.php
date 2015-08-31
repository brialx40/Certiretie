<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once ('../src/Facade/Facade.php');
include_once ('../src/DTO/Proyecto_DTO.php');

//informacion proyecto

$cliente_id=$_POST["cedula"];

$nombre_pro = htmlspecialchars($_POST["nombre_pro"]);
$dir_pro = htmlspecialchars($_POST["direccion_pro"]);
$estrato = htmlspecialchars($_POST["estrato"]);
$dpto_pro = htmlspecialchars($_POST["departamento2"]);
$mun_pro = htmlspecialchars($_POST["municipio2"]);
$propietario = htmlspecialchars($_POST["propietario"]);
$disenador = htmlspecialchars($_POST["disenador"]);
$tipo_p = htmlspecialchars($_POST["tipo_p"]);

$path = "../cotizacion";

$nombre_p = $_FILES['plano']['name'];
$tamanio = $_FILES['plano']['size'];
$tipof = $_FILES['plano']['type'];
$data = $_FILES['plano']['tmp_name'];

//        copy($_FILES['plano']['tmp_name'],$path);
$proyecto = new Proyecto_DTO($nombre_pro, $dir_pro, $dpto_pro, $mun_pro, $propietario, $disenador, $tipo_p, $estrato,$cliente_id);


echo "";

$fac = new Facade();
if ($fac->registrarProyecto($proyecto)) {
    $idProyecto = $fac->consultarIdProyecto();    
    //Subimos el archivo
    if ($tipof == "application/pdf") {
        //movemos el achivo al directorio destino
        move_uploaded_file($data, "$path/$idProyecto.pdf");
    } else {

        echo ('<div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-ban"></i> ERROR!</h4>
                    Error el archivo a subir debe ser .PDF
                  </div>');
    }
    echo ('<script>
                                            document.getElementById("proyectoid").value="' . $idProyecto . '";
                                            document.getElementById("Continuar2").disabled=false;
                                            document.getElementById("rgP").disabled=true;                                                                                  
                                        </script>
                                        <div class="alert alert-success alert-dismissable">                    
                    <h4>	<i class="icon fa fa-check"></i> BIEN!</h4>
                    Presione continuar
                  </div>');
} else {
    echo ('<div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-ban"></i> ERROR!</h4>
                    Lo sentimos ya hay un proyecto con esa información.
                  </div>');
}
?>