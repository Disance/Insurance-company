<?php

 require_once '../include/connect.php';
?>
<?php
$cars = $pdo->prepare("SELECT * FROM `cars`");
$cars->execute();
$ins=$cars->fetch(PDO::FETCH_OBJ);
?>


<title>Casco cars</title>

<link rel="stylesheet" href="/css/text.css">

<div class="container">

<?php
        
        include ('pattern/nav.php');
        ?>
<div class="text">
<p><?php echo $ins->p ?></p>
</div>

<?php
        
        include ('pattern/footer.php');
        ?>

</div>
