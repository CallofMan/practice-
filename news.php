<?php
    SESSION_START();
    require_once "connection.php";
    $newsId = $_GET['id'];
    $queryNews = mysqli_query($link, "SELECT * FROM `news` WHERE `id` = $newsId");
    $newsArray = mysqli_fetch_assoc($queryNews)
?>

<!DOCTYPE html>
<html>
<head>
	<title><? $newsArray['title'];?></title>
	<link rel="stylesheet" href="styles/style_addNews.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" type="text/css" href="styles/style_allNews.css">
	<link rel="icon" href="img/favicon.ico">
	<meta charset="utf-8">
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


    <section class="top">
            
        <nav class="navigation">	
            <a href="index.php">Главная</a>
            <? if (isset ($_SESSION ['id']))
            {
                echo '<a href="personalAccount.php.">Личный кабинет</a>';
                echo '<a href="forum.php">Форум</a>';
            }
            ?>
            <a href="#">Телефонный справочник</a>
           
        </nav>
			
	</section>

    <div class="newsWrapper" style="display: block;">

        <?
                echo "
                <div class='postWrapper' style='min-height: 500px;'>
                    <h2>" . $newsArray['title'] . "</h2>
                    <img src=". $newsArray['image'] .">
                    <article>" . $newsArray['full_text'] . "</article>         
                    <p>". $newsArray['date'] ."</p>
                </div>
                ";
        ?>
    
    </div>

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

    </footer>

</div>
</body>
</html>

