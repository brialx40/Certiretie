<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Especial
 *
 * @author Sejib2
 */
class Especial_DTO {
    //put your code here
    
    private $ubicacion;
    private $kva;
    private $area;
    private $cotizacion_id;
    
    public function __construct($ubicacion, $kva, $area, $cotizacion_id) {
        $this->ubicacion = $ubicacion;
        $this->kva = $kva;
        $this->area = $area;
        $this->cotizacion_id = $cotizacion_id;
    }
    
    public function getUbicacion() {
        return $this->ubicacion;
    }

    public function getKva() {
        return $this->kva;
    }

    public function getArea() {
        return $this->area;
    }

    public function getCotizacion_id() {
        return $this->cotizacion_id;
    }

    public function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

    public function setKva($kva) {
        $this->kva = $kva;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function setCotizacion_id($cotizacion_id) {
        $this->cotizacion_id = $cotizacion_id;
    }

}
