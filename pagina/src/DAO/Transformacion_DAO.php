<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../src/util/conection.php');
include_once ('../src/DTO/Transformacion_DTO.php');
/**
 * Description of Trasnformacion_DAO
 *
 * @author Sejib2
 */
class Transformacion_DAO {
    //put your code here
    
    private $bd;

    public function __construct() {
        $this->bd = new conection();
    }
    
    /**
     * Metodo para registrar instalacion transformacion
     * @param Transformacion_DTO $transformacion
     * @return type
     */
    public function registrarTransformacion(Transformacion_DTO $transformacion){
        $this->bd->conection();
        $consulta = "INSERT INTO `transformacion`(`cotizacion_id`,`n_trasformadores`, `kva`, `ubicacion`)"
                . " VALUES (".$transformacion->getCotizacion_id().",".$transformacion->getCantidad().",".$transformacion->getKva().",'".$transformacion->getUbicacion()."');";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        $this->bd->desconnetar();
        return ($result);
    }
}
