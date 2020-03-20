<?php
    include "Header.php";
?>
<body>

<div class="container">
    <div class="row">
    <div class="cold-md-6">
        <h2>Register</h2>
        <form action="Register.php" method="post">
            <div class="form-group">
            <label>FirstName</label>
            <input type="text" name="FirstName" class="form-control" required>
            </div>
            <div class="form-group">
            <label>LastName</label>
            <input type="text" name="LastName" class="form-control" required>
            </div>
            <div class="form-group">
            <label>E-mail Address</label>
            <input type="email" name="EmailAddress" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Password</label>
            <input type="password" name="Password" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Address</label>
            <input type="password" name="Address" class="form-control" required>
            </div>
            <div class="form-group">
            <label>PhoneNumber</label>
            <input type="password" name="PhoneNumber" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"> Register </button>
        </form>
    </div>
    </div>
<?php
    include "Footer.php";
?>