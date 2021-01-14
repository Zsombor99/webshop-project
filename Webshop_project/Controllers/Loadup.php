<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
class LoadUp extends Controller
{
    protected string $Title = "LoadUp";
    public function index(){

        $this->load_view('Loadup');
    }
    public $model;

    function __construct()
    {
        $this->model = $this->load_model('Product_model');
    }
    
    public  function _LoadUp() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Msg = "";        
			$ImageTarget = "./assets/pictures/" . basename($_FILES['ProductImage']['name']); 
            $ProductImage = $_FILES['ProductImage']['name'];
            $ProductCategory = $_POST['ProductCategory'][0];
            $ProductName = $_POST['ProductName'];
            $ProductPrice = $_POST['ProductPrice'];
            $ProductQuantity = $_POST['ProductQuantity'];
            $ProductDescription = $_POST['ProductDescription'];
			$Query = $this->model->InsertProduct($ProductName, $ProductImage, $ProductQuantity, $ProductDescription, $ProductPrice, $ProductCategory);
            $_SESSION["LoadUp"]["MSG"] = "Successful upload";
			
            if(move_uploaded_file($_FILES['ProductImage']['tmp_name'], $ImageTarget)) {
                $Msg = "Image uploaded succesfully";
            } else {
                $Msg = "There was a problem uploading image";
            }    
            
            
            header("Location: ../LoadUp");
        }     
    }
}