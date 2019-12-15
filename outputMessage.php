<?php
require_once 'messagesUpload.php';

$lengthArray = count($messagesArray);

for($i = 0; $i < $lengthArray; $i++)
{
    $idUserM = $messagesArray[$i][1];
    
    $queryNameUserM = mysqli_query($link, "SELECT first_name, second_name FROM users WHERE id_user = $idUserM");
    $nameUserM = $queryNameUserM->fetch_assoc();
    echo "<div class='message_block' id='message" . $messagesArray[$i][0] . "'><h4>" . $nameUserM['first_name'] . " " . $nameUserM['second_name'] . "</h4> <p class='message_content'> " . $messagesArray[$i][2] . " </p> <h6>" . $messagesArray[$i][3] . "</h6> </div>";
}  