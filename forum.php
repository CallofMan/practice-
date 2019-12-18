<?php
    SESSION_START();

    require_once "connection.php";

    if($_SESSION['role'] != '0' && $_SESSION['role'] != '1')
    {
        Header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum</title>
    <link rel="stylesheet" href="styles/style_forum.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>

    <div class="hidden">
        
        <img src="img/downArrow icon.png" id="downArrowButton">

        <nav id="hiddenNav" style="display: none;">
            <a href="index.php">Главная</a>
            <?php
                if($_SESSION['role'] == '0')
                {
                    echo "<a href='requests.php'>Оставить заявку</a>";
                }
                if($_SESSION['role'] == '1')
                {   
                    echo "<a href='personalAccount.php'>Личный кабинет</a>";
                    echo "<a href='allRequests.php'>Заявки</a>";
                }
            ?>
            
            <a href="">Телефонный справочник</a>
            <a href="allNews.php">Новости</a>
        </nav>

    </div>

    <header>
            
            <div class="logo">
                <a href="index.php" class="logo"><img class="logo" src="../background/logo_okbmei1.png" alt="logo"></a>
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

    <div class="wrapper">  

       <div id="chat">
            <section>
                
            
            </section>

            <form action="" method="POST" id="form_message">
                <textarea name="message" placeholder="Введите сообщение" required id="message" autofocus></textarea>
                <input type="submit" name="send" value="Send" id="send">
            </form>
        </div>

        <div id="right">

            <nav>
                <a href="index.php">Главная</a>
                <?php
                    if($_SESSION['role'] == '0')
                    {
                        echo "<a href='requests.php'>Оставить заявку</a>";
                    }
                    if($_SESSION['role'] == '1')
                    {   
                        echo "<a href='personalAccount.php'>Личный кабинет</a>";
                        echo "<a href='allRequests.php'>Заявки</a>";
                    }
                ?>
                
                <a href="">Телефонный справочник</a>
                <a href="allNews.php">Новости</a>
            </nav>

            <aside>
                
                <h1>Комнаты</h1>

                <?php
                    $queryRoom = mysqli_query($link, "SELECT id_room, name_room, role FROM rooms");

                    while($nameRoom = mysqli_fetch_assoc($queryRoom))
                    {
                        // Вывод комнат в зависимости от роли
                        if($_SESSION['role'])
                            echo "<p id='room" . $nameRoom['id_room'] . "' class='roomP'>" . $nameRoom['name_room'] . "</p>";
                        else if (!$nameRoom['role'])
                            echo "<p id='room" . $nameRoom['id_room'] . "' class='roomP'>" . $nameRoom['name_room'] . "</p>";
                    }
                ?>
            </aside>

            <div id="name">
                <?php
                    $idUserForum = $_SESSION['id'];
                    $queryName = mysqli_query($link, "SELECT first_name, second_name FROM users WHERE id_user = $idUserForum");
                    $nameUser = $queryName->fetch_assoc();
                    echo '<h3 style="color: white;">' . $nameUser["first_name"] . ' ' . $nameUser["second_name"] . '</h3>';
                ?>
            </div>

        </div>

    </div>

</body>

<!-- Отображение навигации на 5S/SE -->
<script type="text/javascript">
document.getElementById('downArrowButton').addEventListener("click", function () {
    
    if (document.getElementById('hiddenNav').style.display == "none") {
        document.getElementById('hiddenNav').style.display = "flex";
        document.getElementById('downArrowButton').style.transform = "rotate(180deg)";
    }

    else {
        document.getElementById('hiddenNav').style.display = "none";
        document.getElementById('downArrowButton').style.transform = "rotate(-180deg)";
    }

})  
</script>

<script src="forum.js"></script>
</html>