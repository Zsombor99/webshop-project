<?php
class Login extends Controller
{
    public static $Title = "Login";
    public static function _Login() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $EmailAddress = $_POST['EmailAddress'];
            $Password = $_POST['Password'];    
            $User = self::Query("SELECT `PasswordHash` FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
            if(count($User) > 0) {
                if(password_verify($Password, $User[0]["PasswordHash"])) {
                    session_start();
                    $_SESSION["UserLogged"] = True;
                    $_SESSION["UserInfo"] = "Successful login";
                    $_SESSION["UserFirstName"] = self::Query("SELECT `FirstName` FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
                    $_SESSION["UserLastName"] = self::Query("SELECT `LastName` FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
                    $_SESSION["UserAddress"] = self::Query("SELECT `Address` FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
                    $_SESSION["UserPhoneNumber"] = self::Query("SELECT `PhoneNumber` FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
                    $_SESSION["UserEmailAddress"] = self::Query("SELECT `EmailAddress` FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
                    $_SESSION["UserPassword"] = self::Query("SELECT `PasswordHash` FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
                } else {
                    $_SESSION["UserInfo"] = "Wrong credentials!";
                }
            } else {
               $_SESSION["UserInfo"] = "This e-mail is not yet registered!";
            }
            header("Location: Home");
        }
    }
}