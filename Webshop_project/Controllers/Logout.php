<?php
class Logout extends Controller
{
    public static function _Logout() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_SESSION["UserLogged"] = False;
            session_destroy();
            header("Location: index.php");
        }
    }
}