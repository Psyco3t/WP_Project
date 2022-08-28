<?php
session_start();
require_once 'config.php';
require_once 'functions_def.php';

$wish=$_SESSION['wish'];
$sql="DELETE FROM wishlist WHERE text='$wish'";
mysqli_query($link,$sql);

redirection("../HTML/tablePage.php");
?>