<?php
require_once "connection.php";

// Запрос удаления
$id_user = $_POST['idUser'];
echo $id_user;

$queryDelete = mysqli_query($link, "DELETE FROM users WHERE id_user = $id_user");