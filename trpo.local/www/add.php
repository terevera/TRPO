<?php
include 'db.php';

mysql_query("SET NAMES 'utf8'"); 
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");

$name=$_POST['name'];
$fill=$_POST['fill'];
$tobacco=$_POST['tobacco'];
$bowl=$_POST['bowl'];
$price=$_POST['price'];
$message = 'Sucesfully added!';

mysql_set_charset("utf8");
$sql =  "INSERT INTO `tobacco_menu`(`name_hookah`,`filler_bulb`,`tobacco`, `bowl`, `price`) VALUES ('$name','$fill','$tobacco', '$bowl', '$price')";
$result = mysql_query($sql);

echo "<script type='text/javascript'>alert('$message'); window.location.href='index.php'; </script>";
?>
