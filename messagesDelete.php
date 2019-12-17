<?php
require_once "connection.php";

$id_message = $_POST['id_message'];
echo $id_messaage;
$delete = mysqli_query($link, "DELETE FROM messages WHERE id_message = $id_message");