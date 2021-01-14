<?php
class ProfilePassword extends Controller
{
    protected string $Title = "Profile password change";
    public function index(){

        $this->load_view('ProfilePassword');
    }
}