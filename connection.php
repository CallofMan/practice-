<?php

$host = "localhost";
$user = "root";
$password = "";
$db_name = "okbmei";

$link = new mysqli($host, $user, $password, $db_name);

// Проверка на подключение к базе
if ($link->connet_error)
{
    die ("Connection failed: " . $link->connect_error);
}

?>