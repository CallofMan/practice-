<?php
    SESSION_START();
    require_once "connection.php";

    if(isset($_POST["send"]))
    {
        $message = $_POST["message"];
        $role_user = $_SESSION['role'];
        $id_user = $_SESSION['id'];
        $datetime = date("Y-m-d H:i:s");

        echo $message . "    " . $role_user . "    " . $id_user . "     " . $datetime;
        $queryAdd = mysqli_query($link, "INSERT INTO messages (id_message, id_user, id_room, text_message, date) 
        VALUES (NULL, $id_user, 1, '$message', '$datetime')");
    }
?>