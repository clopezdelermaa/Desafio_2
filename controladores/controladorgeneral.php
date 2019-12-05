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
        require '../conexion/conexion.php';
        session_start();

        
        //------------- Controlador de inicio de sesión---------
        
        if (isset($_REQUEST['entrar'])) {
            $email = $_REQUEST['email'];
            $passwd = $_REQUEST['contrasenia'];

            conexion::iniciarBBDD();
            $usuario = conexion::existeUsuario($email);
            conexion::cerrarBBDD();

            if (!empty($usuario)) {
                $_SESSION['user'] = $usuario;
                if ($usuario->getEmail() == $email && $usuario->getPasswd() == $passwd) {
                    conexion::obtenerrolusuario($email);
                            
                } else {
                    header("Location:../vistas/usuarioregistrado.php");
                }
            } else {
                header("Location: ../index.php");
            }
        }

        //--------Controlador de registro de usuario ------
        
        
        if (isset($_REQUEST['registrar'])) {
            $codusuario = 0;
            $nombre = $_REQUEST['nombre'];
            $apellidos = $_REQUEST['apellidos'];
            $email = $_REQUEST['email'];
            $contrasenia = $_REQUEST['contrasenia'];
            $contrasenia2 = $_REQUEST['contrasenia2'];
            $sexo = $_REQUEST['sexo'];

            if ($contrasenia == $contrasenia2) {
                conexion::iniciarBBDD();
                conexion::insertarUsuario($codusuario, $nombre, $apellidos, $sexo, $email, $passwd);
                conexion::cerrarBBDD();
                $codusuario = $codusuario + 1;

                header("Location: ../index.php");
            } else {
                echo "Las contraseñas no coinciden";
            }
        }
        
        //------------- Controlador para recuperar la contraseña ------------------
        
        if (isset($_REQUEST['recuperarpasswd'])) {
            $email = $_REQUEST['email'];
            conexion::iniciarBBDD();
            $user = conexion::existeUsuario($email);
            conexion::cerrarBBDD();
            if (!empty($user)) {
                $from = "From: auxiliardaw2@gmail.com";
                $clave = "Chubaca20";
                $message = "Su contraseña de inicio de sesión es ".$clave."r\nLe recomendamos que la cambie al volver a iniciar sesión";
                $subject = "Contraseña olvidada";
                
                $mandar = mail($email,$subject,$message,$from);
                if ($mandar) {
                    echo "Correo de recuperación de contraseña enviado correctamente";
                } else {
                    echo "Ha habido un error y no se ha podido enviar el correo";
                }
            }
        }
        ?>
    </body>
</html>
