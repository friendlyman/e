<?php
session_start(); 

include('../config/config.php'); 

$un=$_SESSION['username'];
$html = "";
$query ="select idname,imgsrc,label from listitem where useridfk=(select userid from users where username='$un')";
$result=mysql_query($query)or die ( mysql_error() );

while ($row = mysql_fetch_assoc($result)) {
   // echo $row["idname"];
   // echo $row["imgsrc"];
    //echo $row["label"];
	$html .="<li data-icon=false><a href='#' id=".$row["idname"]."><img src='image/".$row["imgsrc"].".png'><h3>".$row["label"]."</h3></a></li>";


}


/*
$html .= "<li data-icon=false>";
$html .= "<a href=#>";
$html .= "<img src='http://30.10.1.192/elp/images/index/Moe_icon.png' />";
$html .= "<h3> MINISTRY OF EDUCATION</h3>";
$html .= "</a>";
$html .= "</li>"; */ 
echo utf8_encode ("<div class='thumbnail-list'>".$html."</div>");
?>