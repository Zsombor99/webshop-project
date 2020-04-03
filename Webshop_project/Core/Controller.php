<?php
    class Controller
    {
        protected string $Title = 'Webshop ';

        protected function load_model($Model)
        {
            if(file_exists("./Models/$Model.php"))
            {
                require_once "./Models/$Model.php";
                return new $Model;
            }          
        }
        protected function load_view($View, $Data = [])
        {
            $BaseUrl = pathinfo($_SERVER['PHP_SELF'])['dirname'];
            $Title = $this->Title;
            require_once './Layout.php';
        }
    }