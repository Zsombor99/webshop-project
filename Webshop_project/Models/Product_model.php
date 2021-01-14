<?php
class Product_model extends Database{

    function InsertProduct($ProductName, $ProductImage, $ProductQuantity, $ProductDescription, $ProductPrice, $ProductCategory) {
        return $this->Query("INSERT INTO `Product` (`Name`,`Image`,`Quantity`, `Description`, `Price`, `CategoryId`)
                VALUES(?,?,?,?,?,?)",
                [
                    $ProductName,
                    $ProductImage,
                    $ProductQuantity,
                    $ProductDescription,
                    $ProductPrice,
                    $ProductCategory
                ]
        );
    }
    public function GetCountOfCategory() {
        return self::Query("SELECT COUNT(`Id`) FROM `Category`")[0][0];
    }
    public function GetNameOfCategoryById($Id) {
         return self::Query("SELECT `Name` FROM `Category` WHERE `Id` = ?", [$Id])[0][0];
    }

    function GetAllProduct() {
        return  $this->Query("SELECT * FROM `Product`");
    }

    function GetProductNameById($Id) {
        return  $this->Query("SELECT `Name` FROM `Product` WHERE `Id` = ?", [$Id])[0][0];
    }

    function GetCategoryNameById($Id) {
        return  $this->Query("SELECT `Name` FROM `Category` WHERE `Id` = ?", [$Id])[0][0];
    }

}