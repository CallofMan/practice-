<?php
    require_once "connection.php";

    $query = mysqli_query($link, "SELECT login, password FROM users");
    
    
    
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum</title>
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
        /*
        a 
        {
            border: 0px solid black;
            background-color: black;
            opacity: 0.6;
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 200px;
            min-height: 50px;
            font-size: 20pt;
            color: white;
            text-decoration: none;
            margin-top: 20px;
            margin-left: 90%;
        }
        */
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
            font-size: 30pt;
        }
    </style>

</head>
<body>
    <a href="index.php">Назад</a>

    <form method="POST" id="auth">
        <h1>
            <?php
                if (isset($_POST["ferificated"]))
                {
                    $login = $_POST["login"];
                    $password = $_POST["password"];

                    while($result = mysqli_fetch_assoc($query))
                    {
                        // Проверка на корректные логин и пароль
                        if($result["login"] == $login && $result["password"] == $password)
                        {
                            echo "Заебись";
                        }
                        else echo "Не заебись";
                        
                    }
                }
            ?>
        </h1>

        <input type="text" name="login" class="auth_out" placeholder="Введите логин" required autofocus>
        <input type="password" name="password" class="auth_out" placeholder="Введите пароль" required>

        <input type="submit" name="ferificated" value="Войти" id="auth_out">
    </form>
</body>
</html>