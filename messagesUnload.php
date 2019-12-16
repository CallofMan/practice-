<?php
    SESSION_START();
    require_once "connection.php";

    $message = $_POST["message"];
    $id_room = $_POST['id_room'];
    $role_user = $_SESSION['role'];
    $id_user = $_SESSION['id'];
    $datetime = date("Y-m-d H:i:s");

    $queryAdd = mysqli_query($link, "INSERT INTO messages (id_message, id_user, id_room, text_message, date) 
    VALUES (NULL, $id_user, $id_room, '$message', '$datetime')");