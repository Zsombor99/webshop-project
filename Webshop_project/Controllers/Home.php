<?php
class Home extends Controller
{
    public static $Title = "Home";
    public static function GetAllCategory() {
        return self::Query("SELECT * FROM `Category`");
    }
    public static function GetAllProduct() {
        return self::Query("SELECT * FROM `Product`");
    }
    public static function GetProductNameById($Id) {
        return self::Query("SELECT `Name` FROM `Product` WHERE `Id` = ?", [$Id])[0][0];
    }
    public static function GetCategoryNameById($Id) {
        return self::Query("SELECT `Name` FROM `Category` WHERE `Id` = ?", [$Id])[0][0];
    }
}