<?php

 require_once 'include/connect.php';
?>
<?php
$login=$_POST["login"];
$password=$_POST["password"];

$takaful = $pdo->prepare("SELECT * FROM `takafulpage`");
$takaful->execute();
$generaltakaful=$takaful->fetch(PDO::FETCH_OBJ);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/takaful.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>takaful</title>
</head>
<body>
    <div class="container">
    <?php
        
        include ('pattern/nav.php');
        ?>
<div class="takaful-text">
    <div>
    <h1><?php echo $generaltakaful->takafulh1?></h1>
    <p><?php echo $generaltakaful->takafulp?></p>
<button><?php echo $generaltakaful->takafulbutton?></button>
</div>
    <div><img style="margin-top: 30px; position: relative;" src="<?php echo $generaltakaful->takafulimg?>" alt=""></div>
</div>
<?php
        
        include ('pattern/item.php');
        ?>
<div class="takaful-everybody">
<div class="takaful-everybody-text">
    <h1><?php echo $generaltakaful->generaltakafulh1?></h1>
    <p><?php echo $generaltakaful->generaltakafulp?></p>
<button><?php echo $generaltakaful->generaltakafulbutton?></button>
</div>
<div>
<img style="position: relative; top: 100px; right: 50px;" width="600px" src="<?php echo $generaltakaful->generaltakafulimg?>" alt="">
</div>
</div>
<div class="family-takaful">
    <div class="family-takaful-text"><h1><?php echo $generaltakaful->familytakafulh1?></h1>
        <p><?php echo $generaltakaful->familytakafulp?></p>
    <button><?php echo $generaltakaful->familytakafulbutton?></button>
</div>
    <div><img src="<?php echo $generaltakaful->familytakafulimg?>" alt=""></div>
</div>
<?php
        
        include ('pattern/item.php');
        ?>

<?php 
include ('pattern/footer.php');
        ?>
</div>
</body>
</html>