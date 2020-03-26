<?php
class Controller extends Database
{
    public static function CreateView($ViewName) {
        $Title = $ViewName::$Title;
        $Content = "./Views/$ViewName.php";
        include ('./Layout.php');
    }
}