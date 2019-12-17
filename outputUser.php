<?php
require_once 'connection.php';

$idUser = $_GET["idUser"];

$selectInfo = mysqli_query($link,
"SELECT first_name, second_name,
login, password, telephone, mail, position
FROM `users`
WHERE id_user = $idUser");

if ($selectInfo) {
    for ($i = 0; $i < mysqli_num_rows($selectInfo); $i++) {
        $selectInfoResult = mysqli_fetch_assoc($selectInfo);
    }
    echo "<li>".$selectInfoResult['first_name']." ".$selectInfoResult['second_name']."</li> 
    <li>".$selectInfoResult['position']."</li> 
    <li>".$selectInfoResult['login']."</li> 
    <li>".$selectInfoResult['password']."</li> 
    <li>".$selectInfoResult['mail']."</li>";
}
?>