<?php
    SESSION_START();
    require_once "connection.php";
    

?>

<!DOCTYPE html>
<html>
<head>
	<title> Все новости </title>
	<link rel="stylesheet" href="styles/style_addNews.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" type="text/css" href="styles/style_allNews.css">	
	<link rel="icon" href="img/favicon.ico">
	<meta charset="utf-8">
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

                    <? if ( $_SESSION['role'] == 1) {
                        echo "<a href='requests.php'>Заявки</a>";
                    }
                    if ( $_SESSION['role'] == 1) {
                        echo "<a href='requests.php'>Создать заявку</a>";
                    }
                    ?>
                   
                </nav>
			
			</section>

    <div class="newsWrapper">

<?
    $queryNews = mysqli_query($link, "SELECT * FROM `news`");

    while($newsArray = mysqli_fetch_assoc($queryNews))
    {
        echo '<a href="" class="news"> <h3>'.$newsArray["title"].'</h3> <img src="'.$newsArray["image"].'"> <article> '.$newsArray["into_text"].' </article> <p>'.$newsArray["date"].'</p></a>';
    }
?>
    </div>					
</div>
</body>
</html>