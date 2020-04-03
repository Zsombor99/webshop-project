<?php
class Home_model extends Database{

    function GetAllCategory() {
        return $this->Query("SELECT * FROM `Category`");
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