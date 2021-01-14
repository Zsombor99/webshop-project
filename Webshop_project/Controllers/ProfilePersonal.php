<?php
class ProfilePersonal extends Controller
{
    protected string $Title = "Profile Personal change";
    public function index(){

        $this->load_view('ProfilePersonal');
    }
}