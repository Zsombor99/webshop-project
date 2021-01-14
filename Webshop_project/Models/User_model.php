<?php
Class User_model extends Database {

    function update_email($NewEmailAddress, $Email){
        return $this->Query("UPDATE `User` SET `EmailAddress`=?
        WHERE `EmailAddress`=?", [$NewEmailAddress, $Email]);
    }
    function update_password($Hash, $Email){
        return $this->Query("UPDATE `User` SET `PasswordHash`=?
                WHERE `EmailAddress`=?", [$Hash, $Email]);
    }
    function update_personal($FirstName, $LastName, $Address, $PhoneNumber, $EmailAddress ){
        return $this->Query("UPDATE `User` SET `FirstName`=?,
                            `LastName`=?,
                            `Address`=?,
                            `PhoneNumber`=?
                        WHERE `EmailAddress`=?", 
                        [$FirstName,
                        $LastName,
                        $Address,
                        $PhoneNumber,
                        $EmailAddress]);
                        }

    function register_user($FirstName, $LastName, $Address, $EmailAddress, $PhoneNumber, $Password, $RepeatPassword ){
        return $this->Query("INSERT INTO `User` (`FirstName`,
                            `LastName`,
                            `Address`,
                            `EmailAddress`,
                            `PhoneNumber`,
                            `PasswordHash`,
                            `RegDate`)
                    VALUES(?,?,?,?,?,?,?)",
                    [
                            $FirstName,
                            $LastName,
                            $Address,
                            $EmailAddress,
                            $PhoneNumber,
                            password_hash($Password, PASSWORD_BCRYPT),
                            time()
                    ]);
    }

    
    function get_user($EmailAddress){
        return $this->Query("SELECT * FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
    }

    function get_first_name($EmailAddress) {
        return $this->Query("SELECT `FirstName` FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
    }

    function get_last_name($EmailAddress) {
        return $this->Query("SELECT `LastName` FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
    }

    function get_address($EmailAddress) {
        return $this->Query("SELECT `Address` FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
    }

    function get_phone_number($EmailAddress) {
        return $this->Query("SELECT `PhoneNumber` FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
    }

    function get_email_address($EmailAddress) {
        return $this->Query("SELECT `EmailAddress` FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
    }

    function get_password_hash($EmailAddress) {
        return $this->Query("SELECT `PasswordHash` FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
    }
}