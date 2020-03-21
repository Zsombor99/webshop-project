<h1>Welcome!</h1>
<?php 
if(!empty($_SESSION["UserInfo"])){
    print_r($_SESSION["UserInfo"]);
}
