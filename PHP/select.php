<?php
session_start();
require_once 'config.php';
require_once 'functions_def.php';
$user=$_SESSION['username'];
$sqlDel="";

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
        $query=mysqli_query($link,$newTable);
        if(!$query)
        {
            die();
            redirection('../HTML/dbSelectPage.php');
        }
        else
        {
            for($i=1;$i<=6;$i++) {
                $newEntry="INSERT INTO tableinfo (tableName,ID)
                    VALUES ('$tableName','$i')";
                mysqli_query($link, $newEntry);
            }

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

            $setJointable="INSERT INTO jointable (UID,TableID,TableName)
VALUES ('$idArray','$getSql1','$tableName'),('$idArray','$getSql2','$tableName'),('$idArray','$getSql3','$tableName'),('$idArray','$getSql4','$tableName'),('$idArray','$getSql5','$tableName'),('$idArray','$getSql6','$tableName')";
            mysqli_query($link,$setJointable);

            redirection('../HTML/dbSelectPage.php');
        }
    }

    elseif (isset($_POST['deleteBtn']))
    {
        $table=$_POST['tables'];
        $checkIFShared="SELECT EXISTS
        (SELECT * FROM tablename WHERE username='$user' AND budgetTableName='$table') as output";
        $ArrayKey=mysqli_query($link,$checkIFShared);
        $result=mysqli_fetch_array($ArrayKey);
        if($result['output']!=0) {
            $sqlQuery = "
        DELETE FROM tablename WHERE username='$user' AND budgetTableName='$table'";
            mysqli_query($link, $sqlQuery);
            $delQuery = "
        DELETE FROM tableinfo WHERE tableName='$table'";
            mysqli_query($link, $delQuery);
        }
        redirection('../HTML/dbSelectPage.php');
    }
    elseif (isset($_POST['removeBtn']))
    {
        $table=$_POST['tables'];
        $checkIFShared="SELECT EXISTS
        (SELECT * FROM tablename WHERE username='$user' AND budgetTableName='$table') as output";
        $ArrayKey=mysqli_query($link,$checkIFShared);
        $result=mysqli_fetch_array($ArrayKey);
        if($result['output']!=1) {
            $getUId = "SELECT id FROM tablename WHERE username='$user'";
            $id = mysqli_query($link, $getUId);
            $idFetch = mysqli_fetch_array($id);
            $idArray = $idFetch['id'];
            $table = $_POST['tables'];
            $deleteJoin = "DELETE FROM jointable WHERE TableName='$table' and UID='$idArray'";
            mysqli_query($link, $deleteJoin);
        }
        redirection('../HTML/dbSelectPage.php');
    }