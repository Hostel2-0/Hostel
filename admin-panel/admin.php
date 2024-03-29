
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../admin-panel/css/admin.css">
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
		
		<div class="container">
            <div class="hostels">
				<img src='../admin-panel/png/hotel.png' style="width:250px; margin-left: 50px"/><br>
				<h4 style="margin-left: 35px ;">Кількість гуртожитків:  </h4>
			</div>
            <div class="rooms">
				<img src='../admin-panel/png/beds.png' style="width:250px; margin-left: 50px"/>
				<h4 style="margin-left: 35px ;"">Кількість кімнат: </h4>
			</div>
            <div class="payments">
				<img src='../admin-panel/png/money.png' style="width:250px; margin-left: 50px ;""/>
				<h4 style="margin-left: 35px ;"">Середня ціна за місяць: </h4>
			</div>
            <div class="students">
				<img src='../admin-panel/png/group.png' style="width:250px; margin-left: 50px"/>
				<h4 style="margin-left: 35px ;"">Кількість студентів: </h4>
			</div>
			
			<div class="canvas"> 
				<div class="legend">
					<p class="title">Статистика:</p>    
					<ul class="caption-list">
					  <li class="caption-item">Гуртожитки</li>
					  <li class="caption-item">Кімнати</li>
					  <li class="caption-item">Сіуденти</li>
					</ul>
				</div>
				<svg class="chart" width="500" height="500" viewBox="0 0 50 50">
					<circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
					<circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
					<circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
				  </svg>
			</div>
          
		
    
	</div>
  </body>