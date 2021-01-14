<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
class Profile extends Controller
{
    protected string $Title = "Profile";

    public function index(){

        $this->load_view('Profile');
    }
    public $model;

    function __construct()
    {
        $this->model = $this->load_model('User_model');
    }

    public function UpdatePersonal() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $FirstName = $_POST['FirstName'];
            $LastName = $_POST['LastName'];
            $Address = $_POST['Address'];  
            $PhoneNumber = $_POST['PhoneNumber'];
            $Query = $this->model->update_personal($FirstName, $LastName, $Address, $PhoneNumber, $_SESSION['UserEmailAddress'][0][0]);
            $_SESSION["UserInfo"] = "Settings updated successfully!";
           
             header("Location: ../Home");
        }
    }

    public function UpdateEmail() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $CurrentEmailAddress = $_POST['CurrentEmailAddress'];
            $NewEmailAddress = $_POST['NewEmailAddress'];
            if($CurrentEmailAddress !== $_SESSION['UserEmailAddress'][0][0]) {
                $_SESSION["UserInfo"] = "The email addresses do not match!";                
            } else {
                $Query = $this->model->update_email($NewEmailAddress, $_SESSION['UserEmailAddress'][0][0]);
                $_SESSION["UserInfo"] = "Settings updated successfully!";
            }           
            header("Location: ../Home");
        }
    }

    public function UpdatePassword() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $CurrentPassword = $_POST['CurrentPassword'];
            $NewPassword = $_POST['NewPassword'];
            $RepeatNewPassword = $_POST['RepeatNewPassword'];            
            if (!password_verify($CurrentPassword, $_SESSION['UserPassword'][0][0])) {
                $_SESSION["UserInfo"] = "Your password verification is unsuccessful!";
            } else if ($NewPassword !== $RepeatNewPassword) {
                $_SESSION["UserInfo"] = "Your new passwords do not match!";
            } else {
                $Hash = password_hash($NewPassword, PASSWORD_BCRYPT);
                $Query = $this->model->update_password($Hash, $_SESSION['UserEmailAddress'][0][0]);
                $_SESSION["UserInfo"] = "Settings updated successfully!";
            }
            header("Location: ../Home");
        }
    }
}