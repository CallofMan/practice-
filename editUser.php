<?php
require_once "connection.php";

$idUser = $_POST['idUser'];
$userName = $_POST['userNameE'];
$userSurname = $_POST['userSurnameE'];

if ($_POST['passwordE'] == $_POST['passwordRepeatE']){

    $userPassword = $_POST['passwordE'];

}
$role = $_POST['radioE'];
$login = $_POST['loginE'];
$position = $_POST['positionE'];
$phone = $_POST['telE'];
$email = $_POST['emailE'];

$editUser = mysqli_query($link,
    "UPDATE `users`
    SET
    `first_name` = '$userName',
    `second_name` = '$userSurname',
    `login` = '$login',
    `password` = '$userPassword',
    `telephone` = '$phone',
    `mail` = '$email',
    `role` = $role,
    `position` = '$position'
    WHERE
    `id_user` = $idUser");
?>