<?php
class Login extends Controller{
    public static $Title = "Login";
    public function _Login() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $Connection = mysqli_connect('localhost','root','', "webshop");
        
            $FirstName = $_POST['FirstName'];
            $LastName = $_POST['LastName'];
            $Address = $_POST['Address'];
            $EmailAddress = $_POST['EmailAddress'];
            $PhoneNumber = $_POST['PhoneNumber'];
            $Password = $_POST['Password'];
            
            $User = mysqli_query($Connection, "SELECT `EmailAddress` FROM `User` WHERE `EmailAddress` = '$EmailAddress' AND `PasswordHash` = '$Password'");
            
            $rows = mysqli_num_rows($User);
            
            if($rows > 0) {
                $_SESSION["LoginInfo"] = "Successful login";
                session_start();
            } else {
                $_SESSION["LoginInfo"] = "Wrong credentials!";
            }
            header("Location: index.php");
        }
    }
}
?>