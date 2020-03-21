<?php
class Login extends Controller{
    public static $Title = "Login";
    public function _Login() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $EmailAddress = $_POST['EmailAddress'];
            $Password = $_POST['Password'];
            
            $User = self::Query("SELECT `EmailAddress` FROM `User` WHERE `EmailAddress` = ? AND `PasswordHash` = ?", [$EmailAddress, $Password]);

            if(count($User) > 0) {
                $_SESSION["UserInfo"] = "Successful login";
            } else {
               $_SESSION["UserInfo"] = "Wrong credentials!";
            }
            header("Location: index.php");
        }
    }
}
?>