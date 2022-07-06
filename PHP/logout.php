<?php

require_once 'functions_def.php';

session_start();
$_SESSION = array();
$_SESSION['logged_in']=false;

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();


redirection("../HTML/index.php");

exit();
