<?php

class database{ 

    private static $dbHost = "localhost2";
    private static $dbName = "db_final2";
    private static $dbUsername = "root2";
    private static $dbPassword = "root2";

    public static function conectar(){
        try{
            $pdo = new PDO("mysql:host=".self::$dbHost.";dbname=".self::$dbName,self::$dbUsername,self::$dbPassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch (Exception $e){
            die($e->getMessage());
        }
    }
}
?>