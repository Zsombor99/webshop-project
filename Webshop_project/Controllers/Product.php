<?php
class Product extends Controller{
    public static $Title = "Products";

    public static function GetNumberOfProducts() {
       return self::Query("SELECT COUNT(`Id`) FROM `Product`")[0]['COUNT(`Id`)'];
    }

    public static function GetNameOfProductById($Id) {
        return self::Query("SELECT `Name` FROM `Product` WHERE `Id` = ?", [$Id])[0][0];
    }
    public static function GetInStockNumberOfProductById($Id) {
        return self::Query("SELECT `InStock` FROM `Product` WHERE `Id` = ?", [$Id])[0][0];
    }
    public static function GetPriceOfProductById($Id) {
        return self::Query("SELECT `Price` FROM `Product` WHERE `Id` = ?", [$Id])[0][0];
    }
}
?>