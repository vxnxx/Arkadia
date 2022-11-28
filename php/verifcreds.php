<?php
$con = mysqli_connect('localhost','root','','bddacc');
if( $con->connect_error ) {
    die("Erreur : 1conn->connect_error");
}

$login = $_POST['login'];
$password = $_POST['password'];

$creds = ($con->real_query("SELECT `password` FROM `bddacc` WHERE `username` = '$login' OR `email` = '$login'"));
$result = $con->use_result();
foreach ($result as $row) {
    $sqlPassword = $row['password'];
}

if(empty($login) || empty($password)) {
    $isEmpty = True;
    header('Location: http://localhost/logbdd/index.php?empty=True');
} 

if (isset($_POST['envoi'] ) ) {
    if(mysqli_num_rows($result) != 0 && $password == $sqlPassword && $isEmpty == False) {
            header('Location: http://localhost/logbdd/site.html');
        }
    }
?>