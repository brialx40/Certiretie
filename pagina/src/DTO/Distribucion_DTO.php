<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Distribucion
 *
 * @author Sejib2
 */
class Distribucion_DTO {
    //put your code here
    
    private $tipo;
    private $ubicacion;
    private $distancia;
    private $cantidad;
    private $cotizacion_id;
    
        
    public function __construct($tipo, $ubicacion, $distancia, $cantidad, $cotizacion_id) {
        $this->tipo = $tipo;
        $this->ubicacion = $ubicacion;
        $this->distancia = $distancia;
        $this->cantidad = $cantidad;
        $this->cotizacion_id = $cotizacion_id;
    }   
    
    
    public function getCotizacion_id() {
        return $this->cotizacion_id;
    }

    public function setCotizacion_id($cotizacion_id) {
        $this->cotizacion_id = $cotizacion_id;
    }
    
    public function getTipo() {
        return $this->tipo;
    }

    public function getUbicacion() {
        return $this->ubicacion;
    }

    public function getDistancia() {
        return $this->distancia;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

    public function setDistancia($distancia) {
        $this->distancia = $distancia;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }



}
