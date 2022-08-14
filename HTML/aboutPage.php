<?php
session_start();
?>

<!DOCTYPE html>
<html style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EasyBudgeting</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<div style="flex: auto; display: flex;height: 100%; background-image: url('../resources/BudgetOpaque.png');background-size: 100% " id="ImageDiv">
    <div style="width: 20%;height: 100%"></div>
    <div style="width: 60%; padding: 100px;height: 100%; background-color: darkgray; opacity: 90%">
        <H2 style="text-align: center">So you want to register?</H2>
        <p style="font-size: 25px">Assuming you didnt read the home page first you must create an account register by providing your username a valid email and a password
        after that check your emails because we sent an activation code to you all you have to do is click the link or copy it into your browser
        aaaand you are done</p>
        <H2 style="text-align: center">Okay, I registered what now?</H2>
        <p style="font-size: 25px">
            So now that you have an account log in if you havent already or maybe you are already logged in
            after that go ahead and click on the Select/Create Table button here you will have to create a table and then select it or maybe
            you have already been thrown to the budget table page here you can edit and set your income and budget plans its recommended to categorize
            your budget tables so each table consists of 6 data tables. And that is basically it.
        </p>
    </div>
    <div style="width: 20%;height: 100%"></div>
</div>
</body>
</html>