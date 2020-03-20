<?php
session_start();
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
        header("Location: Home.php");
    } else {
        header("Location: LoginForm.php");
    }
}