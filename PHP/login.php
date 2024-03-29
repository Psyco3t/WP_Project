<?php
session_start();

require_once "config.php";
require "functions_def.php";

$referer = $_SERVER['HTTP_REFERER'];
$action = mysqli_real_escape_string($link, $_POST["action"]);
$ipAddr="";
$browser=$_SERVER['HTTP_USER_AGENT'];

$username = mysqli_real_escape_string($link, trim($_POST["username"]));
$password = mysqli_real_escape_string($link, trim($_POST["password"]));

if (!empty($username) AND !empty($password)) {
    $data = checkUserLogin($username, $password);

    if ($data AND is_int($data['id'])) {
        // session_regenerate_id();
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $data['id'];
        $ipAddr=$_SERVER['REMOTE_ADDR'];
        $sql="
        SELECT * FROM users
        WHERE username='$username' AND userPerms=1";
        $exec=mysqli_query($link,$sql);
        $fetch=mysqli_fetch_array($exec);
        $perms=$fetch['userPerms'];
        if($perms==1)
        {
            $_SESSION['admin']=true;
        }
        logInfo($browser,$ipAddr,$link,$username);
        $_SESSION['logged_in']=true;
        //echo'<script>alert("successfully logged in");window.location.href="../HTML/index.php" </script>';  //correct way of displaying alert message
        redirection('../HTML/index.php');
    } else {
        redirection('../HTML/loginPage.php?l=1');
    }

} else {
    redirection('../HTML/loginPage.php?l=1');
}