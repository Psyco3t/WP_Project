<?php
session_start();
require_once '../PHP/config.php';
require_once '../PHP/functions_def.php';
$user=$_SESSION['username'];

$selectQuery="SELECT * FROM users WHERE username!='$user'";

$selectExec=mysqli_query($link,$selectQuery);
?>

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

<div style="display: flex;height: 100%" class="col bg-light p-3">
    <div style="width: 20%"></div>
    <div style="width: 60%">
        <div>
            <form action="../PHP/share.php" method="post" style="width: auto;height: 100%" id="selectForm">
                <h1>Select a user to share with</h1>
                <div class="form-group" style="margin: auto">
                    <select class="custom-select custom-select-lg mb-3" id="select" name="tables">
                        <option selected disabled value="default">Select</option>
                        <?php while($table=mysqli_fetch_array($selectExec)):;?>
                            <option value="<?php echo $table['username']; ?>"> <?php echo $table['username']; ?></option>
                            <?php $_SESSION['tableOwner']=$table['username'];
                        endwhile;?>
                    </select>
                    <p id="1" style="color: red"></p>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="createBtn" onclick="" value="Create">Share</button>
            </form>
        </div>
        <div style="width: 20%"></div>
    </div>
</body>
</html>