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
    <link rel="stylesheet" href="css/estilo.css" />
    </head>
    <body>
        <?php
        include '../cabecera.php';
        ?>
        <form name="recuperarpasswd" action="" method="POST">
            <input type="email" name="email" placeholder="Escriba su email">
            <input type="submit" name="recuperar"  value="Recuperar Contraseña">
            <?php
                require '../sendmail/sendmail.ini';
                
                $email_user = "AuxiliarDAW2@gmail.com";
                $email_password = "Chubaca20";
                $the_subject="recuperación de contraseña";
                $address_to="celialopezdelermaalarcon@gmail.com";
                $from_name="celia lopez";
                $phpmailer = new PHPMailer();
                
                $phpmailer->Username = $email_user;
                $phpmailer->Password = $email_password;
                
                $phpmailer->SMTPSecure = 'ssl';
                $phpmailer->Host = "smtp.gmail.com";
                $phpmailer->Port = 465;
                
            ?>
        </form>
        <?php
        include '../pie.php';
        ?>
    </body>
</html>
