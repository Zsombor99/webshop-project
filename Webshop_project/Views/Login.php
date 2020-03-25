
<div class="container-fluid">
<h1 class="text-center mx-auto">Login</h2>
<h6 class="text-center"> If you don't have an account, please register!</h5>
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <form class="form-container" action="<?php Login::_Login() ?>" method="post">
            <div class="form-group">
                <label class="tx" for="EmailAddress">E-mail</label>
                <input id="EmailAddress" type="email" name="EmailAddress" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="tx" for="Password">Password</label>
                <input id="Password" type="password" name="Password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-warning btn-block">Login</button>
        </form>
    </div>
</div>