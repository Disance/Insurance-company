
<title>Login</title>

<link rel="stylesheet" href="/css/login.css">

<div class="container">



<?php
        
        include ('pattern/nav.php');
        ?>

<?php
if($_COOKIE['user'] == ''):
?>

<form method="post" action="auth.php">

<h2>Вход</h2>

<h4>Ваш E-mail</h4>
<input name="email" id="email" class="input-group" type="text">
<h4>Пароль:</h4>
<input name="password" id="password" class="input-group" type="password">
<br>
<input class="submit" value="Вход" type="submit">

<br>
    <h4 style="display: inline;">Еще нет аккаунта?</h4>  <a href="account.php">Зарегестрироваться</a>

</form>

<?php else: ?>


<div style="margin-top: 100px; margin-bottom: 100px; text-align: center;">

    <h1>Your Login is "<?=$_COOKIE['user']?>" </h1><br>
    <p>Чтобы выйти нажмите <a href="/newspage/exit.php">Здесь</a></p>

</div>


<?php
endif;
?>
<?php
        
        include ('pattern/footer.php');
        ?>

</div>