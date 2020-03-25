<div class="container-fluid">
<h1 class="text-center">Register</h1>
<h6 class="text-center">Already a member? <a class="text-decoration-none" href='<?= explode("index", preg_quote($_SERVER['PHP_SELF']))[0] ?>login'>Login!</a></h6>
<div class="row text-center">
<div class="col-md-4 col-sm-4 col-xs-12"></div>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <form class="form-container center-placeholder" action="<?php Register::_Register() ?>" method="post">
            <div class="form-group">
                <label class="tx" for="FirstName">First name</label>
                <input id="FirstName" type="text" name="FirstName" class="form-control" placeholder="Your first name..." required>
            </div>
            <div class="form-group">
                <label class="tx" for="LastName">Last name</label>
                <input id="LastName" type="text" name="LastName" class="form-control" placeholder="Your last name..." required>
            </div>
            <div class="form-group">
                <label class="tx" for="EmailAddress">E-mail address</label>
                <input id="EmailAddress" type="email" name="EmailAddress" class="form-control" placeholder="Your e-mail address..." required>
            </div>
            <div class="form-group">
                <label class="tx" for="Password">Password</label>
                <input id="Password" type="password" name="Password" class="form-control" placeholder="Your password..." required>
            </div>
            <div class="form-group">
                <label class="tx" for="RepeatPassword">Repeat password</label>
                <input id="RepeatPassword" type="password" name="Password" class="form-control" placeholder="Repeat Your password..." required>
            </div>
            <div class="form-group">
                <label class="tx" for="Address">Address</label>
                <input id="Address" type="text" name="Address" class="form-control" placeholder="Your address..." required>
            </div>
            <div class="form-group">
                <label class="tx" for="PhoneNumber">Phone number</label>
                <input id="PhoneNumber" type="text" name="PhoneNumber" class="form-control" placeholder="Your phone number..." required>
            </div>
            <button type="submit" class="btn btn-warning btn-block">Register</button>
        </form>
    </div>
</div>