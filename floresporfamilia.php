<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Clasificar flores por familia</title>
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
        include './cabecera.php';
        ?>

        <br>
        <br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Listar flores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Por familia</li>
            </ol>
        </nav>

        <br>
        <div class="aling-items-center">
            <a href="#">TODOS</a><a href="#">Aiaceae</a><a href="#">Amaryllidaceae</a><a href="#">Aspargaceae</a><a href="#">Ateraceae</a><a href="#">Begoniaceae</a><a href="#">Boraginaceae</a><a href="#">Brassicaceae</a><a href="#"> Caprifoliaceae</a><a href="#">Crassulaceae</a><a href="#">Ericaceae</a><a href="#">Euphorbiaceae</a><a href="#">Fabaceae</a><a href="#">Gesneriaceae</a><a href="#">Hydrangeaceae</a><a href="#">Iridaceae</a><a href="#">Lamiaceae</a><a href="#">Liliaceae</a>
            <a href="#">Magnoliaceae</a><a href="#">Malvaceae</a><a href="#">Nelumbonaceae</a><a href="#">Oleaceae</a><a href="#">Orchidaceae</a><a href="#">Paeoniaceae</a><a href="#">Papaveraceae</a><a href="#">Ranunculaceae</a><a href="#">Rosaceae</a><a href="#">Rubiaceae</a><a href="#">Rutaceae</a><a href="#">Smilacaceae</a><a href="#">Solanaceae</a><a href="#">Theaceae</a><a href="#">Violaceae</a>
        </div>
        <table class="table table-striped table-turquoise">
            <thead>
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Datos</th>
                    <th scope="col">Familia</th>
                    <th scope="col">Color</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Foto de ejemplo</th>
                    <th scope="row">Datos de ejemplo</th>
                    <th scope="row">Familia de ejemplo</th>
                    <th scope="row">Color de ejemplo</th>
                </tr>
                 <tr>
                    <th scope="row">Foto de ejemplo</th>
                    <th scope="row">Datos de ejemplo</th>
                    <th scope="row">Familia de ejemplo</th>
                    <th scope="row">Color de ejemplo</th>
                </tr>
                 <tr>
                    <th scope="row">Foto de ejemplo</th>
                    <th scope="row">Datos de ejemplo</th>
                    <th scope="row">Familia de ejemplo</th>
                    <th scope="row">Color de ejemplo</th>
                </tr>
            </tbody>
        </table>


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
    include './pie.php';
    ?>
</html>
