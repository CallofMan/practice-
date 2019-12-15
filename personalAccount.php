<?
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

            <a href="authorization.php" class="login">Авторизация</a>
    
        </header>

        <main>

            <section class="top">
            
                <nav class="navigation">	

                    <a href="index.php">Главная</a>
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

            <section class="center">

                <ul class="listUsers">

                    <li>
                        <h4>Ivan Ivanov</h4>
                        <p>edit</p>
                        <p>delete</p>
                    </li>

                    <li>
                        <h4>Ivan Ivanov</h4>
                        <p>edit</p>
                        <p>delete</p>
                    </li>

                    <li>
                        <h4>Ivan Ivanov</h4>
                        <p>edit</p>
                        <p>delete</p>
                    </li>

                    <li>
                        <h4>Ivan Ivanov</h4>
                        <p>edit</p>
                        <p>delete</p>
                    </li>

                    <li>
                        <h4>Ivan Ivanov</h4>
                        <p>edit</p>
                        <p>delete</p>
                    </li>

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

                        <input type="submit" value="Добавить пользователя" class="addUser">
                        <input type="submit" value="Добавить комнату" class="addRoom">

                    </div>

                </div>

            </section>

        </main>

</div>

</body>
</html>