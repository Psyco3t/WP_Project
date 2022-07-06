<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="../javaCode/login.js"></script>

</head>
<body>
<div class="container">
    <div class="row m-2">
        <div class="col p-3">
            <h1>Register</h1>
            <form action="../PHP/register.php" method="post" style="margin: 50px">
                <div class="form-group">
                    <label for="registerUsername">Username</label>
                    <input type="text" class="form-control" id="registerUsername"
                           placeholder="Enter username" name="username">
                </div>


                <div class="form-group">
                    <label for="registerEmail">E-mail address</label>
                    <input type="email" class="form-control" id="registerEmail"
                           placeholder="Enter valid e-mail address" name="email">
                </div>

                <div class="form-group">
                    <label for="registerPassword">Password</label>
                    <input type="password" class="form-control" name="password" id="registerPassword" placeholder="Password (min 8 characters)">
                </div>

                <div class="form-group">
                    <label for="registerPasswordConfirm">Password confirm</label>
                    <input type="password" class="form-control" name="passwordConfirm" id="registerPasswordConfirm" placeholder="Password again">
                </div>

                <input type="hidden" name="action" value="register">
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
</body>
</html>