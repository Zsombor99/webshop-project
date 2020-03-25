<?php
class Loadup extends Controller{
    public static $Title = "Loadup";
    
    public static function GetNumberOfCategory() {
        return self::Query("SELECT COUNT(`Id`) FROM `Category`")[0]['COUNT(`Id`)'];
     }
 
     public static function GetNameOfCategoryById($Id) {
         return self::Query("SELECT `Name` FROM `Category` WHERE `Id` = ?", [$Id])[0][0];
     }

    public static function _Loadup(){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $msg = "";

            $target = "./assets/pictures/" . basename($_FILES['Image']['name']); 

            $image = $_FILES['Image']['name'];
            $category = $_POST['Category'];
            $name = $_POST['ProductName'];
            $price = $_POST['Price'];
            $pieces = $_POST['Pieces'];
            $description = $_POST['Description'];

            $categoryId = self::Query("SELECT `Id` FROM `Category` WHERE `Name` = ?", [$category]);

            $query = self::Query("INSERT INTO `Product` (`Name`,`Image`,`PiecesLeft`, `Description`, `Price`, `CategoryId`)
                                    VALUES(?,?,?,?,?,?)",[$name,$image,$pieces,$description,$price,$categoryId]);

            if(move_uploaded_file($_FILES['tmp_name']['name'],$target)){
                $msg = "Image uploaded succesfully";
            }
            else{
                $msg = "There was a problem uploading image";
            }
            
            header("Location: loadup");
        }
        
    }
}
?>