<?php
session_start();
require_once '../PHP/config.php';
require_once '../PHP/functions_def.php';
$sql="SELECT * FROM tableinfo";
$count=mysqli_query($link,$sql);
$getCount=mysqli_num_rows($count);
$selectExec=null;
$user=$_SESSION['username'];

    $tablename = $_SESSION['table'];
    /*$table = "SELECT * FROM tableinfo WHERE tableName='$tablename' AND ID=1";
    $table2 = "SELECT * FROM tableinfo WHERE tableName='$tablename' AND ID=2";
    $table3 = "SELECT * FROM tableinfo WHERE tableName='$tablename' AND ID=3";
    $table4 = "SELECT * FROM tableinfo WHERE tableName='$tablename' AND ID=4";
    $table5 = "SELECT * FROM tableinfo WHERE tableName='$tablename' AND ID=5";
    $table6 = "SELECT * FROM tableinfo WHERE tableName='$tablename' AND ID=6";*/

$checkUser="SELECT EXISTS
(SELECT * FROM tablename WHERE budgetTableName='$tablename' AND username='$user') as output;";
$arrayKey=mysqli_query($link,$checkUser);
$result=mysqli_fetch_array($arrayKey);

$checkWish="SELECT * FROM wishlist WHERE TableName='$tablename'";
$query=$link->query($checkWish);

$table = "
SELECT * FROM tablename 
INNER JOIN jointable
ON tablename.id=jointable.UID
INNER JOIN tableinfo
ON jointable.TableID=tableinfo.tableID and tableinfo.ID=1 AND(tablename.username='$user') and (tableinfo.tableName='$tablename');";
$table2 = "
SELECT * FROM tablename 
INNER JOIN jointable
ON tablename.id=jointable.UID
INNER JOIN tableinfo
ON jointable.TableID=tableinfo.tableID and tableinfo.ID=2 AND(tablename.username='$user') and (tableinfo.tableName='$tablename');";
$table3 = "
SELECT * FROM tablename 
INNER JOIN jointable
ON tablename.id=jointable.UID
INNER JOIN tableinfo
ON jointable.TableID=tableinfo.tableID and tableinfo.ID=3 AND(tablename.username='$user') and (tableinfo.tableName='$tablename');";
$table4 = "
SELECT * FROM tablename 
INNER JOIN jointable
ON tablename.id=jointable.UID
INNER JOIN tableinfo
ON jointable.TableID=tableinfo.tableID and tableinfo.ID=4 AND(tablename.username='$user') and (tableinfo.tableName='$tablename');";
$table5 = "SELECT * FROM tablename 
INNER JOIN jointable
ON tablename.id=jointable.UID
INNER JOIN tableinfo
ON jointable.TableID=tableinfo.tableID and tableinfo.ID=5 AND(tablename.username='$user') and (tableinfo.tableName='$tablename');";
$table6 = "
SELECT * FROM tablename 
INNER JOIN jointable
ON tablename.id=jointable.UID
INNER JOIN tableinfo
ON jointable.TableID=tableinfo.tableID and tableinfo.ID=6 AND(tablename.username='$user') and (tableinfo.tableName='$tablename');";

    $selectExec = mysqli_query($link, $table);
    $selectExec2 = mysqli_query($link, $table2);
    $selectExec3 = mysqli_query($link, $table3);
    $selectExec4 = mysqli_query($link, $table4);
    $selectExec5 = mysqli_query($link, $table5);
    $selectExec6 = mysqli_query($link, $table6);

//while ($fetch=mysqli_fetch_array($selectExec)):
$fetch=mysqli_fetch_array($selectExec);
$fetch2=mysqli_fetch_array($selectExec2);
$fetch3=mysqli_fetch_array($selectExec3);
$fetch4=mysqli_fetch_array($selectExec4);
$fetch5=mysqli_fetch_array($selectExec5);
$fetch6=mysqli_fetch_array($selectExec6);
?>

    <!DOCTYPE html>
    <html style="height: 100%">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EasyBudgeting</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="../javaCode/functions.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor">
    </head>
    <body style="height: 100%">
    <div style="width: available">
        <div style="height: 150px; background-color: brown; width: auto">
        </div>
        <div style="height: 20px; background-color: blue; width: auto">
        </div>
        <div style="height: 100px; background-color: brown; align-items: center; display: flex; width: 100%">
            <div style="padding-right: 55%">

            </div>
            <nav style="display: flex; align-items: center; float: right; width: auto">
                <ul style="display: flex; list-style-type: none; margin: 0 auto; gap: 2rem; flex-wrap: wrap">
                    <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: 10%">
                        <a href="index.php" style="text-decoration: none">Home</a>
                    </li>
                    <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: 10%">
                        <a href="../HTML/aboutPage.php" style="text-decoration: none;">About</a>
                    </li>
                    <!---<li style="text-transform: uppercase; font-weight: bold; margin: auto;">
                     <a href="#" style="text-decoration: none">Users</a>
                    </li>---->
                    <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: auto">
                        <a href="loginPage.php"<?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                            echo 'style="display:none;"'; }
                        else{
                            echo 'style="display:block;"';}?>

                        >Sign In</a>

                    </li>
                    <li id="register" style="text-transform: uppercase; font-weight: bold; margin: auto; width: auto">
                        <a href="registerPage.php" <?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                            echo 'style="display:none;"'; }
                        else{
                            echo 'style="display:block;"';}?>> Register</a>
                    </li>
                    <li id="logout" style="text-transform: uppercase; font-weight: bold; margin: auto; width: 10%">
                        <a href="../PHP/logout.php" <?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                            echo 'style="display:block;"'; }
                        else{
                            echo 'style="display:none;"';}?>> LOGOUT</a>
                    </li>
                    <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: auto">
                        <a href="../HTML/dbSelectPage.php" <?php if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true){

                            echo 'style="display:block;"'; }
                        else{
                            echo 'style="display:none;"';}?>>Select/Create Table</a>

                    </li>

                    <li style="text-transform: uppercase; font-weight: bold; margin: auto; width: 10%">
                        <a href="../HTML/adminPage.php" <?php if(ISSET($_SESSION['admin'])  && $_SESSION['admin']==true){

                            echo 'style="display:block;"'; }
                        else{
                            echo 'style="display:none;"';}?>>AdminPanel</a>

                    </li>

                </ul>
            </nav>
        </div>
    </div>
    <div style="background-size: 100%; background-image: url('../resources/BudgetOpaque.png'); height: 100%">
<div>
    <form method="post" action="../PHP/tableHandle.php" style="margin: 15px">
        <div style="width: 100%">
            <h3>Current Table: <?php echo $tablename?></h3>
        </div>
    <div style="width: 85%;display: flex">
        <div style="width: 50%">
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" aria-describedby="emailHelp" name="date"
            value="<?php echo $fetch['currentDate']?>">
        </div>
        <div class="mb-3">
            <label for="date2" class="form-label"></label>
            <input type="date" class="form-control" id="date2" name="date2"
            value="<?php echo $fetch2['currentDate']?>">
        </div>

            <div class="mb-3">
                <label for="date3" class="form-label"></label>
                <input type="date" class="form-control" id="date3" name="date3" value="<?php echo $fetch3['currentDate']?>">
            </div>

            <div class="mb-3">
                <label for="date4" class="form-label"></label>
                <input type="date" class="form-control" id="date4" name="date4" value="<?php echo $fetch4['currentDate']?>">
            </div>

            <div class="mb-3">
                <label for="date5" class="form-label"></label>
                <input type="date" class="form-control" id="date5" name="date5" value="<?php echo $fetch5['currentDate']?>">
            </div>

            <div class="mb-3">
                <label for="date6" class="form-label"></label>
                <input type="date" class="form-control" id="date6" name="date6" value="<?php echo $fetch6['currentDate']?>">
            </div>
    </div>


        <div style="width: 50%; margin-left: 10px">
            <div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" aria-describedby="emailHelp" name="desc" value="
<?php echo $fetch['budgetDescript']?>">
        </div>
        <div class="mb-3">
            <label for="description2" class="form-label"></label>
            <input type="text" class="form-control" id="description2" name="desc2" value="<?php echo $fetch2['budgetDescript']?>">
        </div>

                <div class="mb-3">
                    <label for="description3" class="form-label"></label>
                    <input type="text" class="form-control" id="description3" name="desc3" value="<?php echo $fetch3['budgetDescript']?>">
                </div>

                <div class="mb-3">
                    <label for="description4" class="form-label"></label>
                    <input type="text" class="form-control" id="description4" name="desc4" value="<?php echo $fetch4['budgetDescript']?>">
                </div>

                <div class="mb-3">
                    <label for="description5" class="form-label"></label>
                    <input type="text" class="form-control" id="description5" name="desc5" value="<?php echo $fetch5['budgetDescript']?>">
                </div>

                <div class="mb-3">
                    <label for="description6" class="form-label"></label>
                    <input type="text" class="form-control" id="description6" name="desc6" value="<?php echo $fetch6['budgetDescript']?>">
                </div>

    </div>
    </div>

        <div style="width: 50%; margin-left: 10px">
            <div>
            <div class="mb-3">
                <label for="budget" class="form-label">Budget</label>
                <input type="number" class="form-control" id="budget" aria-describedby="emailHelp"
                       placeholder="Can leave empty" name="budget" value="<?php echo $fetch['budget']?>">
            </div>
            <div class="mb-3">
                <label for="budget2" class="form-label"></label>
                <input type="number" class="form-control" id="budget2"
                       placeholder="Can leave empty" name="budget2" value="<?php echo $fetch2['budget']?>">
            </div>

                <div class="mb-3">
                    <label for="budget3" class="form-label"></label>
                    <input type="number" class="form-control" id="budget3"
                           placeholder="Can leave empty" name="budget3" value="<?php echo $fetch3['budget']?>">
                </div>

                <div class="mb-3">
                    <label for="budget4" class="form-label"></label>
                    <input type="number" class="form-control" id="budget4"
                           placeholder="Can leave empty" name="budget4" value="<?php echo $fetch4['budget']?>">
                </div>

                <div class="mb-3">
                    <label for="budget5" class="form-label"></label>
                    <input type="number" class="form-control" id="budget5"
                           placeholder="Can leave empty" name="budget5" value="<?php echo $fetch5['budget']?>">
                </div>

                <div class="mb-3">
                    <label for="budget6" class="form-label"></label>
                    <input type="number" class="form-control" id="budget6"
                           placeholder="Can leave empty" name="budget6" value="<?php echo $fetch6['budget']?>">
                </div>
        </div>
        </div>

        <div style="width: 50%; margin-left: 10px">
            <div>
                <div class="mb-3">
                    <label for="total" class="form-label">Total Spent</label>
                    <input type="number" class="form-control" id="total"
                           aria-describedby="emailHelp" name="total" value="<?php echo $fetch['Total']?>">
                </div>
                <div class="mb-3">
                    <label for="total2" class="form-label"></label>
                    <input type="number" class="form-control" id="total2" name="total2" value="<?php echo $fetch2['Total']?>">
                </div>

                <div class="mb-3">
                    <label for="total3" class="form-label"></label>
                    <input type="number" class="form-control" id="total3" name="total3" value="<?php echo $fetch3['Total']?>">
                </div>

                <div class="mb-3">
                    <label for="total4" class="form-label"></label>
                    <input type="number" class="form-control" id="total4" name="total4" value="<?php echo $fetch4['Total']?>">
                </div>

                <div class="mb-3">
                    <label for="total5" class="form-label"></label>
                    <input type="number" class="form-control" id="total5" name="total5" value="<?php echo $fetch5['Total']?>">
                </div>

                <div class="mb-3">
                    <label for="total6" class="form-label"></label>
                    <input type="number" class="form-control" id="total6" name="total6" value="<?php echo $fetch6['Total']?>">
                </div>
            </div>
        </div>

        <div style="width: 50%; margin-left: 10px">
            <div>
                <div class="mb-3">
                    <label for="income" class="form-label">Income</label>
                    <input type="number" class="form-control" id="income"
                           aria-describedby="emailHelp" name="income" value="<?php echo $fetch['income']?>">
                </div>

                <div class="mb-3">
                    <label for="totalSpent" class="form-label">Monthly total</label>
                    <input type="number" class="form-control" id="TotalSpent"
                           aria-describedby="emailHelp" name="TotalSpent" value="<?php echo $fetch['monthlyExpenses']?>">
                </div>
            </div>
        </div>

        <div style="width: 50%; margin-left: 10px">
            <div>
                <div class="mb-3">
                    <label for="otherIncome" class="form-label">Other Income</label>
                    <input type="number" class="form-control" id="otherIncome" aria-describedby="emailHelp"
                           placeholder="can leave empty" name="otherIncome" value="<?php echo $fetch['otherIncome']?>">
                </div>
            </div>
        </div>

        <div style="margin-top: 250px;width: 30%">
            <button type="submit" class="btn btn-primary" name="SubmitBtn">Submit</button>
        </div>

    </form>
    <div style="margin-top: 250px;width: 40%;margin-left: 15px">
        <button type="button" class="btn btn-primary" name="updateBtn" onclick="calculateTotal(),highlight()">Calculate</button>
    </div>
    <div style="width: 40%;margin-top: 250px">
        <a href="../HTML/sharePage.php" >Share table?</a>
    </div>
    <div style="width: 50%; margin-left: 50px" id="wishContainer">
        <form method="post" action="../PHP/addWish.php">
        <div id="wishElement">
            <label for="wishlist" class="form-label">Wishlist</label>
            <input type="text" class="form-control" id="wishlist" name="wishlist">
            <label for="text" class="form-label">Price</label>
            <input type="text" class="form-control" id="text" name="text">
        </div>
        <div style="height: auto; margin-top: 15px">
        <button type="submit" class="btn btn-secondary" name="addElement" style="height: 15%" id="addWish">Add Wish</button>
        </div>
        </form>
    </div>
</div>
        <div style="width: 20%; margin-left: 15px">
            <table class="table" <?php if($result['output']==1){

                echo 'style="display:block;"'; }
            else{
                echo 'style="display:none;"';}?>>
                <tr>
                    <th>Request</th>
                    <th>Price</th>
                </tr>
                <?php while($wish=$query->fetch_assoc())
                { ?>
                    <tr>
                        <td><?php echo $wish['text'] ." "; $_SESSION['wish']=$wish['text'];?> </td>
                        <td><?php echo $wish['budget']. " ";?> <a href="../PHP/cancelWish.php">Cancel</a> </td>
                    </tr>
                <?php }?>
            </table>
        </div>
    </div>
</body <script type="text/javascript" src="../javaCode/functions.js"></script>>
</html>
<?php /*endwhile;*/ ?>

<?php
/*session_start(); POG
if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true) {
    echo'<script src="../javaCode/functions.js" type="text/javascript">loggedIn()</script>';
} else {
    // display login link
    echo '<script src="../javaCode/functions.js" type="text/javascript">loggedOut()</script>';
}*/
?>