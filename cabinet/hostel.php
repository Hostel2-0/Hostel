<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../admin-panel/css/admin.css">
	<link rel="stylesheet" href="../cabinet/css/main.css">
    <link rel="stylesheet" href="../cabinet/css/hostel.css">

    <title>Вибір гуртожитка та кімнати</title>
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
    <h2>Виберіть гуртожиток та кімнату:</h2>
        <div class="container">
            <form method="POST">
			<label for="hostel">Оберіть гуртожиток:</label>
            <select name="hostel" id="hostel">
                <option value="">Оберіть гуртожиток</option>
                <option value="1">Гуртожиток №1</option>
                <option value="2">Гуртожиток №2</option>
                <option value="3">Гуртожиток №3</option>
		    </select>
		    <label for="room">Оберіть кімнату:</label>
		    <select name="room" id="room">
                <option value="">Оберіть кімнату</option>
                <option value="101">Кімната 101</option>
                <option value="102">Кімната 102</option>
                <option value="103">Кімната 103</option>
                <option value="201">Кімната 201</option>
                <option value="202">Кімната 202</option>
                <option value="203">Кімната 203</option>
                <option value="301">Кімната 301</option>
                <option value="302">Кімната 302</option>
                <option value="303">Кімната 303</option>
		    </select>
            <label for="size">Оберіть кількість чоловік:</label>
		    <select name="size" id="size">
                <option value="">Оберіть кімнату</option>
                <option value="2">2 чоловіка</option>
                <option value="4">4 чоловіка</option>
                <option value="6">6 чоловіка</option>
            
		    </select>
            <label for="cost">Ціна:</label>
            <button type="submit">Підтвердити</button>
            </form>
        </div>
        
            <div class="flex-test-item">
                <h4 style="text-align:center">Нау Гуртожиток №1</h4>
            <img src='../admin-panel/png/hostels_nau/nau1.jpg' style="width:180px;height: 150px; margin-left: 50px; "/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">Нау Гуртожиток №3</h4>
                <img src='../admin-panel/png/hostels_nau/nau3.jpg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">Нау Гуртожиток №4</h4>
                <img src='../admin-panel/png/hostels_nau/nau4.jpg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">Нау Гуртожиток №5</h4>
                <img src='../admin-panel/png/hostels_nau/nau5.jpg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">Нау Гуртожиток №6</h4>
                <img src='../admin-panel/png/hostels_nau/nau6.jpg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">Нау Гуртожиток №7</h4>
                <img src='../admin-panel/png/hostels_nau/nau7.jpg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">Нау Гуртожиток №8</h4>
                <img src='../admin-panel/png/hostels_nau/nau8.jpg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">Нау Гуртожиток №9</h4>
                <img src='../admin-panel/png/hostels_nau/nau9.jpg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">Нау Гуртожиток №10</h4>
                <img src='../admin-panel/png/hostels_nau/nau10.jpg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">Нау Гуртожиток №11</h4>
                <img src='../admin-panel/png/hostels_nau/nau11.jpg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">Нау Гуртожиток №13</h4>
                <img src='../admin-panel/png/hostels_nau/nau13.jpg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №1</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi1.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №3</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi3.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №4</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi4.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №6</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi6.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №7</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi7.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №8</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi8.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №9</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi9.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №10</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi10.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №11</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi11.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №12</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi12.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №13</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi13.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №14</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi14.png' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №15</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi15.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №16</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi16.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №17</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi17.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №18</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi18.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №19</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi19.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №20</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi20.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №21</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi21.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КПІ Гуртожиток №22</h4>
                <img src='../admin-panel/png/hostels_kpi/kpi22.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНЕУ Гуртожиток №1</h4>
                <img src='../admin-panel/png/hostels_kneu/kneu1.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНЕУ Гуртожиток №2</h4>
                <img src='../admin-panel/png/hostels_kneu/kneu2.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНЕУ Гуртожиток №3</h4>
                <img src='../admin-panel/png/hostels_kneu/kneu3.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНЕУ Гуртожиток №4</h4>
                <img src='../admin-panel/png/hostels_kneu/kneu4.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНЕУ Гуртожиток №5</h4>
                <img src='../admin-panel/png/hostels_kneu/kneu5.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУКіМ Гуртожиток №1</h4>
                <img src='../admin-panel/png/hostels_knukim/knukim1.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУКіМ Гуртожиток №2</h4>
                <img src='../admin-panel/png/hostels_knukim/kjukim2.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУКіМ Гуртожиток №3</h4>
                <img src='../admin-panel/png/hostels_knukim/knukim3.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НАУКМА Гуртожиток №1</h4>
                <img src='../admin-panel/png/hostels_naukma/naukma1.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НАУКМА Гуртожиток №2</h4>
                <img src='../admin-panel/png/hostels_naukma/naukma2.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НАУКМА Гуртожиток №3</h4>
                <img src='../admin-panel/png/hostels_naukma/naukma3.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НАУКМА Гуртожиток №4</h4>
                <img src='../admin-panel/png/hostels_naukma/naukma4.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            
            <div class="flex-test-item">
                <h4 style="text-align:center">НМУ Гуртожиток №2</h4>
                <img src='../admin-panel/png/hostels_nmu/nmu2.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НМУ Гуртожиток №3</h4>
                <img src='../admin-panel/png/hostels_nmu/nmu3.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НМУ Гуртожиток №4</h4>
                <img src='../admin-panel/png/hostels_nmu/nmu4.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НМУ Гуртожиток №5</h4>
                <img src='../admin-panel/png/hostels_nmu/nmu5.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НМУ Гуртожиток №6</h4>
                <img src='../admin-panel/png/hostels_nmu/nmu6.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НМУ Гуртожиток №7</h4>
                <img src='../admin-panel/png/hostels_nmu/nmu7.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НУБіП Гуртожиток №1</h4>
                <img src='../admin-panel/png/hostels_nubip/nubip1.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НУБіП Гуртожиток №2</h4>
                <img src='../admin-panel/png/hostels_nubip/nubip2.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НУБіП Гуртожиток №3</h4>
                <img src='../admin-panel/png/hostels_nubip/nubip3.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НУБіП Гуртожиток №4</h4>
                <img src='../admin-panel/png/hostels_nubip/nubip4.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НУБіП Гуртожиток №5</h4>
                <img src='../admin-panel/png/hostels_nubip/nubip5.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НУБіП Гуртожиток №6</h4>
                <img src='../admin-panel/png/hostels_nubip/nubip6.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НУБіП Гуртожиток №7</h4>
                <img src='../admin-panel/png/hostels_nubip/nubip7.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НУБіП Гуртожиток №8</h4>
                <img src='../admin-panel/png/hostels_nubip/nubip8.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НУБіП Гуртожиток №9</h4>
                <img src='../admin-panel/png/hostels_nubip/nubip9.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НУБіП Гуртожиток №10</h4>
                <img src='../admin-panel/png/hostels_nubip/nubip10.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">НУБіП Гуртожиток №11</h4>
                <img src='../admin-panel/png/hostels_nubip/nubip11.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №1</h4>
                <img src='../admin-panel/png/hostels_tar/tar1.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №2</h4>
                <img src='../admin-panel/png/hostels_tar/tar2.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №3</h4>
                <img src='../admin-panel/png/hostels_tar/tar3.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №4</h4>
                <img src='../admin-panel/png/hostels_tar/tar4.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №5</h4>
                <img src='../admin-panel/png/hostels_tar/tar5.jpg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №6</h4>
                <img src='../admin-panel/png/hostels_tar/tar6.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №7</h4>
                <img src='../admin-panel/png/hostels_tar/tar7.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №8</h4>
                <img src='../admin-panel/png/hostels_tar/tar8.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №9</h4>
                <img src='../admin-panel/png/hostels_tar/tar9.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №10</h4>
                <img src='../admin-panel/png/hostels_tar/tar10.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №11</h4>
                <img src='../admin-panel/png/hostels_tar/tar11.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №12</h4>
                <img src='../admin-panel/png/hostels_tar/tar12.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №13</h4>
                <img src='../admin-panel/png/hostels_tar/tar13.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №14</h4>
                <img src='../admin-panel/png/hostels_tar/tar14.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №15</h4>
                <img src='../admin-panel/png/hostels_tar/tar15.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №16</h4>
                <img src='../admin-panel/png/hostels_tar/tar16.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №17</h4>
                <img src='../admin-panel/png/hostels_tar/tar17.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №18</h4>
                <img src='../admin-panel/png/hostels_tar/tar18.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №19</h4>
                <img src='../admin-panel/png/hostels_tar/tar19.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №20</h4>
                <img src='../admin-panel/png/hostels_tar/tar20.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №22</h4>
                <img src='../admin-panel/png/hostels_tar/tar22.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №23</h4>
                <img src='../admin-panel/png/hostels_tar/tar23.jpg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
            <div class="flex-test-item">
                <h4 style="text-align:center">КНУ Гуртожиток №24</h4>
                <img src='../admin-panel/png/hostels_tar/tar24.jpeg' style="width:180px; height: 150px; margin-left: 50px;"/><br>
            </div>
    </div>
    
</body>
</html>