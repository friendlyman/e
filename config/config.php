<?php
// Connection's Parameters
$db_host="30.10.1.192";
$db_name="elp";
$username="w";
$password="123456";
$con=mysql_connect($db_host,$username,$password) or die(mysql_error());
mysql_select_db($db_name="elp")or die("Connection Failed"); 
?>


