<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../admin-panel/css/admin.css">
	<link rel="stylesheet" href="../cabinet/css/hostel.css">
    <link rel="stylesheet" href="../cabinet/css/oplata.css">
    <title>Оплата</title>
  </head>
  <body>
	<nav>
		<ul>
			<li class="logo">
				<img src='../admin-panel/png/logo.png'/>
			</li>
			<li><a href="../cabinet/main.php">Кабінет <img src='../admin-panel/png/dashboard.png'style="width:23px;"/></a> </li>
			<li><a href="../cabinet/hostel.php">Гуртожитки <img src='../admin-panel/png/hotel.png'style="width:23px;"/></a> </li>
			<li><a href="../cabinet/oplata.php">Оплата <img src='../admin-panel/png/money.png'style="width:23px;"/></a></li>
			<li><a href="../home.html">Вихід <img src='../admin-panel/png/exit.png'style="width:23px;"/></a> </li>
		</ul>
	</nav>
	<div class="wrapper">
        <div class="container">
            <h2>Оплата за гуртожиток</h2>
            <form method="post" >
                <label for="hostel">Гуртожиток:</label>
                <select name="hostel" id="hostel">
                    <option value="1">Гуртожиток №1</option>
                    <option value="2">Гуртожиток №2</option>
                    <option value="3">Гуртожиток №3</option>
                </select>
                <label for="room">Кімната:</label>
                <input type="number" name="room" id="room" required>
                <label for="amount">Сума до оплати:</label>
                <input type="number" name="amount" id="amount" required>
                <label for="payment_date">Дата оплати:</label>
                <input type="date" name="payment_date" id="payment_date" required>
                <button type="submit">Оплатити</button>
            </form>
        </div>
    </div>
</body>
</html>