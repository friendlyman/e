<?php


include('../config/config.php'); 

$s = isset($_POST['field1value'])? $_POST['field1value'] : ''; 
$html = "";
$query ="select id,name from subject a,grade_subject b where 
a.id=b.subject_id and grade_id='$s'";
$result=mysql_query($query)or die ( mysql_error() );

while ($row = mysql_fetch_assoc($result)) {
	$html .="<option value=".$row["id"].">".$row["name"]."</option>";
        
}

echo utf8_encode ("<option value=''>Choose Subject</option>".$html);
?>