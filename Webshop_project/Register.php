<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'webshop');

$name = $_POST['user'];
$pass = $_POST['passoword'];
$email = $_POST['email'];

$s = " SELECT * FROM user WHERE userName = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    echo "Username already taken";
}

else {
    $reg = " insert into usertable(name, password, email) values ('$name', '$pass','$email')";
    mysqli_query($con,$reg);
    echo "Registration successful!";
}
?>