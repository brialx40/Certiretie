<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'UsoFinal_DTO.php';
/**
 * Description of Residencial
 *
 * @author Sejib2
 */
class Residencial_DTO {
    //put your code here
    private $acometida;
    private $calibre;
    private $area;
    private $cantidad;
    private $ubicacion;
    //adicinional
    Private $uso_final_id;
    
    public function __construct($acometida, $calibre, $area, $cantidad, $ubicacion, $uso_final_id) {
        $this->acometida = $acometida;
        $this->calibre = $calibre;
        $this->area = $area;
        $this->cantidad = $cantidad;
        $this->ubicacion = $ubicacion;
        $this->uso_final_id = $uso_final_id;
    }

    
    public function getAcometida() {
        return $this->acometida;
    }

    public function getCalibre() {
        return $this->calibre;
    }

    public function getArea() {
        return $this->area;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getUbicacion() {
        return $this->ubicacion;
    }

    public function getUso_final_id() {
        return $this->uso_final_id;
    }

    public function setAcometida($acometida) {
        $this->acometida = $acometida;
    }

    public function setCalibre($calibre) {
        $this->calibre = $calibre;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

    public function setUso_final_id($uso_final_id) {
        $this->uso_final_id = $uso_final_id;
    }


}
