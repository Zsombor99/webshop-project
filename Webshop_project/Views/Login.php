<style>
.form-container {
    border: 1px solid #4e0e0f;
    padding: 50px 60px;
    margin-top: 6vh;
    -webkit-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    background-color: #28a745

}
.tx {
    color: #e4feff;
}

</style>
<div class="container-fluid bg">
<h1 class="text-center l">Login</h2>
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