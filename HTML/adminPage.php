<?php
session_start();
require_once '../PHP/config.php';
require_once '../PHP/functions_def.php';
$sql="SELECT * FROM logs";
$ExecSql=$link->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminPage</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor">
</head>
<body>
<div>
    <div style="height: 150px; background-color: brown;">
    </div>
    <div style="height: 20px; background-color: blue;">
    </div>
    <div style="height: 100px; background-color: brown; align-items: center; display: flex;">
        <div style="padding-right: 60%;">

        </div>
        <nav style="display: flex; align-items: center; float: right; width: 100%">
            <ul style="display: flex; list-style-type: none; margin: 0 auto; gap: 2rem;">
                <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: 20%">
                    <a href="index.php" style="text-decoration: none">Home</a>
                </li>
                <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: 20%">
                    <a href="#" style="text-decoration: none;">About</a>
                </li>
                <!---<li style="text-transform: uppercase; font-weight: bold; margin: auto;">
                 <a href="#" style="text-decoration: none">Users</a>
                </li>---->
                <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: 30%">
                    <a href="loginPage.php"<?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                        echo 'style="display:none;"'; }
                    else{
                        echo 'style="display:block;"';}?>

                    >Sign In</a>

                </li>
                <li id="register" style="text-transform: uppercase; font-weight: bold; margin: auto;">
                    <a href="registerPage.php" <?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                        echo 'style="display:none;"'; }
                    else{
                        echo 'style="display:block;"';}?>> Register</a>
                </li>
                <li id="logout" style="text-transform: uppercase; font-weight: bold; margin: auto;">
                    <a href="../PHP/logout.php" <?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                        echo 'style="display:block;"'; }
                    else{
                        echo 'style="display:none;"';}?>> LOGOUT</a>
                </li>
                <li style="text-transform: uppercase; font-weight: bold; margin: auto;">
                    <a href="../HTML/dbSelectPage.php" <?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                        echo 'style="display:block;"'; }
                    else{
                        echo 'style="display:none;"';}?>>Select/Create Table</a>

                </li>

                <li style="text-transform: uppercase; font-weight: bold; margin: auto;">
                    <a href="../HTML/adminPage.php" <?php if(ISSET($_SESSION['admin'])  && $_SESSION['admin']==true){

                        echo 'style="display:block;"'; }
                    else{
                        echo 'style="display:none;"';}?>>AdminPanel</a>

                </li>

            </ul>
        </nav>
    </div>
</div>

<div>
    <div style="padding: 100px;display: flex">
        <div style="margin-left: 100px; display: flex">
            <div>
                <table>
                    <tr>
                    <th>User</th>
                    <th>Browser</th>
                    <th>IP</th>
                    <th>Date</th>
                    </tr>
                    <?php while($fetchdata=$ExecSql->fetch_assoc())
                    { ?>
                    <tr>
                        <td><?php echo $fetchdata['user'] ." ";?> </td>
                        <td><?php echo $fetchdata['browser']. " ";?> </td>
                        <td><?php echo $fetchdata['ip']. " ";?> </td>
                        <td><?php echo $fetchdata['loginDate']. " ";?> </td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
