<?php
session_start();
class Logout extends Controller
{
    public function _logout() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_unset();
            session_destroy();
            header("Location: ../Home");
        }
    }
}