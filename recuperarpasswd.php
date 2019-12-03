<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recuperar contraseña</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- My CSS -->
        <!--    <link rel="stylesheet" href="css/styles.css" />-->
        <link rel="stylesheet" href="../css/estilo.css" />
    </head>
    <body>
        <header class="row">
            <nav class="navbar navbar-expand-sm navbar bg fixed-top formu">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="../index.php" class="nav-link">Volver</a>
                        </li>
                        <a class="navbar-brand" href="#"><img id="logoformulario" src="../imagenes/PolillaSubsahariana.svg"/></a>
                        <h4 id="cabeceraformu">Sendero verde</h4>
                </div>
            </nav>
        </header>
        <br>
        <br>

        <section class="row justify-content-center mt-5 recuperarpasswd">
            <div class="col-md-9 mt-3">
                <form  class = "form-inline" name="recuperarpasswd" action="" method="POST">
                    <input type="email" name="email" placeholder="Escriba su email">
                    <input type="submit" class ="btn btn_primary" name="recuperarpasswd" value="Recuperar Contraseña">

                </form>
            </div>
        </section>
        <br>
        <br>

        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip({
                    container: 'body'
                });
            });
        </script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
    <?php
    require '../pie.php';
    ?>
</html>
