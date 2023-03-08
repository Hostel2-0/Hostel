<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../admin-panel/css/admin.css">
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>

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
	<table class="table table-bordered table-striped">
	  <tr>
		<td>Номер оплати</td>
		<td>Ім'я Студента</td>
		<td>Прізвище Студента</td>
		<td>Сума</td>
		<td>Дата</td>		
	  </tr>
	<?php
		$sql = mysqli_query($link, 'SELECT * FROM `Pays`INNER JOIN Student ON Pays.id_Student=Student.idStudent');
		while ($result = mysqli_fetch_array($sql)) {
		  echo "<tr><td>{$result['idPays']}</td>
		  <td>{$result['Name']}</td>
		  <td>{$result['Surname']}</td>
		  <td>{$result['cost']} </td>
		  <td>{$result['date_pay']} </td>
		  </tr>";
		}

	?>
	</table>
    
    
    </div>
    
</body>
</html>