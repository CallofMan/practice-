<?php
require_once "connection.php";

$idUser = $_POST['idUser'];
$userName = $_POST['userName'];
$userSurname = $_POST['userSurname'];

if ($_POST['password'] == $_POST['passwordRepeat']){

    $userPassword = $_POST['password'];

}

$login = $_POST['login'];
$position = $_POST['position'];
$phone = $_POST['tel'];
$email = $_POST['email'];

if(isset($_POST['radio'])){

    if($_POST['radio'] == 'Админ'){
        $role = 1;
    }
    if($_POST['radio'] == 'Юзер'){
        $role = 0;
    }

}

if(isset($_POST['userListButtonsE'])){
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
}
?>