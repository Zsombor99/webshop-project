<?php
class Home extends Controller
{

    public $model;
    public $userModel;

    function __construct()
    {
        $this->model = $this->load_model('Home_model');
        $this->userModel = $this->load_model('User_model');
    }

    public function index(){

        $this->load_view('Home',$this->model);
    }
    /*
    public function login() {
        $emailAddress = $_POST['EmailAddress'];
        $password = $_POST['Password'];

        $user =  $this->userModel->get_user($emailAddress);

        if (count($user) > 0){
            if(password_verify($password, $user[0]["PasswordHash"])) {
                $_SESSION["UserLogged"] = True;
                $_SESSION["UserInfo"] = "Successful login";
                $_SESSION["UserFirstName"] = $this->userModel->get_first_name($emailAddress);
                $_SESSION["UserLastName"] = $this->userModel->get_last_name($emailAddress);
                $_SESSION["UserAddress"] = $this->userModel->get_address($emailAddress);
                $_SESSION["UserPhoneNumber"] = $this->userModel->get_phone_number($emailAddress);
                $_SESSION["UserEmailAddress"] = $this->userModel->get_email_address($emailAddress);
                $_SESSION["UserPassword"] = $this->userModel->get_password_hash($emailAddress);
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
    */
}