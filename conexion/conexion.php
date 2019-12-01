<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           $conexion = mysqli_connect('localhost', 'Celia', 'Chubaca2019', 'desafio2');
           print "Conexión realizada de forma procedimental:". mysqli_get_server_info($conexion)."<br>";
           
           if (mysqli_connect_errno($conexion)) {
               print "Fallo al conectar a MySQL".mysqli_connect_error();
           }
           
          function existeusuario ($email) {
              $existe = null;
              $consulta = "SELECT * FROM usuario WHERE email='".$email."'";
              $resultado = mysqli_query($conexion, $consulta);
              
          } 
           
        ?>
    </body>
</html>
