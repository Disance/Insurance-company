
<?php

 require_once '../include/connect.php';
?>
<?php
$house = $pdo->prepare("SELECT * FROM `house`");
$house->execute();
$home=$house->fetch(PDO::FETCH_OBJ);
?>

<title>Обьязательное страхование</title>

<link rel="stylesheet" href="/css/text.css">

<div class="container">

<?php
        
        include ('pattern/nav.php');
        ?>
<div class="text">
<p><?php echo $home->p ?></p>
</div>

<?php
        
        include ('pattern/footer.php');
        ?>

</div>