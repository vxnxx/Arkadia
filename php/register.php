<?php 
$con = mysqli_connect('localhost','root','','arkadia');
if( $con->connect_error ) {
    die("Erreur : 1conn->connect_error");
}

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConf = $_POST['passConf'];
$enregistrement = $_POST['enregistrement'];
$creds = ($con->real_query("SELECT `username`,`email` FROM `bddacc` WHERE `username` = '$login' OR `email` = '$email'"));

$result = $con->use_result();
foreach ($result as $row) {
    $sqlEmail = $row['email'];
    $sqlUsername = $row['username'];
}


if(mysqli_num_rows($result) == 0 || ($email != $sqlEmail && $login != $sqlUsername)) {
    $isAlreadySet = False;

} else {
    header('Location: http://localhost/arkadia/pregister.php?err=True');
}

if(empty($login) || empty($email) || empty($passwordConf) || empty($password)) {
    $isEmpty = True;
    header('Location: http://localhost/arkadia/pregister.php?empty=True');
}

if($password == $passwordConf) {
    $equalPass = True;
} else {
    header('Location: http://localhost/arkadia/pregister.php?notEquals=True');
}

if($isAlreadySet == False && $equalPass && $isEmpty == False) {
    ($con->real_query("INSERT INTO `credentials` (`id`, `username`, `email`, `password`, `grade`, `creation_date`) VALUES (NULL, '$login', '$email', '$password', '4', CURRENT_DATE());"));
    header('Location: http://localhost/arkadia/index.php');
}
?>