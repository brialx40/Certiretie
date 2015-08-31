<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ("../src/DTO/UsoFinal_DTO.php");
include_once ("../src/util/conection.php");
/**
 * Description of UsoFinal_DAO
 *
 * @author asierra
 */
class UsoFinal_DAO {
    
    private $db;
    
    
    public function __construct() {
        $this->db=new conection();
    }
    
    public function registrarUsoFinalInd(UsoFinal_DTO $usofinal){
        $this->db->conection();
        $consulta="INSERT INTO uso_final (cotizacion_id,peligrosas,ascen_esca,incendio,comunes,pinscina) "
                . "VALUES (".$usofinal->getCotizacion_id().",".$usofinal->getPeligrosas().",".$usofinal->getAscen_esca().",".$usofinal->getIncendio()." "
                . ",".$usofinal->getComunes().",".$usofinal->getPiscina().");";
        $result=  $this->db->ejecutarConsultaSQL($consulta);
        $this->db->desconnetar();
        return ($result);
    }
    
    public function obtenerIdUsoFinal(){
        $this->db->conection();
        $consulta="SELECT id FROM uso_final ORDER BY id DESC LIMIT 1;";
        $result=  $this->db->ejecutarConsultaSQL($consulta);
        $obj=  $this->db->getObject($result);
        $this->db->desconnetar();
        return ($obj->id);
    }
}
