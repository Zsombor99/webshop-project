<?php
class AboutUs extends Controller
{
    public static $Title = "About us";
    public static function Test() {       
        print_r(self::Query("SELECT * FROM `User`"));
    }
}