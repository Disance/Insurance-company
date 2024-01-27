<?php

 require_once 'include/connect.php';
?>
<?php
$about = $pdo->prepare("SELECT * FROM `aboutuspage`");
$about->execute();
$us=$about->fetch(PDO::FETCH_OBJ);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/forclient.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <?php
        
        include ('pattern/nav.php');
        ?>

<div class="text">

<p>
<?php echo $us->p ?>  
</p>

</div>


    <?php 
        include ('pattern/footer.php');
        ?>
    </div>
</body>
</html>