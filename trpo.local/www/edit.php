<?php
require("db.php");
$id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM `tobacco_menu` WHERE id  = $id");
$test = mysql_fetch_array($result);
if (!$result)
	die("Error: Data not found.");

$name_hookah=$test['name_hookah'] ;
$filler_bulb=$test['filler_bulb'] ;
$tobacco=$test['tobacco'] ;
$bowl=$test['bowl'] ;
$price=$test['price'] ;

if(isset($_POST['save'])) {	
	$name_hookah_save = $_POST['name_hookah'];
	$filler_bulb_save = $_POST['filler_bulb'];
	$tobacco_save = $_POST['tobacco'];
	$bowl_save = $_POST['bowl'];
	$price_save = $_POST['price'];
	mysql_query("UPDATE `tobacco_menu` SET name_hookah ='$name_hookah_save', filler_bulb='$filler_bulb_save', tobacco='$tobacco_save', bowl ='$bowl_save', price='$price_save' WHERE id = $id")
				or die(mysql_error()); 
	
	$message = 'Succesfully edited!';
	echo "<script type='text/javascript'>alert('$message'); window.location.href='index.php'; </script>";		
}
mysql_close($conn);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Редактирование</title>
</head>
<body>
<form method="post">
<table>
	<tr>
		<td>Название:</td>
		<td><input type="text" name="name_hookah" value="<?php echo $name_hookah ?>" size='30' /></td>
		
	</tr>
	<tr>
		<td>Наполнение:</td>
		<td><input type="text" name="filler_bulb" value="<?php echo $filler_bulb ?>" size='30' /></td>
		
	</tr>
	<tr>
		<td>Табак:</td>
		<td><input type="text" name="tobacco" value="<?php echo $tobacco ?>" size='30' /></td>
		
	</tr>
	<tr>
		<td>Чаша:</td>
		<td><input type="text" name="bowl" value="<?php echo $bowl ?>" size='30' /></td>
		
	</tr>
	<tr>
		<td>Цена:</td>
		<td><input type="text" name="price" value="<?php echo $price ?>" size='30' /></td>
		
	</tr>
	<tr>
		<td><input type="submit" name="save" value="Сохранить" /></td>
	</tr>
</table>
</body>
</html>