<?php
require("db.php");
$id =$_GET['id'];

$result = mysql_query("SELECT * FROM `tobacco_menu` WHERE id = $id");

	if (!$result)
		die("Error: Data not found.");
	while($test = mysql_fetch_array($result)) {
		
		
		echo "<br>";
		echo '<table border="3" cellspacing="10" cellpadding="10" align="center">';
		
		
		echo 
		"
		<tr>
		
		<td><font color='black'></font>id</td>
		<td><font color='black'></font>name_hookah</td>
		<td><font color='black'></font>filler_bulb</td>
		<td><font color='black'></font>tobacco</td>
		<td><font color='black'></font>bowl</td>
		<td><font color='black'></font>price</td>
		
		</tr>
		";
		
		echo "\n<tr>";	
		echo"<td><font color='black'>" .$test['id']."</font></td>";
		echo"<td><font color='black'>" .$test['name_hookah']."</font></td>";
		echo"<td><font color='black'>" .$test['filler_bulb']."</font></td>";
		echo"<td><font color='black'>" .$test['tobacco']."</font></td>";
		echo"<td><font color='black'>" .$test['bowl']."</font></td>";
		echo"<td><font color='black'>" .$test['price']."</font></td>";
		
		echo "</tr>";
		echo "</table>";
	}
	mysql_close($conn);
    

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
@import url("style/index.css");
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Редактирование</title>
</head>
<body>
<form method="post">
<table>
	<a href="index.php">BACK-BACK-BACK</a>
</table>
</body>
</html>