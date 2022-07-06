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
            <h1>New Password</h1>
            <form action="../PHP/password.php" method="post" style="margin: 50px; width: 50%;">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password"
                           placeholder="Enter new password" name="password">
                </div>
                <input type="hidden" name="action" value="forget">
                <button type="submit" class="btn btn-primary">Confirm</button>
            </form>
</body>
</html>