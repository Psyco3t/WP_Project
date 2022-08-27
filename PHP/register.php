<?php
session_start();

//include '../javaCode/functions.js';
require_once "config.php";
require "functions_def.php";

$username = "";
$password = "";
$passwordConfirm = "";
$email = "";
$action = "";

$referer = $_SERVER['HTTP_REFERER'];
$action = mysqli_real_escape_string($link, $_POST["action"]);

if(isset($_POST['username'])) {
    $username = mysqli_real_escape_string($link, trim($_POST["username"]));
}

if (isset($_POST['password'])) {
    $password = mysqli_real_escape_string($link, trim($_POST["password"]));
}

if (isset($_POST['passwordConfirm'])) {
    $passwordConfirm = mysqli_real_escape_string($link, trim($_POST["passwordConfirm"]));
}

if (isset($_POST['email'])) {
    $email = mysqli_real_escape_string($link, trim($_POST["email"]));
}

if (empty($username)) {
    redirection('../HTML/registerPage.php?r=4');
}

if (empty($password) OR strlen($password) < 7) {
    redirection('../HTML/registerPage.php?r=9');
}

if (empty($passwordConfirm) OR strlen($passwordConfirm) < 7) {
    redirection('../HTML/registerPage.php?r=9');
}

if ($password !== $passwordConfirm) {
    redirection('../HTML/registerPage.php?r=7');
}

if (empty($email) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirection('../HTML/registerPage.php?r=8');
}

if (!existsUser($email)) {
    $token = createCode(40);
    $id_user_web = registerUser($username, $password, $email, $token);
    if (sendData($username, $email, $token)) {
        echo '<script type="text/javascript" src="../javaCode/functions.js">registerSuccess(); </script>';
        redirection("../HTML/index.php");
    }
}
else {
    redirection('../PHP/register.php?r=2');
}
