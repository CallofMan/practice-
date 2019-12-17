<?php
    SESSION_START();
	require_once "connection.php";
	
	if($_SESSION['role'] != '0' && $_SESSION['role'] != '1')
	{
		Header("Location: index.php");
	}

	if(isset($_POST['submit']))
	{
		$nameNews = $_POST['title'];
		$preText = $_POST['preText'];
		$text = $_POST['text'];
		$image = $_POST['image'];
		$date = date("Y-m-d H:i:s");
	}

	$query=mysqli_query($link,"INSERT INTO `news`(`id`, `title`, `into_text`, `full_text`, `date`, `image`) VALUES (NULL,'$nameNews','$preText','$text','$date','$image')");
?>

<!DOCTYPE html>
<html>
<head>
	<title> Добавление новостей </title>
	<link rel="stylesheet" href="styles/style_addNews.css">
	<link rel="stylesheet" href="styles/general.css">
	<link rel="icon" href="img/favicon.ico">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>	
	<header>
			
        <img class="logo" src="../background/logo_okbmei1.png" alt="logo">

        <?
            if (!isset($_SESSION['id'])) {
                echo "<a href='authorization.php' class='login'>Авторизация</a>";
            }
    	?>
        <a href="logout.php" class="login">Выйти</a>
    
	</header>
	
	<section class="top">
            
                <nav class="navigation">	
					<a href="index.php">Главная</a>
					<a href="personalAccount.php">Личный кабинет</a>
                    <a href="#">Телефонный справочник</a>
                    <a href="forum.php">Форум</a>
                    <? if ( $_SESSION['role'] == 1) {
                        echo "<a href='requests.php'>Заявки</a>";
                    }
                    if ( $_SESSION['role'] == 0) {
                        echo "<a href='requests.php'>Создать заявку</a>";
                    }
                    ?>
                   
                </nav>
			
			</section>
			
  <form action="" method="POST" class="form">
    <h2 style="color:white; margin:20px auto; font-size:25px;">Добавление новости на главную</h2>
    <input type="text" name="title" placeholder="Введите название новости" required autofocus> 
	<textarea name="preText" placeholder="Введите текст для главной" required></textarea>
	<textarea name="text" placeholder="Введите весь текст" required></textarea>
	<input type="text" name="image" placeholder="Вставьте ссылку на картинку" >
    <input type="submit" name="submit" value="Отправить" class="button">

  </form>
</body>
</html>

