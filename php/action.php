<?php
if (isset($_POST['envoi'] ) ) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if($login == "admin" && $password == "admin") {
        header('Location: site.html');
    } else {
        header('Location: index.html');
        unset($_POST['envoi']);

    }
}
?>