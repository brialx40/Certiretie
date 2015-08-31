<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transformacion
 *
 * @author Sejib2
 */
class Transformacion_DTO {
    //put your code here
    
    private $kva;
    private $cantidad;
    private $ubicacion;
    private $cotizacion_id;
    
    public function __construct($kva, $cantidad, $ubicacion, $cotizacion_id) {
        $this->kva = $kva;
        $this->cantidad = $cantidad;
        $this->ubicacion = $ubicacion;
        $this->cotizacion_id = $cotizacion_id;
    }

    
    public function getKva() {
        return $this->kva;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getUbicacion() {
        return $this->ubicacion;
    }

    public function getCotizacion_id() {
        return $this->cotizacion_id;
    }

    public function setKva($kva) {
        $this->kva = $kva;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

    public function setCotizacion_id($cotizacion_id) {
        $this->cotizacion_id = $cotizacion_id;
    }



}
