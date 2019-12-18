<?
    require_once 'connection.php';
    SESSION_START();

    if($_SESSION['role'] != '1' || $_SESSION['role'] == '0')
    {
        Header("Location: index.php");
    }

    // код добавления комнаты
    $nameRoom = $_POST['nameRoom'];

    if(isset($_POST['radio'])){

        if($_POST['radio'] == 'Админ'){
            $role = 1;
        }
        if($_POST['radio'] == 'Юзер'){
            $role = 0;
        }

    }

    if(isset($_POST['buttonAddRoom'])){
        $addRoomQuery = mysqli_query($link, 
        "INSERT INTO `rooms`(   
        `id_room`,
        `name_room`,
        `role`)
        VALUES (
        NULL,
        '$nameRoom',
        $role)");
        echo "<meta http-equiv='refresh' content='0'>";
    }

    // код добавления новости
    if(isset($_POST['submit']))
	{
		$nameNews = $_POST['title'];
		$preText = $_POST['preText'];
		$text = $_POST['text'];
		$image = $_POST['image'];
		$date = date("Y-m-d H:i:s");
	}

	$query=mysqli_query($link,"INSERT INTO `news`(`id`, `title`, `into_text`, `full_text`, `date`, `image`) VALUES (NULL,'$nameNews','$preText','$text','$date','$image')");

    // код добавления юзера
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
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>personalAccount</title>
    <link rel="stylesheet" href="styles/style_personalAccount.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="icon" href="img/favicon.ico">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>

<!-- форма добавления комнаты -->
<div class="bgAddRoom">
    <div class="addForm">
        <h2> Создание комнаты </h2>
        <form action="" method="POST"> 

            <div class="radio">
                <div class="adminRadio"> <input type="radio" value="Админ" name="radio" id="adminRadio" requiered=""><label for="adminRadio">Для админов</label> </div>
                <div class="userRadio"><input type="radio" value="Юзер" name="radio" id="userRadio" requiered=""><label for="userRadio">Для юзеров</label> </div>
            </div>

            <input type="text" name="nameRoom" placeholder="Введите название комнаты" minlength="4" maxlength="20" requiered="" autofocus autocomplete="off">

            <input type="submit" class="button" name="buttonAddRoom" value="Добавить комнату">
        </form>
    </div>
</div>

<!-- форма добавления новости -->
<div class="bgAddNews">
    <div class='addForm'>
        <form action="" method="POST" class="form">
            <h2 style="color:white; margin:20px auto; font-size:25px;">Добавление новости на главную</h2>
            <input type="text" name="title" placeholder="Введите название новости" required autofocus> 
            <textarea name="preText" placeholder="Введите текст для главной" required></textarea>
            <textarea name="text" placeholder="Введите весь текст" required></textarea>
            <input type="text" name="image" placeholder="Вставьте ссылку на картинку" >
            <input type="submit" name="submit" value="Отправить" class="button">
        </form>
    </div>
</div>

<!-- форма добавления пользователя -->
<div class="bgAddUser">
    <div class="addForm">
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
    </div>
</div>

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
                    <?
                    $selectUsers = mysqli_query($link, "SELECT id_user, first_name, second_name FROM `users`");
                    if ($selectUsers) {
                        for ($i = 0; $i < mysqli_num_rows($selectUsers); $i++) {
                            $selectUsersResult = mysqli_fetch_assoc($selectUsers);
                            ?>
                            <li>
                                <h4 class="<?php echo $selectUsersResult['id_user']?>"><?echo $selectUsersResult['first_name']." ".$selectUsersResult['second_name']?></h4>
                                <a href="" class="userListButtons">edit</a>
                                <a href="" class="userListButtons">delete</a>
                            </li>
                            <?
                        }
                    }
                    ?>

                </ul>

                <div class="infoAndButton">

                    <div class="avatarAndInfoUser">

                        <img src="img/iconUser.png">

                        <ul class="infoUser">
                            <?php
                            $sessionId = $_SESSION['id'];
                            $selectInfo = mysqli_query($link,
                            "SELECT first_name, second_name,
                            login, password, telephone, mail, position
                            FROM `users`
                            WHERE id_user = $sessionId");

                            if ($selectInfo) {
                                for ($i = 0; $i < mysqli_num_rows($selectInfo); $i++) {
                                    $selectInfoResult = mysqli_fetch_assoc($selectInfo);
                                }
                                echo "
                                <li>
                                    <p class='userInfoDescripton'>Фамилия и Имя сотрудника</p>
                                    <p class='innerUserInfo'>".$selectInfoResult['first_name'] . " " . $selectInfoResult['second_name']."</p>
                                </li> 

                                <li>
                                    <p class='userInfoDescripton'>Должность сотрудника</p>
                                    <p class='innerUserInfo'>".$selectInfoResult['position']."</p>
                                </li>
  
                                <li> 
                                    <p class='userInfoDescripton'>Логин сотрудника для внутренней сиситемы</p>
                                    <p class='innerUserInfo'>". $selectInfoResult['login'] ."</p>
                                </li>

                                <li>
                                    <p class='userInfoDescripton'>Email сотрудника</p>
                                    <p class='innerUserInfo'>".$selectInfoResult['mail']."</p>
                                </li>";


                            }
                            ?>
                        </ul>

                    </div>
                    
                    <div class="buttons">

                            <a href="#" class="add" id="addUser">Добавить пользователя</a>
                            <a href="#" class="add" id="addNews">Добавить новость</a>
                            <a href="#" class="add" id="addRoom">Добавить комнату</a>

                    </div>

                </div>

            </section>

        </main>

</div>

<script src="personalAccount.js"></script>
<script src="addUser.js"></script>
<script src="jquery-3.3.1.min.js"></script>
<script> 
    $(function(){
        $('#addRoom').click(function(){
            $('.bgAddRoom').css('display', 'flex');
        });
        $('.bgAddRoom').click(function(e){
            if(e.target === this) {
                $('.bgAddRoom').css('display', 'none');
            }
        });
    });

    $(function()
    {
        $('#addNews').click(function(){
            $('.bgAddNews').css('display', 'flex');
        });
        $('.bgAddNews').click(function(stuff){
            if(stuff.target === this) {
                $('.bgAddNews').css('display', 'none');
            }
        });
    });

    $(function()
    {
        $('#addUser').click(function(){
            $('.bgAddUser').css('display', 'flex');
        });
        $('.bgAddUser').click(function(iam){
            if(iam.target === this) {
                $('.bgAddUser').css('display', 'none');
            }
        });
    })
</script>

</body>
</html>