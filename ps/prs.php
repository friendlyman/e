<?php

include('pas.php');
//if(isset($_POST['email']) && !empty($_POST['email']))
//{
include('../config/config.php');
$em=stripslashes($_POST['email']);
$em = mysql_real_escape_string($em);
$query = "select userid,username,email from users where email='$em'";
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
$row = mysql_fetch_array($result);
$ee = $row['email'];
ff($ee);
if ($count == 1) {
//echo 'true';
    $to = $ee;
    $subject = "Password Reset Request";
    $message = "Hello! Your New Password is " . $fp;
    $from = "friendlyman2011@gmail.com";
    $headers = "From:" . $from;
//mail($to,$subject,$message,$headers);
    $mail_sent = mail($to, $subject, $message, $headers);
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
    echo $mail_sent ? 'true' : 'false';
//echo "Mail Sent.";
} else {
    echo 'false';
}
//}
?> 