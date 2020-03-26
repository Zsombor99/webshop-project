<?php
class Database
{
    public static $Host = "localhost";
    public static $Db = "webshop";
    public static $Username = "root";
    public static $Password = "";
    public static function Connect() {
        try
        {
            $PDO = new PDO("mysql:host=".self::$Host.";dbname=".self::$Db.";charset=utf8;", self::$Username, self::$Password);
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $PDO;
        }
        catch(PDOException $e)
        {
            return "Database connection error: {$e->getMessage()}";
        }
            
    }
    public static function Query($PreparedQuery = "", $Params = []) {
        try
        {
            $stmt = self::Connect()->prepare($PreparedQuery);
            for($i = 0; $i < count($Params); ++$i) {
                $stmt->bindParam($i+1, $Params[$i]);
            }
            $stmt->bindParam(1, $Params[0]);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        catch(PDOException $e)
        {
            return "Query error: {$e->getMessage()}";
        }
    }
}