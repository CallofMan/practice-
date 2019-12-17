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
	<link rel="stylesheet" href="styles/style_addUser.css">
	<link rel="stylesheet" href="styles/general.css">
	<link rel="icon" href="img/favicon.ico">
	<meta charset="utf-8">
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
  <form action="" method="POST">
    <input type="text" name="title" placeholder="Введите название новости" required autofocus> 
	<input type="text" name="preText" placeholder="Введите текст для главной" required>
	<input type="text" name="text" placeholder="Введите весь текст" required>
	<input type="text" name="image" placeholder="Вставьте ссылку на картинку" >
    <input type="submit" name="submit" value="Отправить" class="button">

  </form>
</body>
</html>

