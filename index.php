<?php
	SESSION_START();
	require_once 'connection.php';
	
	$db = mysqli_query($link, "SELECT * FROM okbmei");

	// ip посетителя
	$ip = $_SERVER['REMOTE_ADDR'];

	// Проверка на существующий ip
	$queryAllIp = mysqli_query($link, "SELECT ip FROM ip");

	$key = 1;
	while ($allIp = $queryAllIp->fetch_assoc())
	{
		if ($allIp['ip'] == $ip)
		{
			$key = 0;
			break;
		}
	}

	// Занесение в базу ip, если такого раньше не было
	if ($key == 1)
	{
		$queryIp = mysqli_query($link, "INSERT INTO ip VALUES (NULL, '$ip')");
	}

	// Подсчёт уникальных пользователей
	$queryUniqueVisits = mysqli_query($link, "SELECT COUNT(*) FROM ip");
	$uniqueVisits = $queryUniqueVisits->fetch_array();

	// Обновление количества уникальных пользователей в базе
	$updateUnique = mysqli_query($link, "UPDATE quantity_all_visits SET unique_visits = $uniqueVisits[0] WHERE id = 1");

	// Обновление счётчика посещений в базе
	$updateAll = mysqli_query($link, "UPDATE quantity_all_visits SET all_visits = all_visits + 1 WHERE id = 1");

	// Предвывод счётчика посещений
	$result = mysqli_query($link, "SELECT all_visits FROM quantity_all_visits WHERE id = 1");
	$allVisits = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<title>АО "Особое конструкторское бюро Московского энергетического института"</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.ico">
	<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="styles/style_index.css">	
	<!-- Slider -->
		<link rel="stylesheet" href="slider/css/style.css">
	<!-- Slider -->
	<!-- CSS -->
		<link rel="stylesheet" href="styles/general.css">
</head>
<body>

<div class="wrapper">

	<header>
			
		<div class="logo">
			<img class="logo" src="../background/logo_okbmei1.png" alt="logo">
		</div>

		<div class="login">
			<a href="authorization.php" class="login">Авторизация</a>
		</div>

	</header>

	<main>

		<section class="leftSidebar">
		
		<nav class="leftSidebarNavigation">		
			<a href="#">Телефонный справочник</a>
			<a href="#footerMap">Как добраться</a>
			<a href="#">О компании</a>
			<?php
				if($_SESSION['role'] == 1)
				{
					echo "<a href='forum.php'>Форум</a>";
					echo "<a href='personalAccount.php'>Личный кибинет</a>";
				}
				if($_SESSION['role'] == '0')
				{
					echo "<a href='forum.php'>Форум</a>";
					echo "<a href='requests.php'>Оставить заявку</a>";
				}
			?>
		</nav>

		<!-- <script style="flex-grow: 1; width: 93%;" type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A99dc76f7c463cec37b1c102ed12522e228ad0aa2b6582984d06190ddb248d015&amp;height=250&amp;width=93%&amp;%lang=ru_RU&amp;scroll=true"></script> -->

		<!-- <script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>
			
		<div id="vk_groups"></div>
		<script type="text/javascript">
		VK.Widgets.Group("vk_groups", {mode: 4, height: "400"}, 341989);
		</script> -->

		</section>

		<section class="center">
			
		<div class="images">

			<div class="image"><img src="./img/news/1.jpg" alt="image"></div>
			<div class="image"><img src="./img/news/2.jpg" alt="image"></div>
			<div class="image"><img src="./img/news/3.jpg" alt="image"></div>
			<div class="image"><img src="./img/news/1.jpg" alt="image"></div>
			<div class="buttons"></div>

		</div>

				<h2>Новости</h2>

				<div class="newsWrapper">

					<a href="" class="news">
						<h3>Антенны и распространение радиоволн</h3>
						<img src="img/news/1.jpg">
						<article>
							В октябре 2019 года Санкт-Петербургская Антенная Неделя была проведена в СПбГЭТУ «ЛЭТИ» и включала в себя две конференции: русскоязычную «Антенны и Распространение Радиоволн» и англоязычную «Antennas Design and Measurement International Conference».
						</article>
						<p>01.01.2001</p>
					</a>
					
					<a href="" class="news">
						<h3>Антенны и распространение радиоволн</h3>
						<img src="img/news/1.jpg">
						<article>
							В октябре 2019 года Санкт-Петербургская Антенная Неделя была проведена в СПбГЭТУ «ЛЭТИ» и включала в себя две конференции: русскоязычную «Антенны и Распространение Радиоволн» и англоязычную «Antennas Design and Measurement International Conference».
						</article>
						<p>01.01.2001</p>
					</a>

					<a href="" class="news">
						<h3>Антенны и распространение радиоволн</h3>
						<img src="img/news/1.jpg">
						<article>
							В октябре 2019 года Санкт-Петербургская Антенная Неделя была проведена в СПбГЭТУ «ЛЭТИ» и включала в себя две конференции: русскоязычную «Антенны и Распространение Радиоволн» и англоязычную «Antennas Design and Measurement International Conference».
						</article>
						<p>01.01.2001</p>
					</a>

				</div>

		</section>

	</main>

	<footer style="color: white;">

		<div class="footerNav">
			<nav class="footerNav Left">
				<a href="">Lorem ipsum</a>
				<a href="">Lorem ipsum</a>
				<a href="">Lorem ipsum</a>
				<a href="">Lorem ipsum</a>
				<a href="" class="bottomA">Lorem ipsum</a>
			</nav>

			<nav class="footerNav Left">
				<a href="">Lorem ipsum</a>
				<a href="">Lorem ipsum</a>
				<a href="">Lorem ipsum</a>
				<a href="">Lorem ipsum</a>
				<a href="" class="bottomA">Lorem ipsum</a>
			</nav>

			<nav class="footerNav Left">
				<a href="">Lorem ipsum</a>
				<a href="">Lorem ipsum</a>
				<a href="">Lorem ipsum</a>
				<a href="">Lorem ipsum</a>
				<a href="" class="bottomA">Lorem ipsum</a>
			</nav>		

		</div>

		<div id="footerMap">

				<!-- <script style="flex-grow: 1; width: 93%;" type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A99dc76f7c463cec37b1c102ed12522e228ad0aa2b6582984d06190ddb248d015&amp;height=400&amp;width=93%&amp;%lang=ru_RU&amp;scroll=true"></script> -->

				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad30690010cac316c23ee0f843f9ae9db86e1352d97cde92bcf23c421ccedeba5&amp;width=1052&amp;height=564&amp;lang=ru_RU&amp;scroll=true"></script>

				<!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad30690010cac316c23ee0f843f9ae9db86e1352d97cde92bcf23c421ccedeba5&amp;width=1266&amp;height=697&amp;lang=ru_RU&amp;scroll=true"></script> -->

			</div>
		
		<div class="counter">
			<?php 
				echo "<p>Всего посещений: " . $allVisits['all_visits'] . "</p>";
			    echo "<p>Уникальных посещений: " . $uniqueVisits[0] . "</p>";
			?>
		</div>

	</footer>

</div>

<script type="text/javascript" src="slider.js"> </script>

</body>
</html>
