<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of instalacion_DAO
 *
 * @author CASA
 */
class Instalacion_DTO {
    
    private $instalacion_id;
    private $cotizacion_id;
    private $id;
    
    
    public function __construct($instalacion_id, $cotizacion_id) {
        $this->instalacion_id = $instalacion_id;
        $this->cotizacion_id = $cotizacion_id;
    }

    public function getInstalacion_id() {
        return $this->instalacion_id;
    }

    public function getCotizacion_id() {
        return $this->cotizacion_id;
    }

    public function getId() {
        return $this->id;
    }

    public function setInstalacion_id($instalacion_id) {
        $this->instalacion_id = $instalacion_id;
    }

    public function setCotizacion_id($cotizacion_id) {
        $this->cotizacion_id = $cotizacion_id;
    }

    public function setId($id) {
        $this->id = $id;
    }


}
