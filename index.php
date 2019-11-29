<?php
	require_once 'connection.php';
	session_start();

	if (!isset($_SESSION['counter'])) {
		$query = mysqli_query("UPDATE ");
	}
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
			<nav>

		</section>

		<section class="center">
			
			<div class="">

				<h2>Новости</h2>

				<div class="newsWrapper">

					<div class="news">
						<h3>Антенны и распространение радиоволн</h3>
						<img src="img/news/1.jpg" style="width: 300px;">
						<article>
							В октябре 2019 года Санкт-Петербургская Антенная Неделя была проведена в СПбГЭТУ «ЛЭТИ» и включала в себя две конференции: русскоязычную «Антенны и Распространение Радиоволн» и англоязычную «Antennas Design and Measurement International Conference».
						</article>
						<p>01.01.2001</p>
					</div>

					<div class="news">
						<h3>IV отраслевая Спартакиада «Роскосмоса»</h3>
						<img src="img/news/2.jpg" style="width: 300px;">
						<article>
							16 сентября 2019 г. состоялось открытие Четвертой отраслевой Спартакиады Государственной корпорации по космической деятельности «Роскосмос». Парадным строем с флагами родного предприятия представили АО «ОКБ МЭИ» на открытии IV Спартакиады лучшие из лучших.
						</article>
						<p>01.01.2001</p>
					</div>

					<div class="news">
						<h3>Роскосмос как всегда на высоте!</h3>
						<img src="img/news/3.jpg" style="width: 300px;">
						<article>
							1 сентября 2019 года завершилось грандиозное по своему масштабу мероприятие – Международный авиационно-космический Салон «Макс 2019».
						</article>
						<p>01.01.2001</p>
					</div>

				</div>

			</div>

		</section>

	</main>

	<footer>
		<?
		$get_counter = mysqli_query("SELECT * FROM counter WHERE `id` >=1");
		$counter = mysqli_fetch_assoc($get_counter);?>
		<p>Количество посещений сайта: <?echo $counter['id']; ?></p>

	</footer>
	
	

	<!-- 
		Counter

	<script type="text/javascript">
	document.write('<a href="//www.liveinternet.ru/click" '+
	'target="_blank"><img src="//counter.yadro.ru/hit?t27.12;r'+
	escape(document.referrer)+((typeof(screen)=='undefined')?'':
	';s'+screen.width+''+screen.height+''+(screen.colorDepth?
	screen.colorDepth:screen.pixelDepth))+';u'+escape(document.URL)+
	';h'+escape(document.title.substring(0,150))+';'+Math.random()+
	'" alt="" title="LiveInternet: показано количество просмотров и'+
	' посетителей" '+
	'border="0" width="88" height="120"></a>')
	</script>-->

</div>

</body>
</html>