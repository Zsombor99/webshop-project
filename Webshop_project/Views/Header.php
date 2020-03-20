<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div>
<header>
<div>
    <nav>            
        <ul class="main_menu">
        
        
            <img src="../assets/pictures/logo.png" alt="Webshop logo" width="100%" height="100%">
            <li class="menu"><a class="amenu" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0] ?>/'>Home</a></li>
            <li class="menu"><a class="amenu" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0] ?>contact_us'>Contact</a></li>
            <li class="menu"><a class="amenu" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0] ?>about_us'>About</a></li>
            <li class="menu"><a class="amenu" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0] ?>login'>Login</a></li>  
            <li class="menu"><a class="amenu" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0] ?>register'>Register</a></li>  
        </ul>
    </nav>
</div>
</header>