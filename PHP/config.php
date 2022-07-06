<?php
//define stuff
define("SITE", "http://localhost/WP_Project/HTML/");
define ('DB_Server','localhost');
define ('db_Username','root');
define ('db_Password','');
define ('db_Name','budgetdb');

$link=mysqli_connect(DB_Server,db_Username,db_Password,db_Name);//attempt connection
if($link===false) //checks connection
{
 die("ERROR: could not connect".mysqli_connect_error());
}

$messages = [
    0 => 'No direct access!',
    1 => 'Unknown user!',
    2 => 'User with this name already exists, choose another one!',
    3 => 'Check your email to active your account!',
    4 => 'Fill all the fields!',
    5 => 'You are logged out!!',
    6 => 'Your account is activated, you can login now!',
    7 => 'Passwords are not equal!',
    8 => 'Format of e-mail address is not valid!',
    9 => 'Password is too short! It must be minimum 8 characters long!',
    10 => 'Something went wrong with mail server. We will try to send email later!',
    11 => 'Your account is already activated!',
    12 => 'Wrong email submitted'
];