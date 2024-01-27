<?php

 require_once 'include/connect.php';
?>
<?php
$main = $pdo->prepare("SELECT * FROM `OnlineSago`");
$main->execute();
$result=$main->fetch(PDO::FETCH_OBJ);
?>
<?php

require_once 'include/connect.php';
?>
<?php
$services = $pdo->prepare("SELECT * FROM `our services`");
$services->execute();
$our=$services->fetch(PDO::FETCH_OBJ);
?>
<?php

require_once 'include/connect.php';
?>
<?php
$casco = $pdo->prepare("SELECT * FROM `Casco Online`");
$casco->execute();
$online=$casco->fetch(PDO::FETCH_OBJ);
?>
<?php

require_once 'include/connect.php';
?>
<?php
$property = $pdo->prepare("SELECT * FROM `Property`");
$property->execute();
$house=$property->fetch(PDO::FETCH_OBJ);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="media/media.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>
<body>
    <div class="container">
        <?php
        
        include ('pattern/nav.php');
        ?>

<h1><a href="/admin/admin-index.php">Админка</a></h1>


<div class="osago">
    <div class="Text">
<h1><?php echo $result->h1 ?></h1><br>
<p><?php echo $result->p  ?></p><br>
<button><?php echo $result->button  ?></button>
    </div>
    <div class="driver">
<img src="<?php echo $result->img?>" alt="">
    </div>
</div>

<?php
        
        include ('pattern/item.php');
        ?>
<div class="uslugi">
<div class="uslugi-h1-p"><h1 style="font-size: 50px; color: #3A3285;"><?php echo $our->h1 ?></h1><br><p class="uslugi-p"><?php echo $our->p ?></p></div>
<img style="margin-left: 220px;" src="<?php echo $our->img ?>" alt="">
</div>

<?php
        
        include ('pattern/uslugi.php');
        ?>

<div class="osago">
    <div class="Text">
<h1><?php echo $online->h1 ?></h1><br>
<p><?php echo $online->p ?></p><br>
<button><?php echo $online->button ?></button>
    </div>
    <div class="driver">
<img style="margin-left: -100px;" src="<?php echo $online->img ?>" alt="">
    </div>
</div>

<?php
        
        include ('pattern/item.php');
        ?>

        <?php
        
        include ('pattern/uslugi.php');
        ?>
<div class="osago">
    <div class="Text">
<h1><?php echo $house->h1  ?></h1><br>
<p><?php echo $house->p  ?></p><br>
<button><?php echo $house->button  ?></button>
    </div>
    <div class="driver">
<img src="img/imushestvo-pic.png" alt="">
    </div>
</div>
<?php
        
        include ('pattern/footer.php');
        ?>
    </div>

    <script src="js/main.js"></script>
    <style>
.uslugi{
    margin-top: 40px;
}
.osago{
    margin-top: 100px;
}
    </style>
</body>
</html>