<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cotizacion_DTO
 *
 * @author asierra
 */
class Cotizacion_DTO {
    
    //Datos obligatorios
    private $proyecto_id;
    private $tipo_cotizacion;
    private $tipo_instalacicon_id;
    private $estado;
    private $fecha;
    
    private $id;
    //Datos que pueden estar vacios
    
    public function __construct($proyecto_id, $tipo_cotizacion, $tipo_instalacicon_id, $estado, $fecha) {
        $this->proyecto_id = $proyecto_id;
        $this->tipo_cotizacion = $tipo_cotizacion;
        $this->tipo_instalacicon_id = $tipo_instalacicon_id;
        $this->estado = $estado;
        $this->fecha = $fecha;
    }

    
    
    
    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    
    public function getProyecto_id() {
        return $this->proyecto_id;
    }

    public function getTipo_cotizacion() {
        return $this->tipo_cotizacion;
    }

    public function getTipo_instalacicon_id() {
        return $this->tipo_instalacicon_id;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getId() {
        return $this->id;
    }

    public function setProyecto_id($proyecto_id) {
        $this->proyecto_id = $proyecto_id;
    }

    public function setTipo_cotizacion($tipo_cotizacion) {
        $this->tipo_cotizacion = $tipo_cotizacion;
    }

    public function setTipo_instalacicon_id($tipo_instalacicon_id) {
        $this->tipo_instalacicon_id = $tipo_instalacicon_id;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setId($id) {
        $this->id = $id;
    }


    
    
    
}
