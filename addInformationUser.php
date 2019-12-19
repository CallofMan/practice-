<?php
require_once "connection.php";

$id_user = $_GET["id_user"];

$selectInfo = mysqli_query($link,
"SELECT first_name, second_name,
login, password, telephone, mail, position
FROM `users`
WHERE id_user = $id_user");

if ($selectInfo) 
{
    for ($i = 0; $i < mysqli_num_rows($selectInfo); $i++) 
    {
        $selectInfoResult = mysqli_fetch_assoc($selectInfo);
    }
    echo json_encode($selectInfoResult);
}