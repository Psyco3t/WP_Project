<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EasyBudgeting</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../javaCode/functions.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor">
</head>
<body>
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
                    <a href="index.php" style="text-decoration: none">Home</a>
                </li>
                <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: 10%">
                    <a href="#" style="text-decoration: none;">About</a>
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
<div style="display: flex">
    <div style="width: 30%"></div>
    <div style="width: 40%">
        <div class="container">
            <div class="row m-2">
                <div class="col p-3">
                    <h1>Register</h1>
                    <form action="../PHP/register.php" method="post" style="margin: 50px" id="registerForm">
                        <div class="form-group">
                            <label for="registerUsername">Username</label>
                            <input type="text" class="form-control" id="registerUsername"
                                   placeholder="Enter username" name="username">
                            <br>
                            <p id="1" style="color: red"></p>
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
                        <br>
                        <p id="2" style="color: red"></p>

                        <div class="form-group">
                            <label for="registerPasswordConfirm">Password confirm</label>
                            <input type="password" class="form-control" name="passwordConfirm" id="registerPasswordConfirm" placeholder="Password again">
                        </div>
                        <br>
                        <p id="3" style="color: red"></p>

                        <input type="hidden" name="action" value="register">
                        <button type="submit" class="btn btn-primary" onclick="onRegisterSubmit()">Register</button>

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
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="width: 30%"></div>
</div>
</body>
</html>