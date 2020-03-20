<html>
    <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
</head>
<body>

<div class="container">
    <div class="row">
    <div class="cold-md-6">
        <h2>Login</h2>
    <form action="Validation.php" method="post">
        <div class="form-group">
        <label for="EmailAddress">E-mail Address</label>
        <input id="EmailAddress" type="email" name="EmailAddress" class="form-control" required>
        </div>
    <div class="form-group">
        <label for="Password">Password</label>
        <input id="Password" type="password" name="Password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary"> Login </button>
    </form>
    </div>
    </div>

<?php
    include "Footer.php";
?>
