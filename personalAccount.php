<?
    require_once 'connection.php';
    SESSION_START();

    if($_SESSION['role'] != '1' || $_SESSION['role'] == '0')
    {
        Header("Location: index.php");
    }

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
    <link rel="icon" href="img/favicon.ico">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>

<div id="wrapper">

        <div class="bgAddRoom">

            <div class="addRoom">

                <h2> Создание комнаты </h2>

                <form action="" method="POST"> 

                    <div class="radio">
                        <div class="adminRadio"> <input type="radio" value="Админ" name="radio" id="adminRadio" requiered=""><label for="adminRadio">Для админов</label> </div>
                        <div class="userRadio"><input type="radio" value="Юзер" name="radio" id="userRadio" requiered=""><label for="userRadio">Для юзеров</label> </div>
                    </div>

                    <input type="text" name="nameRoom" placeholder="Введите название комнаты" minlength="4" maxlength="20" requiered="" autofocus autocomplete="off">

                    <input type="submit" name="buttonAddRoom" value="Добавить комнату">

                </form>

            </div>

        </div>

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

                            <a href="addUser.php" class="add">Добавить пользователя</a>
                            <a href="addNews.php" class="add">Добавить новость</a>
                            <a href="#" class="add" id="addRoom">Добавить комнату</a>

                    </div>

                </div>

            </section>

        </main>

</div>

<script src="personalAccount.js"> </script>
<script src="jquery-3.3.1.min.js"> </script>
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
</script>

</body>
</html>