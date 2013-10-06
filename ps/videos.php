<?php


include('../config/config.php'); 

if( isset($_POST['field4value']) && !empty($_POST['field4value'])){
    
      $grr= $_POST['field4value'];     
} 
else { 
   
     $grr= "null";
} 
if( isset($_POST['field5value']) && !empty($_POST['field5value'])){
    
      $sbb= $_POST['field5value'];     
} 
else { 
   
     $sbb= "null";
} 
$html = "";
$query ="select id,name,location from videos a,gsvideo b where a.id=b.vid and 
    (gid = ifNULL($grr,gid)) and (sid = ifNULL($sbb,sid))";
$result=mysql_query($query)or die ( mysql_error() );

while ($row = mysql_fetch_assoc($result)) {
	$html .= "<li><a href='../videos/".$row["location"].".mp4' rel='external'>".$row["name"]."</a></li>";  
}

echo utf8_encode ($html);
?>