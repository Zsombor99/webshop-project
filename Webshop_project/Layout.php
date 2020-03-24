<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title><?= $Title ?></title>
</head>

<body>
    <header>

        <nav class="bg-light fixed-top">
            <div class="d-flex flex-row align-items-center">      
                <img src="assets\pictures\logo.jpg" alt="Webshop logo" width="10%" height="10%">
                <a class="btn btn-success" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>home'><i class="fa fa-home"></i> Home</a>
                <a class="btn btn-success ml-2" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>contact_us'><i class="fa fa-address-book"></i> Contact</a>
                <a class="btn btn-success ml-2" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>about_us'><i class="fa fa-info"></i> About</a>
                <a class="btn btn-success ml-2" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>products'><i class="fa fa-product-hunt"></i> Products</a>
                <?php if((isset($_SESSION["UserLogged"])) && ($_SESSION["UserLogged"] === True)): ?>
                    <a class="btn btn-success ml-2" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>profile'><i class="fa fa-user"></i></i> Profile</a>
                    <a class="btn btn-success ml-2" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>loadup'><i class="fa fa-upload"></i> Loadup</a>
                    <form action="<?php Logout::_Logout() ?>" method="POST" class="d-flex ml-auto mr-2">
                        <button type="submit" class="btn btn-success text-white ml-2"><i class="fa fa-sign-out"></i> Logout</button>
                    </form>
                <?php else : ?>
                    <a class="btn btn-success ml-2" href='<?= explode("index", preg_quote($_SERVER['PHP_SELF']))[0] ?>login'><i class="fa fa-sign-in"></i> Login</a>
                    <a class="btn btn-success ml-2" href='<?= explode("index", preg_quote($_SERVER['PHP_SELF']))[0] ?>register'><i class="fa fa-user-plus"></i> Register</a>
                    <form action="<?php Login::_Login() ?>" method="POST" class="d-flex ml-auto mr-2">
                        <input class="ml-2 border border-success rounded" id="EmailAddress" type="email" name="EmailAddress" placeholder="Email address" required>
                        <input class="ml-2 border border-success rounded" id="Password" type="password" name="Password" placeholder="Password" required>
                        <button type="submit" class="btn btn-success ml-2">Login</button>
                    </form>
                <?php endif; ?>
            </div>
        </nav>

    </header>

    <main class="container mx-2 w-100">
        <?php include($Content) ?>
    </main>

    <footer>
        <div class="container-fluid">
            Copyright &copy; Webshop <?= date("Y") ?><br>
            <a href="https://www.google.com/intl/hu/policies/privacy/" target="_blank">Adatvédelem</a><span aria-hidden="true" role="presentation"> - </span><a href="https://www.google.com/intl/hu/policies/terms/" target="_blank">Általános Szerződési Feltételek</a>
            <br>E-mail: webshop@webshop.com<br>Phone number:+36/1234567<br>Address: 3300, Eger, Érsek utca 9
        </div>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>

</html>