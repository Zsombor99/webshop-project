<?php
class Register extends Controller{
    public static $Title = "Register";
    public static function _Register() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $FirstName = $_POST['FirstName'];
            $LastName = $_POST['LastName'];
            $Address = $_POST['Address'];
            $EmailAddress = $_POST['EmailAddress'];
            $PhoneNumber = $_POST['PhoneNumber'];
            $Password = $_POST['Password'];
            
            $User = self::Query("SELECT `EmailAddress` FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
            if(count($User) > 0) {
                $_SESSION["UserInfo"] = "This e-mail has already been registered!";
            } else {
            $Query = self::Query("INSERT INTO `User` (`FirstName`,
                                                        `LastName`,
                                                        `Address`,
                                                        `EmailAddress`,
                                                        `PhoneNumber`,
                                                        `PasswordHash`,
                                                        `RegDate`)
                                            VALUES(?,?,?,?,?,?,?)",
                                            [
                                                $FirstName,
                                                $LastName,
                                                $Address,
                                                $EmailAddress,
                                                $PhoneNumber,
                                                password_hash($Password, PASSWORD_BCRYPT),
                                                time()
                                            ]);
            $_SESSION["UserInfo"] = "Registration successful!";
            }
            header("Location: index.php");
        }
    }
}
?>