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
  <div style="width: auto">
   <div style="height: 150px; background-color: brown; width: auto">
   </div>
   <div style="height: 20px; background-color: blue; width: auto">
   </div>
   <div style="height: 100px; background-color: brown; align-items: center; display: flex; width: 100%">
    <div style="padding-right: 55%">

    </div>
    <nav style="display: flex; align-items: center; float: right; width: auto">
    <ul style="display: flex; list-style-type: none; margin: 0 auto; gap: 2rem; flex-wrap: wrap">
     <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: auto">
      <a href="index.php" style="text-decoration: none">Home</a>
     </li>
     <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: auto">
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
 <div style="flex: auto; display: flex;height: 100%; background-image: url('../resources/BudgetOpaque.png');background-size: 100% " id="ImageDiv">
     <div style="width: 20%;height: auto"></div>
     <div style="width: 60%; padding: 100px;height: auto; background-color: darkgray; opacity: 90%">
         <H2 style="text-align: center">Welcome</H2>
         <p style="font-size: 25px">Welcome to EasyBudgeting! A simple site meant to help you set up your budget plans. You can read more about it in the
             about tab on the navbar and once you are ready you can start with registering an account and logging in. Make sure you check your emails once you
             register, hope you will enjoy this site!</p>
     </div>
     <div style="width: 20%;height: auto"></div>
 </div>
 </body>
</html>

<?php
/*session_start(); POG
if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true) {
    echo'<script src="../javaCode/functions.js" type="text/javascript">loggedIn()</script>';
} else {
    // display login link
    echo '<script src="../javaCode/functions.js" type="text/javascript">loggedOut()</script>';
}*/
?>