<?php

session_start();

require '../PHP/functions_def.php';
require_once '../PHP/config.php';

$email="";
$resetToken="";

if(isset($_POST['email'])){
    $email=mysqli_real_escape_string($link,trim($_POST['email']));
}

$resetToken=createCode(60);

$query="UPDATE users
SET 
resetToken='$resetToken'

WHERE email='$email'
";

mysqli_query($link,$query);

sendPass('You',$email,$resetToken);

$_SESSION['email']=$email;

redirection('../HTML/loginPage.php');