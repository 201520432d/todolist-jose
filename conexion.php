<?php 
class Conexion{	  
    public static function Conectar() {        
        define('servidor', 'localhost');
        define('nombre_bd', 'bd_logistica');
        define('usuario', 'root');
        define('password', '');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
        
    }
    if ($con->connect_errno) {
        die('fail');
    }
    
    function file_name($string) {
    
        // Tranformamos todo a minusculas
    
        $string = strtolower($string);
    
        //Rememplazamos caracteres especiales latinos
    
        $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
    
        $repl = array('a', 'e', 'i', 'o', 'u', 'n');
    
        $string = str_replace($find, $repl, $string);
    
        // Añadimos los guiones
    
        $find = array(' ', '&', '\r\n', '\n', '+');
        $string = str_replace($find, '-', $string);
    
        // Eliminamos y Reemplazamos otros carácteres especiales
    
        $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
    
        $repl = array('', '-', '');
    
        $string = preg_replace($find, $repl, $string);
    
        return $string;
    }
}