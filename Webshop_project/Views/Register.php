
<div class="container-fluid">
<h1 class="text-center">Register</h1>
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12"></div>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <form class="form-container" action="<?php Register::_Register() ?>" method="post">
            <div class="form-group">
                <label class="tx" for="FirstName">FirstName</label>
                <input id="FirstName" type="text" name="FirstName" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="tx" for="LastName">LastName</label>
                <input id="LastName" type="text" name="LastName" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="tx" for="EmailAddress">E-mail Address</label>
                <input id="EmailAddress" type="email" name="EmailAddress" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="tx" for="Password">Password</label>
                <input id="Password" type="password" name="Password" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="tx" for="Address">Address</label>
                <input id="Address" type="text" name="Address" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="tx" for="PhoneNumber">PhoneNumber</label>
                <input id="PhoneNumber" type="text" name="PhoneNumber" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-warning btn-block"> Register </button>
        </form>
    </div>
</div>