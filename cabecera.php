<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>  <main class="container-fluid">
    <div class="alert alert-dismissible fade show alert-warning fixed-bottom">
        Aviso de uso de cookies
        <button type="button" class="close" data-dismiss="alert">
            <span>X</span>
        </button>
    </div>
    <?php
    session_start();
    ?>
    <!--MENU PRINCIPAL-->
    <header class="row">
        <nav class="navbar navbar-expand-sm navbar bg fixed-top">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item active">
                        <a href="noticias.php" class="nav-link">Noticias</a>
                    </li> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown">Listar Flores</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="florespornombre.php">Por nombre</a>
                            <a class="dropdown-item" href="floresporfamilia.php">Por Familia</a>
                            <a class="dropdown-item" href="floresporcolor.php">Por color</a>
                        </div>
                    </li>
                    <?php
                    if (isset($_SESSION['entrar'])) {
                        conexion::iniciarBBDD();
                        $_SESSION['email'] = $email;
                        $rolusuario = 0;
                        $usuario = conexion::existeUsuario($email);
                        if ($usuario != null) {
                            
                            $rolusuario = conexion::obtenerrolusuario($email);
                            if ($rolusuario == 2) {
                                ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">Area floral</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Añadir flor</a>
                                        <a class="dropdown-item" href="#">Validar flor</a>

                                    </div>
                                </li>
                                <?php
                            } else {
                                ?>
                                <li class="nav-item">
                                    <a href ="#" class="nav-link">Administración de usuarios</a>
                                    <?php
                                }
                            }
                            ?>
                            <form class="form-inline">
                                <input class="btn btn-primary btn-sm" data-toggle="modal" data-target="#cerrar" type="button" value="Cerrar Sesión">
                            </form>
                            <?php
                        }
                        ?>
                    </li>         

                </ul>

                <a class="navbar-brand" href="#"><img id="logo" src="../Desafio2/imagenes/PolillaSubsahariana.svg"/></a>
                <h4>Sendero verde</h4>
            </div>
            <form class="form-inline">
                <input class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#entrar" type="button" value="Login">
                <input class="btn btn-primary btn-sm" data-toggle="modal" data-target="#registro" type="button" value="Registro">

            </form>
        </nav>
    </header>

    <?php ?>