<html>
    <head>
    <title> Login </title>
    <link rel stylesheet type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
</head>
<body>

<div class="container">
    <div class="row">
    <div class="cold-md-6">
        <h2> Login </h2>
    <form action="Validation.php" method="post">
        <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" class="form-control" required>
        </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary"> Login </button>
    </form>
    </div>
    </div>