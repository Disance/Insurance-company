
<title>Login</title>

<link rel="stylesheet" href="/css/login.css">

<div class="container">



<?php
        
        include ('pattern/nav.php');
        ?>

<form method="post" action="check.php">

<h2>Регистрация</h2>

<h4>Login</h4>
<input name="login" id="login" class="input-group" type="text">
<h4>Ваш E-mail:</h4>
<input name="email" id="password" class="input-group">
<h4>Пароль:</h4>
<input type="password" name="password" class="input-group" type="text"><br>
<input class="submit" value="Регистрация" type="submit">
</form>

<?php
        
        include ('pattern/footer.php');
        ?>

</div>

<style>
    .input-group{
        padding-left: 10px;
    }
</style>