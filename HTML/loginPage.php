<!DOCTYPE html>
<html style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EasyBudgeting</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../javaCode/functions.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor">
</head>
<body style="height: 100%">
<div style="width: available">
    <div style="height: 150px; background-color: brown; width: auto">
    </div>
    <div style="height: 20px; background-color: blue; width: auto">
    </div>
    <div style="height: 100px; background-color: brown; align-items: center; display: flex; width: 100%">
        <div style="padding-right: 55%">

        </div>
        <nav style="display: flex; align-items: center; float: right; width: auto">
            <ul style="display: flex; list-style-type: none; margin: 0 auto; gap: 2rem; flex-wrap: wrap">
                <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: 10%">
                    <a href="../HTML/index.php" style="text-decoration: none">Home</a>
                </li>
                <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: 10%">
                    <a href="../HTML/aboutPage.php" style="text-decoration: none;">About</a>
                </li>
                <!---<li style="text-transform: uppercase; font-weight: bold; margin: auto;">
                 <a href="#" style="text-decoration: none">Users</a>
                </li>---->
                <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: auto">
                    <a href="loginPage.php"<?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                        echo 'style="display:none;"'; }
                    else{
                        echo 'style="display:block;"';}?>

                    >Sign In</a>

                </li>
                <li id="register" style="text-transform: uppercase; font-weight: bold; margin: auto; width: auto">
                    <a href="registerPage.php" <?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                        echo 'style="display:none;"'; }
                    else{
                        echo 'style="display:block;"';}?>> Register</a>
                </li>
                <li id="logout" style="text-transform: uppercase; font-weight: bold; margin: auto; width: 10%">
                    <a href="../PHP/logout.php" <?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                        echo 'style="display:block;"'; }
                    else{
                        echo 'style="display:none;"';}?>> LOGOUT</a>
                </li>
                <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: auto">
                    <a href="../HTML/dbSelectPage.php" <?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                        echo 'style="display:block;"'; }
                    else{
                        echo 'style="display:none;"';}?>>Select/Create Table</a>

                </li>

                <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: 10%">
                    <a href="../HTML/adminPage.php" <?php if(ISSET($_SESSION['admin'])  && $_SESSION['admin']==true){

                        echo 'style="display:block;"'; }
                    else{
                        echo 'style="display:none;"';}?>>AdminPanel</a>

                </li>

            </ul>
        </nav>
    </div>
</div>
<div class="col bg-light p-3" style="display: flex;height: 100%">
    <div style="width: 30%"></div>
    <div style="width: 40%">
        <form action="../PHP/login.php" method="post" style="margin-top: 100px; width: auto;">
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
            <br>
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
        <form action="../PHP/reset.php" method="post" name="forget" id="forget" style="display:none; width: 40%;margin-left: 40%">
            <div class="form-group">
                <label for="forgetEmail">E-mail</label>
                <input type="email" class="form-control" id="forgetEmail" placeholder="Enter your e-mail address"
                       name="email">
            </div>
            <input type="hidden" name="action" value="forget">
            <button type="submit" class="btn btn-primary" onsubmit="emailSent(); resetEmailCheck()" onclick="emailSent()">Send Email</button>
        </form>

    </div>
    <div style="width: 30%"></div>
</body>
</html>