<?php
session_start();
require_once 'config.php';
require_once 'functions_def.php';
$newPassword='';
$email=$_SESSION['email'];

if(isset($_POST['password'])){
    $newPassword=mysqli_real_escape_string($link,trim($_POST["password"]));

}

if (empty($newPassword) OR strlen($newPassword) < 7) {
    echo "your password is too short or something went wrong";
}

$hashPass=password_hash($newPassword,PASSWORD_BCRYPT);

$sqlQuery="
UPDATE users
SET
password='$hashPass'

WHERE email='$email'";

mysqli_query($link,$sqlQuery);

if (!empty($resetToken) AND strlen($resetToken) === 60) {
    $sql = "UPDATE users_web SET  resetToken='$resetToken'
            WHERE  binary resetToken = '$resetToken'";

    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

}

session_destroy();
redirection("../HTML/index.php");