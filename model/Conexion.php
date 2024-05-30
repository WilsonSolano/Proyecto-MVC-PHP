<?php
    class Conexion
    {
        public static function Conectar(){
             $pdo = new PDO('mysql:host=localhost;dbname=id20915981_clothing_store_db;charset=utf8','id20915981_wilson','Wilson123:');

            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            return $pdo;
        }    
    }
?>