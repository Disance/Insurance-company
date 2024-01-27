<?php

 require_once 'include/connect.php';
?>
<?php
$compulsory = $pdo->prepare("SELECT * FROM `compulsory_isurance`");
$compulsory->execute();
$isurance=$compulsory->fetch(PDO::FETCH_OBJ);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/compulsory_isurance.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обязательное страхование</title>
</head>
<body>
    <div class="container">
<?php
        
    include ('pattern/nav.php');
    ?>

<div class="compulsory_isurance">
<div>
<h1><?php echo $isurance->compulsaryh1?></h1>
<p><?php echo $isurance->compulsaryp?></p>
<a href=""><button><?php echo $isurance->compulsarybutton?></button></a>
</div>
<div>
<img class="img" src="<?php echo $isurance->compulsaryimg?>" alt="">
</div>
</div>
<?php
        
        include ('pattern/item.php');
        ?>

        <div class="compulsory_isurance">
<div>
    <h1><?php echo $isurance->carh1?></h1>
    <p><?php echo $isurance->carp?></p>
    <a href=""><button><?php echo $isurance->carbutton?></button></a>
</div>
<div>
<img src="<?php echo $isurance->carimg?>" alt="">
</div>
        </div>

<div class="compulsory_isurance">
<div>
    <h1><?php echo $isurance->medicalh1?></h1>
    <p><?php echo $isurance->medicalp?></p>
    <a href=""><button><?php echo $isurance->medicalbutton?></button></a>
</div>
<div>
    <img src="<?php echo $isurance->medicalimg?>" alt="">
</div>
</div>
<?php
        
        include ('pattern/item.php');
        ?>
<div class="compulsory_isurance">
    <div>
        <h1><?php echo $isurance->compulsary2h1?></h1>
        <p><?php echo $isurance->compulsary2p?></p>
        <a href=""><button><?php echo $isurance->compulsary2button?></button></a>
    </div>
    <div>
        <img src="<?php echo $isurance->compulsary2img?>" alt="">
    </div>
</div>
<?php
        
    include ('pattern/footer.php');
    ?>
    </div>
</body>
</html>