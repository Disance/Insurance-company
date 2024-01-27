<?php

 require_once '../include/connect.php';
?>
<?php
$property = $pdo->prepare("SELECT * FROM `Property`");
$property->execute();
$house=$property->fetch(PDO::FETCH_OBJ);
?>
<?php
$casco = $pdo->prepare("SELECT * FROM `Casco Online`");
$casco->execute();
$online=$casco->fetch(PDO::FETCH_OBJ);
?>
<?php
$services = $pdo->prepare("SELECT * FROM `services-block`");
$services->execute();
$block=$services->fetch(PDO::FETCH_OBJ);
?>
<?php
$services = $pdo->prepare("SELECT * FROM `our services`");
$services->execute();
$our=$services->fetch(PDO::FETCH_OBJ);
?>
<?php
$main = $pdo->prepare("SELECT * FROM `OnlineSago`");
$main->execute();
$result=$main->fetch(PDO::FETCH_OBJ);
?>
<div class="Home">
    <form action="/admin/refresh/refresh.php" method="post">
    <div class="border">
<h1>Online Sago</h1>

    <h2>Заголовок</h2>
    <input name="onlinesagoh1" type="text" value="<?php echo $result->h1 ?>">
    <h2>Текст</h2>
    <textarea name="onlinesagop" ><?php echo $result->p?></textarea>
    <h2>Надпись на кнопке</h2>
    <input name="onlinesagobutton" type="text" value="<?php echo $result->button ?>">
</div>
<br>
<div class="border">
<h1>Our services</h1>

    <h2>Заголовок</h2>
    <input name="OurServicesh1" type="text" value="<?php echo $our->h1 ?>">
    <h2>Текст</h2>
    <textarea  name="OurServicesp"><?php echo $our->p ?></textarea>
</div>
<br><br><br>
<div class="border">
    <div class="uslugi-grid">
<div class="services"><h2>Заголовок</h2>
    <input name="firstblockh1" type="text" value="<?php echo $block->h2casco?>"><br>
<h2>Текст</h2>
<textarea name="firstblockp"><?php echo $block->pcasco?></textarea>
</div>
<div class="services"><h2>Заголовок</h2>
    <input name="secondblockh1" type="text" value="<?php echo $block->h2life?>"><br>
    <h2>Текст</h2>
    <textarea name="secondblockp"><?php echo $block->plife?></textarea>
</div>
<div class="services"><h2>Заголовок</h2>
    <input name="thirdblockh1" type="text" value="<?php echo $block->h2takaful?>"><br>
    <h2>Текст</h2>
    <textarea name="thirdblockp"><?php echo $block->ptakaful?></textarea>
</div>
    </div>
</div>
<div class="border">
    <h1>Casco Online</h1>
    <h2>Заголовок</h2>
    <input name="cascoonlineh1" type="text" value="<?php echo $online->h1 ?>">
    <h2>Текст</h2>
    <textarea name="cascoonlinep"><?php echo $online->p?></textarea>
    <h2>Надпись на кнопке</h2>
    <input name="cascoonlinebutton" type="text" value="<?php echo $online->button ?>">
</div>
<br><br>
<div class="border">
<h1>Имущество</h1>

    <h2>Заголовок</h2>
    <input name="homeh1" type="text" value="<?php echo $house->h1 ?>">
    <h2>Текст</h2>
    <textarea name="homep"><?php echo $house->p?></textarea>
    <h2>Надпись на кнопке</h2>
    <input name="homebutton" type="text" value="<?php echo $house->button ?>">
</div><br><br>
<input type="submit" value="Сохранить">
</form>

</div>
<style>
    .uslugi-grid{
        display: grid;
        grid-template-columns: 33% 33% 33%;
    }
    .Home{
        text-align: center;
    }
    .services{
        margin-left: 100px;
        box-shadow: 3px 6px 51px -35px #000000; border-radius: 10px; width: 310px; height: 300px;
    }
    .border{
        padding-bottom: 100px;
        border-bottom: 2px solid black;
    }
</style>