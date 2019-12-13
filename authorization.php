<?php
    SESSION_START();

    require_once "connection.php";

    if (isset($_POST["verificated"]))
    {
        $login = $_POST["login"];
        $password = $_POST["password"];

        // Проверка на корректные логин и пароль
        $result = mysqli_query($link, "SELECT login, password FROM users 
        WHERE login = $login AND password = $password");

        $comeback = 0;
        $key = 0;

        if($result)
        {
            // Проверка на роль
            $role = mysqli_query($link, "SELECT name_role FROM roles, users 
            WHERE roles.role = users.role AND login = $login");
            $resultRole = $role->fetch_array();

            $idUserQuery = mysqli_query($link, "SELECT id_user FROM users WHERE login = $login");
            $idUser = $idUserQuery->fetch_assoc();
        }
        else $key = 1;
    
        if ($resultRole[0] == "Админ"){
            $_SESSION['role'] = 1;
            $_SESSION['id'] = $idUser['id_user'];
            Header("Location: personalAccount.php");
        }
        else if ($resultRole[0] == "Пользователь"){
            $_SESSION['role'] = 0;
            $_SESSION['id'] = $idUser['id_user'];
            Header("Location: forum.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authorization</title>
    <link rel="stylesheet" href="styles/style_index.css">
    <link rel="stylesheet" href="styles/style_authorization.css">

</head>
<body>
    <a href="index.php">Назад</a>

    <form method="POST" id="auth">
        <h1>
            <?php
                if($key == 1)
                    echo "Неверный логин или пароль";
            ?>
        </h1>

        <input type="text" name="login" class="auth_out" placeholder="Введите логин" required autofocus>
        <input type="password" name="password" class="auth_out" placeholder="Введите пароль" required>

        <input type="submit" name="verificated" value="Войти" id="auth_out">
    </form>
</body>
</html>