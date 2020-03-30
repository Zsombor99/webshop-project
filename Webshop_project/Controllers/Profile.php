<?php
class Profile extends Controller
{
    public static $Title = "Profile";

    public static function UpdatePersonal() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $FirstName = $_POST['FirstName'];
            $LastName = $_POST['LastName'];
            $Address = $_POST['Address'];  
            $PhoneNumber = $_POST['PhoneNumber'];
            $Query = self::Query("UPDATE `User` SET `FirstName`=?,
                                                    `LastName`=?,
                                                    `Address`=?,
                                                    `PhoneNumber`=?
                                                WHERE `EmailAddress`=?", [$FirstName, $LastName, $Address, $PhoneNumber, $_SESSION['UserEmailAddress'][0][0]]);
            $_SESSION["UserInfo"] = "Settings updated successfully!";
            header("Location: Home");
        }
    }

    public static function UpdateEmail() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $CurrentEmailAddress = $_POST['CurrentEmailAddress'];
            $NewEmailAddress = $_POST['NewEmailAddress'];
            if($CurrentEmailAddress !== $_SESSION['UserEmailAddress'][0][0]) {
                $_SESSION["UserInfo"] = "The email addresses do not match!";                
            } else {
                $Query = self::Query("UPDATE `User` SET `EmailAddress`=?
                                                    WHERE `EmailAddress`=?", [$NewEmailAddress, $_SESSION['UserEmailAddress'][0][0]]);
                $_SESSION["UserInfo"] = "Settings updated successfully!";
            }           
            header("Location: Home");
        }
    }

    public static function UpdatePassword() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $CurrentPassword = $_POST['CurrentPassword'];
            $NewPassword = $_POST['NewPassword'];
            $RepeatNewPassword = $_POST['RepeatNewPassword'];            
            if (!password_verify($CurrentPassword, $_SESSION['UserPassword'][0][0])) {
                $_SESSION["UserInfo"] = "Your password verification is unsuccessful!";
            } else if ($NewPassword !== $RepeatNewPassword) {
                $_SESSION["UserInfo"] = "Your new passwords do not match!";
            } else {
                $Hash = password_hash($NewPassword, PASSWORD_BCRYPT);
                $Query = self::Query("UPDATE `User` SET `PasswordHash`=?
                                                WHERE `EmailAddress`=?", [$Hash, $_SESSION['UserEmailAddress'][0][0]]);
                $_SESSION["UserInfo"] = "Settings updated successfully!";
            }
            header("Location: Home");
        }
    }
}