<?php
SESSION_START();
require_once "connection.php";

$id_user = $_POST['id_user'];

$_SESSION['id_user_for_perosnal'] = $id_user;