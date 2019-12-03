<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Noticias</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- My CSS -->
        <!--    <link rel="stylesheet" href="css/styles.css" />-->
        <link rel="stylesheet" href="css/estilo.css" />
    </head>
    <body>
        <?php
        include 'cabecera.php';
        
        ?>
        
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=GMIn4Hk7tlY" ></iframe>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=Umrazq1V9NA"></iframe>
        </div>
        
        <br>
        <main class="justify-content-center mt-5" id="noticias">
            <img class="w-80" id="noticiaimg" src="https://ep01.epimg.net/elpais/imagenes/2019/10/25/icon_design/1572009116_120993_1572009250_noticia_normal_recorte2.jpg" alt="foto articulo"><p><a href="https://elpais.com/elpais/2019/10/25/icon_design/1572009116_120993.html">Guerrilla floral en Córdoba: estas no son decoraciones inocentes</a></p>
            <br>
            <br>
            <img class="w-80" id="noticiaimg" src="imagenes/jardinesbilbao.jpg"><p><a href="https://www.elcorreo.com/bizkaia/bilbao-avanza-jardineria-20191202154001-nt.html">Bilbao avanza en jardinería verde: ecocamiones, herramientas eléctricas y mas de 800 árboles urbanos nuevos cada año</a></p>
            <br>
            <br>
            <img class="w-80" id="noticiaimg"src="https://www.floresyplantas.net/wp-content/uploads/campos-de-lavanda-de-brihuega-2-696x466.jpg" alt="foto articulo"><p><a href="https://www.floresyplantas.net/campos-de-lavanda-de-brihuega/">Campos de lavanda de Brihuega</p></a>
        </main>
        
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
    <?php
    include 'pie.php';
    ?>
</html>
