<?php
class Login extends Controller{
    public static $Title = "Login";
    public function _Login() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $EmailAddress = $_POST['EmailAddress'];
            $Password = $_POST['Password'];
            
            $User = self::query("SELECT `EmailAddress` FROM `User` WHERE `EmailAddress` = ? AND `PasswordHash` = ?", [$EmailAddress, $Password]);
            
            if(count($User) > 0) {
                $_SESSION["LoginInfo"] = "Successful login";
            } else {
               $_SESSION["LoginInfo"] = "Wrong credentials!";
            }
            header("Location: index.php");
        }
    }
}
?>