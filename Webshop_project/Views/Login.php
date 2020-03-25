<div class="container-fluid">
<h1 class="text-center mx-auto">Login</h2>
<h6 class="text-center"> If you don't have an account, please <a class="text-decoration-none" href='<?= explode("index", preg_quote($_SERVER['PHP_SELF']))[0] ?>register'>register!</a></h6>
<div class="row text-center">
<div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <form class="form-container center-placeholder" action="<?php Login::_Login() ?>" method="post">
            <div class="form-group">
                <label class="tx" for="EmailAddress">E-mail address</label>
                <input id="EmailAddress" type="email" name="EmailAddress" class="form-control" placeholder="Your e-mail address..." required>
            </div>
            <div class="form-group">
                <label class="tx" for="Password">Password</label>
                <input id="Password" type="password" name="Password" class="form-control" placeholder="Your password..." required>
            </div>
            <button type="submit" class="btn btn-warning btn-block">Login</button>
        </form>
    </div>
</div>