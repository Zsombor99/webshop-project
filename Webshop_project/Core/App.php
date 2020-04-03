<?php
    class App
    {
        protected $Controller = 'Home';
        protected $Method = 'index';
        protected $Params = [];

        public function __construct()
        {
            $URL = isset($_GET['url']) ? explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)) : null;
            if(file_exists("./Controllers/".$URL[0].".php")) {
                $this->Controller = $URL[0];
                unset($URL[0]);
            }       
            require_once "./Controllers/".$this->Controller.".php";
            $this->Controller = new $this->Controller;
            if(isset($URL[1])) {
                if(method_exists($this->Controller, $URL[1])) {
                    $this->Method = $URL[1];
                    unset($URL[1]);
                }
            }
            $this->Params = $URL ? array_values($URL) : [];
            call_user_func_array([$this->Controller, $this->Method], $this->Params);     
        }
    }