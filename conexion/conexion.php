<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion
 *
 * @author clope
 */
class conexion {
    private static $conexion;
    private static $sentencia;
    private static $resultado;
    
    
    /**
     * Esta función realiza la conexión con la base de datos
     */
    static function iniciarBBDD () {
        try {
            self::$conexion = mysqli_connect(constantes::$host, constantes::$usuario, constantes::$password, constantes::$BBDD);
        } catch (Exception $ex) {
            if (mysqli_connect_errno(self::$conexion)) {
                print "Fallo al conectar a MySQL".mysqli_connect_error(self::$conexion);
                print $ex->getMessage();
            }
        }
    }
    
    /**
     * Cierra la conexión con la base de datos
     */
    static function cerrarBBDD () {
        self::$resultado = mysqli_free_result();
        self::$conexion = mysqli_close();
    }
    
    /**
     * A través del email buscamos al usuario que queremos en la base de datos y nos lo devuelve
     * @param type $emai
     * @return usuario existente en la base de datos
     */
    static function existeUsuario($email) {
        try {
            self::$sentencia = "SELECT * FROM usuario WHERE email= ?";
            $stmt = mysqli_prepare(self::$conexion, self::$sentencia);
            mysqli_stmt_bind_param($stmt, "s", $email);
            if (self::$resultado = mysqli_stmt_execute($stmt)) {
                self::$resultado = mysqli_stmt_get_result($stmt);
                if ($fila = mysqli_fetch_array(self::$resultado)) {
                    $usuario = new usuario();
                    $usuario->setCodusuario($fila[0]);
                    $usuario->setEmail($fila[1]);
                    $usuario->setPasswd($fila[2]);
                }
            }
        } catch (Exception $ex) {
            print "Error al acceder a la base de datos";
        }
        return $usuario;
    }
    /**
     * Método para insertar un usuario en la base de datos
     * @param type $codusuario
     * @param type $email
     * @param type $passwd
     */
    static function insertarUsuario($codusuario, $nombre, $apellidos, $sexo, $email, $passwd) {
        self::$sentencia = "INSERT INTO usuario (codusuario, nombre, apellidos, sexo, email, contrasenia) VALUES (?,?,?)";
        $stmt = mysqli_prepare(self::$conexion, self::$sentencia);
        mysqli_stmt_bind_param($stmt, "iss", $codusuario, $nombre, $apellidos, $sexo, $email, $passwd);
        if (mysqli_stmt_execute($stmt)) {
            echo 'Registro de usuario realizado correctamente'.'<br>';
        } else {
            echo "Error al insertar el usuario".mysqli_error(self::$conexion).'<br>';
        }
    }
    /**
     * Introduce en un vector todos los usuarios que hay registrados en la base de datos;
     * @return listausuarios;
     */
    static function obtenerUsuarios () {
        $listausuarios = array();
        $i = 0;
        try {
            self::$sentencia = "SELECT * FROM usuario";
            if (self::$resultado = mysqli_query(self::conexion, self::$sentencia)) {
                if (!empty(self::$resultado)) {
                    while ($fila = mysqli_fetch_array(self::$resultado)) {
                        $usuario = new usuario();
                        $usuario->setCodusuario($fila[0]);
                        $usuario->setEmail($fila[1]);
                        $usuario->setPasswd($fila[2]);
                        $listausuarios[$i] = $usuario;
                        $i++;
                    }
                }
            }
        } catch (Exception $ex) {
            echo "Error al acceder a la base de datos";
        }
        return $listausuarios;
    }
    /**
     * Función que sirve para modificar el usuario. En este caso el email
     * @param type $codusuario
     * @param type $email
     * @param type $nuevoemail
     */
    static function modificarUsuario($codusuario, $email, $nuevoemail) {
        self::$sentencia =  "UPDATE usuario SET email = ? where codusuario = ?";
        $stmt = mysqli_prepare(self::$conexion, self::$sentencia);
        mysqli_stmt_bind_param($stmt, "si", $codusuario, $email, $nuevoemail);
        if (mysqli_stmt_execute($stmt)) {
            echo 'Registro modificado con éxito'.'<br>';
        } else {
            echo "Error al modificar el registro".'<br>';
        }
    }
    
    /**
     * Función para modificar la contraseña de un usuario
     * @param type $email
     * @param type $passwd
     * @param type $nuevapasswd
     */
    static function modificarPasswd($email, $passwd, $nuevapasswd) {
        self::$sentencia =  "UPDATE usuario SET contrasenia = ? where email = ?";
        $stmt = mysqli_prepare(self::$conexion, self::$sentencia);
        mysqli_stmt_bind_param($stmt, "sss", $email, $passwd, $nuevapasswd);
        if (mysqli_stmt_execute($stmt)) {
            echo 'Contraseña modificada con éxito'.'<br>';
        } else {
            echo "Error al modificar la contraseña".'<br>';
        }
    }
    
    /**
     * Función que borra el usuario requerido
     * @param type $email
     */
    static function borrarUsuario($email) {
        self::$sentencia = "DELETE FROM usuario WHERE email = ?";
        $stmt = mysqli_prepare(self::$conexion, self::$sentencia);
        mysqli_stmt_bind_param($stmt, "s", $email);
        if (mysqli_stmt_execute($stmt)) {
            echo 'Usuario borrado correctamente'.'<br>';
        } else {
            echo "Error al borrar el usuario ".mysqli_error(self::$conexion).'<br>';
        }
    }
    
    /**
     * Función que devuelve el rol del usuario. Dependiendo del rol que sea se mostrarán unas cosas u otras en el menú 
     * @param type $email
     * @return int
     */
    static function obtenerrolusuario($email) {
        $codusuario = 0;
        
            self::$sentencia = "SELECT privilegio.codprivilegio FROM usuario, privilegio WHERE usuario.codusuario=privilegio.cod_usuario ";
            $stmt = mysqli_prepare(self::$conexion, self::$sentencia);
            
            if (self::$resultado = mysqli_stmt_execute($stmt)) {
                self::$resultado = mysqli_stmt_get_result($stmt);
                if ($fila = mysqli_fetch_array(self::$resultado)) {
                    $fila[0] = $codusuario;
                }
        }
        return $codusuario;
        
    }
}
