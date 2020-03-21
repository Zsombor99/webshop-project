<div class="row">
    <div class="cold-md-6">
        <h2>Register</h2>
        <form action="<?php Register::_Register() ?>" method="post">
            <div class="form-group">
                <label for="FirstName">FirstName</label>
                <input id="FirstName" type="text" name="FirstName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="LastName">LastName</label>
                <input id="LastName" type="text" name="LastName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="EmailAddress">E-mail Address</label>
                <input id="EmailAddress" type="email" name="EmailAddress" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input id="Password" type="password" name="Password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Address">Address</label>
                <input id="Address" type="text" name="Address" class="form-control" required>
            </div>
            <div clas s="form-group">
                <label for="PhoneNumber">PhoneNumber</label>
                <input id="PhoneNumber" type="text" name="PhoneNumber" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"> Register </button>
        </form>
    </div>
</div>