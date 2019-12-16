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
</head>
<body>
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
                <a href="">Новости</a>
            </nav>
            <aside>
                
                <h1>Комнаты</h1>

                <?php
                    $queryRoom = mysqli_query($link, "SELECT id_room, name_room, role FROM rooms");

                    while($nameRoom = mysqli_fetch_assoc($queryRoom))
                    {

                        echo "<a href='forum.php?id=" . $nameRoom['id_room'] . "' class='roomP'>" . $nameRoom['name_room'] . "</a>";
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
</body>
<script src="forum.js"></script>
</html>