<?php
class Login extends Controller
{
    public $model;

    function __construct()
    {
        $this->model = $this->load_model('User_model');
    }

    function index(){}

    public function login() {
        $emailAddress = $_POST['EmailAddress'];
        $password = $_POST['Password'];

        $user =  $this->model->get_user($emailAddress);

        if (count($user) > 0){
            if(password_verify($password, $user[0]["PasswordHash"])) {
                $_SESSION["UserLogged"] = True;
                $_SESSION["UserInfo"] = "Successful login";
                $_SESSION["UserFirstName"] = $this->model->get_first_name($emailAddress);
                $_SESSION["UserLastName"] = $this->model->get_last_name($emailAddress);
                $_SESSION["UserAddress"] = $this->model->get_address($emailAddress);
                $_SESSION["UserPhoneNumber"] = $this->model->get_phone_number($emailAddress);
                $_SESSION["UserEmailAddress"] = $this->model->get_email_address($emailAddress);
                $_SESSION["UserPassword"] = $this->model->get_password_hash($emailAddress);
            }
            else{
                $_SESSION["UserInfo"] = "Wrong credentials!";
            }
        }
        else{
            $_SESSION["UserInfo"] = "This e-mail is not yet registered!";
        }     
        header("Location: Home");  
    }
}