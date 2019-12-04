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
<!--        https://floresyalgomas.webnode.es/rss/novedades.xml-->


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Noticias</li>
            </ol>
        </nav>

        <div class="container-fluid">
            <div class="row aling-items-center mt-5" >
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="360" height="215" src="https://www.youtube.com/embed/Umrazq1V9NA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="360" height="215" src="https://www.youtube.com/embed/GMIn4Hk7tlY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col" id="noticias">
                   <script src="//rss.bloople.net/?url=https%3A%2F%2Ffloresyalgomas.webnode.es%2Frss%2Fnovedades.xml&showtitle=false&type=js"></script>
                </div>       
            </div>

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
            <?php
            include 'pie.php';
            ?>
</html>
