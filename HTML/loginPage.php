<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="../javaCode/functions.js"></script>

</head>
<body>
<div class="col bg-light p-3">
    <form action="../PHP/login.php" method="post" style="margin-left: 800px; margin-right: 800px; margin-top: 150px; width: 20%;">
        <h1>Login</h1>
        <div class="form-group">
            <label for="loginUsername">Username</label>
            <input type="text" class="form-control" id="loginUsername"
                   placeholder="Enter username" name="username">
        </div>
        <div class="form-group">
            <label for="loginPassword">Password</label>
            <input type="password" class="form-control" id="loginPassword" placeholder="Password"
                   name="password">
        </div>
        <input type="hidden" name="action" value="login">
        <button type="submit" class="btn btn-primary" onsubmit="loginSuccess()" onclick="loginCheck()">Login</button><br>

        <?php
        require '../PHP/config.php';
        $l = 0;

        if (isset($_GET["l"]) and is_numeric($_GET['l'])) {
            $l = (int)$_GET["l"];

            if (array_key_exists($l, $messages)) {
                echo '
                    <div class="alert alert-info alert-dismissible fade show m-3" role="alert">
                        '.$messages[$l].'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    ';
            }
        }
        ?>

        <a href="#" id="fl">Forgot your password?</a>
    </form>
    <form action="../PHP/reset.php" method="post" name="forget" id="forget" style="display:none; width: 20%;margin-left: 40%">
        <div class="form-group">
            <label for="forgetEmail">E-mail</label>
            <input type="email" class="form-control" id="forgetEmail" placeholder="Enter your e-mail address"
                   name="email">
        </div>
        <input type="hidden" name="action" value="forget">
        <button type="submit" class="btn btn-primary" onsubmit="emailSent(); resetEmailCheck()" onclick="emailSent()">Send Email</button>
    </form>
</body>
</html>