<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>  <main class="container-fluid">
    <div class="alert alert-dismissible fade show alert-warning fixed-bottom">
            Aleviso de uso de cookies
            <button type="button" class="close" data-dismiss="alert">
                <span>X</span>
            </button>
        </div>

        <!--MENU PRINCIPAL-->
        <header class="row">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                          <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        
                        <li class="nav-item active">
                            <a href="#" class="nav-link">Noticias</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown">Listar Flores</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Por nombre</a>
                                <a class="dropdown-item" href="#">Por Familia</a>
                                <a class="dropdown-item" href="#">Por color</a>
                            </div>
                        </li>
                    </ul>
                    <a class="navbar-brand" href="#"><img src="img/logo-openwebinars.png"/></a>
                    
                </div>
                <form class="form-inline">
                    <input class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#entrar" type="button" value="Login">
                    <input class="btn btn-primary btn-sm" data-toggle="modal" data-target="#registro" type="button" value="Registro">
                </form>
            </nav>
        </header><?php
?>