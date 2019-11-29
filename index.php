<?php
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
	<title>АО "Особое конструктоское бюро Мосчковского энергетического института"</title>
	<meta charset="utf-8">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="styles/style_index.css">
	<!-- CSS -->
</head>
<body>

<div class="wrapper">

	<header>
			
		<div class="logo">
			<img class="logo" src="../background/logo_okbmei1.png" alt="logo">
		</div>

		<div class="login">
			<a href="innerPart/login/auth.php" class="login">Личный кабинет</a>
		</div>

	</header>

	<main>

		<section class="leftSidebar">
		
		<nav class="leftSidebarNavigation">		
			<a href="#">Главная</a>
			<a href="#">Телефонный справочник</a>
			<a href="#">О компании</a>
			<a href="#">Главная</a>
			<a href="#" style="margin-bottom: unset">Главная</a>
		</nav>

		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A99dc76f7c463cec37b1c102ed12522e228ad0aa2b6582984d06190ddb248d015&amp;width=250&amp;height=250&amp;lang=ru_RU&amp;scroll=true"></script>

		</section>

		<section class="center">
			
			<div class="">

				<h2>Новости</h2>

				<div class="newsWrapper">

					<div class="news">
						<h3>Антенны и распространение радиоволн</h3>
						<img src="img/news/1.jpg">
						<article>
							В октябре 2019 года Санкт-Петербургская Антенная Неделя была проведена в СПбГЭТУ «ЛЭТИ» и включала в себя две конференции: русскоязычную «Антенны и Распространение Радиоволн» и англоязычную «Antennas Design and Measurement International Conference».
						</article>
						<p>01.01.2001</p>
					</div>

					<div class="news">
						<h3>IV отраслевая Спартакиада «Роскосмоса»</h3>
						<img src="img/news/2.jpg">
						<article>
							16 сентября 2019 г. состоялось открытие Четвертой отраслевой Спартакиады Государственной корпорации по космической деятельности «Роскосмос». Парадным строем с флагами родного предприятия представили АО «ОКБ МЭИ» на открытии IV Спартакиады лучшие из лучших.
						</article>
						<p>01.01.2001</p>
					</div>

					<div class="news">
						<h3>Роскосмос как всегда на высоте!</h3>
						<img src="img/news/3.jpg">
						<article>
							1 сентября 2019 года завершилось грандиозное по своему масштабу мероприятие – Международный авиационно-космический Салон «Макс 2019».
						</article>
						<p>01.01.2001</p>
					</div>

					<div class="news">
						<h3>Антенны и распространение радиоволн</h3>
						<img src="img/news/1.jpg">
						<article>
							В октябре 2019 года Санкт-Петербургская Антенная Неделя была проведена в СПбГЭТУ «ЛЭТИ» и включала в себя две конференции: русскоязычную «Антенны и Распространение Радиоволн» и англоязычную «Antennas Design and Measurement International Conference».
						</article>
						<p>01.01.2001</p>
					</div>

					<div class="news">
						<h3>Антенны и распространение радиоволн</h3>
						<img src="img/news/1.jpg">
						<article>
							В октябре 2019 года Санкт-Петербургская Антенная Неделя была проведена в СПбГЭТУ «ЛЭТИ» и включала в себя две конференции: русскоязычную «Антенны и Распространение Радиоволн» и англоязычную «Antennas Design and Measurement International Conference».
						</article>
						<p>01.01.2001</p>
					</div>

					<div class="news">
						<h3>Антенны и распространение радиоволн</h3>
						<img src="img/news/1.jpg">
						<article>
							В октябре 2019 года Санкт-Петербургская Антенная Неделя была проведена в СПбГЭТУ «ЛЭТИ» и включала в себя две конференции: русскоязычную «Антенны и Распространение Радиоволн» и англоязычную «Antennas Design and Measurement International Conference».
						</article>
						<p>01.01.2001</p>
					</div>

					<div class="news">
						<h3>Антенны и распространение радиоволн</h3>
						<img src="img/news/1.jpg">
						<article>
							В октябре 2019 года Санкт-Петербургская Антенная Неделя была проведена в СПбГЭТУ «ЛЭТИ» и включала в себя две конференции: русскоязычную «Антенны и Распространение Радиоволн» и англоязычную «Antennas Design and Measurement International Conference».
						</article>
						<p>01.01.2001</p>
					</div>


					<div class="news">
						<h3>Антенны и распространение радиоволн</h3>
						<img src="img/news/1.jpg">
						<article>
							В октябре 2019 года Санкт-Петербургская Антенная Неделя была проведена в СПбГЭТУ «ЛЭТИ» и включала в себя две конференции: русскоязычную «Антенны и Распространение Радиоволн» и англоязычную «Antennas Design and Measurement International Conference».
						</article>
						<p>01.01.2001</p>
					</div>


					<div class="news">
						<h3>Антенны и распространение радиоволн</h3>
						<img src="img/news/1.jpg">
						<article>
							В октябре 2019 года Санкт-Петербургская Антенная Неделя была проведена в СПбГЭТУ «ЛЭТИ» и включала в себя две конференции: русскоязычную «Антенны и Распространение Радиоволн» и англоязычную «Antennas Design and Measurement International Conference».
						</article>
						<p>01.01.2001</p>
					</div>



				</div>

			</div>

		</section>

	</main>

	<footer style="color: white;">
		<?php 
			echo "Всего посещений: " . $allVisits['all_visits'] . " ";
		    echo "Уникальных посещений: " . $uniqueVisits[0];
		?>
	</footer>

</div>

</body>
</html>