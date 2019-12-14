<?php
    SESSION_START();
    require_once "connection.php";

    $messagesArray = []; 
    $queryMessages = mysqli_query($link, "SELECT id_message, id_user, text_message, date FROM messages");
    while($messages = mysqli_fetch_assoc($queryMessages))
    {
        array_push($messagesArray, [$messages['id_message'], $messages['id_user'], $messages['text_message'], $messages['date']]);
    }
?>