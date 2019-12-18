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