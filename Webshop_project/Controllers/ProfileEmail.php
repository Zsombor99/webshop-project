<?php
class ProfileEmail extends Controller
{
    protected string $Title = "Profile Email change";

    public function index(){

        $this->load_view('ProfileEmail');
    }
}