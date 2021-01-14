<?php
class AboutUs extends Controller
{
    protected string $Title = "About us";
    public function index(){
        $this->load_view('AboutUs');
    }

}