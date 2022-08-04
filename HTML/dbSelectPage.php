<?php
session_start();
require '../PHP/config.php';
$user=$_SESSION['username'];

$selectQuery="SELECT * FROM tablename WHERE username='$user'";

$selectExec=mysqli_query($link,$selectQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select/Create</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="../javaCode/functions.js" type="text/javascript"></script>

</head>
<body>
<div class="col bg-light p-3">
    <form action="../PHP/select.php" method="post" style="margin-left: 800px; margin-right: 800px; margin-top: 150px; width: 20%" id="selectForm">
        <h1>Select a table</h1>
        <div class="form-group" style="margin: auto">
        <select class="custom-select custom-select-lg mb-3" id="select" name="tables">
            <option selected disabled value="default">Select</option>
            <?php while($table=mysqli_fetch_array($selectExec)):;?>
            <option value="<?php echo $table['budgetTableName']; ?>"> <?php echo $table['budgetTableName']; ?></option>
            <?php $_SESSION['selectedTable']=$table['budgetTableName'];
            endwhile;?>
        </select>
            <p id="1" style="color: red"></p>
        </div>
        <h3>Or create a new one</h3>
        <div class="form-group" style="margin: auto">
            <label for="newTable">TableName</label>
            <input type="text" class="form-control" id="newTable" placeholder="Enter table name" name="newTable">
            <p id="2" style="color: red"></p>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="continueBtn" onclick="checkSelect();" value="Continue">Continue</button>
        <button type="submit" class="btn btn-primary" style="margin-left: 120px" name="createBtn" onclick="checkName()" value="Create">Create</button>
    </form>
</body>
</html>