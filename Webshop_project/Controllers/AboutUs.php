<?php
class AboutUs extends Controller{
    public static $Title = "About us";
    public static function test(){
        $EmailAddress = "admin@webshop.hu";
        $Password = "password";
        
        //$User = self::query("SELECT `EmailAddress` FROM `User` WHERE `EmailAddress` = '?' AND `PasswordHash` = '?'", [$EmailAddress, $Password]);
        print_r(self::query("SELECT `EmailAddress` FROM `User` WHERE `EmailAddress` = '?' AND `PasswordHash` = '?'", [$EmailAddress, $Password]));
        //print_r(self::query("SELECT * FROM `User`"));

    }
    
}
?>