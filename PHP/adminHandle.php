<?php
session_start();
require_once '../PHP/config.php';
require_once '../PHP/functions_def.php';
$table=$_POST['tables'];
//echo $table;

if (isset($_POST['denyBtn']))
{
    //echo 'Publish-button was clicked';
    $sql="UPDATE tableinfo SET active=0 WHERE tableName='$table' AND ID=1";
    mysqli_query($link,$sql);
    redirection('../HTML/adminPage.php');

}
elseif (isset($_POST['allowBtn']))
{
    $sql="UPDATE tableinfo SET active=1 WHERE tableName='$table' AND ID=1";
    mysqli_query($link,$sql);
    redirection('../HTML/adminPage.php');
}

?>