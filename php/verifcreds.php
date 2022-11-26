<?php
$con = mysqli_connect('localhost','root','','arkadia');
if( $con->connect_error ) {
    die("Erreur : 1conn->connect_error");
}

$login = $_POST['login'];
$password = $_POST['password'];

$creds = ($con->real_query("SELECT `password` FROM `credentials` WHERE `username` = '$login' OR `email` = '$login'"));
$result = $con->use_result();
foreach ($result as $row) {
    $sqlPassword = $row['password'];
}

if (isset($_POST['envoi'] ) ) {
    if(mysqli_num_rows($result) != 0 && $password == $sqlPassword) {
            header('Location: site.html');
        } else {
            header('Location: index.html');
            unset($_POST['envoi']);
        }
    }
?>