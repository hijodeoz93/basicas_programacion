<?php
    class Connect{
        public static function conectar(){
            $conn=new mysqli('localhost','root','','programacion')or die($conn->error);
            $conn->set_charset("utf8");
            return $conn;
        }
        public static function cerrar(){
            $close-> mysqli_close();
        }
    }
?>