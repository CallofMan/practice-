<?php
    SESSION_START();

    require_once 'messagesUnload.php';
    require_once 'messagesUpload.php';
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
                <div class="message_block">
                    <h4>Алексей пидор</h4>
                    <p class="message_content">egeads gdbfsfbhsgdsfb vdfshbdsfg</p>
                    <h6>2019-12-12 18:32:11</h6>
                </div>
                <div class="message_block">
                    <h4>Алексей пидор</h4>
                    <p class="message_content">egeadsggfdsrgsdfgsfgfujhjik sadbkfjhausf ouiahsw oi udvnuiasd dufnasi udfuah sdfkulhs akdljfnsaijdn fiuahr ffiuhansd iugfniuas dfiuasdiuf asuid fniudbfsfbhsg dsfbvdfs hbdsfg</p>
                    <h6>2019-12-12 18:32:11</h6>
                </div>
                <?php
                    $lengthArray = count($messagesArray);

                    for($i = 0; $i < $lengthArray; $i++)
                    {
                        $idUserM = $messagesArray[$i][1];
                        echo "SELECT first_name, second_name FROM users, messages WHERE users.id_user = messages.id_user AND id_user = $idUserM";
                        $queryNameUserM = mysqli_query($link, "SELECT first_name, second_name FROM users WHERE id_user = $idUserM");
                        $nameUserM = $queryNameUserM->fetch_assoc();
                        echo "<div class='message_block' id='message" . $messagesArray[$i][0] . "'><h4>" . $nameUserM['first_name'] . " " . $nameUserM['second_name'] . "</h4> <p class='message_content'> " . $messagesArray[$i][2] . " </p> <h6>" . $messagesArray[$i][3] . "</h6> </div>";
                    }
                    
                ?>
            </section>

            <form action="" method="POST" id="form_message">
                <textarea name="message" placeholder="Введите сообщение" required id="message"></textarea>
                <input type="submit" name="send" value="Send" id="send">
            </form>
        </div>
        

        <div id="right">
            <nav>
                <a href="index.php">Главная</a>
                <a href="personalAccount.php">Личный кабинет</a>
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
                        echo "<p id='room" . $countId . "' class='roomP'>" . $nameRoom['name_room'] . "</p>";
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
</html>