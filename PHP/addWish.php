<?php
session_start();
require_once 'config.php';
require_once 'functions_def.php';

$wish=mysqli_real_escape_string($link,trim($_POST['wishlist']));
$budget=mysqli_real_escape_string($link,trim($_POST['text']));
$tableName=$_SESSION['table'];

$sqlScript="INSERT INTO wishlist
(text,budget,TableName)
VALUES ('$wish','$budget','$tableName')";
mysqli_query($link,$sqlScript);

redirection("../HTML/tablePage.php");
?>