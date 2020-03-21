<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <title><?=$Title?></title>
</head>
<body>
    <header>
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
    </header>
    <main class="container">
        <?php include($Content)?>
    </main>
    <footer>
        <p id="footer">Copyright &copy Webshop <?=date("Y")?></p>
        <div class="rc-anchor-pt"><a href="https://www.google.com/intl/hu/policies/privacy/" target="_blank">Adatvédelem</a><span aria-hidden="true" role="presentation"> - </span><a href="https://www.google.com/intl/hu/policies/terms/" target="_blank">Általános Szerződési Feltételek</a></div></div>
        <div class="contact">E-mail: webshop@webshop.com<br> Phone number:+36/1234567<br>Address: 3300, Eger, Érsek utca 9.</div>
    </footer>
    <script src="<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0] ?>assets/vendor/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0] ?>assets/vendor/jquery/jquery-3.4.1"></script>
    <script src="<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0] ?>assets/vendor/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>
</html>