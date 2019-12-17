<?
    require_once 'connection.php';
    SESSION_START();

    if($_SESSION['role'] != '1' || $_SESSION['role'] == '0')
    {
        Header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>personalAccount</title>
    <link rel="stylesheet" href="styles/style_personalAccount.css">
    <link rel="stylesheet" href="styles/general.css">
</head>
<body>

<div id="wrapper">

        <header>
			
            <img class="logo" src="../background/logo_okbmei1.png" alt="logo">
            <?
                if (!isset($_SESSION['id'])) {
                    echo "<a href='authorization.php' class='login'>Авторизация</a>";
                }
            ?>
            <a href="logout.php" class="login">Выйти</a>
    
        </header>

        <main>

            <section class="top">
            
                <nav class="navigation">	

                    <a href="index.php">Главная</a>
                    <a href="#">Телефонный справочник</a>
                    <a href="forum.php?id=1">Форум</a>
                    <? if ( $_SESSION['role'] == 1) {
                        echo "<a href='requests.php'>Заявки</a>";
                    }
                    if ( $_SESSION['role'] == 0) {
                        echo "<a href='requests.php'>Создать заявку</a>";
                    }
                    ?>
                    
                    
                </nav>
            
            </section>

            <section class="center">

                <ul class="listUsers">
                    <?
                    $selectUsers = mysqli_query($link, "SELECT first_name, second_name FROM `users`");
                    if ($selectUsers) {
                        for ($i = 0; $i < mysqli_num_rows($selectUsers); $i++) {
                            $selectUsersResult = mysqli_fetch_assoc($selectUsers);
                            ?>
                            <li>
                                <h4><?echo $selectUsersResult['first_name']." ".$selectUsersResult['second_name']?></h4>
                                <a href="" class="userListButtons">edit</a>
                                <a href="" class="userListButtons">delete</a>
                            </li>
                            <?
                        }
                    }
                    ?>
                </ul>

                <div class="infoAndButton">

                    <img src="img/iconUser.png">

                    <ul class="infoUser">

                        <li>Иван Иванов</li>
                        <li>Должность</li>
                        <li>Логин</li>
                        <li>Почта</li>

                    </ul>
                    
                    <div class="buttons">

                            <a href="addUser.php" class="addUser">Добавить пользователя</a>
                            <a href="addNews.php" class="addRoom">Добавить новость</a>
                            <a href="#" class="addRoom">Добавить комнату</a>

                    </div>

                </div>

            </section>

        </main>

</div>

</body>
</html>