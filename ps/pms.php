<?php include('pes.php');
include('../config/config.php'); 

$username=stripslashes('minister');
$username=mysql_real_escape_string($username);

$email=stripslashes('khaledi@alahligroup.com');
$email=mysql_real_escape_string($email);

$pass=stripslashes('m1');
$pass=mysql_real_escape_string($pass);
$allpassword  = create_hash($pass);
$pieces = explode(":", $allpassword);
$pehash =$pieces[3]; // piece1
$pesalt = $pieces[2]; // piece2
$password = $pehash; 
$salt = $pesalt; 



$query ="insert into users (username,email,password,salt) values('$username','$email','$password','$salt')";   

if(mysql_query($query) ){ 
echo "inserted";} 
else{ echo "fail";

} 
/*mysql_query($query) or trigger_error(mysql_error()." in ".$query);*/
?>