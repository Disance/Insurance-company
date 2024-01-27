<?php

 require_once '../include/connect.php';
?>

<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 20 ){
        echo "Недопустимая Длина Логина";
        exit();
    }
    else if(mb_strlen($email) < 5 ){
        echo "Некоректный Email";
        exit();
    }
    else if (mb_strlen($password) < 4 ){
        echo "Недопустимая Длина Пороля (От 4 символов и больше)";
        exit();
    }

$password = md5($password."gbrb");

    $pdo->query("INSERT INTO  `register`(`login`, `email`, `password`) VALUES ( '$login', '$email','$password')");

    header('Location: /')
?>