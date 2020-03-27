<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
        <title><?= $Title ?></title>
    </head>
    <body>
        <header>
            <div id="logo">
                <img src="assets\pictures\logo.png" alt="Webshop logo" />
            </div>
            <nav>
                <a class="button" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>Home'><i class="fa fa-home"></i>Home</a>
                <a class="button" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>ContactUs'><i class="fa fa-address-book"></i>Contact</a>
                <a class="button" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>AboutUs'><i class="fa fa-info"></i>About</a>
                <?php if((isset($_SESSION["UserLogged"])) && ($_SESSION["UserLogged"] === True)): ?>
                <a class="button" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>Profile'><i class="fa fa-user"></i></i>Profile</a>
                <a class="button" href='<?=explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>LoadUp'><i class="fa fa-upload"></i>Loadup</a>
                <form action="<?php Logout::_Logout() ?>" method="POST">
                    <button class="button logout" type="submit"><i class="fa fa-sign-out"></i>Logout</button>
                </form>
                <?php else: ?>
                <a class="button" href='<?= explode("index", preg_quote($_SERVER['PHP_SELF']))[0] ?>Register'><i class="fa fa-user-plus"></i>Register</a>
                <div id="loginarea">
                    <form action="<?php Login::_Login() ?>" method="POST">
                        <input id="EmailAddress" type="email" name="EmailAddress" placeholder="Email address" required="required">
                        <input id="Password" type="password" name="Password" placeholder="Password" required="required">
                        <button class="button" type="submit">Login</button>
                    </form>
                </div>
                <?php endif ?>
            </nav>               
        </header>
        <main>
            <?php include($Content) ?>
        </main>
        <footer>
            <div>
                <div id="social-icons">
                    <a class="fb-ic">
                        <i class="fa fa-facebook-f fa-lg white-text mr-md-4 mr-3 fa-2x"></i>
                    </a>
                    <a class="tw-ic">
                        <i class="fa fa-twitter fa-lg white-text mr-md-4 mr-3 fa-2x"></i>
                    </a>
                    <a class="ins-ic">
                        <i class="fa fa-instagram fa-lg white-text mr-md-4 mr-3 fa-2x"></i>
                    </a>
                    <a class="ytb-yt">
                        <i class="fa fa-youtube fa-lg white-text mr-md-4 mr-3 fa-2x"></i>
                    </a>
                </div>
                <div id="contact-info">
                    <p>E-mail: webshop@webshop.com<br>Phone number:+36/1234567 <br> Address: 3300, Eger, Érsek utca 9</p>
                    <a href="https://www.google.com/intl/hu/policies/privacy/" target="_blank">Adatvédelem</a>
                    <span aria-hidden="true" role="presentation"> - </span>
                    <a href="https://www.google.com/intl/hu/policies/terms/" target="_blank">Általános Szerződési Feltételek</a>
                </div>
            </div>
            <div id="copyright">Copyright &copy; Webshop <?= date("Y") ?></div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>