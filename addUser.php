<?php
    SESSION_START();
    require_once "connection.php";

    if($_SESSION['role'] != '0' && $_SESSION['role'] != '1')
	{
		Header("Location: index.php");
    }

    $userName = $_POST['userName'];
    $userSurname = $_POST['userSurname'];
    
    if ($_POST['password'] == $_POST['passwordRepeat']){

        $userPassword = $_POST['password'];

    }

    $login = $_POST['login'];
    $position = $_POST['position'];
    $phone = $_POST['tel'];
    $email = $_POST['email'];

    if(isset($_POST['radio'])){

        if($_POST['radio'] == 'Админ'){
            $role = 1;
        }
        if($_POST['radio'] == 'Юзер'){
            $role = 0;
        }

    }
    
    if(isset($_POST['createAccount']) && $userPassword != null){
        $createAccount = mysqli_query($link,
            "INSERT INTO `users` (
            `id_user`,
            `first_name`,
            `second_name`,
            `login`,
            `password`,
            `telephone`,
            `mail`,
            `role`,
            `position`)
            VALUES (
            NULL,
            '$userName',
            '$userSurname',
            '$login',
            '$userPassword',
            '$phone',
            '$email',
            $role,
            '$position')");
    }

    
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add_user</title>
    <link rel="stylesheet" href="styles/style_addUser.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
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
            
            <?php
                if($createAccount) {
                    echo "<p class='message'>Аккаунт создан!</p>";
                }
            ?>

            <form action="" method="POST">

                <div class="radio">
                    <input type="radio" value="Админ" id="adminRadio" name="radio" required=""><label for="adminRadio">Админ</label>
                    <input type="radio" value="Юзер" id="userRadio" name="radio" required=""><label for="userRadio">Юзер</label>
                </div>

                <input type="text" name="userName" placeholder="Введите имя" minlength="2" maxlength="20" requiered="" autofocus class="text" autocomplete="off">
                <input type="text" name="userSurname" placeholder="Введите фамилию" minlength="2" maxlength="20" requiered="" class="text" autocomplete="off">
                <input type="password" name="password" placeholder="Введите пароль" maxlength="20" requiered="">
                <input type="password" name="passwordRepeat" placeholder="Повторите пароль" maxlength="20" requiered="">
                <input type="text" name="login" placeholder="Введите логин" minlength="2" maxlength="30" requiered="" class="login">
                <input type="text" name="position" placeholder="Введите должность" maxlength="50" requiered="" class="text">
                <input type="tel" name="tel" placeholder="Введите номер телефона" pattern="+7[0-9]{10}" maxlength="12" requiered="">
                <input type="email" name="email" placeholder="Введите адрес эл. почты" requiered="">

                <input type="submit" name="createAccount" value="Создать аккаунт" class="button">

            <form>

        </sector>

    </main>
</div>

<script src="addUser.js"></script>

</body>
</html>