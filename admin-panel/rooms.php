<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../admin-panel/css/admin.css">
	<link rel="stylesheet" href="../admin-panel/css/room.css">
    <title>Керування</title>
  </head>
  <body>
	<nav>
		<ul>
			<li class="logo">
				<img src='../admin-panel/png/logo.png'/>
			</li>
			<li><a href="../admin-panel/admin.php">Панель <img src='../admin-panel/png/dashboard.png'style="width:23px;"/></a> </li>
			<li><a href="../admin-panel/hostels.php">Гуртожитки <img src='../admin-panel/png/hotel.png'style="width:23px;"/></a> </li>
			<li><a href="../admin-panel/rooms.php">Кімнати <img src='../admin-panel/png/beds.png'style="width:23px;"/></a> </li>
			<li><a href="../admin-panel/pays.php">Оплата <img src='../admin-panel/png/money.png'style="width:23px;"/></a></li>
			<li><a href="../admin-panel/student.php">Студенти <img src='../admin-panel/png/group.png'style="width:23px;"/></a> </li>
			<li><a href="../home.html">Вихід <img src='../admin-panel/png/exit.png'style="width:23px;"/></a> </li>
		</ul>
	</nav>
	<div class="wrapper">
    <?php
	$host = '127.0.0.1';
	$user = 'root';
	$pass = '12345678';
	$db_name = 'hostels';
	$link = mysqli_connect($host, $user, $pass, $db_name);

    	if (!$link) {
      	echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      	exit;
    	}
  	?>
	<table class="table">
	  <tr>
		<td>ID_Гуртожитку</td>
		<td>Номер гуртожитку</td>
		<td>Тип гуртожитку</td>
		<td>Кількість кімнат</td>
		<td>Статус</td>
		<td>ID_Університету</td>
		<td>Ціна</td>
		<td>Адреса</td>
		
	  </tr>
	<?php
		$sql = mysqli_query($link, 'SELECT * FROM `Hostels`
		INNER JOIN University ON Hostels.id_university=University.idUniversity');
		while ($result = mysqli_fetch_array($sql)) {
		  echo "<tr><td>{$result['idHostels']}</td>
		  <td>{$result['num_hostel']}</td>
		  <td>{$result['type_hostel']} </td>
		  <td>{$result['size']}</td>
		  <td>{$result['status']}</td>
		  <td>{$result['name']}</td>
		  <td>{$result['cost']}</td>
		  <td>{$result['adress']}</td></tr>";
		}

	?>
	</table>
    
    
    </div>
    
    </body>
    </html>