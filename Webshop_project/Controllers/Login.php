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