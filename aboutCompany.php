<?php
SESSION_START();
?>

<!DOCTYPE html>
<html>
<head>
	<title>О нас</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="styles/style_aboutCompany.css">
    <link rel="stylesheet" href="styles/general.css">

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>

<div class="wrapper">

	<header>
			
		<div class="logo">
			<img class="logo" src="../background/logo_okbmei1.png" alt="logo">
		</div>

		<div class="login">
			<?
			if (isset($_SESSION['id'])) {
				echo "<a href='logout.php' class='login'>Выйти</a>";
			}
			else echo "<a href='authorization.php' class='login'>Авторизация</a>";
			?>
		</div>

	</header>

	<section class="leftSidebar">
		<nav class="leftSidebarNavigation">	
            <a href="index.php">Главная</a>
			<a href="#">Телефонный справочник</a>
			<a href="#footerMap">Как добраться</a>
			<a href="allNews.php">Все новости</a>
		</nav>
	</section>
	
	<main>
		<section class="center">

				<h2> О нас </h2>

				    <div class="text">

                        <p> Начиная с 1947 года, когда распоряжением Совета Министров СССР в целях реактивного вооружения в Московском энергетическом институте был создан Сектор специальных работ,
                            преобразованный в Особое конструкторское бюро МЭИ,
                            наше предприятие всегда оставалось на передовых рубежах науки и техники.
                            Мы решили ряд приоритетных государственных задач, создав впервые в СССР,
                            а в ряде случаев, и впервые в мире, технические средства и системы,
                            позволившие нашей стране стать космической державой,
                            развернуть широкомасштабное телевизионное вещание, 
                            проводить исследования ближнего и дальнего космоса,
                            укрепить обороноспособность.
                        
                         </p>
                      

                         <p> 
                            За 70 летнюю историю ОКБ МЭИ участвовало в работе по развитию ракетной техники,
                            комплексов траекторных и телеметрических измерений,
                            телевизионных систем для наблюдения за поведением биологических объектов в состоянии невесомости,
                            создании комплекса систем,
                            обеспечивавших полет первого в мире пилотируемого корабля-спутника "Восток" с космонавтом Ю.Гагариным,
                            создании первой отечественной приемной телеметрической станции с магнитной регистрацией данных,
                            разработке "Советского космовидения" (космическая телевизионная система, работающая в вещательном стандарте),
                            передаче телевизионной и телеметрической информации первого в истории выхода космонавта А.Леонова в открытый космос и многое другое.
                            Специалисты ОКБ МЭИ разрабатывают сложнейшую аппаратуру:
                         </p>

                      

                         <ul class="textTable">
                             <li> бортовые и специальные антенны , </li>
                             <li> корреляционно-фазовые пеленгаторы, </li>
                             <li> лазерно-телевизионные системы траекторных измерений, </li>
                             <li> наземные антенны, </li>
                             <li> спутниковые системы связи технологии VSAT, </li>
                             <li> оптические системы связи, </li>
                             <li> радиометрическую аппаратуру космического базирования, </li>
                             <li> радиотелеметрические и ретрансляционной системы, радиолокаторы. </li>
                         </ul>

                         <p> Предприятие принимает участие в многочисленных выставках,
                             проводимых в стране и за ее пределами.
                             Результатом выставочной деятельности ОКБ МЭИ являются дипломы,
                             сертификаты и медали, подтверждающие высокий уровень качества
                             конструкторских разработок и представленной продукции,
                             и способствующие неизменному повышению имиджа предприятия.
                        </p>


                        <p> В настоящее время ОКБ МЭИ головное предприятие по антенному направлению в Роскосмосе,
                            мы создаем высокоэффективные АС наземного базирования в интересах систем НАКУ МО РФ,
                            НКУ КА НСЭН Роскосмоса, наземной антенной составляющей ЕТРИС ДЗЗ РФ.
                            Предприятие ведет разработку и производство АС для локаторов космического и авиационного базирования,
                            сверхминиатюрных, высокоэффективных, всенаправленных приемных и передающих антенн для малых и сверхмалых КА.
                        </p> 
                        
                        <p> Специальные информационные системы и комплексы ОКБ не имеют аналогов.
                            Тактико-технические характеристики бортовых радиокомплексов для малых и сверхмалых КА,
                            а также бортовых и наземных телеметрических систем для испытания образцов ракетной техники уникальны.
                            Приоритетным направлением деятельности предприятия является
                            создание на новом информационно-техническом уровне полигонных испытательных комплексов.
                        </p> 

                        <p> ОКБ сегодня - это основное звено Западного
                            пункта управления НКУ КА НСЭН Роскосмоса.
                        </p>

                        <p> Два центра космической связи ОКБ в круглосуточном режиме осуществляют управление,
                            контроль технического состояния и оценку траекторных параметров КА и систем,
                            оказывают услуги по управлению КА различного назначения в дальнем,
                            среднем и ближнем космосе в С, S, Х-диапазонах в международных форматах CCSDS.
                        </p>
                        <p> Участие в международных программах управления КА в дальнем космосе (при головной роли Роскосмоса в партнерстве с институтами РАН, в кооперации с отечественными и зарубежными партнерами) и,
                            прежде всего, в программах ЭкзоМарс-2016 и 2020 г., ведение головных контрактов по разработке проектов,
                            определяющих вектор развития НКУ ДКА до 2025 (2030) гг. дают ОКБ МЭИ право и возможность прочно закрепить свои позиции на отечественном и зарубежном рынках,
                            и динамично развиваясь, обеспечить самые жесткие требования заказчиков.
                        </p> 

                        <p> Генеральный директор - доктор технических наук, профессор,
                            Лауреат Государственной премии Российской Федерации,
                            Чеботарев Александр Семенович.
                        </p>

                        <p> АО "ОКБ МЭИ" входит в состав Корпорации АО
                            <Российские космические системы>.
                        </p>

                        <p> Цель корпорации - сохранение и развитие научно-производственного и технологического потенциала ракетно-космической промышленности Российской Федерации,
                            концентрация и эффективное использование интеллектуальных,
                            производственных и финансовых ресурсов для реализации программ создания космических и наземных систем в интересах обеспечения обороноспособности,
                            безопасности и социально-экономического развития государства.
                        </p>
				    </div>

		</section>

	</main>

	<footer style="color: white;">


		<div id="footerMap">

				<!-- <script style="flex-grow: 1; width: 93%;" type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A99dc76f7c463cec37b1c102ed12522e228ad0aa2b6582984d06190ddb248d015&amp;height=400&amp;width=93%&amp;%lang=ru_RU&amp;scroll=true"></script> -->

				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad30690010cac316c23ee0f843f9ae9db86e1352d97cde92bcf23c421ccedeba5&amp;width=1052&amp;height=564&amp;lang=ru_RU&amp;scroll=true"></script>

				<!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad30690010cac316c23ee0f843f9ae9db86e1352d97cde92bcf23c421ccedeba5&amp;width=1266&amp;height=697&amp;lang=ru_RU&amp;scroll=true"></script> -->

			</div>

	</footer>

</div>

</body>
</html>