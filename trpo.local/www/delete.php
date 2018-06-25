<?php
include("db.php");  

$id =$_REQUEST['id'];
		
// sending query
mysql_query("DELETE FROM tobacco_menu WHERE id = '$id'")
	or die(mysql_error());  	
	
header("Location: index.php");
?>