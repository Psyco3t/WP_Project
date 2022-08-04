<?php
session_start();
require_once '../PHP/config.php';
require_once '../PHP/functions_def.php';
$sql="SELECT * FROM tableinfo";
$count=mysqli_query($link,$sql);
$getCount=mysqli_num_rows($count);

$date=mysqli_real_escape_string($link,$_POST['date']);
$desc=mysqli_real_escape_string($link,$_POST['desc']);
$budget=mysqli_real_escape_string($link,$_POST['budget']);
$total=mysqli_real_escape_string($link,$_POST['total']);
$income=mysqli_real_escape_string($link,$_POST['income']);
$otherIncome=mysqli_real_escape_string($link,$_POST['otherIncome']);
$tableName=$_SESSION['table'];

$date2=mysqli_real_escape_string($link,$_POST['date2']);
$desc2=mysqli_real_escape_string($link,$_POST['desc2']);
$budget2=mysqli_real_escape_string($link,$_POST['budget2']);
$total2=mysqli_real_escape_string($link,$_POST['total2']);

$date3=mysqli_real_escape_string($link,$_POST['date3']);
$desc3=mysqli_real_escape_string($link,$_POST['desc3']);
$budget3=mysqli_real_escape_string($link,$_POST['budget3']);
$total3=mysqli_real_escape_string($link,$_POST['total3']);

$date4=mysqli_real_escape_string($link,$_POST['date4']);
$desc4=mysqli_real_escape_string($link,$_POST['desc4']);
$budget4=mysqli_real_escape_string($link,$_POST['budget4']);
$total4=mysqli_real_escape_string($link,$_POST['total4']);

$date5=mysqli_real_escape_string($link,$_POST['date5']);
$desc5=mysqli_real_escape_string($link,$_POST['desc5']);
$budget5=mysqli_real_escape_string($link,$_POST['budget5']);
$total5=mysqli_real_escape_string($link,$_POST['total5']);

$date6=mysqli_real_escape_string($link,$_POST['date6']);
$desc6=mysqli_real_escape_string($link,$_POST['desc6']);
$budget6=mysqli_real_escape_string($link,$_POST['budget6']);
$total6=mysqli_real_escape_string($link,$_POST['total6']);


if(isset($_POST['SubmitBtn']))
{

        $updateQuery = "
    UPDATE tableinfo 
    SET 
    currentDate='$date',
    budgetDescript='$desc',
    budget='$budget',
    Total='$total',
    income='$income',
    otherIncome='$otherIncome'
    WHERE
    tableName='$tableName' AND ID=1";
    mysqli_query($link, $updateQuery);

    submit($date2,$desc2,$budget2,$total2,$income,$otherIncome,$tableName,$link,2);
    submit($date3,$desc3,$budget3,$total3,$income,$otherIncome,$tableName,$link,3);
    submit($date4,$desc4,$budget4,$total4,$income,$otherIncome,$tableName,$link,4);
    submit($date5,$desc5,$budget5,$total5,$income,$otherIncome,$tableName,$link,5);
    submit($date6,$desc6,$budget6,$total6,$income,$otherIncome,$tableName,$link,6);

    redirection('../HTML/tablePage.php');

}

if(isset($_POST['updateBtn']))
{

}