<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of flor
 *
 * @author clope
 */
class flor {

    private $nombre;
    private $nombre_cientifico;
    private $descripción;
    private $significado;
    private $familia;
    
    function __construct($nombre, $nombre_cientifico, $descripción, $significado, $familia) {
        $this->nombre = $nombre;
        $this->nombre_cientifico = $nombre_cientifico;
        $this->descripción = $descripción;
        $this->significado = $significado;
        $this->familia = $familia;
    }
    function getNombre() {
        return $this->nombre;
    }

    function getNombre_cientifico() {
        return $this->nombre_cientifico;
    }

    function getDescripción() {
        return $this->descripción;
    }

    function getSignificado() {
        return $this->significado;
    }

    function getFamilia() {
        return $this->familia;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setNombre_cientifico($nombre_cientifico) {
        $this->nombre_cientifico = $nombre_cientifico;
    }

    function setDescripción($descripción) {
        $this->descripción = $descripción;
    }

    function setSignificado($significado) {
        $this->significado = $significado;
    }

    function setFamilia($familia) {
        $this->familia = $familia;
    }


}
