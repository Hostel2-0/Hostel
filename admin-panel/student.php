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
		<td>Номер Студента</td>
		<td>Прізвище</td>
		<td>Ім'я</td>
		<td>По-батькові</td>
		<td>День народження</td>
		<td>Телефон</td>
		<td>Адрес</td>
		<td>Медична довідка</td>
		<td>Батько</td>
		<td>Телефон</td>
		<td>Мати</td>
		<td>Телефон</td>
		<td>Університету</td>
		<td>Номер Гуртожиток</td>
		<td>Курс</td>
		<td>Факультет</td>
	  </tr>
	<?php
		$sql = mysqli_query($link, 'SELECT * FROM `Student` INNER JOIN University ON Student.id_Unuversity=University.idUniversity
		INNER JOIN Hostels ON Student.id_Hostel=Hostels.idHostels');
		while ($result = mysqli_fetch_array($sql)) {
		  echo "<tr><td>{$result['idStudent']}</td>
		  <td>{$result['Name']}</td>
		  <td>{$result['Surname']} </td>
		  <td>{$result['Fathername']}</td>
		  <td>{$result['birthday']}</td>
		  <td>{$result['tel_num']}</td>
		  <td>{$result['addres']}</td>
		  <td>{$result['med_paper']}</td>
		  <td>{$result['Father_name']}</td>
		  <td>{$result['Father_tel']}</td>
		  <td>{$result['Mother_name']}</td>
		  <td>{$result['Mother_tel']}</td>
		  <td>{$result['name']}</td>
		  <td>{$result['num_hostel']}</td>
		  <td>{$result['Course']}</td>
		  <td>{$result['faculty']}</td>
		  </tr>";
		}

	?>
	</table>
    </div>
    
</body>
</html>