
<?php

 require_once '../include/connect.php';


$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

$password = md5($password."gbrb");

$resultation = $pdo->query("SELECT * FROM `register` WHERE `email` = '$email' AND `password` = '$password'");

$user = $resultation->fetch();
if (is_iterable($user) == 0){
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $user['login'],time() + 3600, "/");


header('Location: /');
?>