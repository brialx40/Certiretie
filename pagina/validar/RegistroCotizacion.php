<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ("../src/Facade/Facade.php");
include_once ("../src/DTO/Intalacion_DAO.php");
include_once ("../src/DTO/Residencial_DTO.php");
include_once ("../src/DTO/Distribucion_DTO.php");
include_once ("../src/DTO/Transformacion_DTO.php");
include_once ("../src/DTO/Industrial_DTO.php");
include_once ("../src/DTO/Especial_DTO.php");
include_once ("../src/DTO/UsoFinal_DTO.php");

$fac = new Facade();

//Id del Proyecto
$proyecto_id = $_POST["proyectoid"];
//Fecha de registro
date_default_timezone_set('UTC');
$fecha = date("Y-m-d");

//tipo Cotizacion RETIE
$tipo_cotizacion = 0;


//instalacion tipo
$instalacion = htmlspecialchars($_POST["instalacion"]);
$instalacion = "0";

if (isset($_POST["instalacion_adc"])) {
    $instalacion_adc = htmlspecialchars($_POST["instalacion_adc"]);
}

//VARIABLES PARA USO FINAL
$calibre = "";
$acometida = "";
$area = "";
$cantidad = "";
$ubicacion = "";
$complejidad = "";
//Variable global
//VARIABLES PARA DISTRIBUCION
$red = "";
$distancia = "";

//VARIABLES PARA TRANSFORMACION
$kva = "";
$nro_es = "";
//VARIABLES PARA ESPECIALES
//VARIABLES ADICIONALES
$peligrosa = "0";
$asc = "0";
$apantallamiento = "0";
$incendio = "0";
$comunes = "0";
$piscina = "0";

$cant_adicional = "";

//capturo los datos referentes a la informacion adicional de Uso Final

if (isset($_POST["peligrosa"])) {
    $peligrosa = htmlspecialchars($_POST["peligrosa"]);
}

if (isset($_POST["asc"])) {
    $asc = htmlspecialchars($_POST["asc"]);
}

if (isset($_POST["apantalla"])) {
    $apantallamiento = htmlspecialchars($_POST["apantalla"]);
}

if (isset($_POST["incendio"])) {
    $incendio = htmlspecialchars($_POST["incendio"]);
}

if (isset($_POST["comunes1"])) {
    $comunes = htmlspecialchars($_POST["comunes1"]);
}

if (isset($_POST["piscina1"])) {
    $piscina = htmlspecialchars($_POST["piscina1"]);
}

if (isset($_POST["cant_adc"])) {
    $cant_adicional = htmlentities($_POST["cant_adc"]);
}

//Creo objeto Cotizacion
$cotizacion = new Cotizacion_DTO($proyecto_id, $tipo_cotizacion, $instalacion_adc, 1, $fecha);

if ($fac->registrarCotizacion($cotizacion)) {
    $cotizacion_id = $fac->obtenerIdCotizacion();


    //<editor-fold desc="Registro Cotizacion Uso Final">
    if ($instalacion >= "1" || $instalacion <= "3") {

        $usoFinal = new UsoFinal_DTO($cotizacion_id, $peligrosas, $ascen_esca, $apantallamiento, $incendio, $comunes, $piscina);

        if ($fac->registrarUsoFinal($usoFinal)) {

            $usofinal_id = $fac->obtenerIdUsoFinal();

            //uso final - residencial_comercial
            if ($instalacion == "1" || $instalacion == "2") {

                //capturo los datos pertenecientes a la instalacion Residencial
                $ubicacion = htmlspecialchars($_POST["ubicacion1"]);
                $acometida = htmlspecialchars($_POST["acometida1"]);
                $area = htmlspecialchars($_POST["area1"]);
                $cantidad = htmlspecialchars($_POST["cant1"]);
                $calibre = htmlspecialchars($_POST["calibre1"]);
                //Creo objeto Residencial_comercial
                $residencial = new Residencial_DTO($acometida, $calibre, $area, $cantidad, $ubicacion, $usofinal_id);

                if ($fac->registrarInstResidencial($residencial)) {
                    echo ('<div class="alert alert-success alert-dismissable">                    
                                    <center><label class="resaltado"><i class="icon fa fa-check"></i> EXITO!</label>
                                    La cotización se ha registrado correctamente, pronto nos pondremos en contacto con usted.
                                    <label>CertiRETIE realizamos inspecciones eléctricas en todo el país.</label></center>
                                </div>');
                } else {
                    echo ('<div class="alert alert-danger alert-dismissable">                    
                    <h4><i class="icon fa fa-ban"></i> ERROR!</h4>
                    Error de conexión. Disulpa esta molestia.
                  </div>');
                }
            }//Fin residencial comercial
            //Uso final industrial
            if ($intalacion == "3") {
                //capturo la información de industrial
                $ubicacion = htmlspecialchars($_POST["ubicacion3"]);
                $area = htmlspecialchars($_POST["area3"]);
                $kva = htmlspecialchars($_POST["kva3"]);
                $complejidad = htmlspecialchars($_POST["complejidad3"]);

                //Creo objeto Industrial
                $industrial = new Industrial_DTO($complejidad, $ubicacion, $kva, $area, $usofinal_id);

                if ($fac->registrarInstIndustrial($industrial)) {
                    echo ('<div class="alert alert-success alert-dismissable">                    
                                    <center><label class="resaltado"><i class="icon fa fa-check"></i> EXITO!</label>
                                    La cotización se ha registrado correctamente, pronto nos pondremos en contacto con usted.
                                    <label>CertiRETIE realizamos inspecciones eléctricas en todo el país.</label></center>
                                </div>');
                } else {
                    echo ('<div class="alert alert-danger alert-dismissable">                    
                    <h4><i class="icon fa fa-ban"></i> ERROR!</h4>
                    Error de conexión. Disulpa esta molestia.
                  </div>');
                }
            }//Fin industrial            
        }//Fin uso final     
    }//Fin registro cotizacion uso final
    //</editor-fold>
    //
    //<editor-fold desc="Registro Cotizacion solo Distribución">
    //Distribucion
    if ($instalacion == "4") {
        //capturo informacion del tipo instalacion Distribucion
        $cantidad = htmlspecialchars($_POST["cant4"]);
        $ubicacion = htmlspecialchars($_POST["ubicacion4"]);
        $red = htmlspecialchars($_POST["tipo4"]);
        $distancia = htmlspecialchars($_POST["distancia4"]);

//creo el objeto Distribucion
        $distribucion = new Distribucion_DTO($tipo, $ubicacion, $distancia, $cantidad, $cotizacion_id);
        if ($fac->registrarInstDistribucion($distribucion)) {
            echo ('<div class="alert alert-success alert-dismissable">                    
                                    <center><label class="resaltado"><i class="icon fa fa-check"></i> EXITO!</label>
                                    La cotización se ha registrado correctamente, pronto nos pondremos en contacto con usted.
                                    <label>CertiRETIE realizamos inspecciones eléctricas en todo el país.</label></center>
                                </div>');
        } else {
            echo ('<div class="alert alert-danger alert-dismissable">                    
                    <h4><i class="icon fa fa-ban"></i> ERROR!</h4>
                    Error de conexión. Disulpa esta molestia.
                  </div>');
        }//Fin Distribucion
    }
    //</editor-fold>
    //
    //<editor-fold desc="Registro Cotización Transformación ">
    if ($instalacion == "5") {
        //obtengo las variables de transformacion
        $ubicacion = htmlspecialchars($_POST["ubicacion5"]);
        $cantidad = htmlspecialchars($_POST["cantidad5"]);
        $kva = htmlspecialchars($_POST["kva5"]);
        //creo transformacion 
        $transformacion = new Transformacion_DTO($kva, $cantidad, $ubicacion, $cotizacion_id);

        if ($fac->registrarInstTransformcaion($transformacion)) {
            echo ('<div class="alert alert-success alert-dismissable">                    
                                    <center><label class="resaltado"><i class="icon fa fa-check"></i> EXITO!</label>
                                    La cotización se ha registrado correctamente, pronto nos pondremos en contacto con usted.
                                    <label>CertiRETIE realizamos inspecciones eléctricas en todo el país.</label></center>
                                </div>');
        } else {
            echo ('<div class="alert alert-danger alert-dismissable">                    
                                    <h4><i class="icon fa fa-ban"></i> ERROR!</h4>
                                    Error de conexión. Disulpa esta molestia.
                                </div>');
        }//Fin Transformación
    }
    //</editor-fold>
    //
    //<editor-fold desc="Registro Cotización Especiales">
    if ($instalacion == "6") {
        //obtengo las variables de Especiales
        $ubicacion = htmlspecialchars($_POST["ubicacion6"]);
        $area = htmlspecialchars($_POST["area6"]);
        $kva = htmlspecialchars($_POST["kva6"]);

        $especiales = new Especial_DTO($ubicacion, $kva, $area, $cotizacion_id);
        if ($fac->registrarInstEspeciales($especiales)) {
            echo ('<div class="alert alert-success alert-dismissable">                    
                                    <center><label class="resaltado"><i class="icon fa fa-check"></i> EXITO!</label>
                                    La cotización se ha registrado correctamente, pronto nos pondremos en contacto con usted.
                                    <label>CertiRETIE realizamos inspecciones eléctricas en todo el país.</label></center>
                                </div>');
        } else {
            echo ('<div class="alert alert-danger alert-dismissable">                    
                                    <h4><i class="icon fa fa-ban"></i> ERROR!</h4>
                                    Error de conexión. Disulpa esta molestia.
                                </div>');
        }
    }
    //</editor-fold>
    //
    //<editor-fold desc="Registro Cotizacion Uso Final-Distribucion-Transformacion">
    //uso final-Distribucion
    if ($instalacion_adc == "9") {
        //capturo informacion del tipo instalacion Distribucion   
        $red = htmlspecialchars($_POST["tipo_adc"]);
        $distancia = htmlspecialchars($_POST["distancia_adc"]);
        //creo el objeto Distribucion        

        $distribucion = new Distribucion_DTO($red, $ubicacion, $distancia, $cantidad, $cotizacion_id);

        if (!$fac->registrarInstDistribucion($distribucion)) {
            echo ('<div class="alert alert-danger alert-dismissable">                    
                    <h4><i class="icon fa fa-ban"></i> ERROR!</h4>
                    Error de conexión. Disulpa esta molestia.
                  </div>');
        }
    }//fin instalacion 9
    //uso final-transformacion
    if ($instalacion_adc == "10") {
        //obtengo las variables de transformacion
        $cantidad = htmlspecialchars($_POST["cant_adc"]);
        $kva = htmlspecialchars($_POST["kva_adc"]);

        $transformacion = new Transformacion_DTO($kva, $cantidad, $ubicacion, $cotizacion_id);

        if (!$fac->registrarInstTransformcaion($transformacion)) {
            echo ('<div class="alert alert-danger alert-dismissable">                    
                    <h4><i class="icon fa fa-ban"></i> ERROR!</h4>
                    Error de conexión. Disulpa esta molestia.
                  </div>');
        }//fin registro transfomacion 10
    }// fin instalacion 10
    //USO FINAL DIS TRANS
    if ($instalacion_adc == '11') {

        $cantidad = htmlspecialchars($_POST["cant_adc"]);
        $kva = htmlspecialchars($_POST["kva_adc"]);

        $transformacion = new Transformacion_DTO($kva, $cantidad, $ubicacion, $cotizacion_id);

        if (!$fac->registrarInstTransformcaion($transformacion)) {
            echo ('<div class="alert alert-danger alert-dismissable">                    
                    <h4><i class="icon fa fa-ban"></i> ERROR!</h4>
                    Error de conexión. Disulpa esta molestia.
                  </div>');
        }//fin registro transfomacion 11
        //capturo informacion del tipo instalacion Distribucion   
        $red = htmlspecialchars($_POST["tipo_adc"]);
        $distancia = htmlspecialchars($_POST["distancia_adc"]);
        //creo el objeto Distribucion        
        $distribucion = new Distribucion_DTO($red, $ubicacion, $distancia, $cantidad, $cotizacion_id);

        if (!$fac->registrarInstDistribucion($distribucion)) {
            echo ('<div class="alert alert-danger alert-dismissable">                    
                    <h4><i class="icon fa fa-ban"></i> ERROR!</h4>
                    Error de conexión. Disulpa esta molestia.
                  </div>');
        }//fin registro dinstribucion 11
    }//Fin instalacion 11
    //</editor-fold>
    
} else {
    echo ('<div class="alert alert-danger alert-dismissable">                    
                    <h4><i class="icon fa fa-ban"></i> ERROR!</h4>
                    Error de conexión. Disulpa esta molestia.
                  </div>');
}//fin cotizacion
?>