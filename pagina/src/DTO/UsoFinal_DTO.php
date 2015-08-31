<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsoFinal_DTO
 *
 * @author CASA
 */
class UsoFinal_DTO {
    
    private $id;//Opcional
    //Atributos
    
    private $cotizacion_id;
    private $peligrosas;
    private $ascen_esca;
    private $apantallamiento;
    private $incendio;
    private $comunes;
    private $piscina;
    
    public function __construct($cotizacion_id, $peligrosas, $ascen_esca, $apantallamiento, $incendio, $comunes, $piscina) {
        $this->cotizacion_id = $cotizacion_id;
        $this->peligrosas = $peligrosas;
        $this->ascen_esca = $ascen_esca;
        $this->apantallamiento = $apantallamiento;
        $this->incendio = $incendio;
        $this->comunes = $comunes;
        $this->piscina = $piscina;
    }

    
    public function getId() {
        return $this->id;
    }

    public function getCotizacion_id() {
        return $this->cotizacion_id;
    }

    public function getPeligrosas() {
        return $this->peligrosas;
    }

    public function getAscen_esca() {
        return $this->ascen_esca;
    }

    public function getApantallamiento() {
        return $this->apantallamiento;
    }

    public function getIncendio() {
        return $this->incendio;
    }

    public function getComunes() {
        return $this->comunes;
    }

    public function getPiscina() {
        return $this->piscina;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCotizacion_id($cotizacion_id) {
        $this->cotizacion_id = $cotizacion_id;
    }

    public function setPeligrosas($peligrosas) {
        $this->peligrosas = $peligrosas;
    }

    public function setAscen_esca($ascen_esca) {
        $this->ascen_esca = $ascen_esca;
    }

    public function setApantallamiento($apantallamiento) {
        $this->apantallamiento = $apantallamiento;
    }

    public function setIncendio($incendio) {
        $this->incendio = $incendio;
    }

    public function setComunes($comunes) {
        $this->comunes = $comunes;
    }

    public function setPiscina($piscina) {
        $this->piscina = $piscina;
    }


}
