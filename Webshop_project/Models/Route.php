<?php
class Route
{
    public static $Routes = [
        "Home",
        "AboutUs",
        "ContactUs",
        "Register",
        "Login",
        "Profile",
        "LoadUp"
    ];

    public static function _Route() {
        if(in_array($_GET['url'], self::$Routes)) {
            $_GET['url']::CreateView($_GET['url']);
        } else {
            Error404::CreateView('Error404');
        }
    }
}