<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Haztartas</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
 </head>
 <body>
  <div>
   <div style="height: 150px; background-color: brown;">
   </div>
   <div style="height: 20px; background-color: blue;">
   </div>
   <div style="height: 100px; background-color: brown; align-items: center; display: flex;">
    <div style="padding-right: 65%;">

    </div>
    <nav style="display: flex; align-items: center; float: right;">
    <ul style="display: flex; list-style-type: none; margin: 0 auto; gap: 2rem;">
     <li style="text-transform: uppercase; font-weight: bold; margin: auto;">
      <a href="index.php" style="text-decoration: none">Home</a>
     </li>
     <li style="text-transform: uppercase; font-weight: bold; margin: auto;">
      <a href="#" style="text-decoration: none;">About</a>
     </li>
     <li style="text-transform: uppercase; font-weight: bold; margin: auto;">
      <a href="#" style="text-decoration: none">Users</a>
     </li>
     <li style="text-transform: uppercase; font-weight: bold; margin: auto;">
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

    </ul>
   </nav>
   </div>
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