<?php
    SESSION_START();

    require_once 'messages.php';
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
                <textarea name="message" placeholder="Введите сообщение" required id="message"></textarea>
                <input type="submit" name="send" value="Send" id="send">
            </form>
        </div>
        

        <div id="right">
            <nav>
                <a href="index.php">Главная</a>
                <a href="">Личный кабинет</a>
                <a href="">Телефонный справочник</a>
                <a href="">Новости</a>
            </nav>
            <aside>
                <?php
                    $queryRoom = mysqli_query($link, "SELECT name_room, role FROM rooms");

                    $countId = 0;
                    while($nameRoom = mysqli_fetch_assoc($queryRoom))
                    {
                        ++$countId;
                        echo "<p id=room" . $countId . ">" . $nameRoom['name_room'] . "</p>";
                    }
                ?>
            </aside>
            <div id="name">
                <h3>Васян Васяныч</h3>
            </div>
        </div>
</body>
</html>