<?php

 require_once '../include/connect.php';
?>
<?php
$travel = $pdo->prepare("SELECT * FROM `travel`");
$travel->execute();
$trave=$travel->fetch(PDO::FETCH_OBJ);
?>

<title>Travel</title>

<link rel="stylesheet" href="/css/support.css">

<div class="container">

<?php
        
        include ('pattern/nav.php');
        ?>

<div class="form-support">
    <h1>Поддержка</h1><br>
    <p>Ваше Имя:</p>
    <input type="text">
    <p>Ваш E-mail:</p>
    <input type="text">
    <p>Ваш номер телефона:</p>
    <input type="text">
    <p>Текст сообщения:</p>
    <textarea></textarea><br><br>
    <a href=""><button>Отправить заявку</button></a>
</div>

<?php
        
        include ('pattern/footer.php');
        ?>

</div>