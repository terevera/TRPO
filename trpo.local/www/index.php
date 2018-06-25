<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Категории</title>
</head>
<body>

<br/>

<table border="1" align="left" >
	<?php
	include("db.php");				
	$result = mysql_query("SELECT * FROM `tobacco_menu`");
	if (!$result)
		die("Error: Data not found.");
	while($test = mysql_fetch_array($result)) {
		$id = $test['id'];	
		echo "\n<tr>";	
		echo"<td><font color='black'>" .$test['name_hookah']."</font></td>";
		echo"<td> <a href ='info.php?id=$id'><center>Подробнее</center></a>";
		echo"<td> <a href ='edit.php?id=$id'>Редактировать</a>";
		echo"<td> <a href ='delete.php?id=$id'><center>Удалить</center></a>";
		echo "</tr>";
	}
	mysql_close($conn);
	?>
</table>

<table border="0" align="center" cellpadding="10" cellspacing="5" align="left">
    <div class="search">
        <form action="add.php" method="POST">
            <th>Название:</th>
			<th>
				<input type="text" name="name"   required>
			</th>
			
			<tr>
			<th>Наполнение:</th>
			<th>
				<input type="text" name="fill"   required>
			</th>
			<tr>
			<th>Табак:</th>
			<th>
				<input type="text" name="tobacco" required >
			</th>
			<tr>
			<th>Чаша:</th>
			<th>
				<input type="text" name="bowl" required>
			</th>
			<tr>
			<th>Цена:</th>
			<th>
				<input type="text" name="price" required >
			</th>
			<tr>
			
			
            <td colspan="2">
                <center>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </center>
            </td>
        </form>
    </div>
</table>


</body>
</html>