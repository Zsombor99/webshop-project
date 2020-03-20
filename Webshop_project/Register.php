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
    
    $IsUser = mysqli_query($Connection, "SELECT `EmailAddress` FROM User WHERE EmailAddress = '$EmailAddress'");
    
    $rows = mysqli_num_rows($IsUser);
    
    if($rows > 0) {
        echo "This e-mail has already been registered!";
    } else {
        $reg = "INSERT INTO User (`FirstName`,
                                  `LastName`,
                                  `Address`,
                                  `EmailAddress`,
                                  `PhoneNumber`,
                                  `PasswordHash`,
                                  `RegDate`)
                           VALUES ($FirstName, $LastName, $Address, $EmailAddress, $PhoneNumber, $Password, " . time() . ")";
        mysqli_query($con,$reg);

        echo "Registration successful!";
    }
}