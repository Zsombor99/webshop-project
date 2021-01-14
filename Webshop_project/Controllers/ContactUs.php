<?php
class ContactUs extends Controller
{
    protected string $Title = "Contact us";

    public function index(){

        $this->load_view('ContactUs');
    }
}