<?php
Class User_model extends Database {

    
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