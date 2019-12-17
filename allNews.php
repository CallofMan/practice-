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
	<header>
			
        <img class="logo" src="../background/logo_okbmei1.png" alt="logo">
    
        <a href="logout.php" class="login">Выйти</a>
    
    </header>

    <div class="newsWrapper">

<?
    $queryNews = mysqli_query($link, "SELECT * FROM `news`");

    while($newsArray = mysqli_fetch_assoc($queryNews))
    {
        echo '<a href="" class="news"> <h3>'.$newsArray["title"].'</h3> <img src="'.$newsArray["image"].'"> <article> '.$newsArray["into_text"].' </article> <p>'.$newsArray["date"].'</p></a>';
    }
?>
</div>					

</body>
</html>