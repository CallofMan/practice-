<?php
require_once "connection.php";
// Запрос вывода
$selectUsers = mysqli_query($link, "SELECT id_user, first_name, second_name FROM `users`");
if ($selectUsers) {
    for ($i = 0; $i < mysqli_num_rows($selectUsers); $i++) {
        $selectUsersResult = mysqli_fetch_assoc($selectUsers);
        
        echo "<li>
            <h4 class='" . $selectUsersResult['id_user'] . "'>" . $selectUsersResult['first_name']." ".$selectUsersResult['second_name'] . "</h4>
            <a href='#' class='userListButtonsE'>edit</a>
            <a href='#' class='userListButtonsD' id='" . $selectUsersResult['id_user'] . "'>delete</a>
        </li>";
    }
}