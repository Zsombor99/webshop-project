<?php
    include "Header.php";
?>
<html>
    <head>
    <title>Register</title>
    <link rel stylesheet type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
</head>
<body>

<div class="container">
    <div class="row">
    <div class="cold-md-6">
        <h2>Register</h2>
    <form action="Register.php" method="post">
        <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" class="form-control" required>
        </div>
        <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
        </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    </div>
    </div>
<?php
    include "Footer.php";
?>