<?php

//if (isset($_COOKIE['myusername']) && isset($_COOKIE['mypassword'])) {
//    //echo $_COOKIE['myusername'];
//    //echo $_COOKIE['mypassword'];
//} else {
//    //echo 'Not Set Yet';
//}
//if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']))
//{
session_start();
include('../config/config.php');
include('pes.php');
$un = stripslashes($_POST['username']);
$un = mysql_real_escape_string($un);
$ps = stripslashes($_POST['password']);
$ps = mysql_real_escape_string($ps);
if ($un=="Teacher"){
    $ps = "45CQWL8XUB";
}
else if($un=="Student")
{
    $ps = "2MBAS6Z1L4";
}
//$un = "staff";
//$ps = "45CQWL8XUB";

//$un = "student";
//$ps = "2MBAS6Z1L4";
$time = time();
if (isset($_POST['remember']) && !empty($_POST['remember'])) {
    $check = $_POST['remember'];
}
$queryy = "select a.salt,a.password,a.image,b.logo,b.title from users a,entity_logo b where a.entity_id=b.id and a.username='$un'";
$resultt = mysql_query($queryy) or die(mysql_error());
$row = mysql_fetch_array($resultt);
$ee = $row['salt'];
$ff = $row['password'];
$gg = $row['image'];
$hh = $row['logo'];
$ii = $row['title'];
$ms = validate_password($ps, 'sha256:1000:' . $ee . ':' . $ff);
if ($ms == 1) {
    if (isset($check)) {
//        expire after 100 days
        setcookie('myusername', $un, $time + 60 * 60 * 24 * 100, "/");        // Sets the cookie username
        setcookie('mypassword', $ps, $time + 60 * 60 * 24 * 100, "/");    // Sets the cookie password
    }
    $_SESSION['username'] = $un;
    $_SESSION['image'] = $gg;
    $_SESSION['logo'] = $hh;
    $_SESSION['title'] = $ii;

    echo "true";
} else {
    echo "false";
}
//}
?> 