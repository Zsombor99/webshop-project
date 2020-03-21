<?php
class AboutUs extends Controller{
    public static $Title = "About us";
    public static function test(){
        
        print_r(self::query("SELECT * FROM `User`"));

    }
    
}
?>