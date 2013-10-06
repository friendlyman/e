<?php 
include('rcs.php');

//$username=stripslashes('usera');
//$username=mysql_real_escape_string($username);

//$email=stripslashes('friendlyman2011@gmail.com');
//$email=mysql_real_escape_string($email);

$fp=$random_chars;



//$query ="insert into users (username,email,password,salt) values('$username','$email','$password','$salt')"; 
function ff($e)
{
 global $fp;
include('pes.php');
include('../config/config.php'); 

//$fp=$random_chars;
 // $allpassword  = create_hash($random_chars);
 $allpassword  = create_hash($fp);
$pieces = explode(":", $allpassword);
$pehash =$pieces[3]; // piece1
$pesalt = $pieces[2]; // piece2
$password = $pehash; 
$salt = $pesalt; 
$queryy ="UPDATE users SET password='$password',salt='$salt'
WHERE email='$e'";   
mysql_query($queryy);
/*
if(mysql_query($queryy) ){ 
echo "updated";

} 
else{ echo "fail";

} 
*/
}


/*mysql_query($query) or trigger_error(mysql_error()." in ".$query);*/
?>