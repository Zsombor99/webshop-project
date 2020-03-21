<?php
class Controller extends Database{

    public static function CreateView($viewName){
        $Title = $viewName::$Title;
        $Content = "./Views/$viewName.php";
        include ('./Layout.php');
    }
}
?>