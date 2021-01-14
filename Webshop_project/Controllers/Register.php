<?php
class Register extends Controller
{
    protected string $Title = "Register";
    public $model;

    function __construct()
    {
        $this->model = $this->load_model('User_model');
    }
    public function index(){

        $this->load_view('Register');
    }
    public function _register() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $FirstName = $_POST['FirstName'];
            $LastName = $_POST['LastName'];
            $Address = $_POST['Address'];
            $EmailAddress = $_POST['EmailAddress'];
            $PhoneNumber = $_POST['PhoneNumber'];
            $Password = $_POST['Password'];
            $RepeatPassword = $_POST['RepeatPassword'];       
            $User = $this->model->get_email_address("SELECT `EmailAddress` FROM `User` WHERE `EmailAddress` = ?", [$EmailAddress]);
            if(count($User) > 0) {
                $_SESSION["UserInfo"] = "This e-mail has already been registered!";
            } else if ($Password !== $RepeatPassword) {
                $_SESSION["UserInfo"] = "Your passwords do not match!";
            } else {
            $Query = $this->model->register_user($FirstName, $LastName, $Address, $EmailAddress, $PhoneNumber, $Password, $RepeatPassword);
            $_SESSION["UserInfo"] = "Registration successful!";
            }
            header("Location: ../Home");
        }
    }
}