<?php
SESSION_START();
require_once "connection.php";

$roomId = $_GET['id'];

echo $roomId;

$idUserFromSession = $_SESSION['id'];
$id_room = $_POST['id_room'];

$messagesArray = []; 
$queryMessages = mysqli_query($link, "SELECT id_message, id_user, text_message, date FROM messages WHERE id_room = $id_room");

while($messages = mysqli_fetch_assoc($queryMessages))
{
    array_push($messagesArray, [$messages['id_message'], $messages['id_user'], $messages['text_message'], $messages['date']]);
}

$lengthArray = count($messagesArray);

for($i = 0; $i < $lengthArray; $i++)
{
    $idUserM = $messagesArray[$i][1];
    
    $queryNameUserM = mysqli_query($link, "SELECT first_name, second_name FROM users WHERE id_user = $idUserM");
    $nameUserM = $queryNameUserM->fetch_assoc();

    // Проверка на вставку картинок
    $message = $messagesArray[$i][2];
    $messageLength = strlen($messagesArray[$i][2]);
    if($message[$messageLength - 1] == 'g' && $message[$messageLength - 2] == 'p' &&
    $message[$messageLength - 3] == 'j' && $message[$messageLength - 4] == '.' 
    ||
    $message[$messageLength - 1] == 'g' && $message[$messageLength - 2] == 'n' &&
    $message[$messageLength - 3] == 'p' && $message[$messageLength - 4] == '.'
    ||
    $message[$messageLength - 1] == 'g' && $message[$messageLength - 2] == 'e' &&
    $message[$messageLength - 3] == 'p' && $message[$messageLength - 4] == 'j' &&
    $message[$messageLength - 5] == '.')
    {
        $keyImage = 1;
    }
    else $keyImage = 0;

    if($_SESSION['role'] == 1)
    {
        // Если сообщение ввели вы, то оно будет справа и другого цвета, если не вы, то слева
        if ($idUserM == $idUserFromSession)
        {
            echo "
            <div class='message_block' id='message" . $messagesArray[$i][0] . "' style='align-self: flex-end;'>
                <a class='logo' href='personalAccount.php' id='" . $idUserM . "'>" . $nameUserM['first_name'] . " " . $nameUserM['second_name'] . "</a>";
                if($keyImage == 1)
                {
                    echo "<p class='message_content' style='background-color: rgba(0, 169, 251, 0.3); color:white; opacity: 1;'> <img src='" . $messagesArray[$i][2] . "'> </p>
                    <div class='deleteAndDate'> 
                        <p class='delete_message' id='" . $messagesArray[$i][0] . "'>удалить</p> 
                        <h6>" . $messagesArray[$i][3] . "</h6>
                    </div>";
                }
                else echo "
                <p class='message_content' style='background-color: rgba(0, 169, 251, 0.3); color:white; opacity: 1;'> " . $messagesArray[$i][2] . " </p> 
                <div class='deleteAndDate'> 
                    <p class='delete_message' id='" . $messagesArray[$i][0] . "'>удалить</p> 
                    <h6>" . $messagesArray[$i][3] . "</h6>
                </div>";
            echo "</div>";
        }
        else
        {
            echo "
            <div class='message_block' id='message" . $messagesArray[$i][0] . "' style='align-self: flex-start;'>
                <a class='logo' href='personalAccount.php' id='" . $idUserM . "'>" . $nameUserM['first_name'] . " " . $nameUserM['second_name'] . "</a>";
                if ($keyImage == 1)
                {
                    echo "<p class='message_content'><img src=' " . $messagesArray[$i][2] . "'> </p>
                    <div class='deleteAndDate'> 
                        <p class='delete_message' id='" . $messagesArray[$i][0] . "'>удалить</p> 
                        <h6>" . $messagesArray[$i][3] . "</h6>
                    </div>";
                } 
                else echo "
                <p class='message_content'> " . $messagesArray[$i][2] . " </p> 
                <div class='deleteAndDate'> 
                    <p class='delete_message' id='" . $messagesArray[$i][0] . "'>удалить</p> 
                    <h6>" . $messagesArray[$i][3] . "</h6>
                </div>";
            
            echo    "</div>";
        }
    }
    else
    {
        // Если сообщение ввели вы, то оно будет справа и другого цвета, если не вы, то слева
        if ($idUserM == $idUserFromSession)
        {
            echo "
            <div class='message_block' id='message" . $messagesArray[$i][0] . "' style='align-self: flex-end;'>
                <a class='logo' href='#' id='" . $idUserM . "'>" . $nameUserM['first_name'] . " " . $nameUserM['second_name'] . "</a>";
                if($keyImage == 1)
                {
                    echo "<p class='message_content' style='background-color: rgba(0, 169, 251, 0.3); color:white; opacity: 1;'> <img src='" . $messagesArray[$i][2] . "'> </p>
                    <h6>" . $messagesArray[$i][3] . "</h6>";
                } 
                else echo "
                <p class='message_content' style='background-color: rgba(0, 169, 251, 0.3); color:white; opacity: 1;'> " . $messagesArray[$i][2] . " </p> 
                <h6>" . $messagesArray[$i][3] . "</h6>";
            echo "</div>";
        }
        else
        {
            echo "
            <div class='message_block' id='message" . $messagesArray[$i][0] . "' style='align-self: flex-start;'>
                <a class='logo' href='#' id='" . $idUserM . "'>" . $nameUserM['first_name'] . " " . $nameUserM['second_name'] . "</a>";
                if($keyImage == 1)
                {
                    echo "<p class='message_content'> <img src='" . $messagesArray[$i][2] . "'> </p>
                    <h6>" . $messagesArray[$i][3] . "</h6>";
                }
                else echo "
                <p class='message_content'> " . $messagesArray[$i][2] . " </p> 
                <h6>" . $messagesArray[$i][3] . "</h6>";
            echo "</div>";
        }
    }
    
}  