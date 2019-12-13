<?php
    SESSION_START();

    require_once "connection.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authorization</title>
    <link rel="stylesheet" href="styles/style_index.css">

    <style>
        body, html
        {
            min-height: 100%;
        }
        #auth
        {
            border: 0px solid black;
            background-color: black;
            opacity: 0.8;
            height: 400px;
            width: 600px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            margin: 15% auto;
        }
        .auth_out, #auth_out
        {
            width: 300px;
            height: 50px;
            font-size: 20pt;
            
        }
        #auth_out
        {
            cursor: pointer;
        }
        a 
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 90%;
            height: 50px;
            background-color: black;
            opacity: 0.6;
            padding: 1rem 1.25rem;
            font-family: arial;
            font-size: 20pt;
            text-decoration: none;
            color: white;
            position: relative;
            -webkit-transition: all 0.3s cubic-bezier(0.2, 0, 0, 1);
            transition: all 0.3s cubic-bezier(0.2, 0, 0, 1);
            z-index: 1;
        }
        a:after 
        {
            content: '';
            display: block;
            height: 2px;
            position: absolute;
            bottom: 0;
            right: 1.25rem;
            left: 1.25rem;
            background-color: #ffffff;
            -webkit-transition: all 0.3s cubic-bezier(0.2, 0, 0, 1);
            transition: all 0.3s cubic-bezier(0.2, 0, 0, 1);
            -webkit-transform-origin: bottom center;
            transform-origin: bottom center;
            z-index: -1;
        }
        a:hover 
        {
            color: #2D2D2D;
        }
        a:hover:after 
        {
            right: 0;
            left: 0;
            height: 100%;
        }
        h1 
        {
            color: white;
            opacity: 0.8;
            font-size: 25pt;
        }
    </style>

</head>
<body>
    <a href="index.php">Назад</a>

    <form method="POST" id="auth">
        <h1>
            <?php
                if (isset($_POST["verificated"]))
                {
                    $login = $_POST["login"];
                    $password = $_POST["password"];

                    // Проверка на корректные логин и пароль
                    $result = mysqli_query($link, "SELECT login, password FROM users 
                    WHERE login = $login AND password = $password");

                    $count = mysqli_num_rows($result);

                    // Проверка на роль
                    if($count)
                    {
                        $role = mysqli_query($link, "SELECT name_role FROM roles, users WHERE roles.role = users.role AND login = $login");
                        $resultRole = $role->fetch_array();
                        echo $resultRole[0];
                    }
                    else echo "Неверный логин или пароль";
                }
            ?>
        </h1>

        <input type="text" name="login" class="auth_out" placeholder="Введите логин" required autofocus>
        <input type="password" name="password" class="auth_out" placeholder="Введите пароль" required>

        <input type="submit" name="verificated" value="Войти" id="auth_out">
    </form>
</body>
</html>