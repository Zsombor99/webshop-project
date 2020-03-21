<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title><?=$Title?></title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light navbar-fixed-top"> 
            <div class="container-fluid">
                <form>
                    <!-- Csak tudnám, hogy ez(img) miért nem akar jó lenni sehogy... -->
                    <img src="assets\pictures\logo.jpg" alt="Webshop logo" width="100%" height="100%">
                    <a class="btn btn-primary" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>'><i class="fa fa-home"></i> Home</a>
                    <a class="btn btn-primary" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>contact_us'><i class="fa fa-address-book"></i> Contact</a>
                    <a class="btn btn-primary" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>about_us'><i class="fa fa-info"></i> About</a>
                    <!-- A logoutot meg kell írni ehhez, hogy rendesen működjön -->
                    <?php if($_SESSION['UserInfo'] === "Successful login"): ?>
                    <a class="btn btn-primary text-white"><i class="fa fa-sign-out"></i> Logout</a>
                    <?php else: ?>
                    <a class="btn btn-primary" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>login'><i class="fa fa-sign-in"></i> Login</a>
                    <a class="btn btn-primary" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>register'><i class="fa fa-user-plus"></i> Register</a>
                    <?php endif; ?>
                </form>
            </div>            
        </nav>
    </header>
    <main class="container">
        <?php include($Content)?>
    </main>
    <footer>
    <div class="container-fluid">
        Copyright &copy; Webshop <?=date("Y")?><br>
        <a href="https://www.google.com/intl/hu/policies/privacy/" target="_blank">Adatvédelem</a><span aria-hidden="true" role="presentation"> - </span><a href="https://www.google.com/intl/hu/policies/terms/" target="_blank">Általános Szerződési Feltételek</a>
        <br>E-mail: webshop@webshop.com<br>Phone number:+36/1234567<br>Address: 3300, Eger, Érsek utca 9
    </div>
    </footer>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>
</html>