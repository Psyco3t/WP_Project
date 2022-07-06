<?php

require "../PHP/config.php";
require "../PHP/functions_def.php";

$code = "";

if (isset($_GET['token'])){
    $token = mysqli_real_escape_string($link, trim($_GET['token']));
}
    
if (!empty($token) AND strlen($token) === 40) {
    $sql = "UPDATE users SET active='1', token='', registration_expires=''
            WHERE  binary token = '$token' AND registration_expires>now()";

    $result = mysqli_query($link, $sql) or die(mysqli_error($link));

    if (mysqli_affected_rows($link) > 0) {
       redirection('../HTML/loginPage.php?r=6');
    }
    else {
        redirection('../HTML/registerPage.php?r=11');
    }
}
else {
    redirection('../HTML/registerPage.php?r=0');
}