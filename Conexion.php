<?php
    class Connect{
        public static function conectar(){
            $conn=new mysqli('localhost','root','','ciencias_basicas');
            $conn->query("SET NAMES 'UTF-8'");
            return $conn;
        }
        public static function cerrar(){
            $close-> mysqli_close();
        }
    }
?>