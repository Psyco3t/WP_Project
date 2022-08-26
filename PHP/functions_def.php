<?php
require_once "config.php";

/**
 * Function redirects user to given url
 *
 * @param string $url
 */
function redirection($url)
{
    header("Location:$url");
    exit();
}


/**
 * Function checks that login parameters exists in users_web table
 *
 * @param string $username
 * @param string $password
 * @return array
 */
function checkUserLogin($username, $enteredPassword)
{
    global $link;

    $sql = "SELECT id, password,userPerms FROM users 
            WHERE username = '$username'
            AND active=1 LIMIT 0,1";

    $result = mysqli_query($link, $sql) or die(mysqli_error($link));

    $data = [];

    if (mysqli_num_rows($result) > 0) {
        while ($record = mysqli_fetch_array($result)) {
            $data['id'] = (int)$record['id'];
            $registeredPassword = $record['password'];
            //$perms=$record['userPerms'];
        }

        if (!password_verify($enteredPassword, $registeredPassword)) {
            $data = [];
        }
    }
    return $data;

}


/**
 * Function checks that user exists in users table
 *
 * @param $username
 * @return bool
 */
function existsUser($username)
{
    global $link;

    $sql = "SELECT id FROM users
            WHERE email = '$username' AND (registration_expires>now() OR active ='1')";

    $result = mysqli_query($link, $sql) or die(mysqli_error($link));

    if (mysqli_num_rows($result) > 0)
        return true;
    else
        return false;
}


/**
 * Function registers user and returns id of created user
 *
 * @param $username
 * @param $password
 * @param $firstname
 * @param $lastname
 * @param $email
 * @param $code
 * @return int
 */
function registerUser($username, $password, $email, $token)
{

    global $link;

    $passwordHashed = password_hash($password, PASSWORD_BCRYPT); //always will be a 60 char hash

    $sql = "INSERT INTO users (username,password,email,token,registration_expires,active)
             VALUES ('$username','$passwordHashed','$email','$token',DATE_ADD(now(),INTERVAL 1 DAY),0)";

    // http://dev.mysql.com/doc/refman/5.6/en/date-and-time-functions.html

    $result = mysqli_query($link, $sql) or die(mysqli_error($link));

    return mysqli_insert_id($link);

}

/**
 * Function creates code with given length and returns it
 *
 * @param $length
 * @return string
 */
function createCode($length)
{
    $down = 97;
    $up = 122;
    $i = 0;
    $code = "";

    /*    
      48-57  = 0 - 9
      65-90  = A - Z
      97-122 = a - z        
    */

    $div = mt_rand(3, 9); // 3

    while ($i < $length) {
        if ($i % $div == 0)
            $character = strtoupper(chr(mt_rand($down, $up)));
        else
            $character = chr(mt_rand($down, $up)); // mt_rand(97,122) chr(98)
        $code .= $character; // $code = $code.$character; //
        $i++;
    }
    return $code;
}

/**
 * Function tries to send email with activation code
 *
 * @param $username
 * @param $email
 * @param $code
 * @return bool
 */
function sendData($username, $email, $token)
{

    $header = "From: EasyBudgeting <budgeting@gmail.com>\n";
    $header .= "X-Sender: budgeting@gmail.com\n";
    $header .= "X-Mailer: PHP/" . phpversion();
    $header .= "X-Priority: 1\n";
    $header .= "Reply-To:budgetingSupport@gmail.com\r\n";
    $header .= "Content-Type: text/html; charset=UTF-8\n";

    $message = "Data:\n\n user: $username \n \n www.EasyBudgeting.com";
    $message .= "\n\n to activate your account click on the link: " . SITE . "active.php?token=$token";
    $to = $email;
    $subject = "Registration at Budgeting";
    return mail($to, $subject, $message, $header);
    //mail($to,$subject,$message);

    /*
    
    1 is urgent, 3 is normal

    https://github.com/Synchro/PHPMailer
    https://monirulalom.medium.com/test-send-emails-in-php-with-xampp-and-mailhog-ce3e47e1abc2

    [mail function]
    ; For Win32 only.
    SMTP = smtp.secureserver.net

    ; For win32 only
        sendmail_from = webmaster@domen.com

    */
}

/**
 * Function inserts data in database for e-mail sending failure
 *
 * @param $id_user_web
 */
function addEmailFailure($id_user_web)
{

    global $link;

    $sql = "INSERT INTO user_email_failure (id_user_web, date_time_added)
             VALUES ('$id_user_web',now())";

    $result = mysqli_query($link, $sql) or die(mysqli_error($link));

}

function sendPass($username, $email, $token)
{

    $header = "From: EasyBudgeting <budgeting@gmail.com>\n";
    $header .= "X-Sender: budgeting@gmail.com\n";
    $header .= "X-Mailer: PHP/" . phpversion();
    $header .= "X-Priority: 1\n";
    $header .= "Reply-To:budgetingSupport@gmail.com\r\n";
    $header .= "Content-Type: text/html; charset=UTF-8\n";

    $message = "You wanted;";
    $message .= "\n\n to reset your password click on the link: " . SITE . "resetPage.php?token=$token";
    $to = $email;
    $subject = "Password Reset";
    return mail($to, $subject, $message, $header);
    //mail($to,$subject,$message);

    /*

    1 is urgent, 3 is normal

    https://github.com/Synchro/PHPMailer
    https://monirulalom.medium.com/test-send-emails-in-php-with-xampp-and-mailhog-ce3e47e1abc2

    [mail function]
    ; For Win32 only.
    SMTP = smtp.secureserver.net

    ; For win32 only
        sendmail_from = webmaster@domen.com

    */
}

function logInfo($browser,$ip,$link,$user)
{

    $query="INSERT INTO logs(browser,ip,user)
 VALUES('$browser','$ip','$user')";
    mysqli_query($link,$query);
}

function selectQuery($line,$name,$link)
{
    $query="SELECT $line FROM tableinfo WHERE username='$name'";
    return mysqli_query($link,$query);
}

function submit($date,$desc,$budget,$total,$income,$otherIncome,$tableName,$link,$id,$expenses)
{
    $updateQuery = "
    UPDATE tableinfo 
    SET 
    currentDate='$date',
    budgetDescript='$desc',
    budget='$budget',
    Total='$total',
    income='$income',
    otherIncome='$otherIncome',
    monthlyExpenses='$expenses'
    WHERE
    tableName='$tableName' AND ID='$id'";
    mysqli_query($link, $updateQuery);
}

function fetchArrayFromTableInfo($tableName,$ID,$link)
{
    $get1="SELECT tableID FROM tableinfo WHERE tableName='$tableName' AND ID='$ID'";
    $getSql1=mysqli_query($link,$get1);
    $arrayKey=mysqli_fetch_array($getSql1);
    return $arrayKey['tableID'];
}

function shareMail($email)
{
    $header = "From: EasyBudgeting <budgeting@gmail.com>\n";
    $header .= "X-Sender: budgeting@gmail.com\n";
    $header .= "X-Mailer: PHP/" . phpversion();
    $header .= "X-Priority: 1\n";
    $header .= "Reply-To:budgetingSupport@gmail.com\r\n";
    $header .= "Content-Type: text/html; charset=UTF-8\n";

    $message = "Hi there";
    $message .= "\n\n someone has decided to share a table with you check your available tables";
    $to = $email;
    $subject = "Password Reset";
    return mail($to, $subject, $message, $header);
}