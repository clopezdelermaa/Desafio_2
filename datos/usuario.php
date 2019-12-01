<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author clope
 */
class usuario {
    private $codusuario;
    private $email;
    private $passwd;
    
    function __construct($codusuario, $email, $passwd) {
        $this->codusuario = $codusuario;
        $this->email = $email;
        $this->passwd = $passwd;
    }
    function getCodusuario() {
        return $this->codusuario;
    }

    function getEmail() {
        return $this->email;
    }

    function getPasswd() {
        return $this->passwd;
    }

    function setCodusuario($codusuario) {
        $this->codusuario = $codusuario;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPasswd($passwd) {
        $this->passwd = $passwd;
    }


}
