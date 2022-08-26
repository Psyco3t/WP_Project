<?php
session_start();
require_once '../PHP/config.php';
require_once '../PHP/functions_def.php';

$user=$_SESSION['tableOwner'];
$tableName=$_SESSION['table'];
$getUId="SELECT id FROM tablename WHERE username='$user'";
$id=mysqli_query($link,$getUId);
$idFetch=mysqli_fetch_array($id);
$idArray=$idFetch['id'];

$getSql1=fetchArrayFromTableInfo($tableName,1,$link);
$getSql2=fetchArrayFromTableInfo($tableName,2,$link);
$getSql3=fetchArrayFromTableInfo($tableName,3,$link);
$getSql4=fetchArrayFromTableInfo($tableName,4,$link);
$getSql5=fetchArrayFromTableInfo($tableName,5,$link);
$getSql6=fetchArrayFromTableInfo($tableName,6,$link);


$existsQ="
SELECT EXISTS
(SELECT * FROM jointable WHERE TableID=$getSql1 AND UID='$idArray') as output
";
$arrayKey=mysqli_query($link,$existsQ);
$result=mysqli_fetch_array($arrayKey);

if($result['output']!=1) {
    $setJointable = "INSERT INTO jointable (UID,TableID)
VALUES ('$idArray','$getSql1'),('$idArray','$getSql2'),('$idArray','$getSql3'),('$idArray','$getSql4'),('$idArray','$getSql5'),('$idArray','$getSql6')";
    mysqli_query($link, $setJointable);

    $email = $_SESSION['email'];
    shareMail($email);
    //echo "success";
}

redirection('../HTML/tablePage.php');
?>