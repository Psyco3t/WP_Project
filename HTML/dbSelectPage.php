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
<div>
    <div style="height: 150px; background-color: brown;">
    </div>
    <div style="height: 20px; background-color: blue;">
    </div>
    <div style="height: 100px; background-color: brown; align-items: center; display: flex;">
        <div style="padding-right: 65%;">

        </div>
        <nav style="display: flex; align-items: center; float: right;">
            <ul style="display: flex; list-style-type: none; margin: 0 auto; gap: 2rem;">
                <li style="text-transform: uppercase; font-weight: bold; margin: auto;">
                    <a href="index.php" style="text-decoration: none">Home</a>
                </li>
                <li style="text-transform: uppercase; font-weight: bold; margin: auto;">
                    <a href="#" style="text-decoration: none;">About</a>
                </li>
                <li style="text-transform: uppercase; font-weight: bold; margin: auto;">
                    <a href="#" style="text-decoration: none">Users</a>
                </li>
                <li style="text-transform: uppercase; font-weight: bold; margin: auto;">
                    <a href="loginPage.php"<?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                        echo 'style="display:none;"'; }
                    else{
                        echo 'style="display:block;"';}?>

                    >Sign In</a>

                </li>
                <li id="register" style="text-transform: uppercase; font-weight: bold; margin: auto;">
                    <a href="registerPage.php" <?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                        echo 'style="display:none;"'; }
                    else{
                        echo 'style="display:block;"';}?>> Register</a>
                </li>
                <li id="logout" style="text-transform: uppercase; font-weight: bold; margin: auto;">
                    <a href="../PHP/logout.php" <?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                        echo 'style="display:block;"'; }
                    else{
                        echo 'style="display:none;"';}?>> LOGOUT</a>
                </li>
                <li style="text-transform: uppercase; font-weight: bold; margin: auto;">
                    <a href="../HTML/dbSelectPage.php" <?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                        echo 'style="display:block;"'; }
                    else{
                        echo 'style="display:none;"';}?>>Select/Create Table</a>

                </li>

            </ul>
        </nav>
    </div>
</div>

<div class="col bg-light p-3">
    <form action="../PHP/select.php" method="post" style="margin-left: 800px; margin-right: 800px; width: 20%" id="selectForm">
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
        <button type="submit" class="btn btn-secondary" name="deleteBtn" value="Delete">Delete</button>
        <button type="submit" class="btn btn-primary" style="margin-left: 50px" name="continueBtn" onclick="checkSelect();" value="Continue">Continue</button>
        <button type="submit" class="btn btn-primary" name="createBtn" onclick="checkName()" value="Create">Create</button>
    </form>
</body>
</html>