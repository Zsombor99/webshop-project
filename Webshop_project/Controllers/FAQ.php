<?php
class FAQ extends Controller
{
    protected string $Title = "FAQ";
    public function index(){

        $this->load_view('FAQ');
    }
}