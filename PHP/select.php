<?php
session_start();
require_once 'config.php';
require_once 'functions_def.php';
$user=$_SESSION['username'];


    if (isset($_POST['continueBtn']))
    {
        //echo 'Publish-button was clicked';
        $table=$_POST['tables'];
        //$table=$_SESSION['selectedTable'];
        $tableQuery="SELECT * FROM tableinfo WHERE tableName='$table'";
        $_SESSION['table']=$table;
        echo $table;
        redirection('../HTML/tablePage.php');

    }
    elseif (isset($_POST['createBtn']))
    {
        //echo 'Save-button was clicked';
        $tableName=mysqli_real_escape_string($link,trim($_POST['newTable']));
        $newTable="INSERT INTO tablename (budgetTableName,username)
                    VALUES ('$tableName','$user')";
        mysqli_query($link,$newTable);
        for($i=1;$i<6;$i++) {
        $newEntry="INSERT INTO tableinfo (tableName,ID)
                    VALUES ('$tableName','$i')";
            mysqli_query($link, $newEntry);
        }
        redirection('../HTML/dbSelectPage.php');
    }

    elseif (isset($_POST['deleteBtn']))
    {
        $table=$_POST['tables'];
        $sqlQuery="
        DELETE FROM tablename WHERE username='$user' AND budgetTableName='$table'";
        mysqli_query($link,$sqlQuery);
        redirection('../HTML/dbSelectPage.php');
    }