<?php


include('../config/config.php'); 

if( isset($_POST['field2value']) && !empty($_POST['field2value'])){
    
      $gr= $_POST['field2value'];     
} 
else { 
   
     $gr= "null";
} 
if( isset($_POST['field3value']) && !empty($_POST['field3value'])){
    
      $sb= $_POST['field3value'];     
} 
else { 
   
     $sb= "null";
} 
$html = "";
$query ="select id,name,location from book a,grade_subject b where a.id=b.book_id and 
    (grade_id = ifNULL($gr,grade_id)) and (subject_id = ifNULL($sb,subject_id))";
$result=mysql_query($query)or die ( mysql_error() );

while ($row = mysql_fetch_assoc($result)) {
	$html .= "<li><a href='../books/".$row["location"].".pdf' rel='external'>".$row["name"]."</a></li>";  
}

echo utf8_encode ($html);
?>