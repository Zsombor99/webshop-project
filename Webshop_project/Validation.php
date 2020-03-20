<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'webshop');

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];

$s = " SELECT * FROM users WHERE userName = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
   header('location:Home.php');
}

else {
    header('location:LoginForm.php');
}
?>